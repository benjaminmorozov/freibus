<x-app-layout>
    {{$tour->id}}
    <div class="container justify-center mx-auto flex flex-wrap py-4">
        <div class="w-full justify-center bg-white rounded-lg shadow dark:border dark:bg-gray-800 dark:border-gray-700 flex flex-row">
            <div class="w-full p-6 space-y-4 md:space-y-6 sm:p-8">
				<div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            		<div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
						<h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        		    		Objednávka - {{ $tour->title }}
        				</h1>
            		</div>
					<div class="col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
						<form method="post" action="{{ '/tours/'. $tour->slug .'/order' }}" class="mt-6 space-y-6">
        				@csrf
        					<div>
        						<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meno</label>
        						<input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Adam Hruška" required="">
        					</div>
							<div>
        						<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        						<input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
        					</div>
							<div>
        						<label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresa</label>
        						<input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Úžasná 10" required="">
        					</div>
							<div>
        						<label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mesto</label>
        						<input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Poprad" required="">
        					</div>
							<div>
        						<label for="psc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PSČ</label>
        						<input type="number" name="psc" id="psc" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="05801" required="">
        					</div>
        					<button type="submit" class="w-full bg-primary text-white font-bold text-sm uppercase rounded hover:bg-secondary flex items-center justify-center px-2 py-3 mt-4">Uložiť</button>
        				</form>
            		</div>
            		<div class="row-span-2">
                    	<div class="space-y-6">
                        	<p class="text-base text-gray-900">{!! $tour->shortBody() !!}</p>
                    	</div>
            		</div>
        		</div>
        	</div>
        </div>
    </div>
</x-app-layout>