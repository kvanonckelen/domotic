<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Engineering Automations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 400, // starting animation after scrolling 200px
            duration: 10000, // animation duration
            easing: 'ease-in-out', // animation easing
            once: true // animation will only happen once
        });
    </script>
    <style>
        /* Initially hide the div and position it off-screen */
        .slide-in-left, .slide-in-right {
            opacity: 0;
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        /* Move left elements off-screen */
        .slide-in-left {
            transform: translateX(-150px);
        }
        
        /* Move right elements off-screen */
        .slide-in-right {
            transform: translateX(150px);
        }
        
        /* When scrolled into view, animate it into position */
        .show {
            opacity: 1;
            transform: translateX(0);
        }
        
        </style>
</head>
<body class="bg-white">
    <nav class="sm:fixed flex bg-white sm:z-10 sm:p-4 items-center sm:justify-between justify-center top-0 sm:w-full">
        <div class="sm:ml-40"><a href={{ route('home')}}>
            <img src="/volt-it-new.png" alt="Studio-Volt-IT" class="h-24">
            </a>
        </div>
        <ul class="flex sm:space-x-24 sm:mr-20 sm:text-xl m-4 space-x-4">
            <li><a href="/" class="hover:text-green-500 active:text-green-600 text-green-500">Home</a></li>
            <li><a href="/services" class="hover:text-green-500 active:text-green-600">Services</a></li>
            <li><a href="/contact" class="hover:text-green-500 active:text-green-600">Contact</a></li>
        </ul>
    </nav>
    <div class="">
        {{ $slot }}
    </div>
    @include('layouts.footer')
</body>
</html>