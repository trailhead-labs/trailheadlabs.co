import Alpine from 'alpinejs'

Alpine.data('site', () => ({
    open: window.location.hash === '#work',
    focus: null,
    playing: false,

    init() {
        window.addEventListener('popstate', () => {
            this.open = window.location.hash === '#work'
            this.focus = null

            if (this.onTrailer()) {
                this.watch()
            } else {
                this.$refs.trailer.close()
            }
        })

        // A shared link lands on the trailer, so it opens straight over the hero.
        if (this.onTrailer()) {
            this.$nextTick(() => this.watch())
        }
    },

    // Raises the work stage and gives the browser a stop to come back to.
    show() {
        this.open = true
        history.pushState(null, '', '#work')
        this.$nextTick(() => this.$refs.stageHeading?.focus())
    },

    // Drops back to the hero and hands focus to the control that opened it.
    hide() {
        this.open = false
        this.focus = null
        history.pushState(null, '', window.location.pathname)
        this.$nextTick(() => this.$refs.trigger?.focus())
    },

    /**
     * Opens the trailer over whatever is on stage, under an address of its
     * own so it can be shared. Without a click to go on, a browser may
     * refuse to roll it, and the play button waits there instead.
     */
    watch() {
        if (! this.onTrailer()) {
            history.pushState({ trailer: true }, '', this.$root.dataset.trailerPath)
        }

        // The window takes focus itself, so the close button does not light up on arrival.
        if (! this.$refs.trailer.open) {
            this.$refs.trailer.showModal()
            this.$refs.trailer.focus()
        }

        this.$refs.trailerVideo.play().catch(() => {})
    },

    /**
     * Stops the trailer and hands the address back. One opened from the
     * page steps back to where it was, and one a link landed on
     * settles on the home page instead.
     */
    stopWatching() {
        this.$refs.trailerVideo.pause()

        if (history.state?.trailer) {
            history.back()
        } else if (this.onTrailer()) {
            history.replaceState(null, '', '/')
        }
    },

    // Static hosts may add a trailing slash, so the address is compared without one.
    onTrailer() {
        return window.location.pathname.replace(/\/$/, '') === this.$root.dataset.trailerPath
    },
}))

/*
 * The contact button. It carries a light where the pointer holds it
 * and answers once while the mail client comes up. The button
 * itself never moves, so it stays where it was aimed at.
 */
Alpine.data('contact', (pause = 800, linger = 2600) => ({
    spoke: false,
    enabled: false,
    timers: [],

    init() {
        this.enabled = window.matchMedia('(hover: hover) and (pointer: fine)').matches
    },

    track({ clientX, clientY }) {
        if (! this.enabled) {
            return
        }

        const { left, top } = this.$el.getBoundingClientRect()

        this.$el.style.setProperty('--mx', `${clientX - left}px`)
        this.$el.style.setProperty('--my', `${clientY - top}px`)
    },

    /**
     * Answers first and hands the address to the mail client a beat later,
     * so the message is read before another window takes the screen. The
     * href stays on the anchor and is what gets opened, so the link
     * is still a link to anything that reads the markup.
     */
    speak() {
        this.timers.forEach(clearTimeout)
        this.spoke = true

        this.timers = [
            setTimeout(() => (window.location.href = this.$el.href), pause),
            setTimeout(() => (this.spoke = false), linger),
        ]
    },
}))

window.Alpine = Alpine

Alpine.start()
