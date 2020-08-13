<?php 
get_header(); 

// Determine if on the blog page, EXCEPT for single page
function is_blog() {
    return ( is_archive() || is_author() || is_category() || is_home() || is_tag()) && 'post' == get_post_type();
}
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if (is_blog()):
        echo '<div class="blog-wrapper">';
            echo '<div class="blog-featured-image">';
                    the_post_thumbnail();
            echo '</div>';
            echo '<div>';
                echo '<p class="med-gray">' .  get_the_date() . '</p>';
                echo '<h1><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h1>';
                the_content();
            echo '</div>';
            echo '<p><a class="read-more" href="' . get_the_permalink() . '">Read More<img src="' . get_template_directory_uri() . '/images/icons/cheveron-right-orange.svg" alt="" /></a></p>';
        echo '</div>';
    else:
        echo '<h1>' . get_the_title() . '</h1>';
        the_content();
    endif; 
    ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>