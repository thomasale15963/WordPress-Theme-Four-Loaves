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

        /**
         *  
         * Title
         * 
         * */ 
         // Title Color
        $wp_customize->add_setting( 'landing-page-title-color-setting', array(
            'default' => '#f7fff7',
        ) );
        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize,'landing-page-title-color-control',array(
                // Label of the control
                'label' => __("Font Color","Four Loaves"),
                // Which Section to add to
                'section' => 'landing-page-customize-section',
                // Which setting to save the value to , after sanitized by the settings sanitize callback
                'settings' => 'landing-page-title-color-setting',

            ))
        );
        // Title Font
        $wp_customize->add_setting( 'landing-page-title-font-type-setting', array(
            'default' => 'Dancing Script',
        ) );
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'landing-page-title-font-type-control',array(
                // Label of the control
                'label' => __("Font Family","Four Loaves"),
                // Which Section to add to
                'section' => 'landing-page-customize-section',
                // Which setting to save the value to , after sanitized by the settings sanitize callback
                'settings' => 'landing-page-title-font-type-setting',
                'type' => 'select',
                'choices' => array("Poppins"=>"Poppins","Dancing Script" => "Dancing Script","Lobster Two" => "Lobster Two"),

            ))
        );
        // Title Size
        $wp_customize->add_setting( 'landing-page-title-font-size-setting', array(
            'default' => '54px',
        ) );
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'landing-page-title-font-size-control',array(
                // Label of the control
                'label' => __("Font Size","Four Loaves"),
                // Which Section to add to
                'section' => 'landing-page-customize-section',
                // Which setting to save the value to , after sanitized by the settings sanitize callback
                'settings' => 'landing-page-title-font-size-setting',
                'type' => 'select',
                'choices' => array("50px"=>"50px","52px"=>"52px","54px"=> "54px","56px"=>"56px","58px"=>"58px","80px"=>"80px"),

            ))
        );
         // Title Spacing
        $wp_customize->add_setting( 'landing-page-title-font-spacing-setting', array(
            'default' => '1px',
        ) );
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'landing-page-title-font-spacing-control',array(
                // Label of the control
                'label' => __("Letter Spacing","Four Loaves"),
                // Which Section to add to
                'section' => 'landing-page-customize-section',
                // Which setting to save the value to , after sanitized by the settings sanitize callback
                'settings' => 'landing-page-title-font-spacing-setting',
                'type' => 'select',
                'choices' => array("0.5px"=>"0.5px","1px"=>"1px","4px"=> "4px","10px"=>"10px","20px"=>"20px"),

            ))
        );

        
        /**
         * 
         * Slogan
         * 
         */
        
        // Slogan Content
        $wp_customize->add_setting( 'landing-page-slogan-content-setting', array(
            'default' => 'From Farm to Fork',
            // 'sanitize_callback' => 'sanitize_custom_text',
        ) );
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'landing-page-slogan-content-control',array(
                'label' => "Content",
                'section' => 'landing-page-customize-section',
                'settings' => 'landing-page-slogan-content-setting',
                'type' => 'text',
            ))
        );


        /**
         * 
         * CTA Button
         * 
         */
         // CTA Display
        $wp_customize->add_setting( 'landing-page-cta-display-setting', array(
            'default' => 'Yes',
        ) );
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'landing-page-cta-display-control',array(
                'label' => "Show the Call to Action Button",
                'section' => 'landing-page-customize-section',
                'settings' => 'landing-page-cta-display-setting',
                'type' => 'radio',
                'choices' => array('Yes' => 'Yes', "No" => 'No'),
            ))
        );

        // CTA Content
        $wp_customize->add_setting( 'landing-page-cta-content-setting', array(
            'default' => 'Make a reservatio',
        ) );
        $wp_customize -> add_control(
            new WP_Customize_Control($wp_customize,'landing-page-cta-content-control',array(
                'label' => "Call To Action Text",
                'section' => 'landing-page-customize-section',
                'settings' => 'landing-page-cta-content-setting',
                'type' => 'text',
            ))
        );
        
        /**
         * 
         * Header Image
         * 
         */
         // Image
        $wp_customize->add_setting( 'landing-page-header-image-setting', array(
            'default' => '../images/landing_page_background.jpg',
        ) );

         $wp_customize -> add_control(
            new  WP_Customize_Media_Control($wp_customize,'landing-page-header-image-control',array(
                'label' => __("Header Image","Four Loaves"),
                'section' => 'landing-page-customize-section',
                'settings' => 'landing-page-header-image-setting',

            ))
        );
    }


  
}

?>