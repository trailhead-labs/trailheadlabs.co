@props([
    'name',
    'href',
    'title',
    'accent',
    'span',
    'delay' => '0ms',
    'copy' => 'max-w-lg',
    'align' => '',
])

{{--
  One product panel. The name matches the blob behind it, so
  reaching the card lights the room in that product's
  color. Slots carry what the two panels differ on.
--}}
<a href="{{ $href }}"
   target="_blank"
   rel="noopener noreferrer"
   @mouseenter="focus = '{{ $name }}'"
   @mouseleave="focus = null"
   @focus="focus = '{{ $name }}'"
   @blur="focus = null"
   style="--accent:{{ $accent }}; --d:{{ $delay }}"
   class="rise group relative {{ $span }} flex flex-col overflow-hidden rounded-2xl border border-white/8 bg-white/[0.02] p-7 min-h-[24rem] transition-colors duration-500 hover:border-[color:var(--accent)]/40 hover:bg-white/[0.04] focus-visible:outline-none focus-visible:border-[color:var(--accent)]/60 focus-visible:bg-white/[0.04]">
  {{ $eyebrow }}

  <h3 class="mt-5 text-2xl font-bold tracking-tight">{{ $title }}</h3>
  <p class="mt-2.5 text-sm text-white/40 leading-relaxed {{ $copy }}">{{ $slot }}</p>

  <div class="{{ trim("mt-auto pt-8 $align") }}">{{ $shot }}</div>
</a>
