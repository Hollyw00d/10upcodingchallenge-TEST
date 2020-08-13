<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php echo '<h1>' . get_the_title() . '</h1>'; ?>

    <?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>