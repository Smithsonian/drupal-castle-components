<?php declare(strict_types = 1);

namespace Drupal\castle_components;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use TailwindMerge\TailwindMerge;

/**
 * Twig extension.
 */
final class CastleTwigExtensions extends AbstractExtension {

  /**
   * {@inheritdoc}
   */
  public function getFunctions(): array {
    $functions[] = new TwigFunction(
      'castle_merge_utility_classes', [self::class, 'mergeUtilityClasses']
    );
    return $functions;
  }

  /**
   * Merge utility classes, replacing class prefixes in the original list with new values.
   *   Example: The original class 'rounded-lg' will be replaced with 'rounded-none' from the new list.
   * @param array $new
   *  The new classes to add or replace.
   * @param array $original
   */
  public static function mergeUtilityClasses(array $new, array $original): string {
    $tw = TailwindMerge::instance();
    return $tw->merge(...$original, ...$new);
  }

}
