<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Andong') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Remix icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="relative min-h-screen bg-gray-100 lg:pl-[300px]">
        @include('layouts.navigation')

        <div>
            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-white shadow mb-1">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif
            <!-- Page Content -->
            <main class="fixed overflow-auto w-screen lg:w-[calc(100%-300px)] lg:h-[calc(100%-145px)]">
                {{ $slot }}
            </main>
        </div>
    </div>
    @livewireScripts
</body>

</html>
