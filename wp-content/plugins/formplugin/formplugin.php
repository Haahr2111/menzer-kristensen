<?php
/*
*Plugin Name:Contact Form Plugin
*Plugin URI: sorenjakobson.dk/storyscaping
*Description: This is a simple plugin based on HTML5, CSS and PHP with an Contact Form
*Version: 0.0.1
*Author: Søren Jakobson
*Author URI: sorenjakobson.dk
*License: GPL2
*/

function my_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="login-face">';
    $content .= '<div id="promotion-header">';
    
    /*Her kan du ændre teksten som står inde i kassen*/
    
    $content .= '<h1 id="promotion-header-title">Book et møde med<br> Menzer & Kristensen</h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="http://sorenjakobson.dk/storyscaping/">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Ved at tilmelde dig vores nyhedsbrev modtager du også tips og tricks at holde øje med, når man skal bygge nyt hus!
    Vi ringer også til dig, og hører hvor langt I er i processen i, at få realiseret jeres drøm.</p>';
    $content .= '</div>';
    
    /*Herunder kan man rette i input formularen, hvis man vil lave ændringer.*/
  
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="Dit navn" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="number" id="number" placeholder="Dit nummer" name="number" required><i class="fa fa-phone"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="Din e-mail" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    
    /*Heruder kan du ændre på submit knappen*/
    
    $content .= '<input type="checkbox" name="checkbox" required> Ja tak, jeg vil gerne ringes op af en ansat hos Menzer & Kristensen, for at modtage tilbud om en samtale og nyhedsbreve';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="JA TAK – TILMELD NYHEDSBREV!">';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
            return $content;
}

    add_shortcode('show_form_plugin', 'my_form');

    // Register stylesheet with the name - "register_plugin_styles
    add_action('wp_enqueue_scripts', 'register_plugin_styles');


    function register_plugin_styles() {

        /* 
        Syntaks for hvordan man linker/enqueue et stylesheet - eksternt
        wp_enqueue_style('et-unikt-navn','stien til ressourcen');
        For more info - check - https://developer.wordpress.org/themes/basics/including-css-javascript/
        */        
        wp_enqueue_style('fontAwesomeCdn','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800');
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500');
        
        wp_register_style('form_plugin_style', plugins_url('formplugin/css/style.css'));
        
        wp_enqueue_style('form_plugin_style');
        
        /* 
        Syntaks for hvordan man linker/enqueue et stylesheet - eksternt
        wp_enqueue_script('et-unikt-navn','stien til ressourcen','array()','1.7.1','true');
        */        
        wp_deregister_script('jquery');
	    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        //wp_enqueue_script('Customjquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1', true);
        wp_enqueue_script('Customscript', plugins_url('formplugin/js/script.js'), array('jquery'), 'null', true);
        
    }


?>