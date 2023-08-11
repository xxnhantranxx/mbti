<?php
$link_img_forms = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/forms.svg';
add_ux_builder_shortcode('TitleHome', array(
    'name'      => __('Tiêu đề'),
    'category'  => __('Mijuri'),
    'priority'  => 8,
    'thumbnail' =>  $link_img_forms,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'text_title' => array(
            'type' => 'textarea',
            'heading' => 'Tiêu đề',
            'full_width' => true,
            'height'     => 'calc(100vh - 470px)',
        ),
        'align' => array(
            'type' => 'radio-buttons',
            'heading' => __('Căn Dòng'),
            'default' => 'left',
            'options' => array(
                'left'  => array( 'title' => 'Trái'),
                'center'  => array( 'title' => 'Giữa'),
                'right' => array('title' => 'Phải'),
            ),
        ),
        'slick_control' => array(
            'type' => 'group',
            'heading' => __( 'Điều khiển' ),
            'options' => array(
                'is_arrow' => array(
                    'type' => 'checkbox',
                    'heading' => __('Điều hướng'),
                    'default' => false,
                ),
                'text_shop' => array(
                    'type' => 'textfield',
                    'conditions' => 'is_arrow == "true"',
                    'heading' => __( 'Nhãn shop' ),
                    'default' => '',
                ),
                'link_shop' => array(
                    'type' => 'textfield',
                    'conditions' => 'is_arrow == "true"',
                    'heading' => __( 'Link shop' ),
                    'default' => '',
                ),
            ),
        ),
    ),
));