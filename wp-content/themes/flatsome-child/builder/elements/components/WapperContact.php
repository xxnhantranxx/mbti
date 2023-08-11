<?php
$link_img_section = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/section.svg';
add_ux_builder_shortcode('SC_WapperContact', array(
    'type' => 'container',
    'allow' => array( 'contact-form-7'),
    'name'      => __('Wapper Contact'),
    'category'  => __('Restaurant'),
    'priority'  => 8,
    'thumbnail' =>  $link_img_section,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'class' => array(
            'type' => 'radio-buttons',
            'heading' => __('Layout'),
            'default' => 'verticalitem',
            'options' => array(
                'verticalitem'  => array( 'title' => 'Chiều dọc'),
                'horizontalitem'  => array( 'title' => 'Chiều ngang'),
            ),
        ),
    ),
));