<x-app-layout>
    <div class="pt-6">
        <!-- Product info -->
        <div class="mx-auto max-w-2xl px-4 pb-16 sm:px-6 lg:max-w-7xl lg:gap-x-8 lg:px-8 lg:pb-6">
            <div class="lg:col-span-2 lg:pr-8">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $page->title }}</h1>
            </div>
            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:pt-6">
                <!-- Description and details -->
                <div>
                    <div class="my-6">
                        <article class="text-gray-900 prose max-w-none leading-normal">{!! $page->body !!}</article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdn.tailwindcss.com?plugins=typography"></script>