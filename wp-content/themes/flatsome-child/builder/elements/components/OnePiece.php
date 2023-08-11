<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('OnePiece', array(
    'name'      => __('MegaMenuLv2 Item'),
    'category'  => __('Mijuri'),
    'priority'  => 3,
    'thumbnail' =>  $link_img_ux_gallery,
    'overlay'   => true,
    'options' => array(
        'match' => array(
            'type' => 'textfield',
            'heading' => 'Match',
            'full_width' => true,
        ),
        'name' => array(
            'type' => 'textfield',
            'heading' => 'Name',
            'full_width' => true,
        ),
        'link' => array(
            'type' => 'textfield',
            'heading' => 'Link',
            'full_width' => true,
        ),
        'active' => array(
            'type' => 'checkbox',
            'heading' => __('Kích hoạt ban đầu'),
            'full_width' => true,
            'default' => false,
        ),
    ),
));