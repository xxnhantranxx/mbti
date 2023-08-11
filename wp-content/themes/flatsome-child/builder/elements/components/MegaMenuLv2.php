<?php
$link_img_accordion = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/row.svg';
add_ux_builder_shortcode('MegaMenuLv2', array(
    'type' => 'container',
    'name'      => __('Mega Menu Lv2'),
    'category'  => __('Mijuri'),
    'priority'  => 2,
    'thumbnail' =>  $link_img_accordion,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'class' => array(
            'type' => 'textfield',
            'heading' => 'Class',
        ),
    ),
));