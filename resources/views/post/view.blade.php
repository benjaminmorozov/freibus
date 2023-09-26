<x-app-layout>
<div class="container mx-auto flex flex-wrap py-4">
        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow">
                <!-- Article Image -->
                <a>
                    <img src="{{$post->getThumbnail()}}" class="overflow-hidden object-cover w-full max-h-96">
                </a>
                <div class="bg-white flex flex-col justify-start p-6 items-start">
                    <h1 class="text-3xl font-bold pb-3">{{$post->title}}</h1>
                    <p class="text-sm pb-2">
                        <!-- <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, we'll keep usernames as an internal security measure publikované -->{{$post->getFormattedDate()}}
                    </p>
                    <div>{!! $post->body !!}</div>
                </div>
            </article>

            <div class="w-full flex pt-6">
                <div class="w-1/2">
                    @if($prev)
                    <a href="{{route('view', $prev)}}" class="block w-full bg-white shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-primary font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Predošlý</p>
                        <p class="pt-2">{{\Illuminate\Support\Str::words($prev->title, 5)}}</p>
                    </a>
                    @endif
                </div>
                <div class="w-1/2">
                    @if($next)
                    <a href="{{route('view', $next)}}" class="block w-full bg-white shadow hover:shadow-md text-right p-6">
                        <p class="text-lg text-primary font-bold flex items-center justify-end">Ďalší <i class="fas fa-arrow-right pl-1"></i></p>
                        <p class="pt-2">{{\Illuminate\Support\Str::words($next->title, 5)}}</p>
                    </a>
                    @endif
                </div>
            </div>

        </section>

    <x-sidebar />

</div>
</x-app-layout>
