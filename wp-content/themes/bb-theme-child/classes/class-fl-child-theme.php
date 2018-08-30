<?php

/**
 * Helper class for theme functions.
 *
 * @class FLChildTheme
 */
final class FLChildTheme {

    /**
     * @method styles
     */
    static public function stylesheet()
    {
        echo '<link rel="stylesheet" href="' . FL_CHILD_THEME_URL . '/style.css" />';
    }

    static public function header_content()
    {
      $settings = self::get_settings();
      $layout   = $settings['fl-header-content-layout'];
      $text     = $settings['fl-header-content-text'];

      do_action( 'fl_header_content_open' );

      if($layout == 'text' || $layout == 'social-text') {
        echo '<div class="fl-page-he ader-text">'. do_shortcode( $text ) .'</div>';
      }
      if($layout == 'social' || $layout == 'social-text') {
        self::social_icons();
      }

      do_action( 'fl_header_content_close' );
    }
}
