<!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

    <div class="w-full bg-white shadow flex flex-col mb-4 p-6">
        <p class="text-xl font-semibold pb-5">{{App\Models\TextWidget::getTitle('about-us-sidebar')}}</p>
        {!! App\Models\TextWidget::getContent('about-us-sidebar') !!}
        <a href="{{App\Models\TextWidget::getLink('about-us-sidebar')}}" class="w-full bg-indigo-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
            Spoznajte nás
        </a>
    </div>

</aside>
