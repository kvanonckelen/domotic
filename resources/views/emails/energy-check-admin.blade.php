<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuwe energiecheck lead</title>
</head>
<body style="margin:0; padding:0; background:#f8fafc; font-family:Arial, Helvetica, sans-serif; color:#1f2937;">
    <div style="max-width:760px; margin:0 auto; padding:32px 20px;">
        <div style="background:#ffffff; border:1px solid #e5e7eb; border-radius:18px; padding:32px;">
            <h1 style="margin:0 0 20px; font-size:28px; color:#111827;">Nieuwe energiecheck lead</h1>

            <h2 style="margin:24px 0 12px; font-size:20px; color:#111827;">Contactgegevens</h2>

            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse:collapse; width:100%; border-color:#e5e7eb;">
                <tr>
                    <td style="font-weight:bold; width:180px;">Naam</td>
                    <td>{{ $report['name'] }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">E-mail</td>
                    <td>{{ $report['email'] }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Telefoon</td>
                    <td>{{ $report['phone'] ?: 'Niet opgegeven' }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Postcode</td>
                    <td>{{ $report['postcode'] ?: 'Niet opgegeven' }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Type project</td>
                    <td>{{ $report['project_type'] ?: 'Niet opgegeven' }}</td>
                </tr>
            </table>

            <h2 style="margin:24px 0 12px; font-size:20px; color:#111827;">Resultaat energiecheck</h2>

            <table cellpadding="8" cellspacing="0" border="1" style="border-collapse:collapse; width:100%; border-color:#e5e7eb;">
                <tr>
                    <td style="font-weight:bold; width:180px;">Type woning</td>
                    <td>{{ $report['property_type'] }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Technieken</td>
                    <td>{{ !empty($report['technologies']) ? implode(', ', $report['technologies']) : 'Niet opgegeven' }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Doelen</td>
                    <td>{{ !empty($report['goals']) ? implode(', ', $report['goals']) : 'Niet opgegeven' }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Optimalisatiescore</td>
                    <td>{{ $report['score'] }}%</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Besparingspotentieel</td>
                    <td>{{ $report['savings_percent'] }}%</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Resultaattitel</td>
                    <td>{{ $report['result_title'] }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold; vertical-align:top;">Resultaattekst</td>
                    <td>{{ $report['result_text'] }}</td>
                </tr>
            </table>

            @if(!empty($report['advice_items']))
                <h2 style="margin:24px 0 12px; font-size:20px; color:#111827;">Aanbevelingen</h2>
                <ul style="margin:0; padding-left:20px; line-height:1.8; color:#4b5563;">
                    @foreach($report['advice_items'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</body>
</html>