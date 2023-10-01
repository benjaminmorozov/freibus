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
            <div class="mx-auto mt-6 max-w-7xl grid grid-auto-rows grid-flow-col gap-4 gap-x-8 px-8 pb-2 max-h-96">
                    @foreach($tour->images as $image)
                        @if($loop->index % 3 == 0 || $loop->index == 0)
                            <div class="aspect-h-4 aspect-w-3 block overflow-hidden rounded-lg lg:block mb-5 row-span-2">
                                <img src="/storage/{{$image}}" class="h-full w-full object-cover object-center">
                            </div>
                        @else
                            @if(count($tour->images) == 2)
                                <div class="aspect-h-4 aspect-w-3 block overflow-hidden rounded-lg lg:block mb-5 col-span-1 row-span-2">
                                    <img src="/storage/{{$image}}" class="h-full w-full object-cover object-center">
                                </div>
                            @else
                                <div class="aspect-h-4 aspect-w-3 block overflow-hidden rounded-lg lg:block mb-5 col-span-1">
                                    <img src="/storage/{{$image}}" class="h-full w-full object-cover object-center">
                                </div>
                            @endif
                        @endif
                    @endforeach
            </div>
            
    
            <!-- Product info -->
            <div class="mx-auto max-w-2xl px-4 pb-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$tour->title}}</h1>
                </div>
    
                <!-- Options -->
                <div class="lg:row-span-3">
                    <div class="relative">
                        <span class="pl-6 text-sm text-gray-600">Dospelí</span>
                    	<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center">
                    	    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    		    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                    		</svg>
                        </div>
                    </div>
                    <p class="text-3xl tracking-tight text-gray-900 my-2">{{$tour->priceadults}}€ <span class="text-sm text-gray-600">na osobu</span></p>
                    <div class="relative">
                        <span class="pl-6 text-sm text-gray-600">Študenti</span>
                    	<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center">
                    	    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    		</svg>
                        </div>
                    </div>
                    <p class="text-3xl tracking-tight text-gray-900 my-2">{{$tour->pricestudents}}€ <span class="text-sm text-gray-600">na osobu</span></p>
                    <div class="relative">
                        <span class="pl-6 text-sm text-gray-600">Deti</span>
                    	<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center">
                    	    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.37c-2.032 0-4.034.125-6 .37m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.17c0 .62-.504 1.124-1.125 1.124H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265zm-3 0a.375.375 0 11-.53 0L9 2.845l.265.265zm6 0a.375.375 0 11-.53 0L15 2.845l.265.265z" />
                    		</svg>
                        </div>
                    </div>
                    <p class="text-3xl tracking-tight text-gray-900 my-2">{{$tour->pricechildren}}€ <span class="text-sm text-gray-600">na osobu</span></p>
    
                    <form class="mt-5" method="GET" action="{{ '/tours/'. $tour->slug .'/order' }}">
                    @csrf
                        <!-- Places -->
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
        					</div>
                            <h3 class="pl-6 text-sm font-medium text-gray-900">Miesta</h3>
                        </div>
                        <div class="my-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                @foreach(explode(',', $tour->places) as $place)
                                    <li class="text-gray-400"><span class="text-gray-600">{{$place}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
        					</div>
                            <h3 class="pl-6 text-sm font-medium text-gray-900">Dátum zájazdu</h3>
                        </div>
                        <div class="my-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <li class="text-gray-400"><time datetime="2020-03-16" class="text-gray-500 text-sm pr-5">{{$tour->getFormattedDate()}}</time></li>
                            </ul>
                        </div>
                        <button type="submit" class="mt-5 flex w-full items-center justify-center rounded-md border border-transparent bg-primary hover:bg-primary px-8 py-3 text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Zarezervovať</button>
                    </form>
                    <span class="text-xs text-gray-600">Pokračovaním súhlasíte so <a class="text-primary hover:text-primary" href="/page/termsconditions">Všeobecnými zmlúvnymi podmienkami</a></span>
                </div>
    
                <div class="lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pr-8">
                    <!-- Description and details -->
                    <div class="my-6">
                        <article class="text-gray-900 prose max-w-none leading-normal">{!! $tour->body !!}</article>
                    </div>
                </div>
                <div class="lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pr-8">
                    <x-tour-map :tour='$tour' />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdn.tailwindcss.com?plugins=typography"></script>