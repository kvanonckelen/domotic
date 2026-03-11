@extends('layouts.app')

@section('title', 'Domotica, energiebeheer en woningautomatisering | Volt-IT')
@section('description', 'Oplossingen voor slimme woningen: domotica, energiebeheer, integratie van zonnepanelen, batterij en laadpaal.')

@section('content')
<style>
    .services-page {
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
        padding: 5.5rem 1.5rem 4.5rem;
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        border-bottom: 1px solid #e5e7eb;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 3rem;
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
        font-size: clamp(2.2rem, 5vw, 3.5rem);
        line-height: 1.08;
        letter-spacing: -0.03em;
        color: #111827;
        max-width: 12ch;
    }

    .hero p.lead {
        margin: 0 0 1.5rem;
        max-width: 650px;
        font-size: 1.08rem;
        line-height: 1.75;
        color: #4b5563;
    }

    .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: 1.5rem;
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

    .hero-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 22px;
        padding: 1.75rem;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.06);
    }

    .hero-card h3 {
        margin: 0 0 1rem;
        font-size: 1.1rem;
        color: #111827;
    }

    .hero-card ul {
        margin: 0;
        padding-left: 1.1rem;
        color: #4b5563;
    }

    .hero-card li {
        margin-bottom: 0.8rem;
        line-height: 1.7;
    }

    .section-heading {
        max-width: 760px;
        margin-bottom: 2.2rem;
    }

    .section-heading h2 {
        margin: 0 0 0.75rem;
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        color: #111827;
        letter-spacing: -0.03em;
    }

    .section-heading p {
        margin: 0;
        color: #4b5563;
        line-height: 1.8;
        font-size: 1.02rem;
    }

    .muted-section {
        background: #f8fafc;
        border-top: 1px solid #eef2f7;
        border-bottom: 1px solid #eef2f7;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    .service-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 1.8rem;
    }

    .service-card h3 {
        margin: 0 0 0.85rem;
        color: #111827;
        font-size: 1.2rem;
    }

    .service-card p {
        margin: 0 0 1rem;
        color: #4b5563;
        line-height: 1.75;
    }

    .service-list {
        margin: 0;
        padding-left: 1.1rem;
        color: #4b5563;
    }

    .service-list li {
        margin-bottom: 0.65rem;
        line-height: 1.7;
    }

    .benefits-grid,
    .process-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }

    .card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        padding: 1.6rem;
    }

    .card h3 {
        margin: 0 0 0.75rem;
        color: #111827;
        font-size: 1.08rem;
    }

    .card p {
        margin: 0;
        color: #4b5563;
        line-height: 1.75;
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

    .cta-box {
        background: #111827;
        color: #ffffff;
        border-radius: 24px;
        padding: 2.25rem;
    }

    .cta-grid {
        display: grid;
        grid-template-columns: 1.3fr 0.7fr;
        gap: 1.5rem;
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
        max-width: 720px;
    }

    .cta-actions {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .cta-box .btn-primary {
        background: #ffffff;
        color: #111827;
    }

    .cta-box .btn-primary:hover {
        background: #f3f4f6;
    }

    .cta-box .btn-secondary {
        border-color: rgba(255,255,255,0.22);
        color: #ffffff;
        background: transparent;
    }

    .cta-box .btn-secondary:hover {
        background: rgba(255,255,255,0.08);
    }

    @media (max-width: 960px) {
        .hero-grid,
        .services-grid,
        .benefits-grid,
        .process-grid,
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

        .hero-actions {
            flex-direction: column;
            align-items: stretch;
        }

        .btn-primary,
        .btn-secondary {
            width: 100%;
        }
    }
    .energy-check-teaser {
        margin-top: 2rem;
    }

    .energy-check-teaser-box {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 1.5rem;
        align-items: center;
        border: 1px solid #e5e7eb;
        background: #ffffff;
        border-radius: 20px;
        padding: 1.6rem;
        box-shadow: 0 12px 35px rgba(15, 23, 42, 0.06);
    }

    .energy-check-teaser h3 {
        margin: 0 0 0.5rem;
        font-size: 1.35rem;
        color: #111827;
    }

    .energy-check-teaser p {
        margin: 0 0 1rem;
        color: #4b5563;
        line-height: 1.7;
    }

    .energy-check-mini-flow {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0.5rem;
    }

    .energy-check-mini-node {
        border: 1px solid #dbeafe;
        background: #f8fafc;
        border-radius: 12px;
        padding: 0.5rem;
        font-size: 0.85rem;
        text-align: center;
    }

    @media (max-width: 960px) {
        .energy-check-teaser-box {
            grid-template-columns: 1fr;
        }

        .energy-check-mini-flow {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<div class="services-page">
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">Onze diensten</span>
                <h1>Techniek die logisch samenwerkt.</h1>
                <p class="lead">
                    Volt-IT realiseert oplossingen voor woningen waar automatisatie,
                    energiebeheer en technische installaties op een doordachte manier
                    samenkomen. Niet om technologie toe te voegen omwille van de technologie,
                    maar om meer comfort, controle en efficiëntie te creëren.
                </p>

                <div class="hero-actions">
                    <a href="{{ route('contact') }}" class="btn-primary">Bespreek je project</a>
                    <a href="{{ route('portfolio') }}" class="btn-secondary">Bekijk realisaties</a>
                </div>
            </div>

            <aside class="hero-card">
                <h3>Wat je van onze aanpak mag verwachten</h3>
                <ul>
                    <li>Heldere oplossingen die technisch sterk én gebruiksvriendelijk zijn.</li>
                    <li>Integratie van verschillende technieken in één logisch geheel.</li>
                    <li>Focus op comfort, energie-efficiëntie en toekomstgerichte uitbreiding.</li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <h2>Waarmee we je kunnen helpen</h2>
                <p>
                    Elke woning en elk project is anders. Daarom vertrekken we altijd vanuit
                    de praktische situatie, de aanwezige technieken en de verwachtingen van de gebruiker.
                </p>
            </div>

            <div class="services-grid">
                <article class="service-card">
                    <h3>Domotica & automatisatie</h3>
                    <p>
                        Slimme sturing van technieken in de woning zodat comfort, gebruiksgemak
                        en logica centraal staan.
                    </p>
                    <ul class="service-list">
                        <li>Verlichting en sferen</li>
                        <li>Verwarming en koeling</li>
                        <li>Zonwering en screens</li>
                        <li>Aanwezigheids- en tijdsgebonden sturing</li>
                        <li>Centrale bediening en visualisatie</li>
                    </ul>
                </article>

                <article class="service-card">
                    <h3>Energiebeheer</h3>
                    <p>
                        Inzicht in verbruik en productie, gecombineerd met slimme sturing
                        om beschikbare energie beter te benutten.
                    </p>
                    <ul class="service-list">
                        <li>Monitoring van verbruik en opwekking</li>
                        <li>Optimalisatie van zelfconsumptie</li>
                        <li>Afstemming van verbruiksmomenten</li>
                        <li>Sturing op basis van energiebeschikbaarheid</li>
                        <li>Meer grip op energiestromen in de woning</li>
                    </ul>
                </article>

                <article class="service-card">
                    <h3>Integratie van installaties</h3>
                    <p>
                        Verschillende technieken laten samenwerken in plaats van los naast
                        elkaar te functioneren.
                    </p>
                    <ul class="service-list">
                        <li>Zonnepanelen</li>
                        <li>Thuisbatterij</li>
                        <li>Laadpaal</li>
                        <li>Warmtepomp</li>
                        <li>Andere elektrische en slimme installaties</li>
                    </ul>
                </article>

                <article class="service-card">
                    <h3>Advies & technische uitwerking</h3>
                    <p>
                        Ondersteuning bij nieuwbouw en renovatie, van eerste analyse tot
                        een technisch coherent voorstel.
                    </p>
                    <ul class="service-list">
                        <li>Analyse van behoeften en mogelijkheden</li>
                        <li>Technische denkoefening voor woningprojecten</li>
                        <li>Keuzes structureren voor latere uitbreidingen</li>
                        <li>Praktische vertaalslag van wensen naar uitvoering</li>
                        <li>Oog voor betrouwbaarheid en onderhoudbaarheid</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="section energy-check-teaser">
        <div class="container">

            <div class="energy-check-teaser-box">

                <div>
                    <span class="eyebrow">Twijfel je wat mogelijk is?</span>

                    <h3>Doe de energiecheck voor jouw woning</h3>

                    <p>
                        Ontdek in enkele stappen hoeveel potentieel jouw woning heeft
                        voor energiebeheer, automatisatie en integratie van technieken
                        zoals zonnepanelen, batterij en laadpaal.
                    </p>

                    <a href="{{ route('energy-check') }}" class="btn-primary">
                        Start de energiecheck
                    </a>
                </div>

                <div class="energy-check-mini-flow">

                    <div class="energy-check-mini-node">
                        ☀️<br>Zonnepanelen
                    </div>

                    <div class="energy-check-mini-node">
                        🔋<br>Batterij
                    </div>

                    <div class="energy-check-mini-node">
                        🏠<br>Woning
                    </div>

                    <div class="energy-check-mini-node">
                        🚗<br>Laadpaal
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="section muted-section">
        <div class="container">
            <div class="section-heading">
                <h2>Wat deze aanpak oplevert</h2>
                <p>
                    Een slimme woning is pas waardevol wanneer de techniek ook echt
                    merkbaar beter werkt in het dagelijkse gebruik.
                </p>
            </div>

            <div class="benefits-grid">
                <div class="card">
                    <h3>Meer comfort</h3>
                    <p>
                        Automatisatie neemt terugkerende handelingen over en maakt de woning
                        intuïtiever in gebruik.
                    </p>
                </div>

                <div class="card">
                    <h3>Meer inzicht</h3>
                    <p>
                        Je krijgt beter zicht op productie, verbruik en het gedrag van
                        verschillende installaties in de woning.
                    </p>
                </div>

                <div class="card">
                    <h3>Meer efficiëntie</h3>
                    <p>
                        Door technieken op elkaar af te stemmen, benut je energie en capaciteit
                        slimmer en vermijd je onnodige verliezen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <h2>Hoe we te werk gaan</h2>
                <p>
                    Geen standaardpakket, maar een oplossing die vertrekt vanuit jouw woning,
                    jouw technieken en jouw verwachtingen.
                </p>
            </div>

            <div class="process-grid">
                <div class="card">
                    <div class="step-number">01</div>
                    <h3>Verkennen</h3>
                    <p>
                        We bespreken de woning, de huidige of geplande technieken en de doelen
                        rond comfort, sturing en energiebeheer.
                    </p>
                </div>

                <div class="card">
                    <div class="step-number">02</div>
                    <h3>Structureren</h3>
                    <p>
                        We werken een oplossing uit die technisch logisch is en ruimte laat
                        voor toekomstige uitbreiding of optimalisatie.
                    </p>
                </div>

                <div class="card">
                    <div class="step-number">03</div>
                    <h3>Realiseren</h3>
                    <p>
                        We zorgen voor een nette implementatie en een systeem dat betrouwbaar,
                        overzichtelijk en bruikbaar blijft op lange termijn.
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
                        <h2>Wil je bekijken wat technisch het best past bij jouw woning?</h2>
                        <p>
                            Of het nu gaat om nieuwbouw, renovatie of het slimmer laten samenwerken
                            van bestaande installaties: we denken graag mee over een heldere en
                            toekomstgerichte oplossing.
                        </p>
                    </div>

                    <div class="cta-actions">
                        <a href="{{ route('contact') }}" class="btn-primary">Neem contact op</a>
                        <a href="{{ route('portfolio') }}" class="btn-secondary">Bekijk projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection