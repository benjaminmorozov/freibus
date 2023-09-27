<?php
/**  @var $tours \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <x-hero />

    <div class="container mx-auto py-4">
        <div class="flex flex-wrap">
            <!-- Tours section -->
            <section class="w-full md:w-2/3 flex flex-col px-3">
                <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Odporúčané zájazdy</h2>
                <div class="mb-5 mx-auto grid max-w-2xl gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none grid-cols-3">

                    @foreach($tours as $tour)
                        <x-tour-item :tour="$tour"></x-tour-item>
                    @endforeach
                
                </div>

                <div class="flex justify-center">
                    {{$tours->onEachSide(1)->links()}}
                </div>

            </section>

            <x-sidebar />

        </div>
    </div>
</x-app-layout>
