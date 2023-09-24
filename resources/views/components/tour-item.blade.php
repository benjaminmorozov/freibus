<article class="flex flex-col shadow mb-4 w-full">
            <!-- Article Image -->
            <a href="{{route('tourview', $tour)}}" class="hover:opacity-75">
                <img src="{{$tour->getThumbnail()}}" style="width:100%; max-height:200px; object-fit: cover; overflow: hidden;">
            </a>
            <div class="bg-white flex flex-col justify-start p-6 items-start">
                @foreach($tour->categories as $category)
                    <span style="background-color: {{$category->colour}}" class="flex rounded-full text-white uppercase px-2 py-1 text-xs font-bold mr-3">{{$category->name}}</span>
                @endforeach

                <a href="{{route('tourview', $tour)}}" class="text-3xl font-bold hover:text-gray-700 pb-3">{{$tour->title}}</a>
                <p href="#" class="text-sm pb-2">
                    <!-- <a href="#" class="font-semibold hover:text-gray-800"></a>, we'll keep usernames as an internal security measure publikované -->{{$tour->getFormattedDate()}}
                </p>
                <a href="{{route('tourview', $tour)}}" class="pb-2 text-sm">{{$tour->shortBody()}}</a>
                <a href="{{route('tourview', $tour)}}" class="uppercase text-gray-800 hover:text-black">Zobraziť viac <i class="fas fa-arrow-right"></i></a>
            </div>
</article>
