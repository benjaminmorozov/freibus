<x-app-layout>
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="mx-auto flex items-center sm:px-6 lg:max-w-7xl lg:px-8">
                    @foreach($tour->categories as $category)
                        <a class="text-sm relative z-10 rounded-full bg-gray-50 px-2 py-1 font-medium text-gray-600 hover:bg-gray-100">{{$category->name}}</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300 mx-2">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    @endforeach
    
                    <li class="text-sm">
                        <a aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{$tour->title}}</a>
                    </li>
                </ol>
            </nav>
    
            <!-- Image gallery -->
            <div class="mx-auto mt-6 sm:px-6 max-w-7xl grid grid-rows-2 grid-flow-col gap-4 lg:gap-x-8 lg:px-8">
                    @foreach($tour->images as $image)
                        @if($loop->index % 3 == 0 || $loop->index == 0)
                            <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block mb-5 row-span-2">
                                <img src="/storage/{{$image}}" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
                            </div>
                        @else
                            <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block mb-5 col-span-1">
                                <img src="/storage/{{$image}}" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
                            </div>
                        @endif
                    @endforeach
            </div>
            
    
            <!-- Product info -->
            <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$tour->title}}</h1>
                </div>
    
                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <span class="text-sm text-gray-600">Dospelí</span>
                    <p class="text-3xl tracking-tight text-gray-900">{{$tour->priceadults}}€ <span class="text-sm text-gray-600">na osobu</span></p>
                    <span class="text-sm text-gray-600">Študenti</span>
                    <p class="text-3xl tracking-tight text-gray-900">{{$tour->pricestudents}}€ <span class="text-sm text-gray-600">na osobu</span></p>
                    <span class="text-sm text-gray-600">Deti</span>
                    <p class="text-3xl tracking-tight text-gray-900">{{$tour->pricechildren}}€ <span class="text-sm text-gray-600">na osobu</span></p>
    
                    <!-- Reviews -->
                    <div class="mt-6">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <a href="#" class="ml-3 text-sm font-medium text-primary hover:text-primary">117 reviews</a>
                        </div>
                    </div>
    
                    <form class="mt-10" method="GET" action="{{ '/tours/'. $tour->slug .'/order' }}">
                    @csrf
                        <!-- Places -->
                        <h3 class="text-sm font-medium text-gray-900">Miesta</h3>
                        <div class="my-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                @foreach(explode(',', $tour->places) as $place)
                                    <li class="text-gray-400"><span class="text-gray-600">{{$place}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="submit" class="mt-5 flex w-full items-center justify-center rounded-md border border-transparent bg-primary hover:bg-primary px-8 py-3 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Zarezervovať</button>
                    </form>
                    <span class="text-xs text-gray-600">Pokračovaním súhlasíte so <a class="text-primary hover:text-primary" href="/page/termsconditions">Všeobecnými zmlúvnymi podmienkami</a></span>
                </div>
    
                <div class="lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pr-8">
                    <!-- Description and details -->
                    <div class="space-y-6">
                        <p class="text-base text-gray-900">{!! $tour->body !!}</p>
                    </div>
                </div>
                <div class="lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pr-8">
                    <x-tourmap :tour='$tour' />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>