<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php
    echo '<div>';
    the_post_thumbnail();
    echo '</div>';
    echo get_the_date();
    echo '<h1><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h1>';
    the_content();
  ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>