document.addEventListener('alpine:init', () => {
  Alpine.data('themeSwitcher', () => ({
      toggle() {
        const opposite = this.$store.theme.themes.find((theme) => theme !== this.$store.theme.mode)
        this.$store.theme.setMode(opposite)
        this.$dispatch('toggle-theme')
      }
    })
  )
})
