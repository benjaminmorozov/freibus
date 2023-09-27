<article class="gap-2 pb-2">
    <ul class="-mx-4">
        <li class="flex items-center">
            <a href="{{route('view', $post)}}">
                <img class="w-20 h-10 object-cover ml-4 mr-2 rounded-lg" src="{{$post->getThumbnail()}}" alt="avatar">
            </a>
            <p>
                <a href="{{route('view', $post)}}" class="text-gray-700 font-bold mx-1 hover:underline" href="#">{{$post->title}}</a>
                <a href="{{route('view', $post)}}">
                    <span class="text-gray-700 text-sm font-light hover:text-gray-500">{{$post->getFormattedDate()}}</span>
                </a>
            </p>
        </li>
    </ul>
</article>