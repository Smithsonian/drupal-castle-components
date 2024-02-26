# Castle Components

Drupal component library using TailwindCSS and AlpineJS

## Install

Install as any Drupal module. It's recommended to use composer.

```bash
composer install smithsonian/castle_components
```

## Extend

To use the components in your theme you'll need to include the module's libraries in your theme's info.yml file.

For example:

```yml
# my_theme.info.yml
name: my_theme
type: theme
libraries:
  - castle_components/scripts
  - castle_components/tailwind
dependencies:
  - castle_components:castle_components
```

Note: Including the `castle_components/tailwind` library will use the package's default TailwindCSS styles. Normally, you'll want to exclude this library, and instead, create a Tailwind config in your custom theme to customize the way components are styled in your theme. An example config:

```javascript
// tailwind.config.js
const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '../../../modules/contrib/castle_components/components/**/*.twig',
    './templates/**/*.twig',
  ],
  darkMode: 'selector',
  theme: {
    colors: {
      primary: colors.blue,    
      secondary: colors.slate,
      accent: colors.red,
      success: 'hsl(160, 84%, 39%)',
      warning: 'hsl(38, 92%, 50%)',
      error: 'hsl(0, 84%, 60%)',
    }
  },
  plugins: [require('@tailwindcss/typography')],
}
```

## Usage

Once configured you can use components in your Drupal theme using Twig [embed](https://twig.symfony.com/doc/3.x/tags/embed.html).

```twig
{% embed 'castle_components:button' with { size: 'large' } only %}
  {% block content %}
    This is a Castle button
  {% endblock %}
{% endembed %}
```

or Twig [include](https://twig.symfony.com/doc/3.x/tags/include.html)

```twig
{{ include ('castle_components:icon', { 'name': 'download' } ) }}
```

## AlpineJS

Many of the Castle components use AlpineJS for interactivity, transitions, and event handling.

You'll want to add the following style to you're HTML head to prevent unstyled components appearing before Alpine is initialized.

```html
<style>
  [x-cloak] {
    display: none !important;
  }
</style>
```

## VSCode

see: https://code.visualstudio.com/docs/editor/userdefinedsnippets#_creating-your-own-snippets

## Development
