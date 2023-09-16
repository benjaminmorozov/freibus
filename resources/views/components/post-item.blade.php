<article class="flex flex-col shadow mb-4">
            <!-- Article Image -->
            <a href="{{route('view', $post)}}" class="hover:opacity-75">
                <img src="{{$post->getThumbnail()}}" style="width:100%; max-height:200px; object-fit: cover; overflow: hidden;">
            </a>
            <div class="bg-white flex flex-col justify-start p-6 items-start">
                @foreach($post->categories as $category)
                    <span style="background-color: {{$category->colour}}" class="flex rounded-full text-white uppercase px-2 py-1 text-xs font-bold mr-3">{{$category->title}}</span>
                @endforeach

                <a href="{{route('view', $post)}}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
                <p href="#" class="text-sm pb-3">
                    <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, publikované {{$post->getFormattedDate()}}
                </p>
                <a href="{{route('view', $post)}}" class="pb-6">{{$post->shortBody()}}</a>
                <a href="{{route('view', $post)}}" class="uppercase text-gray-800 hover:text-black">Prečítať <i class="fas fa-arrow-right"></i></a>
            </div>
</article>
