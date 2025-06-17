<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $title ?? 'Интернет магазин' }}</title>
        @stack('meta')      
        {{-- Подключение стилей SLIDER --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!-- //////MAIN STYLE -->
        <link rel="stylesheet" href="{{ asset('/assets/css/main-style-main.css') }}">
        {{-- Подключение стилей livewire --}}
        @livewireStyles
    </head>
    <body class="bg-[#1C2025] text-white">
        <livewire:partials.header />
        <main id="main">
            {{ $slot }}
        </main>
        <livewire:partials.footer />
        
        {{-- Подключение скриптов livewire --}}
        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <x-livewire-alert::scripts />

        {{-- Подключение скриптов SLIDER --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
         var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          autoplay: {
            delay: 4500,
            disableOnInteraction: false,
          },
        });
        </script>

        {{-- ////BG-MENU//// --}}
        {{-- <script src="{{asset('/assets/js/burger.js')}}" defer></script> --}}
    </body>
</html>
