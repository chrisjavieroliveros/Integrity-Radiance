<?php 

/*
  Template Name: Single Post Template
  Description: This is the single post template
  Usage: This is the template for the Blog posts
*/

get_header(); 
?>

<div class="split">
  <main>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?>
  </main>
  <aside>
    <?php if (is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </aside>
</div>
