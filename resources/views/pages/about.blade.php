@extends('layouts.app')

@section('title', 'Over Volt-IT | Slim energiebeheer en automatisatie')
@section('description', 'Ontdek wie achter Volt-IT zit en hoe slimme energie-integratie, domotica en automatisatie woningen efficiënter en intelligenter maken.')

@section('content')
<style>
    .about-page {
        color: #1f2937;
    }

    .section {
        padding: 5rem 1.5rem;
    }

    .container {
        max-width: 1120px;
        margin: 0 auto;
    }

    .hero {
        padding: 5.5rem 1.5rem 4rem;
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        border-bottom: 1px solid #e5e7eb;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 2rem;
        align-items: center;
    }

    .eyebrow {
        display: inline-block;
        margin-bottom: 1rem;
        padding: 0.4rem 0.75rem;
        border-radius: 999px;
        background: #eef2ff;
        color: #3730a3;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .hero h1 {
        margin: 0 0 1rem;
        font-size: clamp(2.2rem, 5vw, 3.6rem);
        line-height: 1.08;
        letter-spacing: -0.03em;
        color: #111827;
        max-width: 12ch;
    }

    .hero p.lead {
        margin: 0;
        max-width: 640px;
        font-size: 1.08rem;
        line-height: 1.8;
        color: #4b5563;
    }

    .hero-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 22px;
        padding: 1.6rem;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.06);
    }

    .hero-card h3 {
        margin: 0 0 1rem;
        font-size: 1.1rem;
        color: #111827;
    }

    .hero-card ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .hero-card li {
        position: relative;
        padding: 0.8rem 0 0.8rem 1.5rem;
        border-bottom: 1px solid #f1f5f9;
        color: #4b5563;
        line-height: 1.7;
    }

    .hero-card li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .hero-card li::before {
        content: "•";
        position: absolute;
        left: 0;
        top: 0.8rem;
        color: #0ea5e9;
        font-weight: 700;
    }

    .section-heading {
        max-width: 760px;
        margin-bottom: 2.2rem;
    }

    .section-heading h2 {
        margin: 0 0 0.75rem;
        font-size: clamp(1.8rem, 4vw, 2.6rem);
        color: #111827;
        letter-spacing: -0.03em;
    }

    .section-heading p {
        margin: 0;
        color: #4b5563;
        line-height: 1.8;
        font-size: 1.02rem;
    }

    .content-grid,
    .values-grid,
    .steps-grid,
    .cta-grid {
        display: grid;
        gap: 1.5rem;
    }

    .content-grid {
        grid-template-columns: 1.1fr 0.9fr;
        align-items: start;
    }

    .values-grid,
    .steps-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 1.6rem;
    }

    .card h3 {
        margin: 0 0 0.8rem;
        color: #111827;
        font-size: 1.08rem;
    }

    .card p {
        margin: 0;
        color: #4b5563;
        line-height: 1.75;
    }

    .content-block {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 22px;
        padding: 1.8rem;
    }

    .content-block h3 {
        margin: 0 0 0.85rem;
        color: #111827;
        font-size: 1.15rem;
    }

    .content-block p {
        margin: 0 0 1rem;
        color: #4b5563;
        line-height: 1.85;
    }

    .content-block p:last-child {
        margin-bottom: 0;
    }

    .muted-section {
        background: #f8fafc;
        border-top: 1px solid #eef2f7;
        border-bottom: 1px solid #eef2f7;
    }

    .feature-icon {
        width: 46px;
        height: 46px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #eff6ff;
        color: #0369a1;
        font-size: 1.2rem;
        margin-bottom: 1rem;
    }

    .step {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 1.6rem;
    }

    .step-number {
        width: 38px;
        height: 38px;
        border-radius: 999px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #111827;
        color: #ffffff;
        font-weight: 700;
        margin-bottom: 1rem;
        font-size: 0.95rem;
    }

    .step h3 {
        margin: 0 0 0.75rem;
        color: #111827;
        font-size: 1.05rem;
    }

    .step p {
        margin: 0;
        color: #4b5563;
        line-height: 1.75;
    }

    .cta-box {
        background: #111827;
        color: #ffffff;
        border-radius: 24px;
        padding: 2.25rem;
    }

    .cta-grid {
        grid-template-columns: 1.2fr 0.8fr;
        align-items: center;
    }

    .cta-box h2 {
        margin: 0 0 0.75rem;
        font-size: clamp(1.7rem, 4vw, 2.4rem);
        letter-spacing: -0.03em;
    }

    .cta-box p {
        margin: 0;
        color: rgba(255,255,255,0.82);
        line-height: 1.8;
        max-width: 700px;
    }

    .cta-actions {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .btn-primary,
    .btn-secondary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.95rem 1.35rem;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.2s ease;
    }

    .btn-primary {
        background: #111827;
        color: #ffffff;
    }

    .btn-primary:hover {
        background: #000000;
        transform: translateY(-1px);
    }

    .btn-secondary {
        border: 1px solid #d1d5db;
        color: #111827;
        background: #ffffff;
    }

    .btn-secondary:hover {
        border-color: #9ca3af;
        background: #f9fafb;
    }

    @media (max-width: 960px) {
        .hero-grid,
        .content-grid,
        .values-grid,
        .steps-grid,
        .cta-grid {
            grid-template-columns: 1fr;
        }

        .hero {
            padding-top: 4.5rem;
            padding-bottom: 3.5rem;
        }

        .cta-actions {
            justify-content: flex-start;
        }
    }

    @media (max-width: 640px) {
        .section {
            padding: 4rem 1.25rem;
        }

        .hero {
            padding: 4rem 1.25rem 3rem;
        }

        .cta-actions {
            flex-direction: column;
            align-items: stretch;
        }

        .btn-primary,
        .btn-secondary {
            width: 100%;
        }
    }
</style>

<div class="about-page">
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">Over Volt-IT</span>

                <h1>Van losse technieken naar één slim geheel.</h1>

                <p class="lead">
                    Veel woningen hebben vandaag zonnepanelen, een batterij, een laadpaal
                    of domotica. Maar in de praktijk werken die systemen vaak los van elkaar.
                    Volt-IT is opgericht om die technieken logisch te integreren, zodat energie
                    slimmer gebruikt wordt en comfort, sturing en efficiëntie samenkomen in één systeem.
                </p>
            </div>

            <aside class="hero-card">
                <h3>Waar Volt-IT voor staat</h3>
                <ul>
                    <li>Integratie van zonnepanelen, batterij, laadpaal en HVAC in één logisch systeem.</li>
                    <li>Slim energiebeheer op maat van de woning en het werkelijke gebruik.</li>
                    <li>Een technische aanpak met focus op eenvoud, rendement en gebruiksgemak.</li>
                    <li>Oplossingen die verder gaan dan klassieke domotica of losse apps.</li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="section">
        <div class="container content-grid">
            <div class="content-block">
                <h3>Waarom Volt-IT bestaat</h3>
                <p>
                    Moderne woningen bevatten steeds meer energietechnieken. Toch worden die
                    nog te vaak afzonderlijk geplaatst en gebruikt, zonder centrale logica of
                    duidelijke afstemming tussen productie, opslag en verbruik.
                </p>
                <p>
                    Daardoor blijft het echte potentieel van een woning vaak onbenut.
                    Zonne-energie wordt niet optimaal gebruikt, laadpalen laden op de verkeerde
                    momenten en installaties werken naast elkaar in plaats van met elkaar.
                </p>
                <p>
                    Volt-IT vertrekt vanuit de overtuiging dat al deze technieken
                    moeten samenwerken als één slim systeem. Niet complexer, maar juist
                    logischer, efficiënter en duidelijker.
                </p>
            </div>

            <div class="content-block">
                <h3>Technische achtergrond</h3>
                <p>
                    Achter Volt-IT zit een sterke basis in automatisatie, integratiesystemen
                    en technische logica. Die kennis wordt toegepast op woningen, waar energiebeheer,
                    sturing en gebruiksgemak steeds belangrijker worden.
                </p>
                <p>
                    Met ervaring in onder andere Loxone, Modbus, MQTT en systeemintegratie
                    ligt de focus niet op het puur plaatsen van componenten, maar op het
                    slim laten samenwerken van volledige installaties.
                </p>
            </div>
        </div>
    </section>

    <section class="section muted-section">
        <div class="container">
            <div class="section-heading">
                <h2>Wat Volt-IT anders maakt</h2>
                <p>
                    Volt-IT focust niet op standaardoplossingen of losse producten,
                    maar op integratie. Het doel is om een woning slimmer te laten
                    reageren op energie, comfort en dagelijks gebruik.
                </p>
            </div>

            <div class="values-grid">
                <article class="card">
                    <div class="feature-icon">⚡</div>
                    <h3>Energie als vertrekpunt</h3>
                    <p>
                        Niet enkel domotica, maar een woning die slim omgaat met opwekking,
                        opslag en verbruik van energie.
                    </p>
                </article>

                <article class="card">
                    <div class="feature-icon">🧠</div>
                    <h3>Logica boven losse systemen</h3>
                    <p>
                        Geen verzameling van aparte apps en componenten, maar één
                        duidelijke sturing die alles logisch samenbrengt.
                    </p>
                </article>

                <article class="card">
                    <div class="feature-icon">🔧</div>
                    <h3>Op maat van de woning</h3>
                    <p>
                        Elke oplossing wordt afgestemd op de bestaande installatie,
                        het comfortniveau en de energiebehoeften van de gebruiker.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <h2>Hoe Volt-IT werkt</h2>
                <p>
                    Elk project start vanuit de woning en de aanwezige technieken.
                    Van daaruit wordt gekeken hoe systemen beter kunnen samenwerken
                    en waar de grootste winst zit.
                </p>
            </div>

            <div class="steps-grid">
                <div class="step">
                    <div class="step-number">01</div>
                    <h3>Analyse</h3>
                    <p>
                        We bekijken welke technieken aanwezig zijn en hoe energie vandaag
                        wordt geproduceerd, opgeslagen en gebruikt.
                    </p>
                </div>

                <div class="step">
                    <div class="step-number">02</div>
                    <h3>Integratie</h3>
                    <p>
                        Systemen zoals zonnepanelen, batterij, laadpaal, HVAC en domotica
                        worden technisch op elkaar afgestemd in één centrale logica.
                    </p>
                </div>

                <div class="step">
                    <div class="step-number">03</div>
                    <h3>Optimalisatie</h3>
                    <p>
                        De woning leert slimmer reageren op productie, verbruik en comfort,
                        zodat energie efficiënter wordt ingezet in de praktijk.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="cta-box">
                <div class="cta-grid">
                    <div>
                        <h2>Benieuwd wat mogelijk is in jouw woning?</h2>
                        <p>
                            Ontdek hoe jouw woning slimmer kan omgaan met energie en
                            welke technieken vandaag al beter op elkaar afgestemd kunnen worden.
                        </p>
                    </div>

                    <div class="cta-actions">
                        <a href="{{ route('energy-check') }}" class="btn-primary">Start je energiecheck</a>
                        <a href="{{ route('contact') }}" class="btn-secondary">Neem contact op</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection