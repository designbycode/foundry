<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->

    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    @livewireStyles
</head>
<body class="antialiased h-full ">
<x-app::navigation/>
<main id="main">
    {{ $slot }}
</main>

@livewireScripts
</body>
</html>
