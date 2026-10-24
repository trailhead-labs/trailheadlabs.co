{{--
    The Grand Crank Auto trailer, in a window of its own over the stage.
    The native dialog brings focus, escape and the dimmed room, so
    the page only starts the video and stops it on the way out.
--}}
<dialog
    x-ref="trailer"
    aria-label="Grand Crank Auto trailer"
    tabindex="-1"
    @click.self="$el.close()"
    @close="stopWatching()"
    class="trailer m-auto w-[min(800px,calc(100vw-2rem),calc((100svh-7rem)*5/3))] overflow-visible bg-transparent text-white focus:outline-none"
>
    <div class="flex items-center justify-between gap-4 pb-3">
        <p class="text-xs tracking-[0.2em] text-white/40 uppercase">Grand Crank Auto</p>
        <button
            type="button"
            @click="$refs.trailer.close()"
            class="group flex cursor-pointer items-center gap-1.5 rounded px-2 py-1 text-sm text-white/40 transition-colors duration-200 hover:text-white/80 focus-visible:text-white/80 focus-visible:ring-2 focus-visible:ring-[#30347f] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0c0d15] focus-visible:outline-none"
        >
            Close
            <svg class="h-3 w-3 translate-y-px transition-transform duration-300 group-hover:rotate-90" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                <path d="M3 3l8 8M11 3l-8 8" />
            </svg>
        </button>
    </div>

    <div class="relative">
        <video
            x-ref="trailerVideo"
            src="{{ url()->version('/work/grand-crank-auto.mp4') }}"
            poster="{{ url()->version('/work/grand-crank-auto.png') }}"
            preload="none"
            playsinline
            @play="playing = true"
            @play.once="$el.controls = true"
            @pause="playing = false"
            class="block aspect-[5/3] w-full rounded-xl border border-white/10 bg-black"
        ></video>

        {{--
            Sits in the gap below the title on the poster. It shows whenever
            the video is paused, which covers a shared link the browser
            would not roll, and the native controls wait for a play.
        --}}
        <button
            type="button"
            x-show="! playing"
            @click="$refs.trailerVideo.play()"
            class="absolute top-3/4 left-1/2 flex -translate-x-1/2 -translate-y-1/2 cursor-pointer items-center gap-2 rounded-full bg-[#ffc500] px-5 py-2.5 text-sm font-semibold text-[#0c0d15] shadow-lg shadow-black/40 transition-transform duration-200 hover:scale-105 focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-black focus-visible:outline-none"
        >
            <svg class="h-3 w-3" viewBox="0 0 14 14" fill="currentColor" aria-hidden="true">
                <path d="M2 1v12l11-6z" />
            </svg>
            Play trailer
        </button>
    </div>
</dialog>
