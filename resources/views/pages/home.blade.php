@extends('layouts.app')

@section('title', 'Domotica en energiebeheer voor slimme woningen | Volt-IT')
@section('description', 'Volt-IT realiseert slimme woningen met domotica, energiebeheer en integratie van zonnepanelen, batterij en laadpalen.')

@section('content')
<style>
    .home-page {
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
        grid-template-columns: 1.2fr 0.8fr;
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
        font-size: clamp(2.2rem, 5vw, 3.7rem);
        line-height: 1.08;
        letter-spacing: -0.03em;
        color: #111827;
        max-width: 11ch;
    }

    .hero p.lead {
        margin: 0 0 1.75rem;
        max-width: 620px;
        font-size: 1.1rem;
        line-height: 1.75;
        color: #4b5563;
    }

    .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 1.5rem;
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

    .hero-note {
        font-size: 0.95rem;
        color: #6b7280;
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
        padding: 0;
        list-style: none;
    }

    .hero-card li {
        padding: 0.85rem 0;
        border-bottom: 1px solid #f1f5f9;
        color: #4b5563;
        line-height: 1.6;
    }

    .hero-card li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .hero-card strong {
        display: block;
        color: #111827;
        margin-bottom: 0.2rem;
    }

    .intro-grid,
    .services-grid,
    .steps-grid,
    .cta-grid {
        display: grid;
        gap: 1.5rem;
    }

    .intro-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        padding: 1.6rem;
    }

    .card h3 {
        margin-top: 0;
        margin-bottom: 0.75rem;
        font-size: 1.1rem;
        color: #111827;
    }

    .card p {
        margin: 0;
        color: #4b5563;
        line-height: 1.7;
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

    .services-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .service-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        padding: 1.75rem;
    }

    .service-card h3 {
        margin: 0 0 0.8rem;
        color: #111827;
        font-size: 1.1rem;
    }

    .service-card p {
        margin: 0 0 1rem;
        color: #4b5563;
        line-height: 1.7;
    }

    .service-card a {
        color: #111827;
        font-weight: 600;
        text-decoration: none;
    }

    .service-card a:hover {
        text-decoration: underline;
    }

    .muted-section {
        background: #f8fafc;
        border-top: 1px solid #eef2f7;
        border-bottom: 1px solid #eef2f7;
    }

    .steps-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .step {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
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
        line-height: 1.7;
    }

    .cta-box {
        background: #111827;
        color: #ffffff;
        border-radius: 24px;
        padding: 2.25rem;
    }

    .cta-grid {
        grid-template-columns: 1.3fr 0.7fr;
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
        .intro-grid,
        .services-grid,
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

        .hero-actions {
            flex-direction: column;
            align-items: stretch;
        }

        .btn-primary,
        .btn-secondary {
            width: 100%;
        }
    }
</style>

<div class="home-page">
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">Gebouwautomatisering & energiebeheer</span>

                <h1>Slimme woningen, doordacht geïntegreerd.</h1>

                <p class="lead">
                Volt-IT helpt architecten, installateurs en woningbouwers om
                gebouwen slimmer en energie-efficiënter te maken via
                geavanceerde gebouwautomatisering.

                Van domotica en energiebeheer tot de integratie van
                zonnepanelen, batterij, warmtepomp en laadpaal
                in één intelligent systeem.
                </p>
                <div class="hero-actions">
                    <a href="{{ route('contact') }}" class="btn-primary">Vraag vrijblijvend advies</a>
                    <a href="{{ route('portfolio') }}" class="btn-secondary">Bekijk realisaties</a>
                </div>

                <p class="hero-note">
                Volt-IT specialiseert zich in domotica,
                energiebeheer en slimme woningtechnologie
                voor nieuwbouw en renovatieprojecten.
                </p>
            </div>

            <aside class="hero-card">
                <h3>Waar Volt-IT op focust</h3>

                <ul>
                    <li>
                    <strong>Gebouwautomatisatie</strong>
                    Integratie van verlichting, HVAC, zonwering en energie in één systeem.
                    </li>

                    <li>
                    <strong>Energiebeheer</strong>
                    Slim gebruik van zonnepanelen, batterij en laadpaal.
                    </li>

                    <li>
                    <strong>Technische integratie</strong>
                    Samenwerking met architecten en installateurs om technieken
                    correct te integreren.
                    </li>

                    <li>
                    <strong>Retrofit oplossingen</strong>
                    Bestaande woningen slimmer maken zonder grote verbouwingen.
                    </li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="intro-grid">
                <div class="card">
                    <h3>Slimme woningtechnologie</h3>

                    <p>
                    Automatisatie zorgt ervoor dat verlichting, verwarming,
                    zonwering en andere technieken logisch samenwerken
                    voor meer comfort en efficiënt energiegebruik.
                    </p>
                </div>

                <div class="card">
                    <h3>Energiebeheer</h3>

                    <p>
                    Door technieken zoals zonnepanelen, batterij,
                    warmtepomp en laadpaal te integreren,
                    wordt energie optimaal gebruikt binnen de woning.
                    </p>
                </div>

                <div class="card">
                    <h3>Technische integratie</h3>

                    <p>
                    Volt-IT werkt samen met architecten en installateurs
                    om slimme technieken correct te ontwerpen,
                    te integreren en te configureren.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section muted-section">
        <div class="container">
            <div class="section-heading">
                <h2>Oplossingen voor slimme en energiebewuste woningen</h2>
                <p>
                    Geen overdaad aan technologie, maar systemen die echt iets bijdragen:
                    meer comfort, lager verbruik en een woning die logisch samenwerkt.
                </p>
            </div>

            <div class="services-grid">
                <article class="service-card">
                    <h3>Domotica & automatisatie</h3>
                    <p>
                        Sturing van verlichting, verwarming, zonwering en andere technieken
                        op maat van het gebruik van de woning.
                    </p>
                    <a href="{{ route('services') }}">Meer over onze diensten</a>
                </article>

                <article class="service-card">
                    <h3>Energiebeheer</h3>
                    <p>
                        Inzicht en optimalisatie van verbruik, zelfconsumptie en slimme
                        energiesturing binnen de woning.
                    </p>
                    <a href="{{ route('services') }}">Ontdek de mogelijkheden</a>
                </article>

                <article class="service-card">
                    <h3>Integratie van installaties</h3>
                    <p>
                        Een doordachte koppeling tussen zonnepanelen, thuisbatterij,
                        laadpaal en warmtepomp in één coherent geheel.
                    </p>
                    <a href="{{ route('services') }}">Bekijk onze aanpak</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="section-heading">
                <h2>Samenwerking met architecten en installateurs</h2>

                <p>
                    Slimme gebouwen ontstaan door een goede samenwerking tussen
                    architect, installateur en integrator. Volt-IT ondersteunt
                    projecten door technieken correct op elkaar af te stemmen
                    en automatisatie logisch te integreren binnen het ontwerp
                    van de woning.
                </p>
            </div>

            <div class="intro-grid">

                <div class="card">
                    <h3>Voor architecten</h3>

                    <p>
                        Technisch advies over domotica, energiebeheer en integratie
                        van woningtechnologie binnen het ontwerp van een woning
                        of renovatieproject.
                    </p>
                </div>

                <div class="card">
                    <h3>Voor installateurs</h3>

                    <p>
                        Samenwerking met installateurs voor de integratie en
                        configuratie van automatisatiesystemen zoals domotica
                        en energiebeheer.
                    </p>
                </div>

                <div class="card">
                    <h3>Voor bestaande woningen</h3>

                    <p>
                        Retrofit oplossingen maken het mogelijk om bestaande
                        woningen slimmer en energie-efficiënter te maken zonder
                        grote structurele verbouwingen.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <h2>Onze aanpak</h2>
                <p>
                    Elk project start vanuit de woning en de gebruiker. We zoeken naar een
                    oplossing die technisch sterk is, maar vooral ook praktisch en duurzaam.
                </p>
            </div>

            <div class="steps-grid">
                <div class="step">
                    <div class="step-number">01</div>
                    <h3>Analyse</h3>
                    <p>
                        We bekijken de woning, de aanwezige technieken en de verwachtingen
                        rond comfort, energie en sturing.
                    </p>
                </div>

                <div class="step">
                    <div class="step-number">02</div>
                    <h3>Ontwerp</h3>
                    <p>
                        We werken een heldere oplossing uit die aansluit bij de technische
                        situatie en toekomstige uitbreidingen mogelijk maakt.
                    </p>
                </div>

                <div class="step">
                    <div class="step-number">03</div>
                    <h3>Implementatie</h3>
                    <p>
                        We zorgen voor een nette en doordachte integratie, met aandacht voor
                        betrouwbaarheid, gebruiksgemak en opvolging.
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
                        <h2>Op zoek naar een slimme aanpak voor jouw woning?</h2>
                        <p>
                            Werk je aan een nieuwbouw of renovatie en wil je automatisatie,
                            energiebeheer of integratie van technieken goed aanpakken?
                            Dan bekijken we graag samen wat technisch en praktisch het best past.
                        </p>
                    </div>

                    <div class="cta-actions">
                        <a href="{{ route('contact') }}" class="btn-primary">Contact opnemen</a>
                        <a href="{{ route('portfolio') }}" class="btn-secondary">Realisaties bekijken</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection