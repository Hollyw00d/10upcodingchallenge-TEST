<form role="search" method="get" class="searchform med-blue-bg" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-labelledby="search-btn-<?php echo $large_rand_num_accessibility; ?>" id="search-form-<?php echo $large_rand_num_accessibility; ?>">
  <label class="screen-reader-text" for="s"><?php echo _x( 'Search website', 'label' ); ?></label>
  <div class="text-field-wrapper">
  <input type="text" value="<?php echo esc_html(get_search_query()); ?>" placeholder="<?php echo esc_attr_x( 'e.g. delicious sandwiches', 'placeholder' ) ?>"  name="s" class="s search-form-text-input-box" />
  </div>  
  <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/search-black.svg" alt="" /></button>
</form>