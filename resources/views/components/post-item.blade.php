<article class="flex flex-col shadow mb-4">
    <!-- Article Image -->
    <a href="{{route('view', $post)}}" class="hover:opacity-75">
        <img src="{{$post->getThumbnail()}}" style="width:100%; max-height:200px; object-fit: cover; overflow: hidden;">
    </a>
    <div class="bg-white flex flex-col justify-start p-6 items-start">
        <a href="{{route('view', $post)}}" class="text-3xl font-bold hover:text-gray-700 pb-3">{{$post->title}}</a>
        <p href="#" class="text-sm pb-2">
            <!-- <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, we'll keep usernames as an internal security measure publikované -->{{$post->getFormattedDate()}}
        </p>
        <a href="{{route('view', $post)}}" class="pb-2">{{$post->shortBody()}}</a>
        <a href="{{route('view', $post)}}" class="uppercase text-gray-800 hover:text-black">Prečítať <i class="fas fa-arrow-right"></i></a>
    </div>
</article>
