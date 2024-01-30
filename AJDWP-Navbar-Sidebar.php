<?php

if ( ! defined( 'ABSPATH' ) ) exit; 

/**
 * Plugin Name:       AJDWP-Navbar-Sidebar
 * Plugin URI:        https://github.com/arash12javadi/
 * Description:       This plugin seamlessly integrates the Bootstrap Navwalker class into your theme. Simply visit Appearance -> Menus and enable the 'AJDWP Menu' checkbox.
 * Version:           1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Arash Javadi
 * Author URI:        https://arashjavadi.com/  
 */


//__________________________________________________________________________//
//                       ADD JAVASCRIPTS AND CSS
//__________________________________________________________________________//

wp_enqueue_script( 'AJDWP_bootstrap-js-4.3.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' );
wp_enqueue_script( 'AJDWP_bootstrap-bundle-4.3.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js' );
wp_enqueue_style( 'AJDWP_bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' );    
wp_enqueue_style( 'AJDWP_fontawsome_4.7.0', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );    
wp_enqueue_script( 'AJDWP_bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js' );    

wp_enqueue_script('AJDWP_navbar_js', plugins_url('/navbar/navbar.js' , __FILE__) );
wp_enqueue_style( 'AJDWP_navbar_CSS', plugins_url( '/navbar/navbar.css' , __FILE__ ), false, '1.0', 'all' );

//__________________________________________________________________________//
//							Add Navigation bar 
//__________________________________________________________________________//

include_once(plugin_dir_path(__FILE__) . '/navbar/navbar.php');

function custom_header_modifications() {
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark //fixed-top">
        <div class="container-fluid">

            <!-- ------------AVATAR UNDER 992px------------ -->

                <?php do_action( 'AJDWP_avatar_sm'); ?>

            <!-- ------------LOGO------------ -->

                <div class="AJDWP_logo">
                    <?php the_custom_logo(); ?>
                </div>

            <!-- ------------Toggle Button------------ -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>


            <!-- --------------------------- N A V B A R --------------------------- -->

                <div class="collapse navbar-collapse" id="mynavbar">

                    <?php do_action('AJDWP_primary_navigation');	?>
                    
                    <div class="search_and_minicart d-flex justify-content-between align-items-center">
                
                        <?php //dynamic_sidebar('AJDWP-header-sidebar'); ?>

                        <!-- ------------MINI CART Red--------------- -->

                        <?php do_action( 'AJDWP_minicart_red'); ?>

                        <!-- ------------MINI CART_2 Blue--------------- -->

                        <?php do_action( 'AJDWP_minicart_blue'); ?>

                        <!-- ------------SEARCH MODAL--------------- -->
                        
                        <?php do_action( 'AJDWP_search_modal'); ?>
                        
                        <!-- ------------AJDWP_search_form--------------- -->
                        <?php do_action( 'AJDWP_search_form'); ?>

                    </div>

                </div>

                <!-- ------------ AVATAR LARGE SCREEN------------ -->
            
                <?php do_action( 'AJDWP_avatar'); ?>

        </div>
    </nav>

  <?php 
}
add_action('wp_head', 'custom_header_modifications');

//__________________________________________________________________________//
//							Add theme Sidebars
//__________________________________________________________________________//

register_sidebar( array(
    'name'          => __( 'AJDWP Page Sidebar', 'AJDWP_theme' ),
    'id'            => 'AJDWP-page-sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );


//-------------------------------------------------------------------------//


register_sidebar( array(
    'name'          => __( 'AJDWP Blog Sidebar', 'AJDWP_theme' ),
    'id'            => 'AJDWP-blog-sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );


//-------------------------------------------------------------------------//


register_sidebar( array(
    'name'          => __( 'AJDWP Search Sidebar', 'AJDWP_theme' ),
    'id'            => 'AJDWP-search-sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );


//-------------------------------------------------------------------------//


register_sidebar( array(
    'name'          => __( 'AJDWP Shop Sidebar', 'AJDWP_theme' ),
    'id'            => 'AJDWP-Shop-sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );


//-------------------------------------------------------------------------//


register_sidebar( array(
    'name'          => __( 'AJDWP Header Sidebar', 'AJDWP_theme' ),
    'id'            => 'AJDWP-header-sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );


//---------------------------- F O O T E R ----------------------------//


register_sidebar( array(
    'name'          => __( 'AJDWP Footer widget 1', 'AJDWP_theme' ),
    'id'            => 'AJDWP-footer-widget-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );

