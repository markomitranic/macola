<?php

    /**
     * Add Scripts and Styles. Remove jQuery because we include our own.
     */
    add_action( 'wp_enqueue_scripts', 'custom_styles' );
    add_action( 'wp_enqueue_scripts', 'custom_scripts' );
    if (!is_admin()) {
        add_action('wp_enqueue_scripts', 'deregisterJQuery');
    }

    function custom_styles() {
        wp_register_style( 'core-css', get_template_directory_uri() . '/css/style.css' );
        wp_enqueue_style( 'core-css' );
    }
    function custom_scripts() {
        wp_register_script( 'compiled-scripts', get_template_directory_uri() . '/scripts/scripts.min.js', 1.0, true );
        wp_enqueue_script( 'compiled-scripts' );
    }
    function deregisterJQuery() {
        wp_deregister_script('jquery');
    }

    /**
     * Register navigation menus
     */
    add_action( 'init', 'register_my_menus' );
    function register_my_menus() {
      register_nav_menus( array(
        'main_nav' => 'Main Navigation Menu',
        'main_nav_mobile' => 'Main Nav Menu MOBILE',
        'footer_menu' => 'Footer Menu',
      ) );
    }

    /**
     * Add thumbs options
     **/
    add_theme_support( 'post-thumbnails' );

    /**
     * $name, $min-width, $min-height, $crop
     **/
    add_image_size( 'pretraga', 260, 190, true ); 
    add_image_size( 'footer', 64, 64, true ); 

    /**
     * We all need a debug method. The second parameter is optional
     * and decides if php is set to die after printing the var.
     */
    function dd($input, $die = false) {
        echo '<pre>';
        print_r($input);
        echo '</pre>';
        if ($die) {
            die();
        }
    }

    /**
     *  Set up ACF Theme Options page.
     **/
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'  =>  'Template Options',
            'menu_title'  =>  'Template Options',
            'menu_slug'   =>  'template-options',
            'capability'  =>  'edit_posts',
            'parent_slug' =>  'themes.php',
            'position'    =>  false,
            'icon_url'    =>  false
        ));
    }

    /**
     * Hide ACF field group menu item on administration pages
     **/
//     add_filter('acf/settings/show_admin', '__return_false');

    /**
     * Need to use permanent redirection? Easy peasy.
     */
    function Redirect($url, $permanent = 302) {
        wp_redirect($url, $permanent);
        //header('Location: ' . $url, true, $permanent);
        exit();
    }

    /**
     * A propper way to implement WP Titles.
     */
//    add_filter('wp_title', 'change_the_title');

    function change_the_title($title) {
        return $title . ' ~ ' . get_bloginfo('name');
    }

    /**
     * Disable galleries support
     */
    add_action( 'admin_head_media_upload_gallery_form', 'mfields_remove_gallery_setting_div' );
    if( !function_exists( 'mfields_remove_gallery_setting_div' ) ) {
        function mfields_remove_gallery_setting_div() {
            print '
                <style type="text/css">
             #gallery-settings *{
                   display:none;
               }
            </style>';
        }
    }

    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');

    add_filter( 'get_search_form', 'my_search_form' );
    function my_search_form( $form ) {
        $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) .'" >
        <div>
        <input type="text" class="search-query" placeholder="Pretraga..." value="' . get_search_query() . '" name="s" id="s" />
        </div>
        </form>';
        return $form;
    }

    function attachment_size($id) {
        $size = filesize(get_attached_file($id));
        return $size;
    }

    function get_cenovnik() {
        switch (get_field('tip_cenovnika')) {
            case 'code':
                get_template_part('cenovnik/code');
                break;

            case 'horizontalni':
                get_template_part('cenovnik/horizontalni');
                break;

            case 'picker':
                get_template_part('cenovnik/picker');
                break;
            
            default:
                echo '';
                break;
        }
    }
