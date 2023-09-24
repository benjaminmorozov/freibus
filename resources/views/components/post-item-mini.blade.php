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