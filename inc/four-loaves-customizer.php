<?php

// Include the FourLoves_Sanitize class
require get_stylesheet_directory(  ) . "/inc/four-loves-sanitize-data.php";
$data_sanitizer = new FourLovesSanitizeData();

// Define the customizer class
class FourLoavesCustomize{

    // when object is created, hook the register_customize_sections function defined below
    public function __construct(){
        add_action("customize_register",array($this,'register_customize_sections'));
    }


    // register all the customize functions
    public function register_customize_sections($wp_customize){
        // Init section
        $this -> landing_page_customize($wp_customize);
    }

    // Landing Page Section , Setting and Controls
    private function landing_page_customize($wp_customize){    
       
        // Add Section - Main
        $wp_customize -> add_section('landing-page-customize-section',array(

            // Title of the Section
            'title' => __( 'Landing Page' ),

            // Description when section is opened
            'description' => __( 'Edit Your Home Page Here' ),
            
            // Where to place it in the list -> Lower priority means higher up the list
            'priority' => 1,
        ));


        // Add Setting For title - color
        $wp_customize->add_setting( 'landing-page-title-color-setting', array(
            // Default value of setting
            'default' => '#f7fff7',
            //  // callback function to sanitize data 
            // 'sanitize_callback' => '$data_sanitizer->sanitize_custom_text    ',
        ) );

        // Add control For title - color
        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'landing-page-title-color-control',array(
                
                // Label of the control
                'label' => __("Color","Four Loaves"),

                // Which Section to add to
                'section' => 'landing-page-customize-section',

                // Which setting to save the value to , after sanitized by the settings sanitize callback
                'settings' => 'landing-page-title-color-setting',

            ))
        );

         // Add Setting For image - color
        $wp_customize->add_setting( 'landing-page-header-image-setting', array(
            // Default value of setting
            'default' => '../images/landing_page_background.jpg',
            //  // callback function to sanitize data 
            // 'sanitize_callback' => '$data_sanitizer->sanitize_custom_text',
        ) );

         $wp_customize -> add_control(
            new  WP_Customize_Media_Control($wp_customize,'landing-page-header-image-control',array(
                
                // Label of the control
                'label' => __("Header Image","Four Loaves"),

                // Which Section to add to
                'section' => 'landing-page-customize-section',

                // Which setting to save the value to , after sanitized by the settings sanitize callback
                'settings' => 'landing-page-header-image-setting',

            ))
        );



        // Add Setting for slogan content
        $wp_customize->add_setting( 'landing-page-slogan-setting', array(
            
            // Default value of setting
            'default' => 'From Farm to Fork',

            // callback function to sanitize data 
            'sanitize_callback' => '$data_sanitizer->sanitize_custom_text',
        ) );

        // Add Control for slogan content
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'landing-page-slogan-control',array(
                
                // Label of the control
                'label' => "Site Slogan",

                // Which Section to add to
                'section' => 'landing-page-customize-section',

                // Which setting to save the value to , after sanitized by the settings sanitize callback
                'settings' => 'landing-page-slogan-setting',

                // Type of field to display
                'type' => 'textarea',
            ))
        );


        // Add Setting for Call To Action Button - Display
        $wp_customize->add_setting( 'landing-page-cta-display-setting', array(
            
            // Default value of setting
            'default' => 'Yes',
        ) );
    
        // Add Control for CTA - Display
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'landing-page-cta-display-control',array(
                
                // Label of the control
                'label' => "Show the Call to Action Button",

                // Which Section to add to
                'section' => 'landing-page-customize-section',

                // Which setting to save the value to , after sanitized by the settings sanitize callback
                'settings' => 'landing-page-cta-display-setting',

                // Type of field to display
                'type' => 'radio',

                // Choices for the select
                'choices' => array('Yes' => 'Yes', "No" => 'No'),
            ))
        );

        
        // Add Setting for CTA - Content
         $wp_customize->add_setting( 'landing-page-cta-content-setting', array(
            // Default value of setting
            'default' => 'Make a reservation',

             // callback function to sanitize data 
            'sanitize_callback' => '$data_sanitizer->sanitize_custom_text    ',
        ) );
        // Add Control for CTA - Content
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'landing-page-cta-content-control',array(
                
                // Label of the control
                'label' => "Call To Action Text",

                // Which Section to add to
                'section' => 'landing-page-customize-section',

                // Which setting to save the value to , after sanitized by the settings sanitize callback
                'settings' => 'landing-page-cta-content-setting',

                // Type of field to display
                'type' => 'text',

               
            ))
        );
        
        
      
    }
}

?>