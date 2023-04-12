@props(['route', 'icon', 'title' => null, 'gap' => null])

<a href="{{ $route }}"
    class="gap-{{ $gap }} flex w-auto items-center justify-start rounded-full p-3 hover:bg-white hover:bg-opacity-10">

    <x-dynamic-component :component="'icons.' . $icon" />

    <p class="text-xl">{{ $title }}</p>

</a>
