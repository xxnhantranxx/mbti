<?php
$link_img_text_box = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/text_box.svg';
add_ux_builder_shortcode('SC_HeadBlock', array(
    'name'      => __('Block Head'),
    'category'  => __('Restaurant'),
    'priority'  => 10,
    'thumbnail' =>  $link_img_text_box,
    'options' => array(
        'class' => array(
            'type' => 'textfield',
            'heading' => 'Class',
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