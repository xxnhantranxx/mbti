<?php
$link_img_forms = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/forms.svg';
add_ux_builder_shortcode('BannerSection1', array(
    'name'      => __('Banner Section'),
    'category'  => __('Mijuri'),
    'priority'  => 7,
    'thumbnail' =>  $link_img_forms,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'img' => array(
            'type' => 'image',
            'heading' => __('Ảnh'),
            'default' => ''
        ),
        'text_title' => array(
            'type' => 'textarea',
            'heading' => 'Tiêu đề',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
        'text_description' => array(
            'type' => 'textarea',
            'heading' => 'Mô tả',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
        'style_options' => array(
            'type' => 'group',
            'heading' => __( 'Nút' ),
            'options' => array(
                'text_button' => array(
                    'type' => 'textfield',
                    'heading' => 'Nhãn',
                    'full_width' => true,
                    'height'     => 'calc(100vh - 470px)',
                ),
                'text_link' => array(
                    'type' => 'textfield',
                    'heading' => 'Link',
                    'full_width' => true,
                    'height'     => 'calc(100vh - 470px)',
                ),
            ),
        ),
    ),
));