<?php
/*
* WPS Custom column row options setup
*/

function wps_vc_row_shortcode(){

    // Remove Default Parameters
    vc_remove_param('vc_row','full_width');    
    vc_remove_param('vc_row','gap');
    vc_remove_param('vc_row','css');
    vc_remove_param('vc_row','full_height');
    vc_remove_param('vc_row','equal_height');
    vc_remove_param('vc_row','columns_placement');
    vc_remove_param('vc_row','content_placement');
    vc_remove_param('vc_row','video_bg');
    vc_remove_param('vc_row','parallax');
    vc_remove_param('vc_row','el_id');
    vc_remove_param('vc_row','el_class');
    vc_remove_param('vc_row','video_bg_url');
    vc_remove_param('vc_row','video_bg_parallax');
    vc_remove_param('vc_row','parallax_image');
    vc_remove_param('vc_row','parallax_speed_bg');
    vc_remove_param('vc_row','parallax_speed_video');
    vc_remove_param('vc_row','disable_element');
    vc_remove_param('vc_row','css_animation');

    // Add custom parameters
    $attributes = array(
        array(
            'type' => 'dropdown',
            'heading' => "Row horizontal align",
            'admin_label' => true,
            'param_name' => 'row_h_align',
            'value' => wps_row_horizontal_align(),
            'std' => '',
            'description' => __('Set horizontal alignment of the grid columns', 'wps-prime')
        ),
         array(
            'type' => 'dropdown',
            'heading' => "Row verical align",
            'admin_label' => true,
            'param_name' => 'row_v_align',
            'value' => wps_row_vertical_align(),
            'std' => '',
            'description' => __('Set vertical alignment of the grid columns', 'wps-prime')
        ),
        array(
            'type' => 'dropdown',
            'heading' => "Row columns spacing",
            'admin_label' => true,
            'param_name' => 'row_adjust',
            'value' => wps_row_adjust(),
            'std' => '',
            'description' => __('Adjust column spacing', 'wps-prime')
        ),

        array(
            'type' => 'textfield',
            'heading' => "Custom row CSS class",
            'admin_label' => true,
            'param_name' => 'class',
            'value' => '',
            'description' => __('Add optional CSS classes to the row element, classes can contain the column control classes defined in the theme css architecture', 'wps-prime')
        ),

        array(
            'type' => 'checkbox',
            'heading' => "Add wrapper",
            'param_name' => 'wrapper',
            'admin_label' => true,
            'value' => '',
            'description' => __('Add wrapper container around the row, this is useful if you want to contain elements wne you are using the full width template. Options true/false(default false)', 'wps-prime')
        ),

        array(
            'type' => 'textfield',
            'heading' => "Wrapper CSS class",
            'admin_label' => true,
            'param_name' => 'wrapper_class',
            'value' => '',
            'description' => __('Add optional CSS class to the wrapper (if activated). Optional classes can contain background color extra paddings or any CSS rule that would apply to the wrapper. This setting requires a good knowledge of the css architecture used in the theme', 'wps-prime')
        ),
        
        array(
            'type' => 'textfield',
            'heading' => "Wrapper outer CSS class",
            'admin_label' => true,
            'param_name' => 'holder_class',
            'value' => '',
            'description' => __('Add custom class to be applied on the row outer holder element. Ex: add (predefined) class that centers the background image', 'wps-prime')
        ),
        array(
            'type' => 'textfield',
            'heading' => "Wrapper outer ID",
            'admin_label' => true,
            'param_name' => 'holder_id',
            'value' => '',
            'description' => __('Add unique ID to be applied on the row outer holder element.', 'wps-prime')
        ),
        // Only for VC UI functionality
        array(
            'type' => 'checkbox',
            'heading' => "Wrapper outer margin",
            'param_name' => 'holder_set_margin',
            'admin_label' => false,
            'value' => '',
            'group' => esc_html__( 'Margins/Paddings', 'wps-prime' ),
        ),
        /////////////////////////////////

        array(
            'type' => 'wps_margin',
            'heading' => "Wrapper Outer Margin Settings",
            'param_name' => 'holder_margin',
            'admin_label' => true,
            'dependency' => array('element' => 'holder_set_margin', 'value' => 'true'),
            'group' => esc_html__( 'Margins/Paddings', 'wps-prime' ),
        ),

        // Only for VC UI functionality
        array(
            'type' => 'checkbox',
            'heading' => "Wrapper outer padding",
            'param_name' => 'holder_set_padding',
            'admin_label' => false,
            'value' => '',
            'group' => esc_html__( 'Margins/Paddings', 'wps-prime' ),
        ),
        /////////////////////////////

        array(
            'type' => 'wps_padding',
            'heading' => "Wrapper Outer Padding Settings",
            'param_name' => 'holder_padding',
            'admin_label' => true,
            'dependency' => array('element' => 'holder_set_padding', 'value' => 'true'),
            'group' => esc_html__( 'Margins/Paddings', 'wps-prime' ),
        ),

        array(
            'type' => 'attach_image',
            'heading' => "Wrapper outer image",
            'admin_label' => true,
            'param_name' => 'holder_img',
            'value' => '',
            'group' => __( 'Outer Bg-Image/Fx', 'wps-prime' ),
            'description' => __('Add image to be used as a background for the current row. Limit to 1 image', 'wps-prime')
        ),

        array(
            'type' => 'dropdown',
            'heading' => "Wrapper outer image size",
            'param_name' => 'holder_img_size',
            'admin_label' => true,
            'value' => wps_image_sizes(),
            'std' => 'full',
            'group' => __( 'Outer Bg-Image/Fx', 'wps-prime' ),
            'description' => __('Add image to be used as a background for the current row. Limit to 1 image', 'wps-prime')
        ),
        array(
            'type' => 'dropdown',
            'heading' => "Background image behavior",
            'param_name' => 'holder_img_behave',
            'admin_label' => true,
            'value' => wps_bg_behavior(),
            'std' => '',
            'group' => __( 'Outer Bg-Image/Fx', 'wps-prime' ),
            'description' => __('Background image behavior settings', 'wps-prime')
        ),
        array(
            'type' => 'dropdown',
            'heading' => "Background position",
            'param_name' => 'holder_img_pos',
            'admin_label' => true,
            'value' => wps_bg_positions(),
            'std' => '',
            'group' => __( 'Outer Bg-Image/Fx', 'wps-prime' ),
            'description' => __('Background Image Position', 'wps-prime')
        ),
        array(
            'type' => 'checkbox',
            'heading' => "Use parallax",
            'param_name' => 'use_parallax',
            'value' => array( __( 'Yes', 'wps-prime' ) => 'yes' ),
            'admin_label' => true,
            'group' => __( 'Outer Bg-Image/Fx', 'wps-prime' ),
            'description' => __('Use parallax', 'wps-prime')
        ),
        array(
            'type' => 'dropdown',
            'heading' => "Background Color",
            'param_name' => 'holder_bg_fx',
            'admin_label' => true,
            'value' => wps_bg_fx(),
            'std' => '',
            'group' => __( 'Outer Bg-Image/Fx', 'wps-prime' ),
            'description' => __('Background Effects', 'wps-prime')
        ),
        array(
            'type' => 'checkbox',
            'heading' => "Use video background",
            'param_name' => 'v_bg',
            'value' => array( __( 'Yes', 'wps-prime' ) => 'yes' ),
            'admin_label' => true,
            'group' => __( 'Outer Bg-Video', 'wps-prime' ),
            'description' => __('Enable Video Background', 'wps-prime')
        ),
        array(
            'type' => 'textfield',
            'heading' => "Add Youtube link",
            'param_name' => 'v_youtube',
            'admin_label' => true,
            'value' => '',
            'std' => '',
            'group' => __( 'Outer Bg-Video', 'wps-prime' ),
            'description' => __('Paste the youtube link', 'wps-prime')
        ),  
        array(
            'type' => 'textfield',
            'heading' => "Add self hosted video ID",
            'param_name' => 'v_hosted',
            'admin_label' => true,
            'value' => '',
            'std' => '',
            'group' => __( 'Outer Bg-Video', 'wps-prime' ),
            'description' => __('See the video ID in the media library (mp4)', 'wps-prime')
        ),
        array(
            'type' => 'attach_image',
            'heading' => "Video background placeholder image",
            'param_name' => 'v_placeholder',
            'admin_label' => true,
            'value' => '',
            'std' => '',
            'group' => __( 'Outer Bg-Video', 'wps-prime' ),
            'description' => __('Add a background Image for the video. (only for self hosted video)', 'wps-prime')
        ), 
  

        array(
            'type' => 'checkbox',
            'heading' => "Equal height columns",
            'param_name' => 'grid_col_equal_height',
            'value' => array( __( 'Yes', 'wps-prime' ) => 'yes' ),
            'admin_label' => true,
            'group' => __( 'Advanced', 'wps-prime' ),
            'description' => __('Once set this option on the row, must set equal height on each direct child columns as well.', 'wps-prime')
        ),
        array(
            'type' => 'checkbox',
            'heading' => "Full-screen height row",
            'param_name' => 'grid_col_full_height',
            'value' => array( __( 'Yes', 'wps-prime' ) => 'yes' ),
            'admin_label' => true,
            'group' => __( 'Advanced', 'wps-prime' ),
            'description' => __('Make the row height equal the device height.', 'wps-prime')
        ),
    );

    vc_add_params('vc_row',$attributes);
    vc_map_update('vc_row', array('html_template' => locate_template('vc_templates/vc_row.php')) );
}