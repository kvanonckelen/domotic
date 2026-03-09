@extends('layouts.app')

@section('title', 'Realisaties slimme woningen en domotica projecten | Volt-IT')
@section('description', 'Bekijk voorbeelden van slimme woningen met domotica, energiebeheer en integratie van verschillende technieken.')

@section('content')
<style>
    .portfolio-page {
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

    .hero-card p {
        margin: 0 0 1rem;
        color: #4b5563;
        line-height: 1.75;
    }

    .hero-card p:last-child {
        margin-bottom: 0;
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

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    .project-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        overflow: hidden;
    }

    .project-visual {
        height: 220px;
        background: linear-gradient(135deg, #e5e7eb 0%, #f8fafc 100%);
        border-bottom: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6b7280;
        //font-weight: 600;
        //font-size: 0.95rem;
        text-align: center;
        //padding: 1rem;
        overflow: hidden;
    }

    .project-content {
        padding: 1.6rem;
    }

    .project-meta {
        display: inline-block;
        margin-bottom: 0.85rem;
        font-size: 0.85rem;
        color: #4b5563;
        background: #f3f4f6;
        border-radius: 999px;
        padding: 0.35rem 0.7rem;
    }

    .project-card h3 {
        margin: 0 0 0.8rem;
        color: #111827;
        font-size: 1.2rem;
    }

    .project-card p {
        margin: 0 0 1rem;
        color: #4b5563;
        line-height: 1.75;
    }

    .project-list {
        margin: 0;
        padding-left: 1.1rem;
        color: #4b5563;
    }

    .project-list li {
        margin-bottom: 0.6rem;
        line-height: 1.7;
    }

    .value-grid {
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
        .projects-grid,
        .value-grid,
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

        .project-visual {
            height: 180px;
        }
    }
</style>

<div class="portfolio-page">
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">Realisaties</span>
                <h1>Voorbeelden van doordachte woningtechniek.</h1>
                <p class="lead">
                    Elke woning vraagt een andere aanpak. Deze realisaties tonen hoe
                    automatisatie, energiebeheer en integratie van technieken samenkomen
                    in heldere, betrouwbare oplossingen.
                </p>

                <div class="hero-actions">
                    <a href="{{ route('contact') }}" class="btn-primary">Bespreek je project</a>
                    <a href="{{ route('services') }}" class="btn-secondary">Bekijk onze diensten</a>
                </div>
            </div>

            <aside class="hero-card">
                <h3>Wat je hier terugvindt</h3>
                <p>
                    Geen technische overdaad, maar concrete voorbeelden van woningen
                    waar comfort, energie-efficiëntie en slimme sturing op elkaar zijn afgestemd.
                </p>
                <p>
                    Je kunt deze projecten gebruiken als referentie voor nieuwbouw,
                    renovatie of het slimmer laten samenwerken van bestaande technieken.
                </p>
            </aside>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <h2>Projectvoorbeelden</h2>
                <p>
                    Onderstaande cases zijn voorbeeldstructuren. Je kunt deze later eenvoudig
                    vervangen door echte projecten, foto’s en specifieke technische details.
                </p>
            </div>

            <div class="projects-grid">
                <article class="project-card">
                    <div class="project-visual"><img src="/assets/smarthome.png" alt="Projectfoto slimme woning"/></div>
                    <div class="project-content">
                        <span class="project-meta">Nieuwbouw woning</span>
                        <h3>Slimme sturing voor comfort en energieverbruik</h3>
                        <p>
                            In deze woning werd de techniek centraal afgestemd zodat
                            verlichting, verwarming en zonwering logisch samenwerken.
                        </p>
                        <ul class="project-list">
                            <li>Automatisatie van verlichting en sferen</li>
                            <li>Verwarming afgestemd op gebruik en comfort</li>
                            <li>Zonwering geïntegreerd in het totaalconcept</li>
                            <li>Centrale bediening en duidelijke visualisatie</li>
                        </ul>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-visual"><video controls preload="true" autoplay="true" muted="true" loop="true" width="110%"><source src="/assets/thuisbatterij.mp4" type="video/mp4" height="220px"></video></div>
                    <div class="project-content">
                        <span class="project-meta">Energiebeheer</span>
                        <h3>Woning met focus op slim gebruik van eigen energie</h3>
                        <p>
                            De energiestromen in deze woning werden beter op elkaar afgestemd
                            om beschikbare productie efficiënter te benutten.
                        </p>
                        <ul class="project-list">
                            <li>Monitoring van productie en verbruik</li>
                            <li>Afstemming tussen verbruiksmomenten en opwekking</li>
                            <li>Voorbereid op verdere uitbreiding</li>
                            <li>Meer inzicht in dagelijkse energiestromen</li>
                        </ul>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-visual"><img src="/assets/miniserver.jpg" alt="Projectfoto van Loxone miniserver"/></div>
                    <div class="project-content">
                        <span class="project-meta">Renovatie</span>
                        <h3>Bestaande technieken logisch samengebracht</h3>
                        <p>
                            Bij deze renovatie lag de nadruk op het structureren en koppelen
                            van bestaande en nieuwe installaties in één betrouwbaar systeem.
                        </p>
                        <ul class="project-list">
                            <li>Integratie van nieuwe en bestaande technieken</li>
                            <li>Heldere technische opbouw</li>
                            <li>Gebruiksvriendelijke bediening</li>
                            <li>Toekomstgerichte uitbreidbaarheid</li>
                        </ul>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-visual"> <img src="/assets/laadpalen.jpg" alt="Projectfoto laadpaal"/> </div>
                    <div class="project-content">
                        <span class="project-meta">Integratie van installaties</span>
                        <h3>Zonnepanelen, batterij en laadpaal als één geheel</h3>
                        <p>
                            In dit project werden meerdere energietechnieken gecombineerd
                            zodat ze niet los van elkaar werken, maar als totaaloplossing.
                        </p>
                        <ul class="project-list">
                            <li>Integratie van zonnepanelen en thuisbatterij</li>
                            <li>Laadpaal afgestemd op beschikbare energie</li>
                            <li>Meer grip op verbruik en piekmomenten</li>
                            <li>Praktische en schaalbare oplossing</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section muted-section">
        <div class="container">
            <div class="section-heading">
                <h2>Wat deze projecten gemeen hebben</h2>
                <p>
                    Achter elk project zit dezelfde filosofie: techniek moet niet domineren,
                    maar de woning slimmer, overzichtelijker en efficiënter maken.
                </p>
            </div>

            <div class="value-grid">
                <div class="card">
                    <h3>Doordachte integratie</h3>
                    <p>
                        Technieken worden niet los bekeken, maar als onderdelen van één logisch systeem.
                    </p>
                </div>

                <div class="card">
                    <h3>Praktisch in gebruik</h3>
                    <p>
                        De oplossing moet niet alleen technisch goed zijn, maar ook dagelijks prettig werken.
                    </p>
                </div>

                <div class="card">
                    <h3>Klaar voor later</h3>
                    <p>
                        Er wordt rekening gehouden met toekomstige uitbreidingen en veranderende noden.
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
                        <h2>Ook een project in gedachten?</h2>
                        <p>
                            Werk je aan een woning waar automatisatie, energiebeheer of
                            integratie van technieken een rol speelt, dan bekijken we graag
                            samen welke aanpak technisch en praktisch het meest geschikt is.
                        </p>
                    </div>

                    <div class="cta-actions">
                        <a href="{{ route('contact') }}" class="btn-primary">Contact opnemen</a>
                        <a href="{{ route('services') }}" class="btn-secondary">Onze diensten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection