<?php
/**  @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <x-hero />

    <x-announcement />

    <div class="container mx-auto flex flex-wrap py-4">
        <!-- Tours section -->
        <section class="w-full md:w-2/3 flex flex-col px-3">
            <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Odporúčané zájazdy</h2>
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                @foreach($tours as $tour)
                    <x-tour-item :tour="$tour"></x-tour-item>
                @endforeach
                
            </div>
            <a href="/tours" class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent bg-secondary hover:bg-secondary px-6 py-3 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Viac
            </a>
        </section>
        
        <!-- Posts section -->
        <section class="w-full md:w-1/3 flex flex-col px-3">
            <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Aktuality a akcie</h2>
            <div class="items-center">

                @foreach($posts as $post)
                    <x-post-item-mini :post="$post"></x-post-item-mini>
                @endforeach

                <a href="/posts" class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent bg-primary hover:bg-primary px-6 py-3 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Viac
                </a>
            </div>
        </section>
    </div>

    <x-contact-hero />
</x-app-layout>
