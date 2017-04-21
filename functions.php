<?php

  /**
   * Base loader and theme initialization
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  error_reporting(E_ALL);
  ini_set('error_reporting', E_ALL);

  // Define variables

  define( 'TEXTDOMAIN', 'goodspirit' );
  define( 'THEME_DIR', get_template_directory() );
  define( 'THEME_URL', get_template_directory_uri() );
  define( 'DEVELOPER_NAME', 'Kreatív Vonalak' );
  define( 'GA_CODE', '' );
  define( 'USE_EDITOR_STYLE', TRUE );

  define( 'FACEBOOK', 'https://www.facebook.com/goodspiritbar/');
  define( 'TRIPADVISOR', '');
  define( 'YOUTUBE', '');
  define( 'TWITTER', '');
  define( 'INSTAGRAM', '');


  // Include functions

  if( is_admin() ) : include( 'inc/notifications-functions.php' ); endif;
  if( is_admin() ) : include( 'inc/admin-functions.php' ); endif;
  if( is_admin() ) : include( 'inc/editor-functions.php' ); endif;

  include( 'inc/login-functions.php' );

  include( 'inc/aq_resizer.php' );
  include( 'inc/theme-functions.php' );
  include( 'inc/load-script-css.php' );
  include( 'inc/menu-functions.php' );
  include( 'inc/ga-function.php' );
  include( 'inc/yoast-functions.php' );
  include( 'inc/emoji-functions.php' );
  include( 'inc/meta-functions.php' );
  include( 'inc/media-functions.php' );
  include( 'inc/json-functions.php' );
  include( 'inc/core-functions.php' );
  include( 'inc/language-functions.php' );
  include( 'inc/shortcode-functions.php' );
  include( 'inc/sidebar-functions.php' );
  include( 'inc/social-functions.php' );
  include( 'inc/oembend-functions.php' );

?>
