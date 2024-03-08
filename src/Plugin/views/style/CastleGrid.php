<?php declare(strict_types = 1);

namespace Drupal\castle_components\Plugin\views\style;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;
use Drupal\Component\Utility\Html;

/**
 * Castle Grid style plugin.
 *
 * @ViewsStyle(
 *   id = "castle_components_castle_grid",
 *   title = @Translation("Castle Grid"),
 *   help = @Translation("Displays items in a CSS grid."),
 *   theme = "views_style_castle_components_castle_grid",
 *   display_types = {"normal"},
 * )
 */
final class CastleGrid extends StylePluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = true;
  
  /**
   * {@inheritdoc}
   */
  protected function defineOptions(): array {
    $options = parent::defineOptions();
    $options['columns'] = ['default' => '4'];
    $options['custom_classes'] = ['default' => ''];
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    $form['help'] = [
      '#markup' => 'The Castle Grid displays content in a CSS grid',
      '#weight' => -99,
    ];
    foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size) {
      $form["columns_{$size}"] = [
        '#type' => 'select',
        '#title' => $this->t("Number of columns for @size breakpoint", ['@size' => $size]),
        '#required' => TRUE,
        '#default_value' => isset($this->options["columns_{$size}"]) ? $this->options["columns_{$size}"] : null,
      ];
      foreach (array_reverse(range(0, 12)) as $number) {
        $form["columns_{$size}"]['#options'][$number] = $number;
      }
    }
    $form['custom_classes'] = [
      '#title' => $this->t('Custom classes'),
      '#description' => $this->t('Additional classes to add to the container element. Separated by a space.'),
      '#type' => 'textfield',
      '#default_value' => $this->getCustomClasses(),
    ];
  }

  /**
   * Return the custom classes.
   *
   * @return string
   *   A space-delimited string of classes.
   */
  public function getCustomClasses() {
    if (isset($this->options['custom_classes'])) {
      $items = $this->options['custom_classes'];
      $classes = explode(' ', $items);
      foreach ($classes as &$class) {
        $class = Html::cleanCssIdentifier($class);
      }
      // return implode(' ', $classes);
      return $classes;
    }
    // return '';
    return [];
  }

}
