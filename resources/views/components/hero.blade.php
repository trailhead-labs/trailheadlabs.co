{{--
    What the page says before the work is asked for. Whether it is on
    stage is not its own business, so the caller forwards the
    show and transition directives.
--}}
<div {{ $attributes->class('flex flex-col justify-center') }}>
    <div class="mx-auto w-full max-w-5xl">
        <!-- Arrives after the rest has landed, so it reads as news rather than the headline. Kept out of search snippets for the same reason. -->
        <a
            href="{{ route('trailer') }}"
            @click.prevent="watch()"
            data-nosnippet
            class="rise group mb-8 inline-flex items-center gap-2.5 rounded-full border border-white/8 bg-white/[0.03] py-1 pr-3 pl-1 text-sm text-white/50 transition-colors duration-300 hover:border-[#ffc500]/40 hover:bg-white/[0.05] hover:text-white/80 focus-visible:text-white/80 focus-visible:ring-2 focus-visible:ring-[#30347f] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15] focus-visible:outline-none"
            style="--d: 260ms"
        >
            <span class="inline-flex items-center gap-1.5 rounded-full bg-[#ffc500] px-2.5 py-0.5 text-[0.6875rem] font-semibold tracking-[0.12em] text-[#0c0d15] uppercase">
                <svg class="h-2 w-2" viewBox="0 0 14 14" fill="currentColor" aria-hidden="true">
                    <path d="M2 1v12l11-6z" />
                </svg>
                Trailer
            </span>
            <span>Grand Crank Auto<span class="hidden sm:inline"> is coming to Playdate</span></span>
            <svg class="h-3.5 w-3.5 transition-transform duration-300 group-hover:translate-x-0.5" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 3l4 4-4 4" />
            </svg>
        </a>

        <h1 class="rise text-[clamp(3rem,9vw,8rem)] leading-[0.95] font-bold tracking-tight text-balance">
            Just good<br />engineering<span class="text-[#30347f]" aria-hidden="true">.</span>
        </h1>
        <p class="rise mt-8 max-w-md text-base leading-relaxed text-white/40 sm:text-lg" style="--d: 90ms">
            Web, desktop &amp; mobile apps, tooling, and automation.
        </p>
        <div class="rise mt-10 flex flex-wrap items-center gap-4" style="--d: 160ms">
            <a
                x-data="contact"
                @pointermove="track"
                @click.prevent="speak()"
                :class="spoke && 'spoke'"
                href="mailto:willem@leuver.ink"
                tabindex="0"
                class="lit rounded-lg bg-[#30347f] px-5 py-2.5 text-sm font-medium text-white hover:bg-[#3a3f96] focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15] focus-visible:outline-none"
            >
                <span class="lit-stack">
                    <span class="lit-label">Get in touch</span>
                    <span class="lit-answer" aria-hidden="true">Speak soon!</span>
                </span>
            </a>
            <button
                type="button"
                x-ref="trigger"
                @click="show()"
                class="group flex cursor-pointer items-center gap-1.5 rounded px-2 py-1 text-sm text-white/40 transition-colors duration-200 hover:text-white/70 focus-visible:text-white/70 focus-visible:ring-2 focus-visible:ring-[#30347f] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15] focus-visible:outline-none"
            >
                See the work
                <svg class="h-3.5 w-3.5 transition-transform duration-300 group-hover:translate-y-0.5" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M7 2v10M3 8l4 4 4-4" />
                </svg>
            </button>
        </div>
    </div>
</div>
