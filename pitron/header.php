<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pitron
 */
?>

<!doctype html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php //if (is_singular() && pings_open(get_queried_object())) : ?>
    <?php //endif; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!--Favicon-->
    <!-- <link rel="icon" href="<?php //echo PROVIEW_THEME_IMG_DIR. 'favicon.png' ?>" type="image/jpg" /> -->
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!-- preloader start-->
    <?php
        
        do_action('pitron_preloader'); 
    ?>
    <!-- preloader end -->

   
    <!-- header start -->
    <?php
        if( get_theme_mod('pitron_navbar_chooser') === 'navbar_1' ){
            do_action('pitron_header_style_one'); 
        }
        elseif( get_theme_mod('pitron_navbar_chooser') === 'navbar_2' ){
            do_action('pitron_header_style_two'); 
        }
        elseif( get_theme_mod('pitron_navbar_chooser') === 'navbar_3' ){
            do_action('pitron_header_style_three'); 
        }
        else{
            do_action('pitron_header_style_one'); 
        }
    ?>
    <!-- header end -->