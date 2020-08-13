<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php
    echo '<div class="blog-wrapper">';
      echo '<div class="blog-featured-image">';
        the_post_thumbnail();
      echo '</div>';
      echo '<div class="blog-content">';
        echo '<p>' .  get_the_date() . '</p>';
        echo '<h1><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h1>';
        the_content();
      echo '</div>';
    echo '</div>';
  ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>