<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('SC_AboutUs', array(
    'name'      => __('About Us'),
    'category'  => __('Restaurant'),
    'priority'  => 2,
    'thumbnail' =>  $link_img_ux_gallery,
    'overlay'   => true,
    'options' => array(
        'class' => array(
            'type' => 'textfield',
            'heading' => 'Class',
            'full_width' => true,
        ),
        'sub_title' => array(
            'type' => 'textfield',
            'heading' => 'Sub Title',
            'full_width' => true,
        ),
        'text_title' => array(
            'type' => 'textfield',
            'heading' => 'Tiêu đề',
            'full_width' => true,
        ),
        'text_description' => array(
            'type' => 'textarea',
            'heading' => 'Mô tả',
            'full_width' => true,
        ),
        'style' => array(
            'type' => 'select',
            'heading' => 'Mẫu',
            'default' => 'style1',
            'options' => array(
                'style1' => 'Paging',
                'style2' => ' Carousel',
                'style3' => ' Grid View',
            ),
        ),
    ),
));