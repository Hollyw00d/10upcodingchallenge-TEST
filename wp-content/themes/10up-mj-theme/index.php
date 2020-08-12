<?php 
get_header(); 

// Determiner if on the blog page
function is_blog() {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if (is_blog()):
        echo '<div>';
            the_post_thumbnail();
        echo '</div>';
        echo get_the_date();
        echo '<h1>' . get_the_title() . '</h1>';
        the_content();
    else:

        the_title();
        the_content(); 
    endif; 
    ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>