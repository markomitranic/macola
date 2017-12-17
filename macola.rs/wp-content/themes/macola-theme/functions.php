<?php

    /**
     * Add Scripts and Styles. Remove jQuery because we include our own.
     */
    function custom_styles() {
        wp_register_style( 'core-css', get_template_directory_uri() . '/css/style.css' );
        wp_enqueue_style( 'core-css' );
    }
    function custom_scripts() {
        wp_register_script( 'domain-scripts', get_template_directory_uri() . '/scripts/scripts.min.js', 1.1, true );
        wp_register_script( 'vendor-scripts', get_template_directory_uri() . '/scripts/vendor.js', 1.1, true );
        wp_enqueue_script( 'vendor-scripts' );
        wp_enqueue_script( 'domain-scripts' );
    }
    function deregisterJQuery() {
        wp_deregister_script('jquery');
    }
    add_action( 'wp_enqueue_scripts', 'custom_styles' );
    add_action( 'wp_enqueue_scripts', 'custom_scripts' );
    if (!is_admin()) {
        add_action('wp_enqueue_scripts', 'deregisterJQuery');
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
     * Need to use permanent redirection? Easy peasy.
     */
    function Redirect($url, $permanent = 302) {
        wp_redirect($url, $permanent);
        exit();
    }

    /**
     * A propper way to implement WP Titles.
     */
//    add_filter('wp_title', 'custom_title');

    function custom_title($title) {
        $website = get_bloginfo('name');
        $description = get_bloginfo('description');

        $output = $title;
        $output .= ($title == '') ? '' : ' | ';
        $output .= $website;
        $output .= ' - '.$description;
        return $output;
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

    // Clean up HTML from string to get an excerpt
    function excerpt($text, $words = 7, $ellipsis = true) {
        $text = wp_strip_all_tags($text);
        $text = trim(preg_replace('/\s+/', ' ', $text)); // Remove new lines
        $textArray = explode(' ', $text);
        $text = array_slice($textArray, 0, $words);
        $text = implode(" ", $text);
        if ($ellipsis) { $text .= "…"; }

        return $text;
    }