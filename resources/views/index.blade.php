<x-layout x-data="site" ::class="open && 'work-open'" ::data-focus="focus" @keydown.escape.window="open && hide()">
    <x-slot:backdrop>
        <x-blob-field />
    </x-slot:backdrop>

    {{--
        The hero and the work share one grid cell, so the swap reads as one
        room rather than two pages. Which of the two is on stage is
        decided here, not inside either of them.
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
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    />
</x-layout>
