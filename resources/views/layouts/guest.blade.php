<?php
/**  @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>

    <div class="container justify-center mx-auto flex flex-wrap py-4">
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        {{ $slot }}

    </aside>


    </div>
</x-app-layout>
