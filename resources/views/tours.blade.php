<?php
/**  @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <x-hero />

    <x-announcement />



    <div class="container mx-auto flex flex-wrap py-4">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            @foreach($tours as $tour)
                <x-tour-item :tour="$tour"></x-tour-item>
            @endforeach


            <!-- pagination -->
            {{$tours->onEachSide(1)->links()}}

        </section>

        <x-sidebar />

    </div>
</x-app-layout>
