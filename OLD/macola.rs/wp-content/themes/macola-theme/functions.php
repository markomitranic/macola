<?php



// ADD CSS STYLES
    add_action( 'wp_enqueue_scripts', 'custom_styles' );
    function custom_styles() {
        // Register the style first so that WP knows what we are working with:
        wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_register_style( 'core-css', get_template_directory_uri() . '/style.css' );
        wp_register_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
     
        // Then we need to enqueue them one by one to the theme:
        wp_enqueue_style( 'bootstrap' );
        wp_enqueue_style( 'core-css' );
        wp_enqueue_style( 'fancybox' );
    }
	

// Sometimes it is mandatory to have a special version of jQuery. This should be avoided. And allowed only outside admin panel.
    function deregisterJQuery() {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ( get_template_directory_uri() . "/js/jquery-1.10.2.min.js"), false, '3.1.0');
        wp_enqueue_script('jquery');
    }
    if (!is_admin()) {
        add_action('wp_enqueue_scripts', 'deregisterJQuery');
    }
	


// NOW LETS GET ALL THE JAVASCRIPT
    add_action( 'wp_enqueue_scripts', 'custom_scripts' );
    function custom_scripts() {
        wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', ['jquery'], 1.2, true );
        wp_register_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', ['jquery'], 1.2, true );
        wp_register_script( 'delegate', get_template_directory_uri() . '/js/delegate.js', ['jquery'], 1.2, true );
        wp_register_script( 'rate', get_template_directory_uri() . '/js/rate.js', ['jquery'], 1.2, true );
     
        // Then we need to enqueue them one by one to the theme:
        wp_enqueue_script( 'bootstrap' );
        wp_enqueue_script( 'fancybox' );
        wp_enqueue_script( 'delegate' );
        wp_enqueue_script( 'rate' );
    }

// This function is used to register navigation positions within the theme.
// Usage: https://codex.wordpress.org/Function_Reference/register_nav_menus
    add_action( 'init', 'register_my_menus' );
    function register_my_menus() {
      register_nav_menus( array(
        'main_nav' => 'Main Navigation Menu',
        'main_nav_mobile' => 'Main Nav Menu MOBILE',
        'footer_menu' => 'Footer Menu',
      ) );
    }

// We can add post thumbnails option. This allows the 'Featured Image' field when editing posts.
// Usage: https://codex.wordpress.org/Post_Thumbnails
    add_theme_support( 'post-thumbnails' ); 


// We can add predefined image sizes that wordpress will automatically create while uploading.
// Usage: https://developer.wordpress.org/reference/functions/add_image_size/
// $name, $min-width, $min-height, $crop
    add_image_size( 'pretraga', 260, 190, true ); 
    add_image_size( 'footer', 64, 64, true ); 


// There are a few unneeded tags within our <head>. It looks messy. We can disable/unmount them here/
    remove_action('wp_head', 'rsd_link'); // Weblog client legacy support
    remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer Manifest
    remove_action('wp_head', 'wp_generator'); // Built-in Meta generator



// We all need a debug method. The second parameter is optional and decides if php is set to die after printing the var.
  function debug($input, $die = false) {
    echo '<pre>';
    print_r($input);
    echo '</pre>';
    if ($die) {
      die();
    }
  }



// Lets set up ACF PRO silently.
    // 1. customize ACF paths
    // add_filter('acf/settings/path', 'my_acf_settings_path');
    function my_acf_settings_path( $path ) {
        $path = get_stylesheet_directory() . '/acf-plugin/';
        return $path;
    }
    // add_filter('acf/settings/dir', 'my_acf_settings_dir');
    function my_acf_settings_dir( $dir ) {
        $dir = get_stylesheet_directory_uri() . '/acf-plugin/';
        return $dir;
    }
    // include_once( get_stylesheet_directory() . '/acf-plugin/acf.php' );

    // 2. Hide ACF field group menu item on administration pages
    // add_filter('acf/settings/show_admin', '__return_false');

    // 3. Set up Theme Options page.
    // USAGE EXAMPLE:> the_field('footer_disclaimer', 'option');
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




// Disable galleries support
    // add_action( 'admin_head_media_upload_gallery_form', 'mfields_remove_gallery_setting_div' );
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



    add_filter( 'get_search_form', 'my_search_form' );
    function my_search_form( $form ) {
        $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) .'" >
        <div>
        <input type="text" class="search-query" placeholder="Pretraga..." value="' . get_search_query() . '" name="s" id="s" />
        </div>
        </form>';
        return $form;
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
