{{--
    What the page says before the work is asked for. Whether it is on
    stage is not its own business, so the caller forwards the
    show and transition directives.
--}}
<div {{ $attributes->class('flex flex-col justify-center') }}>
    <div class="mx-auto w-full max-w-5xl">
        <h1 class="rise text-[clamp(3rem,9vw,8rem)] leading-[0.95] font-bold tracking-tight text-balance">
            Just good<br />engineering<span class="text-[#30347f]" aria-hidden="true">.</span>
        </h1>
        <p class="rise mt-8 max-w-md text-base leading-relaxed text-white/40 sm:text-lg" style="--d: 90ms">
            Web, desktop &amp; mobile apps, tooling, and automation.
        </p>
        <div class="rise mt-10 flex flex-wrap items-center gap-4" style="--d: 160ms">
            <a
                href="mailto:willem@leuver.ink"
                tabindex="0"
                class="rounded-lg bg-[#30347f] px-5 py-2.5 text-sm font-medium text-white transition-colors duration-200 hover:bg-[#3a3f96] focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15] focus-visible:outline-none"
            >
                Get in touch
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
