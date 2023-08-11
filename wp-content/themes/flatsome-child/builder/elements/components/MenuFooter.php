<?php
$link_img_text_box = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/text_box.svg';
add_ux_builder_shortcode('MenuFooter', array(
    'name'      => __('Menu Footer'),
    'category'  => __('Restaurant'),
    'priority'  => 10,
    'thumbnail' =>  $link_img_text_box,
    'options' => array(
        'class' => array(
            'type' => 'textfield',
            'heading' => 'Class',
        ),
        'menu_1' => array(
            'type' => 'textfield',
            'heading' => 'Item 1',
        ),
        'link_1' => array(
            'type' => 'textfield',
            'heading' => 'Link 1',
        ),
        'menu_2' => array(
            'type' => 'textfield',
            'heading' => 'Item 2',
        ),
        'link_2' => array(
            'type' => 'textfield',
            'heading' => 'Link 2',
        ),
    ),
));