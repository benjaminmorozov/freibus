<article class="flex flex-col justify-between mb-4 w-full">
	<div class="group relative">
		<h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
			<span class="absolute inset-0"></span>
			{{$review->name}}
		</h3>
		<p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{$review->message}}</p>
	</div>
</article>