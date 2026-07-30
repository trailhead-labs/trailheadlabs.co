import Alpine from 'alpinejs'

Alpine.data('site', () => ({
    open: window.location.hash === '#work',
    focus: null,

    init() {
        window.addEventListener('popstate', () => {
            this.open = window.location.hash === '#work'
            this.focus = null
        })
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
}))

window.Alpine = Alpine

Alpine.start()
