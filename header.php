<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="utf-8" />
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1"><![endif]-->
  <meta name="author" content="<?php bloginfo( 'name' ); ?>">
  <meta name="DC.title" lang="<?php bloginfo( 'language' ); ?>" content="<?php ( is_home() ) ? bloginfo( 'name' ) : wp_title( '|', true, 'right' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/vendor/html5shiv.min.js"></script>
  <![endif]-->

  <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>

<header>

</header>
