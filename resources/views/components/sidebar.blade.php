<?php
use App\Models\TextWidget;
$widgets = TextWidget::query()->where('active', '=', 1)->orderBy('order')->get();
?>
<!-- Sidebar Section -->
<aside class="w-full
@if(Request::is('/') ? '' : url('/'))
md:w-1/3
px-3
@endif
flex flex-col items-center">

    @foreach($widgets as $widget)
        <div class="w-full bg-white flex flex-col mb-4 mt-2 rounded-lg">
            <h2 class="text-lg sm:text-xl font-bold text-primary uppercase pb-1">{{ $widget->title }}</h2>
            <p class="mt-3 line-clamp-3 text-sm leading-6 text-gray-600">{!! $widget->body !!}</p>
            <a href="{{ $widget->link }}" class="mt-4 block w-full rounded-md bg-primary px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Spoznajte nás</a>
        </div>
    @endforeach

</aside>
