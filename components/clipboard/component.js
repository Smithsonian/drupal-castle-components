export default () => ({
  feedback: false,
  text: '',
  init() {
    this.text = this.$el.dataset.text
    this.$watch('feedback', (value, oldValue) => {
      if (value) {
        // Reset the "feedback" property to control display of feedback.
        setTimeout(() => {this.feedback = false}, 2500 )
      }
    })
  },
  copy() {
    this.feedback = !!navigator.clipboard.writeText(this.text)
  }
})