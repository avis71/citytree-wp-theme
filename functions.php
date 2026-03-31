<?php
/**
 * CityTree Theme Functions
 */

// Theme setup
function citytree_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );

    register_nav_menus( array(
        'primary' => 'תפריט ראשי',
    ) );
}
add_action( 'after_setup_theme', 'citytree_setup' );

// Enqueue styles and scripts
function citytree_enqueue_assets() {
    // Bootstrap 4
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css',
        array(),
        '4.6.2'
    );

    // Google Fonts: Assistant, Proza Libre, Frank Ruhl Libre
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700&family=Proza+Libre:wght@400;700&family=Frank+Ruhl+Libre:wght@300;400;500&display=swap',
        array(),
        null
    );

    // Main theme CSS
    wp_enqueue_style(
        'citytree-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array( 'bootstrap', 'google-fonts' ),
        '1.0'
    );

    // Bootstrap 4 JS + jQuery (Bootstrap 4 requires jQuery)
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script(
        'popper',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',
        array( 'jquery' ),
        '1.16.1',
        true
    );
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js',
        array( 'jquery', 'popper' ),
        '4.6.2',
        true
    );

    // Theme JS
    wp_enqueue_script(
        'citytree-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'jquery', 'bootstrap' ),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'citytree_enqueue_assets' );

// Remove WordPress emoji scripts (not needed)
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Redirect /contact to external minisite
function citytree_contact_redirect() {
    if ( is_page( 'contact' ) ) {
        wp_redirect( 'https://citytree.minisite.ms/info', 301 );
        exit;
    }
}
add_action( 'template_redirect', 'citytree_contact_redirect' );

// Site title
add_filter( 'pre_get_document_title', function() {
    return 'עץבעיר - מרכז ידע לאקולוגיה עמוקה';
} );

// Helper: template directory URI shorthand
function ct_asset( $path ) {
    return get_template_directory_uri() . '/assets/' . ltrim( $path, '/' );
}
