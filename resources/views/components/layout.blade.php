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
    <link rel="icon" type="image/svg+xml" href="/logo.svg" />
    <x-analytics />
  </head>
  {{--
    The whole page is one Alpine root. The blob field sits outside main
    but reacts to what is on stage, so the state has to live on
    the element that covers both.
  --}}
  <body class="bg-[#0c0d15] text-white antialiased min-h-svh flex flex-col select-none"
        x-data="site"
        :class="open && 'work-open'"
        :data-focus="focus"
        @keydown.escape.window="open && hide()">

    <x-blob-field />

    <a href="#main" tabindex="0" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:bg-[#30347f] focus:text-white focus:text-sm focus:font-medium focus:px-4 focus:py-2 focus:rounded-lg">
      Skip to content
    </a>

    <x-header />

    <main id="main" class="relative z-10 flex-1 grid px-8 pb-16">
      {{ $slot }}
    </main>

    <x-footer />
  </body>
</html>
