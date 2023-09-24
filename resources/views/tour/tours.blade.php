<?php
/**  @var $tours \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <x-hero />

    <div class="container mx-auto flex flex-wrap py-4">
        <!-- Tours section -->
        <section class="w-full md:w-2/3 flex flex-col px-3">
            <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Odporúčané zájazdy</h2>
            <div class="items-center">
                @foreach($tours as $tour)
                    <x-tour-item :tour="$tour"></x-tour-item>
                @endforeach

                <!-- pagination -->
                {{$tours->onEachSide(1)->links()}}
            </div>
        </section>

        <x-sidebar />

    </div>
</x-app-layout>
