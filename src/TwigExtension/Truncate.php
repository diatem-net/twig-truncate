<?php

namespace Drupal\twig_truncate\TwigExtension;

use Drupal\Core\Entity\Node;

/**
 * Add a truncate() function to Twig
 */
class Truncate extends \Twig_Extension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'twig_truncate.twig_extension.truncate';
  }

  /**
   * Generates a list of all Twig filters that this extension defines.
   */
  public function getFilters() {
    return array(
      new \Twig_SimpleFilter('truncate', array($this, 'truncate')),
    );
  }

  /**
   * Truncate text after n chars
   */
  public static function truncate($value, $n = 150, $endchar = '…') {
    if (is_string($value)) {
      $plainText = html_entity_decode(strip_tags($value));
      $truncatedText = $plainText;
      if (strlen($plainText) > $n) {
        $truncatedText = preg_replace('/\s\S*?$/', $endchar, substr($plainText, 0, $n));
      }
      return $truncatedText;
    }
    return $value;
  }

}
