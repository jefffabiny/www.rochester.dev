<?php
function theme_setup()
{
    // Enqueue scripts and styles
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true);
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/custom.min.css', array(), '1.0', 'all');
    wp_enqueue_style('core-styles', get_template_directory_uri() . '/css/core.min.css', array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@100..800&family=Jura:wght@300..700&family=Six+Caps&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'theme_setup');

function custom_theme_setup()
{
    // Add support for custom menus
    add_theme_support('menus');
}
add_action('after_setup_theme', 'custom_theme_setup');
function register_theme_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));
}
add_action('init', 'register_theme_menus');

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    // Add custom markup before each menu item
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Start the menu item list item
        $output .= $indent . '<li>';

        // Start the menu item anchor tag
        $output .= '<a href="' . esc_url($item->url) . '" class="row marker-contain">';

        // Add marker div
        $output .= '<div class="marker"><span>↗</span></div>';

        // Render the menu item text
        $output .= $item->title;

        // Close the menu item anchor tag
        $output .= '</a>';

        // Close the menu item list item
        $output .= '</li>';
    }
}
