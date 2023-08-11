<?php
$link_img_accordion = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/row.svg';
add_ux_builder_shortcode('MegaMenuLv3', array(
    'type' => 'container',
    'allow' => array( 'MegaMenuLv3Item'),
    'name'      => __('Mega Menu Lv3'),
    'category'  => __('Mijuri'),
    'priority'  => 4,
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