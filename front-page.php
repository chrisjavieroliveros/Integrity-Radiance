<?php
  /*
  
  Template Name: Front Page
  Description: This is the front page template
  Usage: This is the template for the front pages / landing pages
  */

  get_header();
?>

<main>
  <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
  <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
  <?php endif; ?>
</main>

<?php
get_footer();
