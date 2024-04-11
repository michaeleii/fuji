<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Savoury</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="font-sans antialiased h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <x-menu />
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <x-mobile-menu />
        </nav>
        <main>
            <div class="mx-auto max-w-7xl pb-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>


</body>
</html>
