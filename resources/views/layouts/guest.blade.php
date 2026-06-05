<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') ?? 'Laravel' }}</title>

    <!-- Google/Bunny Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet"
          href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

    <!-- Assets -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="antialiased bg-slate-100 text-slate-900 font-sans">
    <main class="min-h-screen flex items-center justify-center px-4 py-8">
        <section class="w-full max-w-md">
            <div class="flex justify-center mb-6">
                <a href="{{ url('/') }}">
                    <x-application-logo class="h-16 w-16 text-slate-500 fill-current" />
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                {{ $slot }}
            </div>
        </section>
    </main>
</body>
</html>
