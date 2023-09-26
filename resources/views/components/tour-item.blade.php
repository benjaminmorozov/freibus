
  <article class="flex flex-col justify-between">
    <div class="overflow-hidden rounded-lg mb-5">
        <a href="{{route('tourview', $tour)}}">
            <img src="{{$tour->getThumbnail()}}" alt="Two each of gray, white, and black shirts laying flat." class="object-cover h-48 w-full overflow-hidden">
        </a>
    </div>
    <div class="flex items-center gap-x-4 text-xs">
      <time datetime="2020-03-16" class="text-gray-500">{{$tour->getFormattedDate()}}</time>
      @foreach($tour->categories as $category)
      <a href="{{route('tourview', $tour)}}" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{$category->name}}</a>
      @endforeach
    </div>
    <div class="group relative">
      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
        <a href="{{route('tourview', $tour)}}">
          <span class="absolute inset-0"></span>
          {{$tour->title}}
        </a>
      </h3>
      <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{$tour->shortBody()}}</p>
      <p class="mt-3">@foreach(explode(',', $tour->places) as $place)
                                <li class="text-gray-400"><span class="text-gray-600 text-sm">{{$place}}</span></li>
                            @endforeach</p>
    </div>
      <a href="{{route('tourview', $tour)}}" class="mt-5 block w-full rounded-md bg-primary px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Zobraziť viac</a>
  </article>
  <!-- More posts... -->