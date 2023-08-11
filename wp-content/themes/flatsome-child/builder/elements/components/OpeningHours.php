<?php
$link_img_blog_posts = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/blog_posts.svg';
add_ux_builder_shortcode('SC_OpeningSection', array(
    'name'      => __('Opening Hours'),
    'category'  => __('Restaurant'),
    'priority'  => 3,
    'thumbnail' =>  $link_img_blog_posts,
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
        'align' => array(
            'type' => 'radio-buttons',
            'heading' => __('Căn ảnh'),
            'default' => 'left',
            'options' => array(
                'left'  => array( 'title' => 'Trái'),
                'right'  => array( 'title' => 'Phải'),
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
        'desc' => array(
            'type' => 'textarea',
            'heading' => 'Mô tả',
            'full_width' => true,
        ),
        'namebtn' => array(
            'type' => 'textfield',
            'heading' => 'Nút',
        ),
    ),
));