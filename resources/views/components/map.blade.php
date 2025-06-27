<!-- resources/views/map.blade.php -->
@php
    $googleMapsUrl = env('GOOGLE_MAPS_URL');

@endphp

<section style="width: 100%, margin: 0, padding: 0;">

    <div style="width: 100%, height: 400px;">
        <iframe
            width="100%"
            height="100%"
            frameborder="0"
            style="border:0"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src={{ $googleMapsUrl}}>
        </iframe>
    </div>
</section>
