<?php
/**
 * Ohable Theme Customizer
 *
 * @package Ohable
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ohable_customize_register($wp_customize)
{
    // Custom Control
    ohable_load_customizers();

    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'ohable_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'ohable_customize_partial_blogdescription',
            )
        );

        // Dropdown menu on homepage
        // $wp_customize->add_section('homepage', array(
        //     'title' => esc_html_x('Homepage Options', 'customizer section title', 'ohable'),
        // ));
        $wp_customize->add_setting('show_latest', array(
            'default'           => 1,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting('limit_latest_posts', array(
            'default'           => 20,
            'sanitize_callback' => 'absint',
        ));

        $wp_customize->add_setting('hp_cat_1', array(
            'default'           => 0,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting('hp_cat_2', array(
            'default'           => 0,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting('hp_cat_3', array(
            'default'           => 0,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting('hp_cat_4', array(
            'default'           => 0,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting('hp_cat_5', array(
            'default'           => 0,
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_setting('hp_cat_6', array(
            'default'           => 0,
            'sanitize_callback' => 'absint',
        ));

        $wp_customize->add_setting('limit_post_per_cat', array(
            'default'           => 5,
            'sanitize_callback' => 'absint',
        ));

        // Latest Posts
        $wp_customize->add_control('limit_latest_posts', array(
            'type'          => 'number',
            'section'       => 'static_front_page',
            'label'         => esc_html__('Number of latest posts.', 'ohable'),
        ));
        $wp_customize->add_control('show_latest', array(
            'section'       => 'static_front_page',
            'type'          => 'checkbox',
            'label'         => esc_html__('Show latest posts', 'ohable'),
        ));

        // Categories
        $wp_customize->add_control(new Ohable_Dropdown_Category_Control($wp_customize, 'hp_cat_1', array(
            'section'       => 'static_front_page',
            'label'         => esc_html__('First Category on Homepage', 'ohable'),
            'description'   => esc_html__('Select the category that the homepage will show posts from.', 'ohable'),
        )));
        $wp_customize->add_control(new Ohable_Dropdown_Category_Control($wp_customize, 'hp_cat_2', array(
            'section'       => 'static_front_page',
            'label'         => esc_html__('Second Category on Homepage', 'ohable'),

        )));
        $wp_customize->add_control(new Ohable_Dropdown_Category_Control($wp_customize, 'hp_cat_3', array(
            'section'       => 'static_front_page',
            'label'         => esc_html__('Third Category on Homepage', 'ohable'),

        )));
        $wp_customize->add_control(new Ohable_Dropdown_Category_Control($wp_customize, 'hp_cat_4', array(
            'section'       => 'static_front_page',
            'label'         => esc_html__('Fourth Category on Homepage', 'ohable'),
        )));

        $wp_customize->add_control(new Ohable_Dropdown_Category_Control($wp_customize, 'hp_cat_5', array(
            'section'       => 'static_front_page',
            'label'         => esc_html__('Fifth Category on Homepage', 'ohable'),
        )));

        $wp_customize->add_control(new Ohable_Dropdown_Category_Control($wp_customize, 'hp_cat_6', array(
            'section'       => 'static_front_page',
            'label'         => esc_html__('Sixth Category on Homepage', 'ohable'),
        )));

        // Limit post per category
        $wp_customize->add_control('limit_post_per_cat', array(
            'type'          => 'number',
            'section'       => 'static_front_page',
            'label'         => esc_html__('Limit Post Per Category', 'ohable'),
        ));
    }
}
add_action('customize_register', 'ohable_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ohable_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ohable_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ohable_customize_preview_js()
{
    wp_enqueue_script('ohable-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), OHABLE_VERSION, true);
}
add_action('customize_preview_init', 'ohable_customize_preview_js');
