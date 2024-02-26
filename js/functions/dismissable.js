export default () => ({
  visible: true,
  open() {
    this.visible = true
  },
  close() {
    this.visible = false
  },
  isVisible() {
    return this.visible === true
  }
})