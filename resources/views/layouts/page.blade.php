<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? config('app.name') }}</title>
        <link rel="icon" type="image/x-icon" href="{{'assets/images/logo/logo1.png'}}">
         @vite('resources/css/app.css')
         @stack('styles')
    </head>
    <body class="">
        <x-nav-page />
        <div>
            {{ $slot }}
        </div>
        <x-footer-page />
        <script>
            window.addEvent™Listener('name-updated', event => {
                alert('Name updated to: ' + event.detail.newName);
            })
        </script>
        <script>
            // ScrollReveal().reveal('.header-container', { duration: 1500, interval:16 });
            // ScrollReveal().reveal('.welcome-container', { duration: 1500, interval:16 });
            // ScrollReveal().reveal('.business-container', { duration: 1500, interval:16 });
            // ScrollReveal().reveal('.vision-container', { duration: 2000, interval:16 });
            // ScrollReveal().reveal('.partner-container', { duration: 2000, interval:16 });
            const menubtn = document.getElementById('menu-button');
            const menu = document.getElementById('menu');
            menubtn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            })
        </script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
