<?php
/**  @var $tours \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <x-hero />

    <div class="container mx-auto flex flex-wrap py-4">
        <!-- Tours section -->
        <section class="w-full md:w-2/3 flex flex-col px-3 items-center">
            <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Odporúčané zájazdy</h2>
            <div class="mb-5 mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none grid-cols-3">

                @foreach($tours as $tour)
                    <x-tour-item :tour="$tour"></x-tour-item>
                @endforeach
                
            </div>
            {{$tours->onEachSide(1)->links()}}
        </section>

        <x-sidebar />

    </div>
</x-app-layout>
