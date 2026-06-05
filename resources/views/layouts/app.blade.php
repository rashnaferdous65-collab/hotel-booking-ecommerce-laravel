<!DOCTYPE html>
<html lang="{{ app()->getLocale() ? str_replace('_', '-', app()->getLocale()) : 'en' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name') ?? 'Laravel' }}
    </title>

    {{-- Font Resources --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet"
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

    {{-- Assets --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="antialiased font-sans">

    <section class="min-h-screen bg-gray-100">

        {{-- Navigation --}}
        @include('layouts.navigation')

        {{-- Header Area --}}
        @isset($header)
            <header class="shadow bg-white">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        {{-- Main Content --}}
        <main>
            {{ $slot }}
        </main>

    </section>

</body>

</html>
