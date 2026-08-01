<!-- The work stage. -->
<div class="[grid-area:1/1] flex flex-col justify-center"
     style="--gap:370ms"
     x-show="open"
     x-cloak
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">
  <div class="max-w-5xl mx-auto w-full py-8">

    <div class="rise flex items-center justify-between gap-4">
      <h2 x-ref="stageHeading" tabindex="-1" class="text-xs uppercase tracking-[0.2em] text-white/30 focus:outline-none">
        Our own products
      </h2>
      <button type="button"
              @click="hide()"
              class="group flex items-center gap-1.5 text-sm text-white/30 hover:text-white/70 transition-colors duration-200 rounded px-2 py-1 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#30347f] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15] focus-visible:text-white/70">
        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:-translate-y-0.5" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M7 12V2M3 6l4-4 4 4" />
        </svg>
        Back
      </button>
    </div>

    <div class="mt-6 grid grid-cols-1 lg:grid-cols-12 gap-4">

      <x-work-card name="humm"
                   href="https://hummtuned.app"
                   title="Humm"
                   accent="#8b7cf0"
                   span="lg:col-span-5"
                   delay="90ms"
                   copy="max-w-[22rem]"
                   align="flex justify-center">
        <x-slot:eyebrow>
          <div class="flex items-center gap-2.5">
            <svg class="w-5 h-5 -rotate-90" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5" class="text-white/8" />
              <circle cx="12" cy="12" r="9" stroke="url(#humm-arc)" stroke-width="1.5" stroke-linecap="round" class="arc-sweep" style="--d:340ms" />
              <defs>
                <linearGradient id="humm-arc" x1="0" y1="0" x2="24" y2="24" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#8b7cf0" />
                  <stop offset="1" stop-color="#e08a5f" />
                </linearGradient>
              </defs>
            </svg>
            <span class="text-[0.6875rem] font-medium uppercase tracking-[0.18em] text-[color:var(--accent)]/80">
              iOS &amp; Android
            </span>
          </div>
        </x-slot:eyebrow>

        One dial for focus, sleep, wake and dream. Binaural programs under a soundscape mixed fresh every session, each graded on the research behind it and honest about where the evidence thins.

        <x-slot:shot>
          <div class="fade-out w-[52%] -mb-24 rounded-[1.6rem] border border-white/10 bg-white/5 p-1.5 transition-transform duration-500 ease-out group-hover:-translate-y-2">
            <img src="/work/humm.webp"
                 alt="The Humm timer dial mid-session"
                 width="1206" height="2622" loading="lazy"
                 class="w-full rounded-[1.25rem]" />
          </div>
        </x-slot:shot>
      </x-work-card>

      <x-work-card name="devkeepr"
                   href="https://devkeepr.app"
                   title="Devkeepr"
                   accent="#38bdf8"
                   span="lg:col-span-7"
                   delay="170ms">
        <x-slot:eyebrow>
          <!-- Matches the height of Humm's dial glyph so both cards share a baseline. -->
          <div class="flex h-5 items-center">
            <span class="text-[0.6875rem] font-medium uppercase tracking-[0.18em] text-[color:var(--accent)]/80">
              macOS <!-- &middot; Windows &middot; Linux -->
            </span>
          </div>
        </x-slot:eyebrow>

        One home for every project on your machine. Dev servers, agents and terminals wait where you left them. Idle projects shrink to reclaim disk and wake instantly, while the global toolchain updates on its own.

        <x-slot:shot>
          <div class="fade-out -mb-8 transition-transform duration-500 ease-out group-hover:-translate-y-2">
            <img src="/work/devkeepr.webp"
                 alt="The Devkeepr overview: session cost, disk reclaimed, global packages, and every project with its size and state"
                 width="1400" height="855" loading="lazy"
                 class="w-full rounded-t-lg" />
          </div>
        </x-slot:shot>
      </x-work-card>

    </div>

    <p class="rise mt-6 text-sm text-white/25" style="--d:260ms">
      Writing and open source at
      <a href="https://leuver.ink"
         target="_blank"
         rel="noopener noreferrer"
         class="text-white/40 hover:text-white/70 underline underline-offset-4 decoration-white/15 transition-colors duration-200 rounded focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#30347f] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15]">leuver.ink</a>
    </p>

  </div>
</div>
