<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('MegaMenuLv3Item', array(
    'name'      => __('MegaMenuLv3 Item'),
    'type' => 'container',
    'allow' => array( 'MegaMenuLv3ItemPanel'),
    'category'  => __('Mijuri'),
    'priority'  => 5,
    'thumbnail' =>  $link_img_ux_gallery,
    'overlay'   => true,
    'options' => array(
        'match' => array(
            'type' => 'textfield',
            'heading' => 'Match',
            'full_width' => true,
        ),
        'active' => array(
            'type' => 'checkbox',
            'heading' => __('Kích hoạt ban đầu'),
            'full_width' => false,
            'default' => false,
        ),
        // 'active_slider' => array(
        //     'type' => 'checkbox',
        //     'heading' => __('Kích hoạt slider'),
        //     'full_width' => false,
        //     'default' => false,
        // ),
        'style_options' => array(
            'type' => 'group',
            'heading' => __( 'Call to action' ),
            'options' => array(
                'cta' => array(
                    'type' => 'textarea',
                    'heading' => 'Tiêu đề',
                    'full_width' => true,
                ),
                'link_cta' => array(
                    'type' => 'textfield',
                    'heading' => 'Đường dẫn',
                    'full_width' => true,
                ),
            ),
        ),
        'animation' => array(
            'type' => 'checkbox',
            'heading' => __('Hiệu ứng'),
            'full_width' => false,
            'default' => false,
        ),
    ),
));