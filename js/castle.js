// Entry point for the Castle Components project.
import ui from '@alpinejs/ui'
import collapse from '@alpinejs/collapse'
import focus from '@alpinejs/focus'
import intersect from '@alpinejs/intersect'
import persist from '@alpinejs/persist'
import Alpine from 'alpinejs'

// Alpine plugins.
Alpine.plugin([ui, collapse, focus, intersect, persist])

document.addEventListener('alpine:init', () => {
  // Stores
  Alpine.store('theme', {
    mode: Alpine.$persist(''),
    themes: ['light', 'dark'],
    setMode(value) {
      if (this.themes.includes(value)) {
        this.mode = value
        document.documentElement.classList.remove(...this.themes)
        document.documentElement.classList.add(value)
      }
    },
  })
})
window.Alpine = Alpine
window.Alpine.start()