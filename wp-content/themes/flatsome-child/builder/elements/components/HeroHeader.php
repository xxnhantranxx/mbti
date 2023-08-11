<?php
$link_img_ux_banner = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_banner.svg';
add_ux_builder_shortcode('SC_IntroSection', array(
    'name'      => __('Hero Header'),
    'category'  => __('Restaurant'),
    'priority'  => 1,
    'thumbnail' =>  $link_img_ux_banner,
    'overlay'   => true,
    'options' => array(
        'id' => array(
            'type' => 'image',
            'heading' => __('Image'),
            'default' => ''
        ),
        'class' => array(
            'type' => 'textfield',
            'heading' => 'Class',
        ),
        'position' => array(
            'type' => 'select',
            'heading' => 'Vị trí',
            'default' => 'key_ok',
            'options' => array(
                'key_ok' => 'Trái',
                'key_no' => 'Giữa',
            ),
        ),
        'sub_title' => array(
            'type' => 'textfield',
            'heading' => 'Sub Title',
        ),
        'text_title' => array(
            'type'       => 'textarea',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
            'heading' => 'Tiêu đề',
        ),
        'text_button' => array(
            'type' => 'textfield',
            'heading' => 'Nút Ấn',
        ),
        'link_button' => array(
            'type' => 'textfield',
            'heading' => 'Link Nút',
        ),
    ),
));