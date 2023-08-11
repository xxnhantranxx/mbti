<?php
$link_img_row_3_col_dashed = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/row-3-col-dashed.svg';
add_ux_builder_shortcode('SC_OurDishes', array(
    'type' => 'container',
    'allow' => array( 'SC_ItemOurDishes'),
    'name'      => __('OurDishes'),
    'category'  => __('Restaurant'),
    'priority'  => 4,
    'thumbnail' =>  $link_img_row_3_col_dashed,
    'wrap'   => false,
    'inline' => true,
    'options'   => array(
        'title' => array(
            'type' => 'textfield',
            'heading' => 'Tiêu đề',
        ),
        'subtitle' => array(
            'type' => 'textfield',
            'heading' => 'Tiêu đề phụ',
        ),
        'desc' => array(
            'type' => 'textarea',
            'heading' => 'Mô tả',
            'full_width' => true,
        ),
        'class' => array(
            'type' => 'textfield',
            'heading' => 'Class',
        ),
        'style' => array(
            'type' => 'select',
            'heading' => 'Layout',
            'default' => 'layout3colunm',
            'options' => array(
                'layout3colunm' => '3 Cột',
                'layout2colunm' => '2 Cột',
            ),
        ),
    ),
));