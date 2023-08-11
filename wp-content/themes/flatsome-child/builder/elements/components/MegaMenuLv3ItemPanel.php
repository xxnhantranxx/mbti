<?php
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('MegaMenuLv3ItemPanel', array(
    'name'      => __('MegaMenuLv3 Item Panel'),
    'category'  => __('Mijuri'),
    'priority'  => 6,
    'thumbnail' =>  $link_img_ux_gallery,
    'overlay'   => true,
    'wrap'   => false,
    'inline' => true,
    'options' => array(
        'name' => array(
            'type' => 'textfield',
            'heading' => 'Name',
            'full_width' => true,
        ),
        'img' => array(
            'type' => 'image',
            'heading' => __('Image'),
            'default' => ''
        ),
        'link' => array(
            'type' => 'textfield',
            'heading' => 'Link',
            'full_width' => true,
        ),
    ),
));