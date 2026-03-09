@extends('layouts.app')

@section('title', 'Contact voor domotica en energiebeheer projecten | Volt-IT')
@section('description', 'Contacteer Volt-IT voor advies rond domotica, energiebeheer en slimme woningtechnologie.')

@section('content')
<style>
    .contact-page {
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
        max-width: 10ch;
    }

    .hero p.lead {
        margin: 0 0 1.5rem;
        max-width: 650px;
        font-size: 1.08rem;
        line-height: 1.75;
        color: #4b5563;
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

    .contact-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 1.5rem;
        align-items: start;
    }

    .form-card,
    .info-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 1.75rem;
    }

    .form-card h3,
    .info-card h3 {
        margin: 0 0 1rem;
        color: #111827;
        font-size: 1.2rem;
    }

    .form-card p,
    .info-card p {
        color: #4b5563;
        line-height: 1.75;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .form-group.full {
        grid-column: 1 / -1;
    }

    label {
        font-size: 0.95rem;
        font-weight: 600;
        color: #111827;
    }

    input,
    textarea,
    select {
        width: 100%;
        border: 1px solid #d1d5db;
        border-radius: 12px;
        padding: 0.95rem 1rem;
        font-size: 1rem;
        color: #111827;
        background: #ffffff;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
        box-sizing: border-box;
    }

    input:focus,
    textarea:focus,
    select:focus {
        outline: none;
        border-color: #9ca3af;
        box-shadow: 0 0 0 4px rgba(17, 24, 39, 0.06);
    }

    textarea {
        min-height: 160px;
        resize: vertical;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.95rem 1.35rem;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.2s ease;
        background: #111827;
        color: #ffffff;
        border: none;
        cursor: pointer;
    }

    .btn-primary:hover {
        background: #000000;
        transform: translateY(-1px);
    }

    .alert-success {
        margin-bottom: 1.25rem;
        padding: 1rem 1.1rem;
        border-radius: 14px;
        background: #ecfdf5;
        border: 1px solid #a7f3d0;
        color: #065f46;
    }

    .error-text {
        font-size: 0.9rem;
        color: #b91c1c;
    }

    .muted-section {
        background: #f8fafc;
        border-top: 1px solid #eef2f7;
        border-bottom: 1px solid #eef2f7;
    }

    .info-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .info-list li {
        padding: 0.9rem 0;
        border-bottom: 1px solid #f1f5f9;
        color: #4b5563;
        line-height: 1.7;
    }

    .info-list li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .info-list strong {
        display: block;
        color: #111827;
        margin-bottom: 0.2rem;
    }

    .steps-grid {
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

    @media (max-width: 960px) {
        .hero-grid,
        .contact-grid,
        .steps-grid {
            grid-template-columns: 1fr;
        }

        .hero {
            padding-top: 4.5rem;
            padding-bottom: 3.5rem;
        }
    }

    @media (max-width: 640px) {
        .section {
            padding: 4rem 1.25rem;
        }

        .hero {
            padding: 4rem 1.25rem 3rem;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="contact-page">
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">Contact</span>
                <h1>Bespreek je woningproject.</h1>
                <p class="lead">
                    Werk je aan een nieuwbouw, renovatie of wil je bestaande technieken
                    slimmer laten samenwerken? Neem gerust contact op voor een eerste
                    verkenning van de mogelijkheden.
                </p>
            </div>

            <aside class="hero-card">
                <h3>Waarover je ons kunt contacteren</h3>
                <ul>
                    <li>Domotica en automatisatie van woningen</li>
                    <li>Energiebeheer en inzicht in verbruik</li>
                    <li>Integratie van zonnepanelen, batterij en laadpaal</li>
                    <li>Technische afstemming bij nieuwbouw of renovatie</li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <h2>Vertel kort iets over je project</h2>
                <p>
                    Hoe concreter je vraag, hoe gerichter we kunnen meedenken. Een eerste
                    beschrijving van de woning, situatie of gewenste technieken is al voldoende.
                </p>
            </div>

            <div class="contact-grid">
                <div class="form-card">
                    <h3>Stuur een bericht</h3>
                    @if($errors->has('form'))
                        <div class="alert-success" style="background:#fef2f2;border-color:#fecaca;color:#991b1b;">
                            {{ $errors->first('form') }}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <input type="text" name="company" style="display:none">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Naam</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="error-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">E-mailadres</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="error-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Telefoon</label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="error-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="project_type">Type project</label>
                                <select id="project_type" name="project_type">
                                    <option value="">Kies een optie</option>
                                    <option value="nieuwbouw" {{ old('project_type') == 'nieuwbouw' ? 'selected' : '' }}>Nieuwbouw</option>
                                    <option value="renovatie" {{ old('project_type') == 'renovatie' ? 'selected' : '' }}>Renovatie</option>
                                    <option value="bestaande_woning" {{ old('project_type') == 'bestaande_woning' ? 'selected' : '' }}>Bestaande woning</option>
                                    <option value="algemene_vraag" {{ old('project_type') == 'algemene_vraag' ? 'selected' : '' }}>Algemene vraag</option>
                                </select>
                                @error('project_type')
                                    <span class="error-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group full">
                                <label for="message">Bericht</label>
                                <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="error-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group full">
                                <button type="submit" class="btn-primary">Verstuur bericht</button>
                            </div>
                        </div>
                    </form>
                </div>

                <aside class="info-card">
                    <h3>Contactinformatie</h3>
                    <p>
                        Heb je al een duidelijke vraag of wil je aftoetsen wat technisch haalbaar is?
                        Dan bekijken we graag samen hoe we je project kunnen benaderen.
                    </p>

                    <ul class="info-list">
                        <li>
                            <strong>E-mail</strong>
                            info@volt-it.be
                        </li>
                        <li>
                            <strong>Focus</strong>
                            Gebouwautomatisering, energiebeheer en integratie van woningtechnieken
                        </li>
                        <li>
                            <strong>Projecttypes</strong>
                            Nieuwbouw, renovatie en optimalisatie van bestaande installaties
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </section>

    <section class="section muted-section">
        <div class="container">
            <div class="section-heading">
                <h2>Hoe een eerste contact meestal verloopt</h2>
                <p>
                    Een eerste gesprek hoeft niet ingewikkeld te zijn. We starten eenvoudig
                    en bekijken daarna wat relevant is voor jouw situatie.
                </p>
            </div>

            <div class="steps-grid">
                <div class="card">
                    <div class="step-number">01</div>
                    <h3>Korte verkenning</h3>
                    <p>
                        Je licht kort toe waar je woningproject over gaat en welke vragen of noden er zijn.
                    </p>
                </div>

                <div class="card">
                    <div class="step-number">02</div>
                    <h3>Technische inschatting</h3>
                    <p>
                        We bekijken welke aanpak logisch is en waar automatisatie of energiebeheer echt meerwaarde biedt.
                    </p>
                </div>

                <div class="card">
                    <div class="step-number">03</div>
                    <h3>Vervolgstap</h3>
                    <p>
                        Indien relevant werken we verder richting voorstel, technische uitwerking of projectbespreking.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection