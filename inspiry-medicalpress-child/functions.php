<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/bootstrap.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/animations.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/font-awesome.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/datepicker.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/swipebox.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/meanmenu.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/main.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/custom-responsive.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/custom.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/dynamic-css.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/bootstrap/theme.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function dynamic_section($sections) {
    $sections[] = array(
        'title' => __('Child theme settings', 'framework'),
        'desc' => __('<p class="description">Child theme settings. If the same settings are available in the parent theme, the child theme settings will have higher priority.', 'framework'),
        'icon' => 'el-icon-paper-clip',
        'fields' => array(
            array(
                'id'    => 'display-post-meta',
                'type'  => 'switch',
                'title' => 'Display post metadata',
                'subtitle' => __('Display or hide date and author info on the start page', 'framework'),
                'default'   => 0,
                'on'        => __('Display','framework'),
                'off'       => __('Hide','framework')
            ),
            array(
                'id'    => 'display-post-link',
                'type'  => 'switch',
                'title' => 'Display post link',
                'subtitle' => __('Display or hide the "Read More" link on the start page', 'framework'),
                'default'   => 0,
                'on'        => __('Display','framework'),
                'off'       => __('Hide','framework')
            ),
            array(
                'id'    => 'display-banner',
                'type'  => 'switch',
                'title' => 'Display banner',
                'subtitle' => __('Display or hide the banner on all pages', 'framework'),
                'default'   => 0,
                'on'        => __('Display','framework'),
                'off'       => __('Hide','framework')
            )
        )
    );
    $sections[] = array(
                'title' => __('Home - Doctors', 'framework'),
                'desc' => __('<p class="description">Override the parent theme settings for the doctor\'s widget on the start page.', 'framework'),
                'subsection' => true,
                'fields' => array(

                    array(
                        'id'       => 'home_doctors_count',
                        'type'     => 'select',
                        'title'    => __('Number of Doctors to Display', 'framework'),
                        'options'  => array(
                            '1' => '1',
                            '2' => '2',
                            '3' => '3',
                            '4' => '4',
                            '5' => '5',
                            '10000' => 'Inf'
                        ),
                        'default'  => '4',
                    )
                )
            );

    return $sections;
}


/*-----------------------------------------------------------------------------------*/
/*	Load Required JS Scripts
/*-----------------------------------------------------------------------------------*/
if (!function_exists('vchn_load_scripts')) {
    function vchn_load_scripts() {
        if (!is_admin()) {

            global $theme_options;

            /* Defining scripts directory uri */
            $js_path = get_stylesheet_directory_uri() . '/js/';
            $inspiry_localized_data = array();

            /* Registering Custom Script */
            wp_register_script('vchn-script', $js_path . 'vchn.js', array('jquery','velocity','meanmenu'), '1.0', true);

            wp_enqueue_script('vchn-script');
        }
    }
}
add_action('wp_enqueue_scripts', 'vchn_load_scripts');
