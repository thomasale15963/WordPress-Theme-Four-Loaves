<?php

// Function to register one style
function fl_register_style($style_name,$file_name,$dependencies){
    wp_enqueue_style( $style_name,get_template_directory_uri(  ) . "/assets/css/" . $file_name, $dependencies, "1.0",'all' );
}

// Function to register all styles
function fl_register_all_styles(){

    // EnqueueFonts
    fl_register_style("fonts","fonts.min.css",array());

     // Enqueue Interactions
    fl_register_style("interactions","interaction.css",array());

     // Enqueue Main
    fl_register_style("main-css","main.min.css",array("fonts"));
   
}

// Hook Function
add_action( "wp_enqueue_scripts", "fl_register_all_styles" );


// Function to register js
function fl_register_script(){
    wp_enqueue_script( "main-js",get_template_directory_uri(  ) . "/assets/js/index.js" , array(), "1.0",true );
}

// Hook Function
add_action( "wp_enqueue_scripts", "fl_register_script" );




// Create an object of FourLoaves_Customize
require get_stylesheet_directory(  ) . "/inc/four-loaves-customizer.php";
new FourLoavesCustomize();


// Css Customizer
function fl_customize_css(){ ?>

<style>
h1 {
    color: <?php echo get_theme_mod("landing-page-title-color-setting") ?>;
    font-family: <?php echo get_theme_mod("landing-page-title-font-type-setting")?>;
}

.landing-page-left-section-headline {
    font-family: <?php echo get_theme_mod("landing-page-title-font-type-setting")?>;
    font-size: <?php echo get_theme_mod("landing-page-title-font-size-setting") ?>;
    letter-spacing: <?php echo get_theme_mod("landing-page-title-font-spacing-setting") ?>;

}
</style>

<?php 
}

add_action( 'wp_head',"fl_customize_css")

?>