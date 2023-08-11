<?php
$link_img_forms = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/forms.svg';
add_ux_builder_shortcode('LadipageIntro', array(
    'name'      => __('Ladipage Intro'),
    'category'  => __('Ladipage'),
    'priority'  => 1,
    'thumbnail' =>  $link_img_forms,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'img' => array(
            'type' => 'image',
            'heading' => __('Ảnh'),
            'default' => ''
        ),
        'title' => array(
            'type' => 'textarea',
            'heading' => 'Tiêu đề',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
        'sub_title' => array(
            'type' => 'textarea',
            'heading' => 'Tiêu đề phụ',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
        'button' => array(
            'type' => 'textfield',
            'heading' => 'Nút',
            'full_width' => true,
        ),
        'link_button' => array(
            'type' => 'textfield',
            'heading' => 'Đường dẫn',
            'full_width' => true,
        ),
    ),
));