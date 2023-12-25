<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Integrity Radiance
 * @subpackage Theme_Name
 * @since 1.0
 */

get_header(); ?>

<main>
  <section>
    <header>
      <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme_name' ); ?></h1>
    </header>
    <div>
      <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'theme_name' ); ?></p>
      <?php get_search_form(); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
