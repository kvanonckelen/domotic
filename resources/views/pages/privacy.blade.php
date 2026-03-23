@extends('layouts.app')

@section('title', 'Privacy Policy | Volt-IT')
@section('description', 'Lees hoe Volt-IT omgaat met persoonsgegevens, contactaanvragen, energiecheck gegevens en website-analyse.')

@section('content')
<style>
    .policy-page {
        color: #1f2937;
    }

    .section {
        padding: 5rem 1.5rem;
    }

    .container {
        max-width: 980px;
        margin: 0 auto;
    }

    .hero {
        padding: 5.5rem 1.5rem 3.5rem;
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        border-bottom: 1px solid #e5e7eb;
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
    }

    .hero p.lead {
        margin: 0;
        max-width: 760px;
        font-size: 1.06rem;
        line-height: 1.8;
        color: #4b5563;
    }

    .policy-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 22px;
        padding: 2rem;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.05);
    }

    .policy-card + .policy-card {
        margin-top: 1.5rem;
    }

    .policy-card h2 {
        margin: 0 0 1rem;
        font-size: 1.45rem;
        color: #111827;
        letter-spacing: -0.02em;
    }

    .policy-card h3 {
        margin: 1.5rem 0 0.75rem;
        font-size: 1.05rem;
        color: #111827;
    }

    .policy-card p {
        margin: 0 0 1rem;
        color: #4b5563;
        line-height: 1.85;
    }

    .policy-card p:last-child {
        margin-bottom: 0;
    }

    .policy-list {
        margin: 0 0 1rem;
        padding: 0;
        list-style: none;
    }

    .policy-list li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 0.75rem;
        color: #4b5563;
        line-height: 1.8;
    }

    .policy-list li::before {
        content: "•";
        position: absolute;
        left: 0;
        top: 0;
        color: #0ea5e9;
        font-weight: 700;
    }

    .policy-meta {
        display: grid;
        gap: 1rem;
        margin-top: 1rem;
        padding: 1.25rem;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        background: #f8fafc;
    }

    .policy-meta strong {
        color: #111827;
    }

    .note-box {
        margin-top: 1rem;
        padding: 1rem 1.1rem;
        border-radius: 16px;
        background: #eff6ff;
        border: 1px solid #bfdbfe;
        color: #1e3a8a;
        line-height: 1.75;
    }

    a.policy-link {
        color: #111827;
        text-decoration: underline;
        text-underline-offset: 2px;
    }

    @media (max-width: 640px) {
        .section,
        .hero {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }

        .hero {
            padding-top: 4.5rem;
            padding-bottom: 3rem;
        }

        .policy-card {
            padding: 1.4rem;
        }
    }
</style>

<div class="policy-page">
    <section class="hero">
        <div class="container">
            <span class="eyebrow">Privacy Policy</span>
            <h1>Privacy en gegevensbescherming</h1>
            <p class="lead">
                Volt-IT hecht veel belang aan de bescherming van jouw persoonsgegevens.
                Op deze pagina lees je welke gegevens worden verwerkt, waarom dit gebeurt
                en welke rechten je hebt met betrekking tot jouw gegevens.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <article class="policy-card">
                <h2>1. Identiteit van de verantwoordelijke</h2>

                <p>
                    Volt-IT is verantwoordelijk voor de verwerking van persoonsgegevens
                    zoals beschreven in deze privacy policy.
                </p>

                <div class="policy-meta">
                    <div><strong>Bedrijfsnaam:</strong> Volt-IT</div>
                    <div><strong>Naam:</strong> Kevin Van Onckelen</div>
                    <div><strong>Adres:</strong> Schrieksesteenweg 113, 2221 Heist-op-den-Berg</div>
                    <div><strong>E-mail:</strong> <a href="mailto:kevin@volt-it.be" class="policy-link">kevin@volt-it.be</a></div>
                    <div><strong>Website:</strong> <a href="https://www.volt-it.be" class="policy-link">www.volt-it.be</a></div>
                </div>
            </article>

            <article class="policy-card">
                <h2>2. Welke persoonsgegevens worden verwerkt?</h2>

                <p>
                    Volt-IT verwerkt enkel persoonsgegevens die nodig zijn om jouw aanvraag
                    correct te behandelen, jouw energiecheck te bezorgen of de website te verbeteren.
                </p>

                <ul class="policy-list">
                    <li>Naam</li>
                    <li>E-mailadres</li>
                    <li>Telefoonnummer, indien door jou ingevuld</li>
                    <li>Postcode en projectinformatie, indien door jou ingevuld</li>
                    <li>Gegevens die je zelf invult via het contactformulier of de energiecheck</li>
                    <li>Technische gegevens zoals IP-adres, browsertype en apparaatgegevens</li>
                    <li>Website- en gebruiksgegevens via analysetools zoals Google Analytics</li>
                </ul>
            </article>

            <article class="policy-card">
                <h2>3. Waarom worden deze gegevens verwerkt?</h2>

                <p>
                    Jouw gegevens worden uitsluitend verwerkt voor legitieme en relevante doeleinden
                    in het kader van de dienstverlening van Volt-IT.
                </p>

                <ul class="policy-list">
                    <li>Om contactaanvragen te beantwoorden</li>
                    <li>Om een energiecheck of rapport per e-mail te versturen</li>
                    <li>Om adviesvragen of projectaanvragen op te volgen</li>
                    <li>Om de website, inhoud en gebruikservaring te verbeteren</li>
                    <li>Om bezoekersstatistieken en campagnes te analyseren</li>
                    <li>Om misbruik, spam of oneigenlijk gebruik van formulieren te beperken</li>
                </ul>

                <div class="note-box">
                    Volt-IT gebruikt jouw gegevens niet voor ongevraagde commerciële berichten.
                    Wanneer je contact opneemt of een energiecheck aanvraagt, worden jouw gegevens
                    enkel gebruikt in functie van die aanvraag.
                </div>
            </article>

            <article class="policy-card">
                <h2>4. Op welke rechtsgrond gebeurt deze verwerking?</h2>

                <p>
                    Persoonsgegevens worden verwerkt op basis van één of meerdere van de volgende rechtsgronden:
                </p>

                <ul class="policy-list">
                    <li>Jouw toestemming, bijvoorbeeld wanneer je zelf een formulier invult</li>
                    <li>De noodzaak om jouw aanvraag of verzoek uit te voeren</li>
                    <li>Het gerechtvaardigd belang van Volt-IT, zoals websiteanalyse en beveiliging</li>
                    <li>Wettelijke verplichtingen, indien van toepassing</li>
                </ul>
            </article>

            <article class="policy-card">
                <h2>5. Hoe lang worden jouw gegevens bewaard?</h2>

                <p>
                    Volt-IT bewaart persoonsgegevens niet langer dan noodzakelijk voor het doel
                    waarvoor ze verzameld zijn.
                </p>

                <ul class="policy-list">
                    <li>Contactaanvragen: maximaal 12 maanden, tenzij er een verdere samenwerking ontstaat</li>
                    <li>Energiecheck- en rapportgegevens: maximaal 12 maanden</li>
                    <li>Analysegegevens: volgens de standaardinstellingen van de gebruikte analysetools</li>
                    <li>Administratieve of projectgebonden gegevens: zolang nodig binnen de samenwerking of wettelijke bewaartermijnen</li>
                </ul>
            </article>

            <article class="policy-card">
                <h2>6. Worden jouw gegevens gedeeld met derden?</h2>

                <p>
                    Volt-IT verkoopt jouw persoonsgegevens nooit aan derden.
                    Gegevens worden enkel gedeeld met partijen die nodig zijn voor het correct functioneren
                    van de website of dienstverlening.
                </p>

                <ul class="policy-list">
                    <li>Hostingprovider van de website</li>
                    <li>E-mailprovider of mailserver voor het verzenden van contact- en rapportmails</li>
                    <li>Google Analytics of gelijkaardige analysetools</li>
                    <li>Cookiebot by Usercentrics voor cookiebeheer en toestemming</li>
                </ul>

                <p>
                    Deze partijen verwerken gegevens uitsluitend in functie van hun dienst en niet voor eigen doeleinden.
                </p>
            </article>

            <article class="policy-card">
                <h2>7. Cookies en tracking</h2>

                <p>
                    Volt-IT maakt gebruik van cookies en trackingtechnologieën om de website goed te laten functioneren,
                    het gebruik te analyseren en de prestaties van campagnes te meten.
                </p>

                <p>
                    Cookiebeheer en toestemming verlopen via Cookiebot by Usercentrics.
                    Meer informatie hierover vind je op de cookie policy pagina.
                </p>

                <p>
                    Indien je cookies weigert, kunnen bepaalde analysetools of onderdelen van de website
                    beperkt functioneren.
                </p>
            </article>

            <article class="policy-card">
                <h2>8. Jouw rechten</h2>

                <p>
                    Je hebt op elk moment het recht om jouw persoonsgegevens in te kijken,
                    te laten corrigeren of te laten verwijderen, binnen de grenzen van de toepasselijke wetgeving.
                </p>

                <ul class="policy-list">
                    <li>Recht op inzage</li>
                    <li>Recht op correctie</li>
                    <li>Recht op verwijdering</li>
                    <li>Recht op beperking van verwerking</li>
                    <li>Recht op bezwaar</li>
                    <li>Recht om jouw toestemming in te trekken</li>
                </ul>

                <p>
                    Wil je gebruik maken van één van deze rechten? Neem dan contact op via
                    <a href="mailto:kevin@volt-it.be" class="policy-link">kevin@volt-it.be</a>.
                </p>
            </article>

            <article class="policy-card">
                <h2>9. Beveiliging van gegevens</h2>

                <p>
                    Volt-IT neemt passende technische en organisatorische maatregelen om persoonsgegevens
                    te beschermen tegen verlies, misbruik, ongeoorloofde toegang of onrechtmatige verwerking.
                </p>

                <p>
                    Ondanks deze maatregelen kan nooit een absolute garantie worden gegeven.
                    Er wordt echter steeds gestreefd naar een zorgvuldige en veilige verwerking van gegevens.
                </p>
            </article>

            <article class="policy-card">
                <h2>10. Wijzigingen aan deze privacy policy</h2>

                <p>
                    Volt-IT behoudt zich het recht voor om deze privacy policy aan te passen wanneer dat nodig is,
                    bijvoorbeeld bij wijzigingen aan de website, formulieren of wetgeving.
                </p>

                <p>
                    De meest recente versie is steeds beschikbaar op deze pagina.
                </p>

                <p>
                    <strong>Laatst bijgewerkt:</strong> {{ now()->format('d/m/Y') }}
                </p>
            </article>
        </div>
    </section>
</div>
@endsection