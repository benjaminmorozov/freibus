<?php
use App\Models\Carousel;
use App\Models\Social;
use App\Models\Setting;
$carousels = Carousel::all()->sortBy('order');
?>
<style>
.bg-primary {
    background-color:{{Setting::where('name','accentColour')->get()->value('value')}};
}
.hover\:bg-primary:hover {
    background-color:{{Setting::where('name','modifierColour')->get()->value('value')}};
}
.bg-secondary {
    background-color:{{Setting::where('name','secondaryColour')->get()->value('value')}};
}
.bg-secondaryModifier {
    background-color:{{Setting::where('name','secondaryModifierColour')->get()->value('value')}};
}
.hover\:bg-secondary:hover {
    background-color:{{Setting::where('name','secondaryModifierColour')->get()->value('value')}};
}
.text-primary {
    color:{{Setting::where('name','accentColour')->get()->value('value')}};
}
.hover\:text-primary:hover {
    color:{{Setting::where('name','accentColour')->get()->value('value')}};
}
.hover\:border-primary:hover {
    border-color: {{Setting::where('name','accentColour')->get()->value('value')}};
}
.hover\:border-modifier:hover {
    border-color: {{Setting::where('name','modifierColour')->get()->value('value')}};
}
.text-secondary {
    color:{{Setting::where('name','secondaryColour')->get()->value('value')}};
}
.hover\:text-primary:hover {
    color:{{Setting::where('name','modifierColour')->get()->value('value')}};
}
.border-primary {
    --tw-border-opacity: 1;
    border-color: ({{Setting::where('name','secondaryColour')->get()->value('value')}} / var(--tw-border-opacity));
}
</style>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freibus.sk</title>
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
	<div class="bg-white">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <div>
                    <a href="/">
                        <img src="{{ asset('/images/logo.svg') }}" class="h-16 mr-3" data-cycle-desc="Cestovná kancelária Freibus SLOVAKIA Tour, s r.o." alt="Cestovná kancelária Freibus SLOVAKIA Tour, s r.o.">
                        <!-- {{config('app.name');}} -->
                    </a>
                </div>

                <div class="hidden sm:flex sm:items-center">
                    <a href="/tours" class="text-gray-800 text-sm font-semibold hover:text-primary mr-8">Cestovné destinácie</a>
                    <a href="/posts" class="text-gray-800 text-sm font-semibold hover:text-primary mr-8">Aktuality a akcie</a>
                    <a href="/zbernydvor" class="text-gray-800 text-sm font-semibold hover:text-primary mr-8">Zberný dvor</a>
                    <a href="/reviews" class="text-gray-800 text-sm font-semibold hover:text-primary mr-8">Hodnotenia a recenzie</a>
                    <a href="/contact" class="text-gray-800 text-sm font-semibold hover:text-primary">Kontakt</a>
                </div>

                <div class="hidden sm:flex sm:items-center bg-primary
                @if(Auth::check())
                pl-5
                pr-2
                @else
                pl-2
                pr-5
                @endif
                py-2 rounded-lg">
                    @if(Auth::check())
                        @if(Auth::user()->hasRole('admin'))
                            <a href="/admin" class="text-white text-sm font-semibold hover:text-primary mr-4">Dashboard</a>
                        @endif
                        <a href="/profile" class="text-white text-sm font-semibold hover:text-primary mr-4">Profil</a>
                        <a href="/logout" class="border px-4 py-2 rounded-lg text-white text-sm font-semibold hover:border-modifier hover:bg-primary">Odhlásiť sa</a>
                    @else
                        <a href="/login" class="border px-4 py-2 rounded-lg text-white text-sm font-semibold mr-4 hover:border-modifier hover:bg-primary">Prihlásiť sa</a>
                        <a href="/register" class="text-white text-sm font-semibold hover:text-primary">Zaregistrovať sa</a>
                    @endif
                </div>
            </div> 
        </div>
    </div>
    

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
            <div class="flex items-center text-lg no-underline text-black">
                @if ($facebook = Social::where('name','facebook')->get()->value('url'))
                <a class="" href="{{$facebook}}">
                    Nájdete nás aj na <i class="fab fa-facebook"></i>
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
            <div class="uppercase py-6">with <3 stvorka@ssosta 2023</div>
        </div>
    </footer>

    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>
</html>