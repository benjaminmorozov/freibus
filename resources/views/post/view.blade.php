<x-app-layout>
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb" class="mb-5">
                <ol role="list" class="mx-auto flex items-center sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="flex items-center gap-x-4 text-xs">
    		            <time datetime="2020-03-16" class="text-gray-500">{{$post->getFormattedDate()}}</time>
    	            </div>
                </ol>
            </nav>

            <div class="mx-auto sm:px-6 max-w-7xl gap-4 lg:gap-x-8 lg:px-8 pb-8">
                <div class="overflow-hidden rounded-lg">
    			    <img src="{{$post->getThumbnail()}}" alt="Two each of gray, white, and black shirts laying flat." class="object-cover h-96 w-full overflow-hidden">
    	        </div>
            </div>

            <!-- Product info -->
            <div class="mx-auto max-w-2xl px-4 pb-16 sm:px-6 lg:max-w-7xl lg:gap-x-8 lg:px-8 lg:pb-6">
                <div class="lg:col-span-2 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$post->title}}</h1>
                </div>

                <div class="lg:col-span-2 lg:col-start-1">
                    <!-- Description and details -->
                    <div>
                        <div class="my-6">
                            <article class="text-gray-900 prose max-w-none leading-normal">{!! $post->body !!}</article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdn.tailwindcss.com?plugins=typography"></script>