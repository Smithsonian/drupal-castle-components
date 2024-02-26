# Theme Switcher Component

The theme switcher is an AlpineJS component that stores a user's color scheme choice (light or dark mode) in localStorage and sets the TailwindCSS "darkMode" class on the document's body.

While individual components include dark/light theme styles, it will be necessary for the Drupal theme using Castle components to manage color scheme styles on the document body and potentially other default Drupal templates.

For example: You can set the background color classes on the body element in `html.html.twig`

```twig
  {% set body_classes = body_classes|merge(['bg-neutral-100 text-black dark:bg-neutral-900 dark:text-neutral-100']) %}
  <body{{ attributes.addClass(body_classes) }}>
```

Note: To prevent a flicker between page loads and set the initially color scheme, add the following script in the head of your HTML document:

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
