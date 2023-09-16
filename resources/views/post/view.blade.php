<x-app-layout>
<div class="container mx-auto flex flex-wrap py-4">
        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="{{$post->getThumbnail()}}" style="width:100%; max-height:450px; object-fit: cover; overflow: hidden;">
                </a>
                <div class="bg-white flex flex-col justify-start p-6 items-start">
                    @foreach($post->categories as $category)
                        <span style="background-color: {{$category->colour}}" class="flex rounded-full text-white uppercase px-2 py-1 text-xs font-bold mr-3">{{$category->title}}</span>
                    @endforeach
                    <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</h1>
                    <p href="#" class="text-sm pb-8">
                        <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, publikované {{$post->getFormattedDate()}}
                    </p>
                    <div>{!! $post->body !!}</div>
                </div>
            </article>

            <div class="w-full flex pt-6">
                <div class="w-1/2">
                    @if($prev)
                    <a href="{{route('view', $prev)}}" class="block w-full bg-white shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
                        <p class="pt-2">{{\Illuminate\Support\Str::words($prev->title, 5)}}</p>
                    </a>
                    @endif
                </div>
                <div class="w-1/2">
                    @if($next)
                    <a href="{{route('view', $next)}}" class="block w-full bg-white shadow hover:shadow-md text-right p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
                        <p class="pt-2">{{\Illuminate\Support\Str::words($next->title, 5)}}</p>
                    </a>
                    @endif
                </div>
            </div>

        </section>

    <x-sidebar />

</div>
</x-app-layout>
