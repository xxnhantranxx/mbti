<?php
$link_img_map = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/map.svg';
add_ux_builder_shortcode('SC_Contact', array(
    'name'      => __('Contact'),
    'category'  => __('Restaurant'),
    'priority'  => 7,
    'thumbnail' =>  $link_img_map,
    'options' => array(
        'class' => array(
            'type' => 'textfield',
            'heading' => 'Class',
        ),
        'align' => array(
            'type' => 'radio-buttons',
            'heading' => __('Căn Maps'),
            'default' => 'right',
            'options' => array(
                'left'  => array( 'title' => 'Trái'),
                'right'  => array( 'title' => 'Phải'),
                'grid' => array('title' => 'Grid View'),
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
        'hotline' => array(
            'type' => 'textfield',
            'heading' => 'Hotline',
        ),
        'link_hotline' => array(
            'type' => 'textfield',
            'heading' => 'Call Hotline',
        ),
        'email' => array(
            'type' => 'textfield',
            'heading' => 'Email',
        ),
        'link_email' => array(
            'type' => 'textfield',
            'heading' => 'Send Email',
        ),
        'address' => array(
            'type' => 'textfield',
            'heading' => 'Address',
        ),
        'link_address' => array(
            'type' => 'textfield',
            'heading' => 'Link Address',
        ),
        'button' => array(
            'type' => 'textfield',
            'heading' => 'Nút',
        ),
        'link_button' => array(
            'type' => 'textfield',
            'heading' => 'Link Nút',
        ),
        'iframe' => array(
            'type' => 'textarea',
            'heading' => 'Mã nhúng',
            'full_width' => true,
        ),
    ),
));