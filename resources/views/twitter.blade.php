<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="h-full bg-black font-sans text-white antialiased">
    <div class="container mx-auto flex h-full">
        <div class="flex w-2/6 flex-col items-start pt-4">
            
            <x-menu.item route="#" title="" icon="twitter" gap="0"/>
            <x-menu.item route="/timeline" title="Home" icon="home" gap="4" />
            <x-menu.item route="/explore" title="Explore" icon="explore" gap="4"/>


        </div>
        <div class="w-4/6 border-x border-white border-opacity-25">center</div>
        <div class="w-2/6">right</div>
    </div>


    @livewireScripts
</body>

</html>
