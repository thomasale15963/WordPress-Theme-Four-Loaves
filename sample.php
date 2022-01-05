<?php
   // Add Section - Main
        $wp_customize -> add_section('landing-page-customize-section',array(

            // Title of the Section
            'title' => __( 'Landing Page' ),

            // Description when section is opened
            'description' => __( 'Edit Your Home Page Here' ),
            
            // Where to place it in the list -> Lower priority means higher up the list
            'priority' => 1,
            
            'panel' => '', // Not typically needed.
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
        ));

        // Setting
        $wp_customize -> add_setting('basic-author-callout-display',array(
            // Default value of setting
            'default' => 'From Farm to Fork',

            // callback function to sanitize data 
            'sanitize_callback' => '$data_sanitizer->sanitize_custom_text',
            
            // if change is theme specific or not. If not goes to the wp_option table and becomes for all themes
            'type' => 'theme_mod', // or 'option'
            
            
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
            'transport' => 'refresh', // or postMessage
            'sanitize_js_callback' => '', // Basically to_json.
        ));

        // Control
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'basic-author-callout-display-control',array(
                'label' => "Display this section ?",
                'section' => 'basic-author-callout-section',
                'settings' => 'basic-author-callout-display',
                'type' => 'select',
                'choices' => array('No' => 'No', 'Yes' => 'Yes')
            )));
?>