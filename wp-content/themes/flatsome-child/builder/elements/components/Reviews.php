<?php
$link_img_testimonials = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/testimonials.svg';
add_ux_builder_shortcode('SC_reviewItem', array(
    'name'      => __('Reviews'),
    'category'  => __('Restaurant'),
    'priority'  => 6,
    'thumbnail' =>  $link_img_testimonials,
    'options' => array(
        'name_review' => array(
            'type' => 'textfield',
            'heading' => 'Tên',
        ),
        'star_count' => array(
            'type' => 'slider',
            'heading' => __( 'Stars'),
            'default' => 5,
            'max' => 5,
            'min' => 0,
        ),
        'content_review' => array(
            'type' => 'textarea',
            'heading' => 'Nội Dung Review',
            'full_width' => true,
        ),
    ),
));