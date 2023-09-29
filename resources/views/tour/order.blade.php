<x-app-layout>
    <div class="container justify-center mx-auto flex flex-wrap py-4">
        <div class="w-full justify-center rounded-lg dark:border dark:bg-gray-800 dark:border-gray-700 flex flex-row">
            <div class="w-full p-6 space-y-4 md:space-y-6 sm:p-8">
				<div class="mx-auto max-w-2xl px-4 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8">
            		<div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
						<h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        		    		Objednávka - {{ $tour->title }}
        				</h1>
            		</div>
					<div class="col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
						<form method="post" action="{{ '/tours/'. $tour->slug .'/order' }}" class="mt-6 space-y-6">
        				@csrf
							<span class="text-sm text-gray-600">Pre pokračovanie vyplňte fakturačné údaje</span>
							<div class="grid gap-6 mb-6 md:grid-cols-2">
        						<div>
                        			<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meno a priezvisko</label>
									<div class="relative">
        								<input type="text" name="name" id="name" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Adam Hruška" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        			        	<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
          									</svg>
        							    </div>
									</div>
								</div>
								<div>
        							<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
									<div class="relative">
        								<input type="email" name="email" id="email" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            									<path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
          									</svg>
        								</div>
									</div>
								</div>
							</div>
							<div class="grid gap-6 mb-6 md:grid-cols-2">
								<div>
                        			<label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresa</label>
									<div class="relative">
        								<input type="text" name="address" id="address" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Úžasná 10" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
												<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
          									</svg>
        							    </div>
									</div>
								</div>
								<div>
                        			<label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mesto</label>
									<div class="relative">
        								<input type="text" name="city" id="city" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Poprad" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
          									</svg>
        							    </div>
									</div>
								</div>
								<div>
                        			<label for="psc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PSČ</label>
									<div class="relative">
        								<input type="number" name="psc" id="psc" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="05801" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
          									</svg>
        							    </div>
									</div>
								</div>
							</div>
							<div class="grid gap-6 mb-6 md:grid-cols-3">
								<div>
                        			<label for="adults" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dospelých</label>
									<div class="relative">
        								<input type="number" name="adults" id="adults" min="0" value="0" class="w-full pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
          									</svg>
        							    </div>
									</div>
								</div>
								<div>
                        			<label for="students" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Študentov</label>
									<div class="relative">
        								<input type="number" name="students" id="students" min="0" value="0" class="w-full pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
          									</svg>
        							    </div>
									</div>
								</div>
								<div>
                        			<label for="children" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detí</label>
									<div class="relative">
        								<input type="number" name="children" id="children" min="0" value="0" class="w-full pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.37c-2.032 0-4.034.125-6 .37m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.17c0 .62-.504 1.124-1.125 1.124H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265zm-3 0a.375.375 0 11-.53 0L9 2.845l.265.265zm6 0a.375.375 0 11-.53 0L15 2.845l.265.265z" />
          									</svg>
        							    </div>
									</div>
								</div>
							</div>
        					<button type="submit" class="mt-5 block w-full rounded-md bg-primary px-3 py-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Prejsť k platbe</button>
        				</form>
						<span class="text-xs text-gray-600">Pokračovaním súhlasíte so <a class="text-primary hover:text-primary" href="/page/termsconditions">Všeobecnými zmlúvnymi podmienkami</a></span>
            		</div>
            		<div class="row-span-2">
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
						        <p id="preview" class="text-3xl tracking-tight text-gray-900">0.00€<!-- will be filled by js --></p>
							</div>
							<script>
								var price = 0.00;
								var textinput = document.getElementById('adults');

								document.getElementById('adults').onchange = document.getElementById('adults').onkeydown = document.getElementById('adults').onkeyup = document.getElementById('students').onchange = document.getElementById('students').onkeydown = document.getElementById('students').onkeyup = document.getElementById('children').onchange = document.getElementById('children').onkeydown = document.getElementById('children').onkeyup = function() {
									change(this);
								}
								
								function change(element){
									element.value = Math.abs(element.value)
									if(element.value >= 100) {
										element.value = 100;
										return;
									}
								    document.getElementById('preview').innerHTML = document.getElementById('adults').value*{{$tour->priceadults}} + document.getElementById('students').value*{{$tour->pricestudents}} + document.getElementById('children').value*{{$tour->pricechildren}} + '.00€';
								}
							</script>
						</article>
                    	</div>
            		</div>
        		</div>
        	</div>
        </div>
    </div>
</x-app-layout>