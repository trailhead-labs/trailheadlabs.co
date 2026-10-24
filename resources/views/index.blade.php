<x-layout
    :title="$title ?? null"
    :description="$description ?? null"
    x-data="site"
    data-trailer-path="{{ route('trailer', absolute: false) }}"
    ::class="open && 'work-open'"
    ::data-focus="focus"
    @keydown.escape.window="open && ! $refs.trailer.open && hide()"
>
    <x-slot:backdrop>
        <x-blob-field />
    </x-slot:backdrop>

    {{--
        The trailer's own address unfurls as the game, so the card carries
        the end card of the trailer and the video itself, for anywhere
        that plays one inline. Every URL in it has to be absolute.
    --}}
    @isset($trailer)
        <x-slot:head>
            <meta property="og:type" content="video.other" />
            <meta property="og:site_name" content="Trailhead Labs" />
            <meta property="og:title" content="{{ $title }}" />
            <meta property="og:description" content="{{ $description }}" />
            <meta property="og:url" content="{{ route('trailer') }}" />
            <meta property="og:image" content="{{ url(url()->version('/work/grand-crank-auto-og.png')) }}" />
            <meta property="og:image:width" content="1200" />
            <meta property="og:image:height" content="630" />
            <meta property="og:image:alt" content="The Grand Crank Auto title card" />
            <meta property="og:video" content="{{ url(url()->version('/work/grand-crank-auto.mp4')) }}" />
            <meta property="og:video:type" content="video/mp4" />
            <meta property="og:video:width" content="1600" />
            <meta property="og:video:height" content="960" />
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:image:alt" content="The Grand Crank Auto title card" />
        </x-slot:head>
    @endisset

    {{--
        The hero and the work share one grid cell, so the swap reads as one
        room rather than two pages. The work keeps out of the layout until
        the hero has left, so its taller stage never shoves the
        hero down on the way out. Which of the two is on
        stage is decided here, not inside either.
    --}}
    <x-hero
        class="[grid-area:1/1]"
        style="--gap: 320ms"
        x-show="! open"
        x-transition:leave="transition ease-in duration-350"
        x-transition:leave-start="opacity-100 translate-y-0 blur-[0px]"
        x-transition:leave-end="opacity-0 -translate-y-8 blur-sm"
    />

    <x-work
        class="[grid-area:1/1]"
        style="--gap: 370ms"
        x-show="open"
        x-cloak=""
        x-transition:enter="absolute inset-0 duration-350"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    />

    <x-trailer />
</x-layout>
