
<x-app-layout>
    <div class="container mx-auto py-4">
        <div class="flex flex-wrap">
            <!-- Posts section -->
            <section class="w-full md:w-2/3 flex flex-col px-3">
                <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1 mb-1">Recenzie</h2>

                @foreach($reviews as $review)
                    <x-review-item :post="$review"></x-review-item>
                @endforeach

            </section>

        </div>
    </div>
</x-app-layout>
