# Button Component

Buttons allow a user to take actions or make choices.


<!-- ### Props

Size
:   `small`
:   `medium`
:   `large`

### Slots

Slots
:   `default` The button content. -->

## Button variants
  <!-- TODO: Figure out why the buttons don't render unless the "href" prop is set. -->
  <template class="flex space-x-4">
    {% embed 'castle_components:button' with { variant: 'primary', size: 'small', href: '#' } only %}
      {% block default %}
        Small primary
      {% endblock default %}
    {% endembed %}
    {% embed 'castle_components:button' with { variant: 'secondary', href: '#' } only %}
      {% block default %}
        Default secondary
      {% endblock default %}
    {% endembed %}
    {% embed 'castle_components:button' with { variant: 'accent', size: 'large', href: '#' } only %}
      {% block default %}
        Large accent
      {% endblock default %}
    {% endembed %}
    {% embed 'castle_components:button' with { variant: 'transparent', size: 'large', href: '#' } only %}
      {% block default %}
        Large transparent
      {% endblock default %}
    {% endembed %}
  </template>

## Button link

### Example

<template>
  {% embed 'castle_components:button' with { variant: 'primary', href: '/', size: 'large' } only %}
    {% block default %}
      Home page
    {% endblock default %}
  {% endembed %}
</template>

Occaecati quos deserunt, nibh, facilisi erat praesent ipsa sapien, nisl, per purus expedita fermentum aute quisque. Pede nam? Voluptate dis a. Sem vel! Facilis, maecenas wisi at, illo numquam mus itaque laborum dolores accusantium tenetur, odio? Dolore dui quidem sed feugiat tristique! Ipsa et! Curabitur, ullamcorper suscipit posuere, lacus commodi suspendisse, soluta dicta recusandae metus? Id! Cupiditate tempus nascetur veniam hac provident do non, posuere dolore! Eiusmod sagittis sollicitudin blanditiis fugit aspernatur facilis quod culpa. Voluptate! Nulla. Ante ac metus ea! Sed adipiscing integer viverra mauris nec laoreet justo sociis, assumenda phasellus officiis! Possimus phasellus a vel ligula? Magnis? Necessitatibus.

Ab quisque condimentum sagittis recusandae adipisicing. Suspendisse itaque! Sollicitudin, cras explicabo magnam mattis nullam cupidatat id! Dolorem consequatur exercitation sociis turpis porta quam senectus? Aute proident delectus! Morbi rhoncus mollit ratione viverra nobis distinctio. Deleniti voluptatibus asperiores tempore quasi habitant, ad sapien fuga wisi, molestiae minus volutpat venenatis veritatis fuga justo cum hendrerit dolor vero perferendis porro quidem magnis gravida? Enim eget, praesent commodo ipsa maxime mi ullamco tortor curabitur fames euismod illo minus perferendis gravida leo? Repellendus mollitia felis, convallis dolore pede blandit! Quia maxime augue fugiat error ipsam feugiat unde hymenaeos dolores quod non, proident corrupti voluptas corporis.

Esse litora. Architecto a praesentium tempus et atque omnis tellus nisi quisque, augue lobortis doloribus repellendus. Eiusmod primis minus congue hac auctor egestas vehicula, eget faucibus optio tempora, litora proin? Atque consequuntur aliqua fames quia adipisci, ultrices fuga rhoncus omnis laoreet placerat. Unde tempore cras, magna? Fusce unde quia, eligendi hic nullam neque exercitation dicta ac. Justo, dolorum optio quo vitae fermentum aliquip aspernatur rutrum dolores! Perspiciatis litora tortor dolorem vehicula magna, porro ipsa habitant? Suscipit, deserunt assumenda in! Aliqua habitasse iure nostrud dolore, alias dictum corporis non! Enim curae. Assumenda atque aliqua, ante semper dignissim. Non animi sagittis nisl.