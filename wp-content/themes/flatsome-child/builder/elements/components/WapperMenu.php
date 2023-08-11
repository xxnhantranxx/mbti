<?php
$link_img_accordion = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/accordion.svg';
add_ux_builder_shortcode('SC_WapperMenu', array(
    'type' => 'container',
    'allow' => array( 'accordion'),
    'name'      => __('Wapper Menu'),
    'category'  => __('Restaurant'),
    'priority'  => 9,
    'thumbnail' =>  $link_img_accordion,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'class' => array(
            'type' => 'radio-buttons',
            'heading' => __('Layout'),
            'default' => 'layout1colunm',
            'options' => array(
                'layout1colunm'  => array( 'title' => 'Một cột'),
                'layout2colunm'  => array( 'title' => 'Hai cột'),
            ),
        ),
        'subtitle' => array(
            'type' => 'textfield',
            'heading' => 'Tiêu đề phụ',
        ),
        'title' => array(
            'type' => 'textfield',
            'heading' => 'Tiêu đề',
        ),
        'description' => array(
            'type' => 'textarea',
            'heading' => 'Mô tả',
            'full_width' => true,
        ),
    ),
));