<!-- resources/views/map.blade.php -->
@php
    $googleMapsUrl = env('GOOGLE_MAPS_URL');

@endphp

<section class="w-full py-4 my-4">

    <div class="w-full h-[400px]">
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
