<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME', 'Laravel') }}</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans  antialiased   bg-bkg text-textColor" style="cursor: auto;">
    {{-- <svg class="pointer-events-none fixed isolate z-50 opacity-70 mix-blend-soft-light" width="100%" height="100%">
        <filter id="noise">
            <feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="4" stitchTiles="stitch"></feTurbulence>
        </filter>
        <rect width="100%" height="100%" filter="url(#noise)"></rect>
    </svg> --}}
    <div class="min-h-screen ">


        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="shadow mb-3 ">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="rounded">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
