<?php
use App\Models\Carousel;
use App\Models\Social;
use App\Models\Setting;
$carousels = $carousels = Carousel::all()->sortBy('order');
?>
<style>
.bg-primary {
    background-color:{{Setting::where('name','accentColour')->get()->value('value')}};
}
.bg-secondary {
    background-color:{{Setting::where('name','secondaryColour')->get()->value('value')}};
}
.hover\:bg-secondary:hover {
    background-color:{{Setting::where('name','secondaryColour')->get()->value('value')}};
}
.text-primary {
    color:{{Setting::where('name','accentColour')->get()->value('value')}};
}
.hover\:text-primary:hover {
    color:{{Setting::where('name','secondaryColour')->get()->value('value')}};
}
</style>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freibus base</title>
    <meta name="author" content="">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-primary shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    @if(Auth::check())
                    @if(Auth::user()->hasRole('admin'))
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/admin">Dashboard</a></li>
                    @endif
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/profile">Profil</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/logout">Odhlásiť sa</a></li>
                    @else
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/login">Prihlásiť sa</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="/register">Zaregistrovať sa</a></li>
                    @endif
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-white pr-6">
                @if ($facebook = Social::where('name','facebook')->get()->value('url'))
                <a class="" href="{{$facebook}}">
                    <i class="fab fa-facebook"></i>
                </a>
                @endif
                @if ($instagram = Social::where('name','instagram')->get()->value('url'))
                <a class="pl-6" href="{{$instagram}}">
                    <i class="fab fa-instagram"></i>
                </a>
                @endif
                @if ($twitter = Social::where('name','twitter')->get()->value('url'))
                <a class="pl-6" href="{{$twitter}}">
                    <i class="fab fa-twitter"></i>
                </a>
                @endif
                @if ($linkedin = Social::where('name','linkedin')->get()->value('url'))
                <a class="pl-6" href="{{$linkedin}}">
                    <i class="fab fa-linkedin"></i>
                </a>
                @endif
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-8">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="/">
                <img src="{{ asset('/images/logo.svg') }}" style="text-align:left;width:100%;max-width:260px;max-height:260px;" data-cycle-desc="Cestovná kancelária Freibus SLOVAKIA Tour, s r.o." alt="Cestovná kancelária Freibus SLOVAKIA Tour, s r.o.">
                <!-- {{config('app.name');}} -->
            </a>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="/posts" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Aktuality a akcie</a>
                <a href="/tours" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Cestovné destinácie</a>
                <a href="/zbernydvor" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Zberný dvor</a>
                <a href="/reviews" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Hodnotenia a recenzie</a>
                <a href="/contact" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Kontakt</a>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <div class="relative" style="justify-content: space-between; display: flex;">
        @foreach($carousels as $carousel)
        <x-carousel-item :carousel="$carousel"></x-carousel-item>
        @endforeach
    </div>

    <footer class="w-full border-t bg-white">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="/about" class="uppercase px-3">O nás</a>
                <a href="/privacypolicy" class="uppercase px-3">Ochrana osobných údajov</a>
                <a href="/termsconditions" class="uppercase px-3">Všeobecné zmluvné podmienky</a>
                <a href="/contact" class="uppercase px-3">Kontakt</a>
            </div>
            <div class="uppercase pb-6">with <3 stvorka@ssosta 2023</div>
        </div>
    </footer>

    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>
</html>