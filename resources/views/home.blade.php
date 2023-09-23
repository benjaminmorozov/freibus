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
                    <article class="flex flex-col shadow mb-4">
                        <!-- Article Image -->
                        <a href="{{route('view', $post)}}" class="hover:opacity-75">
                            <img src="{{$post->getThumbnail()}}" style="width:100%; max-height:200px; object-fit: cover; overflow: hidden;">
                        </a>
                        <div class="bg-white flex flex-col justify-start p-6 items-start">

                            <a href="{{route('view', $post)}}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
                            <p href="#" class="text-sm pb-3">
                                <!-- <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, we'll keep usernames as an internal security measure publikované -->{{$post->getFormattedDate()}}
                            </p>
                            <a href="{{route('view', $post)}}" class="pb-6">{{$post->shortBody()}}</a>
                            <a href="{{route('view', $post)}}" class="uppercase text-gray-800 hover:text-black">Prečítať <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                @endforeach


                <a href="/posts" class="w-full bg-primary text-white font-bold text-sm uppercase rounded hover:bg-secondary flex items-center justify-center px-2 py-3">
                Viac
                </a>
            </div>
        </section>

    </div>
</x-app-layout>
