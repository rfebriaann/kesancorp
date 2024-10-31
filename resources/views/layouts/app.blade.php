<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? config('app.name') }}</title>
        <link rel="icon" type="image/x-icon" href="{{'assets/images/logo/logo1.png'}}">
         @vite('resources/css/app.css')
    </head>
    <body class="">
        <x-nav-menu />
        {{ $slot }}
        <x-footer-menu />
    </body>
    <script>
    ScrollReveal().reveal('.header-container', { duration: 1500, interval:16 });
    ScrollReveal().reveal('.welcome-container', { duration: 1500, interval:16 });
    ScrollReveal().reveal('.business-container', { duration: 1500, interval:16 });
    ScrollReveal().reveal('.vision-container', { duration: 2000, interval:16 });
    ScrollReveal().reveal('.partner-container', { duration: 2000, interval:16 });

    const menubtn = document.getElementById('menu-button');
    const menu = document.getElementById('menu');
    menubtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    })
    
</script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</html>
