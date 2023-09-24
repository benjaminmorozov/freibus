<?php
use App\Models\TextWidget;
$widgets = TextWidget::query()->where('active', '=', 1)->orderBy('order')->get();
?>
<!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

    @foreach($widgets as $widget)
        <div class="w-full bg-white shadow flex flex-col mb-4 p-6">
            <p class="text-xl font-semibold pb-5">{{ $widget->title }}</p>
            {!! $widget->body !!}
            <a href="{{ $widget->link }}" class="w-full bg-primary text-white font-bold text-sm uppercase rounded hover:bg-secondary flex items-center justify-center px-2 py-3 mt-4">
                Spoznajte nás
            </a>
        </div>
    @endforeach

</aside>
