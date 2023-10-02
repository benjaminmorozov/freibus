<?php
use App\Models\Tour;
$tour = Tour::query()->where('tours.id', '=', $order->tour_id)->first();
?>
<x-app-layout>
    <div class="container justify-center mx-auto flex flex-wrap py-4">
        <div class="w-full justify-center rounded-lg dark:border dark:bg-gray-800 dark:border-gray-700 flex flex-row">
            <div class="w-full p-6 space-y-4 md:space-y-6 sm:p-8">
				<div class="mx-auto max-w-2xl px-4 pb-16 sm:px-6 lg:max-w-7xl lg:gap-x-8 lg:px-8">
            		<div class="">
						<h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white pb-2">
        		    		Fakúra - objednávka č. {{ $order->id }}
        				</h1>
                    	<div class="space-y-6">
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
								<p class="mt-3">
									@foreach(explode(',', $tour->places) as $place)
										<li class="text-gray-400"><span class="text-gray-600 text-sm">{{$place}}</span></li>
									@endforeach
								</p>
							</div>
							<div class="mt-5 lg:border-b lg:border-gray-200 pb-5">
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
							</div>
							<div class="mt-5">
								<span class="text-sm text-gray-600">Celková cena</span>
						        <p id="preview" class="text-3xl tracking-tight text-gray-900">{{ $order->price }}.00€<!-- will be filled by js --></p>
							</div>
							<div class="mt-5">
								<span class="text-sm text-gray-600">Prihlasovací kód na aplikáciu</span>
						        <p id="preview" class="text-3xl tracking-tight text-gray-900">{{ $order->login_id }}<!-- will be filled by js --></p>
							</div>
						</article>
                    	</div>
            		</div>
        		</div>
        	</div>
        </div>
    </div>
</x-app-layout>