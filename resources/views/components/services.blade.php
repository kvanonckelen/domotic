<?php
$services = [
    (object)[
        'title' => 'Domotica Systemen',
        'description' => 'Onze domotica systemen maken uw huis slimmer en energiezuiniger, met volledige controle via uw smartphone.',
    ],
    (object)[
        'title' => 'Onderhoud en Reparatie',
        'description' => 'Onze onderhouds- en reparatiediensten zorgen ervoor dat uw elektrische systemen altijd veilig en efficiënt werken.',
    ],
    (object)[
        'title' => 'Smart Home Integratie',
        'description' => 'Integreer al uw slimme apparaten voor een naadloze en gebruiksvriendelijke ervaring in uw huis.',
    ],
    (object)[
        'title' => 'Energiebeheer',
        'description' => 'Optimaliseer uw energieverbruik en verlaag uw energiekosten met onze geavanceerde energiebeheersystemen.',
    ],
    (object)[
        'title' => 'Verlichting en Elektrische Installaties',
        'description' => 'Professionele installatie en onderhoud van verlichting en elektrische systemen voor zowel residentiële als commerciële toepassingen.',
    ],
    (object)[
        'title' => 'Netwerk en Internetdiensten',
        'description' => 'Zorg voor een betrouwbare internetverbinding en netwerkoplossingen voor uw huis of bedrijf.',
    ],
    (object)[
        'title' => 'Consultancy en Advies',
        'description' => 'Onze experts bieden advies en consultancy om de beste oplossingen voor uw elektrische behoeften te vinden.',
    ],
    (object)[
        'title' => 'Projectmanagement',
        'description' => 'Beheer van uw elektrische projecten van begin tot eind, met focus op kwaliteit en klanttevredenheid.',
    ],

    // Add more services as needed
];
?>


    <div class=" px-24 mx-24 mt-24 mb-24 pt-24 pb-24">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl font-bold text-gray-800">Onze services</h1>
        </div>
        <div class="flex justify-center items-center">
            <p class="text-gray-600">Wij bieden verschillende services om aan uw behoeften te voldoen.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-4 m-4">
            @foreach($services as $index => $service)
                <div class="bg-white shadow-md rounded-lg p-6 m-3 duration-900 ease-in-out transition-all hover:shadow-xl
                    {{ $loop->index % 2 === 0 ? 'slide-in-left' : 'slide-in-right' }}">
                    <h2 class="text-xl font-bold text-gray-800">{{ $service->title }}</h2>
                    <p class="text-gray-600">{{ $service->description }}</p>
                </div>
            @endforeach

        </div>

    </div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                } else {
                    // Remove the class when the element leaves the viewport
                    entry.target.classList.remove("show");
                }
            });
        },
        {
            root: null, // Viewport is the root
            threshold: 0.2 // Trigger animation when 20% visible
        }
    );

    // Observe all elements that should animate
    document.querySelectorAll(".slide-in-left, .slide-in-right").forEach(element => {
        observer.observe(element);
    });
});

</script>