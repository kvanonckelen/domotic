<footer>
    <div class="container grid grid-3">
        <div>
            <h3>Volt-IT</h3>
            <p>Wij helpen woningen evolueren naar slimme, efficiënte en toekomstgerichte gebouwen met automatisering, energiebeheer en slimme integraties.</p>
        </div>

        <div>
            <h3>Snelle links</h3>
            <ul class="plain-list">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Diensten</a></li>
                <li><a href="{{ route('portfolio') }}">Realisaties</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('energy-check') }}">Energiecheck</a></li>
            </ul>
        </div>

        <div>
            <h3>Contact</h3>
            <p>Telefoon: <a href="tel:+32471780930">+32 471 78 09 30</a><br>
            E-mail: <a href="mailto:info@volt-it.be">info@volt-it.be</a><br>
            Regio: Booischot en ruimere regio Vlaanderen</p>
        </div>
    </div>

    <div class="container footer-bottom">
        © {{ now()->year }} Volt-IT. Alle rechten voorbehouden.
        
        <p>
        Volt-IT is een Loxone Registered Partner en specialiseert zich
        in gebouwautomatisering en energiebeheer voor slimme woningen.
        </p>
    </div>
</footer>
