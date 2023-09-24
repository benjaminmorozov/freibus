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


                <a href="/tours" class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent bg-primary hover:bg-secondary px-6 py-3 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Viac
                </a>
            </div>
        </section>
        <section class="w-full md:w-1/3 flex flex-col px-3">
            <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Aktuality a akcie</h2>
            <div class="items-center">
                @foreach($posts as $post)
                    <article class="grid grid-cols-3 gap-2 pb-2">
                        <!-- Article Image -->
                        <a href="{{route('view', $post)}}" class="hover:opacity-75 col-span-1">
                            <img src="{{$post->getThumbnail()}}" style="width:100%; max-height:150px; object-fit: cover; overflow: hidden;">
                        </a>
                        <div class="bg-white flex flex-col justify-start items-start col-span-2">

                            <a href="{{route('view', $post)}}"><h3 class="text-sm font-bold hover:text-gray-700">{{$post->title}}</h3></a>
                            <a href="{{route('view', $post)}}" class="text-sm">{{$post->shortBodyHome()}}</a>
                            <a href="{{route('view', $post)}}" class="uppercase text-gray-800 hover:text-black">Prečítať <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                @endforeach


                <a href="/posts" class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent bg-primary hover:bg-secondary px-6 py-3 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Viac
                </a>
            </div>
        </section>

    </div>

    <x-contact-hero />
</x-app-layout>
