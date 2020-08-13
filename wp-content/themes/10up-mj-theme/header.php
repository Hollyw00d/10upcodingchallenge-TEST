<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable=yes" />

    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" type="text/css" />    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header>
    <div id="header">

        <div class="wrapper-header-inner">

            <div id="header-top-light-blue">

                <div id="logo-wrapper">
                    <a href="<?php echo get_home_url(); ?>">
                        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Burger Eat Logo" />
                        <h1>Eats.</h1>
                    </a>
                </div>

                <button id="search" aria-label="Search website">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/search-white.svg" alt="" />
                </button>
            </div>

        </div>

        <div class="med-blue-bg">
            <div class="wrapper-header-inner">
                <nav>
                    <?php wp_nav_menu( array( 
                        'sort_column' => 'menu_order', 
                        'container_class' => 'menu-header', 
                        'menu_class' => 'nav', 
                        'container' => false
                    ));
                    ?>
                </nav>
            </div>
        </div>

    </div>
</header>

<div id="wrapper-content">