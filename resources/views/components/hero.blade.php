<!-- The hero and the work share one grid cell, so the swap reads as one room, not two pages. -->
<div class="[grid-area:1/1] flex flex-col justify-center"
     style="--gap:320ms"
     x-show="!open"
     x-transition:leave="transition ease-in duration-350"
     x-transition:leave-start="opacity-100 translate-y-0 blur-[0px]"
     x-transition:leave-end="opacity-0 -translate-y-8 blur-sm">
  <div class="max-w-5xl mx-auto w-full">
    <h1 class="rise text-[clamp(3rem,9vw,8rem)] font-bold tracking-tight leading-[0.95] text-balance">
      Just good<br>engineering<span class="text-[#30347f]" aria-hidden="true">.</span>
    </h1>
    <p class="rise mt-8 text-base sm:text-lg text-white/40 max-w-md leading-relaxed" style="--d:90ms">
      Web, desktop &amp; mobile apps, tooling, and automation.
    </p>
    <div class="rise mt-10 flex flex-wrap items-center gap-4" style="--d:160ms">
      <a href="mailto:willem@leuver.ink"
         tabindex="0"
         class="bg-[#30347f] hover:bg-[#3a3f96] text-white text-sm font-medium px-5 py-2.5 rounded-lg transition-colors duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15]">
        Get in touch
      </a>
      <button type="button"
              x-ref="trigger"
              @click="show()"
              class="group flex items-center gap-1.5 text-sm text-white/40 hover:text-white/70 transition-colors duration-200 rounded px-2 py-1 cursor-pointer focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#30347f] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15] focus-visible:text-white/70">
        See the work
        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-y-0.5" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M7 2v10M3 8l4 4 4-4" />
        </svg>
      </button>
    </div>
  </div>
</div>
