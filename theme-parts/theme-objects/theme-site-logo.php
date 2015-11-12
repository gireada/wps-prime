<?php
/**
 * Theme Site Logo.
 *
 * Contains the main site Logo
 *
 * @package wps_prime
 */  

// Site logo
function theme_site_logo(){


$get_image_id = wps_get_theme_option('company_logo');

$output = '';

        // Logo wrapper

        $output .= !is_singular() ? '<h1 data-ui-component="branding">' : '<h2 data-ui-component="branding">';

        if( wps_get_theme_option('logo_setting') == 'brand_title' ){

            $output .=  '<a href="'. get_home_url() .'">'. get_bloginfo('name') .'</a>';
            $output .=  '<span>'. get_bloginfo( 'description' ).'</span>';
                
        }else{
            
            if( $get_image_id ){

                $image = wp_get_attachment_image_src( $get_image_id, 'full'); $logo = $image[0];
    
                $output .= '<a title="'. get_bloginfo('name') .'" href="'. get_home_url() .'">';
                $output .= '<img src="'. $logo .'" alt="'. get_bloginfo('name') .'" class="brand-logo"/>';
                $output .= '</a>';

            }else{

                $output .= '<a href="'. home_url() .'">'. get_bloginfo('name') .'</a>';
                $output .= '<span>'. get_bloginfo( 'description' ) .'</span>';

            }

        }               

    $output .= !is_singular() ? '</h1>' : '</h2>'; 

    echo $output;
}