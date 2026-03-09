<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Volt-IT | Slimme woningen en energiebeheer')</title>

    <meta name="description" content="@yield('description', 'Volt-IT realiseert slimme woningen met domotica, energiebeheer en integratie van zonnepanelen, batterij en laadpalen.')">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="@yield('title', 'Volt-IT')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Volt-IT">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Volt-IT",
    "url": "https://www.volt-it.be",
    "description": "Volt-IT specialiseert zich in gebouwautomatisering, domotica en energiebeheer voor slimme woningen.",
    "areaServed": "Belgium",
    "serviceType": [
    "domotica",
    "gebouwautomatisering",
    "energiebeheer",
    "smart home integratie"
    ]
    }
    </script>
    <style>
        :root {
            --bg: #0f172a;
            --surface: #111827;
            --surface-soft: #1f2937;
            --card: #ffffff;
            --text: #0f172a;
            --muted: #475569;
            --light: #e2e8f0;
            --primary: #0ea5e9;
            --primary-dark: #0284c7;
            --accent: #22c55e;
            --white: #ffffff;
            --shadow: 0 18px 40px rgba(15, 23, 42, 0.12);
            --radius: 18px;
            --max: 1180px;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: var(--text);
            background: #f8fafc;
            line-height: 1.65;
            padding-top: 76px;
        }

        a { color: inherit; text-decoration: none; }
        img { max-width: 100%; display: block; }
        .container { width: min(var(--max), calc(100% - 2rem)); margin: 0 auto; }
        .section { padding: 5rem 0; }
        .section-sm { padding: 3rem 0; }
        .eyebrow {
            display: inline-block;
            margin-bottom: 1rem;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--primary-dark);
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 0.9rem;
            border-radius: 999px;
            background: rgba(255,255,255,0.12);
            color: var(--white);
            font-size: 0.9rem;
        }
        .grid {
            display: grid;
            gap: 1.5rem;
        }
        .grid-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .grid-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        .grid-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        .card {
            background: var(--card);
            border-radius: var(--radius);
            padding: 1.75rem;
            box-shadow: var(--shadow);
            height: 100%;
        }
        .card-dark {
            background: linear-gradient(180deg, #111827 0%, #0f172a 100%);
            color: var(--white);
        }
        .hero {
            position: relative;
            overflow: hidden;
            padding: 6rem 0 5rem;
            background:
                radial-gradient(circle at top left, rgba(14,165,233,0.30), transparent 32%),
                radial-gradient(circle at right center, rgba(34,197,94,0.18), transparent 28%),
                linear-gradient(135deg, #0f172a 0%, #111827 52%, #1e293b 100%);
            color: var(--white);
        }
        .hero h1,
        .page-hero h1 {
            font-size: clamp(2.3rem, 5vw, 4.3rem);
            line-height: 1.08;
            margin: 0 0 1rem;
        }
        h2 {
            font-size: clamp(1.7rem, 3vw, 2.6rem);
            line-height: 1.15;
            margin: 0 0 1rem;
        }
        h3 {
            font-size: 1.2rem;
            margin: 0 0 0.75rem;
        }
        p { margin: 0 0 1rem; color: var(--muted); }
        .hero p,
        .page-hero p,
        .card-dark p,
        footer p,
        footer li,
        footer a { color: rgba(255,255,255,0.82); }
        .lead {
            font-size: 1.1rem;
            max-width: 60ch;
        }
        .actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 2rem;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            padding: 0.95rem 1.25rem;
            border-radius: 999px;
            border: 1px solid transparent;
            font-weight: 700;
            transition: 0.2s ease;
        }
        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }
        .btn-primary:hover { background: var(--primary-dark); }
        .btn-secondary {
            border-color: rgba(255,255,255,0.22);
            color: var(--white);
            background: rgba(255,255,255,0.04);
        }
        .btn-outline {
            border-color: #cbd5e1;
            color: var(--text);
            background: var(--white);
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }
        .stat {
            padding: 1.25rem;
            border-radius: 16px;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.08);
        }
        .stat strong {
            display: block;
            font-size: 1.6rem;
            color: var(--white);
            margin-bottom: 0.25rem;
        }
        .page-hero {
            padding: 4.5rem 0 3rem;
            background: linear-gradient(135deg, #e0f2fe 0%, #f8fafc 58%, #dcfce7 100%);
        }
        .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(15, 23, 42, 0.82);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(255,255,255,0.08);
            transition: transform 0.35s ease, opacity 0.35s ease, background 0.25s ease;
            transform: translateY(0);
            opacity: 1;
        }

        .nav.nav-hidden {
            transform: translateY(-110%);
            opacity: 0;
        }

        .nav.nav-scrolled {
            background: rgba(15, 23, 42, 0.92);
        }
        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            min-height: 76px;
        }
        .brand {
            display: flex;
            flex-direction: column;
            gap: 0.15rem;
            color: var(--white);
            font-weight: 800;
        }
        .brand small {
            color: rgba(255,255,255,0.65);
            font-weight: 500;
        }
        .menu {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            flex-wrap: wrap;
        }
        .menu a {
            color: rgba(255,255,255,0.82);
            font-weight: 600;
        }
        .menu a:hover,
        .menu a.active { color: var(--white); }
        .checklist,
        .plain-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .checklist li,
        .plain-list li {
            padding-left: 1.75rem;
            position: relative;
            margin-bottom: 0.9rem;
        }
        .checklist li::before,
        .plain-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0.05rem;
            color: var(--accent);
            font-weight: 800;
        }
        .feature-icon {
            width: 3rem;
            height: 3rem;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(14,165,233,0.12);
            color: var(--primary-dark);
            font-weight: 800;
            margin-bottom: 1rem;
        }
        .cta-band {
            background: linear-gradient(135deg, #0ea5e9 0%, #0369a1 100%);
            color: var(--white);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: var(--shadow);
        }
        .cta-band p { color: rgba(255,255,255,0.88); }
        .steps {
            counter-reset: item;
        }
        .step {
            position: relative;
            padding-left: 4rem;
        }
        .step::before {
            counter-increment: item;
            content: counter(item);
            position: absolute;
            left: 0;
            top: 0;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #e0f2fe;
            color: #075985;
            font-weight: 800;
        }
        form {
            display: grid;
            gap: 1rem;
        }
        label {
            font-weight: 700;
            display: block;
            margin-bottom: 0.5rem;
        }
        input, textarea {
            width: 100%;
            padding: 0.9rem 1rem;
            border-radius: 14px;
            border: 1px solid #cbd5e1;
            font: inherit;
            background: var(--white);
        }
        textarea { min-height: 180px; resize: vertical; }
        .alert {
            padding: 1rem 1.1rem;
            border-radius: 14px;
            margin-bottom: 1rem;
        }
        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #86efac;
        }
        footer {
            margin-top: 4rem;
            background: #0f172a;
            color: var(--white);
            padding: 4rem 0 2rem;
        }
        .footer-bottom {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.95rem;
            color: rgba(255,255,255,0.7);
        }
        @media (max-width: 920px) {
            .grid-2, .grid-3, .grid-4, .stats { grid-template-columns: 1fr; }
            .nav-inner { align-items: flex-start; padding: 1rem 0; flex-direction: column; }
            .menu { width: 100%; }
            .hero, .page-hero { padding-top: 4rem; }
        }
        @media (min-width: 921px) {
            .nav.nav-hidden {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <header class="nav" id="siteNav">
        <div class="container nav-inner">
            <a href="{{ route('home') }}" class="brand">
                <span>Volt-IT</span>
                <small>Gebouwautomatisering & energiebeheer</small>
            </a>

            <nav class="menu" aria-label="Hoofdmenu">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Diensten</a>
                <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Realisaties</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                <a href="{{ route('contact') }}" class="btn btn-primary">Plan een gesprek</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    <script>
    (function () {
        const nav = document.getElementById('siteNav');
        if (!nav) return;

        let lastScrollY = window.scrollY;
        let ticking = false;

        function updateNavbar() {
            const currentScrollY = window.scrollY;
            const isMobile = window.innerWidth <= 920;

            if (currentScrollY > 10) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }

            if (!isMobile) {
                nav.classList.remove('nav-hidden');
                lastScrollY = currentScrollY;
                ticking = false;
                return;
            }

            if (currentScrollY <= 20) {
                nav.classList.remove('nav-hidden');
                lastScrollY = currentScrollY;
                ticking = false;
                return;
            }

            if (currentScrollY > lastScrollY && currentScrollY > 100) {
                nav.classList.add('nav-hidden');
            } else if (currentScrollY < lastScrollY) {
                nav.classList.remove('nav-hidden');
            }

            lastScrollY = currentScrollY;
            ticking = false;
        }

        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(updateNavbar);
                ticking = true;
            }
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth > 920) {
                nav.classList.remove('nav-hidden');
            }
        });
    })();
</script>
</body>
</html>
