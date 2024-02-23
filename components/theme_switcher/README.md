# Theme Switcher Component

Note: To prevent a flicker between page loads, add the following script in the head of your HTML document:

```html
  <script>
    var mode = localStorage.getItem('_x_mode')
    if (mode === '"dark"' || (!mode && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  </script>
```
