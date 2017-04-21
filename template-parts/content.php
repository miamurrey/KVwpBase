<?php
/**
 * Template part for displaying the title and the content if it is not a page or post format
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BaseWPParts
 */

?>
  <article class="" id="content-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="">
      <h1><?php the_title( ); ?></h1>
    </header>

    <div class="">

      <?php the_content(); ?>

    </div>

  </article>
