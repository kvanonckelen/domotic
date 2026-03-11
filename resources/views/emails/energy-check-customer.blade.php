<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Jouw Volt-IT energiecheck</title>
</head>
<body style="margin:0; padding:0; background:#f8fafc; font-family:Arial, Helvetica, sans-serif; color:#1f2937;">
    <div style="max-width:700px; margin:0 auto; padding:32px 20px;">
        <div style="background:#ffffff; border:1px solid #e5e7eb; border-radius:18px; padding:32px;">
            <h1 style="margin:0 0 16px; font-size:28px; color:#111827;">Jouw Volt-IT energiecheck</h1>

            <p style="margin:0 0 16px; line-height:1.7;">
                Beste {{ $report['name'] }},
            </p>

            <p style="margin:0 0 24px; line-height:1.7;">
                Bedankt voor het invullen van de energiecheck. Hieronder vind je een samenvatting van jouw resultaat.
            </p>

            <div style="margin:0 0 24px; padding:20px; border-radius:16px; background:#f8fafc; border:1px solid #e5e7eb;">
                <h2 style="margin:0 0 12px; font-size:22px; color:#111827;">{{ $report['result_title'] }}</h2>
                <p style="margin:0 0 16px; line-height:1.7; color:#4b5563;">
                    {{ $report['result_text'] }}
                </p>

                <p style="margin:0 0 8px; line-height:1.6;">
                    <strong>Optimalisatiescore:</strong> {{ $report['score'] }}%
                </p>

                <p style="margin:0; line-height:1.6;">
                    <strong>Indicatief besparingspotentieel:</strong> {{ $report['savings_percent'] }}%
                </p>
            </div>

            <div style="margin:0 0 24px;">
                <h3 style="margin:0 0 12px; font-size:18px; color:#111827;">Jouw selectie</h3>

                <p style="margin:0 0 8px; line-height:1.6;">
                    <strong>Type woning:</strong> {{ $report['property_type'] }}
                </p>

                @if(!empty($report['technologies']))
                    <p style="margin:0 0 8px; line-height:1.6;">
                        <strong>Aanwezige technieken:</strong> {{ implode(', ', $report['technologies']) }}
                    </p>
                @endif

                @if(!empty($report['goals']))
                    <p style="margin:0; line-height:1.6;">
                        <strong>Focus:</strong> {{ implode(', ', $report['goals']) }}
                    </p>
                @endif
            </div>

            @if(!empty($report['advice_items']))
                <div style="margin:0 0 24px;">
                    <h3 style="margin:0 0 12px; font-size:18px; color:#111827;">Aanbevelingen</h3>
                    <ul style="margin:0; padding-left:20px; color:#4b5563; line-height:1.8;">
                        @foreach($report['advice_items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div style="margin-top:32px; padding-top:24px; border-top:1px solid #e5e7eb;">
                <p style="margin:0 0 16px; line-height:1.7;">
                    Wil je bekijken wat technisch het best past bij jouw woning of project?
                </p>

                <p style="margin:0;">
                    <a href="https://www.volt-it.be/contact" style="display:inline-block; padding:12px 18px; background:#111827; color:#ffffff; text-decoration:none; border-radius:12px; font-weight:bold;">
                        Neem contact op
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>