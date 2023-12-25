<?php
  /*
  
  Template Name: Page Template
  Description: This is the page template
  Usage: This is the template for the pages
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
