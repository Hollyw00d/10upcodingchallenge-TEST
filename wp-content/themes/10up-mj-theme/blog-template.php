<?php
/*
Template Name: Blog Template
*/

get_header(); 

//Set pagination
$temp = $wp_query; 
$wp_query = null; 
$wp_query = new WP_Query(); 
$wp_query->query('showposts=5&post_type=post'.'&paged='.$paged); 

while ($wp_query->have_posts()) : $wp_query->the_post();
?> 

    <?php the_post_thumbnail(); ?>
    <?php the_excerpt(); ?>


<?php endwhile; ?>

<div class="navigation" role="navigation">
    <div class="prev-posts blog-nav"><?php next_posts_link('&laquo; Older Entries', 0); ?></div>
    <div class="next-posts blog-nav"><?php previous_posts_link('Newer Entries &raquo;', 0); ?></div>
</div>

<?php 
// Reset blog post
$wp_query = null; 
$wp_query = $temp;

get_footer(); 
?>