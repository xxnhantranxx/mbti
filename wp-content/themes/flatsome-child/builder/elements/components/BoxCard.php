<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('BoxCard', array(
    'name'      => __('Box Card'),
    'category'  => __('Mijuri'),
    'priority'  => 10,
    'thumbnail' =>  $link_img_ux_gallery,
    'overlay'   => true,
    'options' => array(
        'img' => array(
            'type' => 'image',
            'heading' => __('Image'),
            'default' => ''
        ),
        'sub_title' => array(
            'type' => 'textfield',
            'heading' => 'Sub Title',
            'full_width' => true,
        ),
        'title' => array(
            'type' => 'textarea',
            'heading' => 'Title',
            'full_width' => true,
        ),
        'description' => array(
            'type' => 'textarea',
            'heading' => 'Description',
            'full_width' => true,
        ),
        'position' => array(
            'type' => 'select',
            'heading' => 'Mẫu',
            'default' => 'style1',
            'options' => array(
                'p1' => 'Left Top',
                'p2' => ' Left Middle',
                'p3' => ' Left Bottom',
                'p4' => ' Center Top',
                'p5' => ' Center Middle',
                'p6' => ' Center Bottom',
                'p7' => ' Right Top',
                'p8' => ' Right Middle',
                'p9' => ' Right Bottom',
            ),
            'config' => array(
                'placeholder' => __( 'Select', 'flatsome' ),
            )
        ),
        'style_options' => array(
            'type' => 'group',
            'heading' => __( 'Nút' ),
            'options' => array(
                'name' => array(
                    'type' => 'textfield',
                    'heading' => __( 'Nhãn' ),
                    'default' => '',
                ),
                'link' => array(
                    'type' => 'textfield',
                    'heading' => __( 'Đường dẫn' ),
                    'default' => '',
                )
            ),
        ),
    ),
));