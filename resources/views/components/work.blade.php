{{--
    The two products, once the work is asked for. Whether it is on
    stage is not its own business, so the caller forwards the
    show and transition directives.
--}}
<div {{ $attributes->class('flex flex-col justify-center') }}>
    <div class="mx-auto w-full max-w-5xl py-8">
        <div class="rise flex items-center justify-between gap-4">
            <h2
                x-ref="stageHeading"
                tabindex="-1"
                class="text-xs tracking-[0.2em] text-white/30 uppercase focus:outline-none"
            >
                Our own products
            </h2>
            <button
                type="button"
                @click="hide()"
                class="group flex cursor-pointer items-center gap-1.5 rounded px-2 py-1 text-sm text-white/30 transition-colors duration-200 hover:text-white/70 focus-visible:text-white/70 focus-visible:ring-2 focus-visible:ring-[#30347f] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15] focus-visible:outline-none"
            >
                <svg class="h-3.5 w-3.5 transition-transform duration-300 group-hover:-translate-y-0.5" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M7 12V2M3 6l4-4 4 4" />
                </svg>
                Back
            </button>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-4 lg:grid-cols-12">
            <x-work-card
                name="humm"
                href="https://hummtuned.app"
                title="Humm"
                accent="#8b7cf0"
                copy-width="max-w-[22rem]"
                centered
                class="lg:col-span-5"
                style="--d: 90ms"
            >
                <x-slot:eyebrow>
                    <div class="flex items-center gap-2.5">
                        <svg class="h-5 w-5 -rotate-90" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5" class="text-white/8" />
                            <circle cx="12" cy="12" r="9" stroke="url(#humm-arc)" stroke-width="1.5" stroke-linecap="round" class="arc-sweep" style="--d:340ms" />
                            <defs>
                                <linearGradient id="humm-arc" x1="0" y1="0" x2="24" y2="24" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#8b7cf0" />
                                    <stop offset="1" stop-color="#e08a5f" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="text-[0.6875rem] font-medium tracking-[0.18em] text-[color:var(--accent)]/80 uppercase">
                            iOS &amp; Android
                        </span>
                    </div>
                </x-slot:eyebrow>

                One dial for focus, sleep, wake and dream. Binaural programs under a soundscape mixed fresh every
                session, each graded on the research behind it and honest about where the evidence thins.

                <x-slot:shot>
                    <div class="fade-out -mb-24 w-[52%] rounded-[1.6rem] border border-white/10 bg-white/5 p-1.5 transition-transform duration-500 ease-out group-hover:-translate-y-2">
                        <img
                            src="{{ url()->version('/work/humm.webp') }}"
                            alt="The Humm timer dial mid-session"
                            width="1206"
                            height="2622"
                            loading="lazy"
                            class="w-full rounded-[1.25rem]"
                        />
                    </div>
                </x-slot:shot>
            </x-work-card>

            <x-work-card
                name="devkeepr"
                href="https://devkeepr.app"
                title="Devkeepr"
                accent="#38bdf8"
                class="lg:col-span-7"
                style="--d: 170ms"
            >
                <x-slot:eyebrow>
                    <!-- Matches the height of Humm's dial glyph so both cards share a baseline. -->
                    <div class="flex h-5 items-center">
                        <span class="text-[0.6875rem] font-medium tracking-[0.18em] text-[color:var(--accent)]/80 uppercase">
                            macOS
                            <!-- &middot; Windows &middot; Linux -->
                        </span>
                    </div>
                </x-slot:eyebrow>

                One home for every project on your machine. Dev servers, agents and terminals wait where you left them.
                Idle projects shrink to reclaim disk and wake instantly, while the global toolchain updates on its own.

                <x-slot:shot>
                    <div class="fade-out -mb-8 transition-transform duration-500 ease-out group-hover:-translate-y-2">
                        <img
                            src="{{ url()->version('/work/devkeepr.webp') }}"
                            alt="The Devkeepr overview: session cost, disk reclaimed, global packages, and every project with its size and state"
                            width="1400"
                            height="855"
                            loading="lazy"
                            class="w-full rounded-t-lg"
                        />
                    </div>
                </x-slot:shot>
            </x-work-card>
        </div>

        <h2 class="rise mt-14 text-xs tracking-[0.2em] text-white/30 uppercase" style="--d: 240ms">Coming soon</h2>

        {{--
            The game has no page of its own yet, so its card opens the trailer
            over the stage instead of leaving the site. The address stays
            on the link, so it can still be copied and shared. Search
            engines leave it out of their snippets, as its copy is
            the longest here and was shown as the studio's own.
        --}}
        <x-work-card
            name="grand-crank-auto"
            :href="route('trailer')"
            title="Grand Crank Auto"
            accent="#ffc500"
            copy-width="max-w-md"
            wide
            target="_self"
            @click.prevent="watch()"
            data-nosnippet=""
            class="mt-6"
            style="--d: 300ms"
        >
            <x-slot:eyebrow>
                <div class="flex items-center gap-2.5">
                    <!-- The crank seen down its axle, so turning it on hover spins it the way it really turns. -->
                    <svg class="h-5 w-5 text-[color:var(--accent)] opacity-80 motion-safe:group-hover:animate-spin" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9.75 5v7a2.25 2.25 0 0 0 4.5 0V5zM13 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        <circle cx="12" cy="4.75" r="3.75" />
                    </svg>
                    <span class="text-[0.6875rem] font-medium tracking-[0.18em] text-[color:var(--accent)]/80 uppercase">
                        Playdate
                    </span>
                </div>
            </x-slot:eyebrow>

            <p>
                An untouched countryside, teeming with life: mountains, a forest, a waterfall, a river and a lake,
                farmland, pastures and meadows. At its heart a city with working traffic and emergency services, where
                people live their lives and look after each other in perfect harmony.
            </p>
            <p class="text-white/70">Until you came along.</p>
            <p>A 1-bit, top-down open world, crank-powered crime sandbox.</p>
            <p class="flex items-center gap-2 pt-5 text-[color:var(--accent)]/80 transition-colors duration-200 group-hover:text-[color:var(--accent)]">
                <svg class="h-3 w-3" viewBox="0 0 14 14" fill="currentColor" aria-hidden="true">
                    <path d="M2 1v12l11-6z" />
                </svg>
                Watch the trailer
            </p>

            <x-slot:shot>
                <div class="relative w-fit max-w-full rounded-xl border border-white/10 bg-white/5 p-1.5 transition-transform duration-500 ease-out group-hover:-translate-y-1">
                    <!-- Shown at exactly 400px so every pixel of the Playdate screen lands on the grid. -->
                    <img
                        src="{{ url()->version('/work/grand-crank-auto.png') }}"
                        alt="The Grand Crank Auto title card"
                        width="800"
                        height="480"
                        loading="lazy"
                        class="block w-[400px] max-w-full rounded-md"
                    />
                    <span class="absolute right-4 bottom-4 flex items-center gap-1.5 rounded-full bg-white/10 px-2 py-0.5 text-[0.6875rem] text-white/70 tabular-nums backdrop-blur-sm transition-colors duration-300 group-hover:bg-[color:var(--accent)] group-hover:text-[#0c0d15]" aria-hidden="true">
                        <svg class="h-2 w-2" viewBox="0 0 14 14" fill="currentColor">
                            <path d="M2 1v12l11-6z" />
                        </svg>
                        1:25
                    </span>
                </div>
            </x-slot:shot>
        </x-work-card>

        <p class="rise mt-6 text-sm text-white/25" style="--d: 360ms">
            Writing and open source at
            <a
                href="https://leuver.ink"
                target="_blank"
                rel="noopener noreferrer"
                class="rounded text-white/40 underline decoration-white/15 underline-offset-4 transition-colors duration-200 hover:text-white/70 focus-visible:ring-2 focus-visible:ring-[#30347f] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15] focus-visible:outline-none"
            >leuver.ink</a>
        </p>
    </div>
</div>
