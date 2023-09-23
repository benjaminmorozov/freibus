<?php
/**  @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <x-hero />

    <x-announcement />

    <div class="container mx-auto flex flex-wrap py-4">
        <!-- Tours Section -->
        <section class="w-full md:w-2/3 flex flex-col px-3">
            <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Odporúčané zájazdy</h2>
            <div class="items-center">

                @foreach($tours as $tour)
                    <x-tour-item :tour="$tour"></x-tour-item>
                @endforeach


                <a href="/tours" class="w-full bg-primary text-white font-bold text-sm uppercase rounded hover:bg-secondary flex items-center justify-center px-2 py-3">
                Viac
                </a>
            </div>
        </section>
        <section class="w-full md:w-1/3 flex flex-col px-3">
            <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Aktuality a akcie</h2>
            <div class="items-center">
                @foreach($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                @endforeach


                <a href="/posts" class="w-full bg-primary text-white font-bold text-sm uppercase rounded hover:bg-secondary flex items-center justify-center px-2 py-3">
                Viac
                </a>
            </div>
        </section>

    </div>
</x-app-layout>
