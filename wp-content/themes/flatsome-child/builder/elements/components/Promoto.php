<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('Promoto', array(
    'name'      => __('Promoto'),
    'type' => 'container',
    'category'  => __('Mijuri'),
    'priority'  => 9,
    'thumbnail' =>  $link_img_ux_gallery,
    'overlay'   => true,
    'options' => array(
        'img' => array(
            'type' => 'image',
            'heading' => __('Image'),
            'default' => ''
        ),
        'title' => array(
            'type' => 'textarea',
            'heading' => 'Tiêu đề',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
        'link' => array(
            'type' => 'textfield',
            'heading' => 'Đường dẫn',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
    ),
));