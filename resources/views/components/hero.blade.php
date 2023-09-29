<section class="bg-white">
    <div class="grid max-w-screen-xl px-4 pt-12 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl hero-title">Špička v cestovaní</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">Osobná autobusová doprava, organizovanie zájazdov, výletov, ubytovania, leteniek, logistika spoločenských podujatí a omnoho viacej!</p>
            <form method="get" action="{{route('search')}}" class="my-auto">
                <div class="flex">
                    <div class="relative w-full">
                        <input name="q" value="{{request()->get('q')}}" type="search" id=location-search" autocomplete="off" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border-l-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Hľadať mesto alebo krajinu" required>
                        <button type="submit" class="absolute top-0 right-0 h-full p-2.5 text-sm font-medium text-white bg-secondary rounded-r-lg hover:bg-secondary">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{ asset('/images/bus.png') }}" style="user-drag: none;
    -webkit-user-drag: none;
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;" alt="mockup">
        </div>
    </div>
</section>
