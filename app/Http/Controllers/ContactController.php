<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class ContactController extends Controller
{
    /**
     * Show the contact page.
     */
    public function show(): View
    {
        return view('pages.contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request): RedirectResponse
    {
        if ($request->filled('company')) {
            return back();
        }
        
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'project_type' => ['nullable', 'string', 'in:nieuwbouw,renovatie,bestaande_woning,algemene_vraag'],
            'message' => ['required', 'string', 'max:5000'],
        ], [
            'name.required' => 'Gelieve je naam in te vullen.',
            'email.required' => 'Gelieve je e-mailadres in te vullen.',
            'email.email' => 'Gelieve een geldig e-mailadres in te vullen.',
            'phone.max' => 'Het telefoonnummer mag maximaal 50 tekens bevatten.',
            'project_type.in' => 'Het gekozen projecttype is niet geldig.',
            'message.required' => 'Gelieve een bericht in te vullen.',
            'message.max' => 'Je bericht mag maximaal 5000 tekens bevatten.',
        ]);

        $projectTypeLabels = [
            'nieuwbouw' => 'Nieuwbouw',
            'renovatie' => 'Renovatie',
            'bestaande_woning' => 'Bestaande woning',
            'algemene_vraag' => 'Algemene vraag',
        ];

        $projectType = $validated['project_type'] ?? null;
        $projectTypeLabel = $projectType
            ? ($projectTypeLabels[$projectType] ?? $projectType)
            : 'Niet opgegeven';

        $phone = !empty($validated['phone']) ? e($validated['phone']) : 'Niet opgegeven';

        $html = '
            <h2>Nieuw contactformulier via Volt-IT</h2>
            <p>Er werd een nieuw bericht verzonden via de website.</p>

            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse: collapse; width: 100%; max-width: 720px;">
                <tr>
                    <td style="font-weight: bold; width: 180px;">Naam</td>
                    <td>' . e($validated['name']) . '</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">E-mailadres</td>
                    <td>' . e($validated['email']) . '</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Telefoon</td>
                    <td>' . $phone . '</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Type project</td>
                    <td>' . e($projectTypeLabel) . '</td>
                </tr>
                <tr>
                    <td style="font-weight: bold; vertical-align: top;">Bericht</td>
                    <td>' . nl2br(e($validated['message'])) . '</td>
                </tr>
            </table>
        ';

        try {
            Mail::html($html, function ($message) use ($validated, $projectTypeLabel) {
                $message
                    ->to('info@volt-it.be', 'Kevin Van Onckelen')
                    ->subject('Nieuw contactformulier - ' . $validated['name'] . ' - ' . $projectTypeLabel)
                    ->replyTo($validated['email'], $validated['name']);
            });

            return redirect()
                ->route('contact')
                ->with('success', 'Bedankt voor je bericht. We nemen zo snel mogelijk contact met je op.');
        } catch (Throwable $e) {
            Log::error('Contactformulier kon niet worden verzonden.', [
                'error' => $e->getMessage(),
                'email' => $validated['email'],
                'name' => $validated['name'],
            ]);

            return back()
                ->withInput()
                ->withErrors([
                    'form' => 'Er liep iets mis bij het verzenden van je bericht. Probeer het later opnieuw.',
                ]);
        }
    }
}
