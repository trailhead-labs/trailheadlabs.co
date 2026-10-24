@props([
    'name',
    'href',
    'title',
    'accent',
    'copyWidth' => 'max-w-lg',
    'centered' => false,
    'wide' => false,
])

{{--
    One product panel. The name matches the blob behind it, so reaching
    the card lights the room in that product's color. Where the card
    sits in the grid is the caller's business, not its own.
--}}
<a
    {{
        $attributes
            ->class([
                'rise group relative flex min-h-[24rem] flex-col overflow-hidden rounded-2xl border border-white/8 bg-white/[0.02] p-7 transition-colors duration-500 hover:border-[color:var(--accent)]/40 hover:bg-white/[0.04] focus-visible:border-[color:var(--accent)]/60 focus-visible:bg-white/[0.04] focus-visible:outline-none',
                'gap-8 lg:flex-row lg:items-center lg:justify-between' => $wide,
            ])
            ->style("--accent: {$accent}")
            ->merge(['target' => '_blank', 'rel' => 'noopener noreferrer'])
    }}
    href="{{ $href }}"
    @mouseenter="focus = '{{ $name }}'"
    @mouseleave="focus = null"
    @focus="focus = '{{ $name }}'"
    @blur="focus = null"
>
    <div>
        {{ $eyebrow }}

        <h3 class="mt-5 text-2xl font-bold tracking-tight">{{ $title }}</h3>
        <div @class(['mt-2.5 space-y-2.5 text-sm leading-relaxed text-white/40', $copyWidth])>{{ $slot }}</div>
    </div>

    <div @class(['mt-auto pt-8' => ! $wide, 'flex justify-center' => $centered])>{{ $shot }}</div>
</a>
