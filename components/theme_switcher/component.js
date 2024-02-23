export default () => ({
  toggle() {
    const opposite = this.$store.theme.themes.find((theme) => theme !== this.$store.theme.mode)
    this.$store.theme.setMode(opposite)
  }
})
