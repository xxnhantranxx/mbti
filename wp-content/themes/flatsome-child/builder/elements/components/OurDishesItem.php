<?php
$link_img_forms = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/forms.svg';
add_ux_builder_shortcode('SC_ItemOurDishes', array(
    'name'      => __('OurDishes Item'),
    'category'  => __('Restaurant'),
    'priority'  => 5,
    'thumbnail' =>  $link_img_forms,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'title' => array(
            'type' => 'textfield',
            'heading' => 'Nội dung',
        ),
        'id' => array(
            'type' => 'image',
            'heading' => __('Image'),
            'default' => ''
        ),
        'Link' => array(
            'type' => 'textfield',
            'heading' => 'Đường dẫn',
        ),
        'blank' => array(
            'type' => 'checkbox',
            'heading' => __('Tab mới'),
            'default' => false,
        ),
    ),
));