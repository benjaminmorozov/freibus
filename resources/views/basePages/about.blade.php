<x-app-layout>
    <div class="bg-white">
        <div class="pt-6">
            <div class="mx-auto sm:px-6 max-w-7xl gap-4 lg:gap-x-8 lg:px-8 pb-8">
                <div class="overflow-hidden rounded-lg">
    			    <img src="{{ asset('/images/logo.svg') }}" alt="Two each of gray, white, and black shirts laying flat." class="object-cover h-96 w-full overflow-hidden">
    	        </div>
            </div>

            <!-- Product info -->
            <div class="mx-auto max-w-2xl px-4 pb-16 sm:px-6 lg:max-w-7xl lg:gap-x-8 lg:px-8 lg:pb-6">
                <div class="lg:col-span-2 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">O nás</h1>
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <div class="space-y-6">
                            <p class="text-base text-gray-900">{!! App\Models\BasePage::where('name','aboutText')->get()->value('value') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>