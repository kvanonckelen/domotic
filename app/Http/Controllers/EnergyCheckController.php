<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class EnergyCheckController extends Controller
{
    public function index(): View
    {
        return view('pages.energy-check');
    }

    public function sendReport(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'postcode' => ['nullable', 'string', 'max:20'],
            'project_type' => ['nullable', 'string', 'max:100'],

            'property_type' => ['required', 'string', 'max:255'],
            'technologies' => ['nullable', 'string'],
            'goals' => ['nullable', 'string'],

            'score' => ['required', 'integer', 'min:0', 'max:100'],
            'savings_percent' => ['required', 'integer', 'min:0', 'max:100'],
            'result_title' => ['required', 'string', 'max:255'],
            'result_text' => ['required', 'string', 'max:2000'],
            'advice_items' => ['nullable', 'string'],
        ], [
            'name.required' => 'Gelieve je naam in te vullen.',
            'email.required' => 'Gelieve je e-mailadres in te vullen.',
            'email.email' => 'Gelieve een geldig e-mailadres in te vullen.',
            'property_type.required' => 'Er ontbreekt informatie uit de energiecheck. Doorloop de check opnieuw.',
            'score.required' => 'Er ontbreekt informatie uit de energiecheck. Doorloop de check opnieuw.',
            'savings_percent.required' => 'Er ontbreekt informatie uit de energiecheck. Doorloop de check opnieuw.',
            'result_title.required' => 'Er ontbreekt informatie uit de energiecheck. Doorloop de check opnieuw.',
            'result_text.required' => 'Er ontbreekt informatie uit de energiecheck. Doorloop de check opnieuw.',
        ]);

        $technologies = $this->explodeList($validated['technologies'] ?? '');
        $goals = $this->explodeList($validated['goals'] ?? '');
        $adviceItems = $this->explodeList($validated['advice_items'] ?? '');

        $reportData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'postcode' => $validated['postcode'] ?? null,
            'project_type' => $validated['project_type'] ?? null,

            'property_type' => $validated['property_type'],
            'technologies' => $technologies,
            'goals' => $goals,

            'score' => (int) $validated['score'],
            'savings_percent' => (int) $validated['savings_percent'],
            'result_title' => $validated['result_title'],
            'result_text' => $validated['result_text'],
            'advice_items' => $adviceItems,
        ];

        try {
            Mail::send('emails.energy-check-customer', ['report' => $reportData], function ($message) use ($reportData) {
                $message
                    ->to($reportData['email'], $reportData['name'])
                    ->subject('Jouw Volt-IT energiecheck');
            });

            Mail::send('emails.energy-check-admin', ['report' => $reportData], function ($message) use ($reportData) {
                $message
                    ->to('kevin.vanonckelen@volt-it.be', 'Kevin Van Onckelen')
                    ->replyTo($reportData['email'], $reportData['name'])
                    ->subject('Nieuwe energiecheck lead - ' . $reportData['name']);
            });

            return redirect()
                ->route('energy-check')
                ->with('success', 'Bedankt. Jouw energiecheck is verzonden naar je mailbox.');
        } catch (Throwable $e) {
            Log::error('Energiecheck rapport kon niet worden verzonden.', [
                'error' => $e->getMessage(),
                'email' => $validated['email'],
                'name' => $validated['name'],
            ]);

            return back()
                ->withInput()
                ->withErrors([
                    'form' => 'Er liep iets mis bij het verzenden van het rapport. Probeer het later opnieuw.',
                ]);
        }
    }

    private function explodeList(string $value): array
    {
        return collect(explode('|', $value))
            ->map(fn($item) => trim($item))
            ->filter()
            ->values()
            ->all();
    }
}
