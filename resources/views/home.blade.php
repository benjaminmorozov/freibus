<?php
/**  @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @foreach($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach


        <!-- pagination -->
        {{$posts->onEachSide(1)->links()}}

    </section>

    <x-sidebar />

    <x-slot:carouselview>
        @foreach($carousels as $carousel)
                <x-carousel-item :carousel="$carousel"></x-carousel-item>
            @endforeach
    </x-slot>

</x-app-layout>
