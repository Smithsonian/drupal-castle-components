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
    $options['columns_xs'] = ['default' => '1'];
    $options['columns_sm'] = ['default' => '1'];
    $options['columns_md'] = ['default' => '2'];
    $options['columns_lg'] = ['default' => '4'];
    $options['columns_xl'] = ['default' => '4']; 
    $options['utility_classes'] = ['default' => ''];
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
    $form['utility_classes'] = [
      '#title' => $this->t('Utility classes'),
      '#description' => $this->t('Additional classes to add to the container element. Separated by a space.'),
      '#type' => 'textfield',
      '#default_value' => '',
    ];
  }

}
