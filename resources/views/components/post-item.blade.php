<article class="flex flex-col justify-between mb-4">
	<div class="overflow-hidden rounded-lg mb-5">
		<a href="{{route('view', $post)}}">
			<img src="{{$post->getThumbnail()}}" alt="Post image." class="object-cover h-48 w-full overflow-hidden">
		</a>
	</div>
	<div class="flex items-center gap-x-4 text-xs">
		<time datetime="2020-03-16" class="text-gray-500">{{$post->getFormattedDate()}}</time>
	</div>
	<div class="group relative">
		<h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
			<a href="{{route('view', $post)}}">
				<span class="absolute inset-0"></span>
				{{$post->title}}
			</a>
		</h3>
		<p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{$post->shortBody()}}</p>
	</div>
	<a href="{{route('view', $post)}}" class="mt-5 block w-full rounded-md bg-primary px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Zobraziť viac</a>
</article>