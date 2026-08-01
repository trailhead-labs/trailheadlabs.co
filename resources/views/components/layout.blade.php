@props([
    'title' => 'Trailhead Labs',
    'description' => 'Independent engineering for web, desktop and mobile. Client work and our own products, held to the same bar: software that ships and holds up.',
])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/svg+xml" href="{{ url()->version('/logo.svg') }}" />
    <x-analytics />
</head>
{{--
    The backdrop renders behind the chrome rather than inside main, so a
    page can light the room however it likes. Any state it reacts to
    is forwarded onto the body by the page as well.
--}}
<body {{ $attributes->class('flex min-h-svh flex-col bg-[#0c0d15] text-white antialiased select-none') }}>
    {{ $backdrop ?? '' }}

    <a
        href="#main"
        tabindex="0"
        class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:rounded-lg focus:bg-[#30347f] focus:px-4 focus:py-2 focus:text-sm focus:font-medium focus:text-white"
    >
        Skip to content
    </a>

    <x-header />

    <main id="main" class="relative z-10 grid flex-1 px-8 pb-16">{{ $slot }}</main>

    <x-footer />
</body>
</html>
