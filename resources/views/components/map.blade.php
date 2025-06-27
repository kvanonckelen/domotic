<!-- resources/views/map.blade.php -->
@php
    $googleMapsUrl = env('GOOGLE_MAPS_URL');

@endphp

<section style="width: 100%, margin: 0, padding: 0, background-color: #f0f0f0; display: flex; justify-content: center; align-items: center;">

    <div style="width: 100%; height: 500px; position: relative; overflow: hidden;">
        <iframe
            width="100%"
            height="100%"
            frameborder="0"
            style="border:0"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="{{ config('services.google_maps.embed_url') }}">
        </iframe>
    </div>
</section>
