<?php
/**  @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <div class="container mx-auto py-4">
        <div class="flex flex-wrap">
            <!-- Posts section -->
            <section class="w-full md:w-2/3 flex flex-col px-3">
                <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Aktuality a akcie</h2>

                @foreach($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                @endforeach

                <div class="flex justify-center">
                    {{$posts->onEachSide(1)->links()}}
                </div>

            </section>

            <x-sidebar />

        </div>
    </div>
</x-app-layout>
