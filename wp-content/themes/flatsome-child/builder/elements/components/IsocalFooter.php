<?php
// Contactform7
$forms = array('' => '-- Forms --');
foreach(get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1)) as $cf7Form){
    $forms[$cf7Form->ID] = $cf7Form->post_title;
}
$link_img_ux_gallery = home_url().'/wp-content/themes/flatsome-child/img/admin/icon-builder/ux_gallery.svg';
add_ux_builder_shortcode('IsocalFooter', array(
    'name'      => __('Isocal Footer'),
    'category'  => __('Mijuri'),
    'priority'  => 11,
    'thumbnail' =>  $link_img_ux_gallery,
    'overlay'   => true,
    'options' => array(
        'form_options' => array(
            'type' => 'group',
            'heading' => __( 'Biểu mẫu' ),
            'options' => array(
                'description' => array(
                    'type' => 'textarea',
                    'heading' => __( 'Mô tả' ),
                    'default' => '',
                    'full_width' => true
                ),
                'id' => array(
                    'type' => 'select',
                    'heading' => 'Select Form',
                    'default' => '',
                    'options' => $forms,
                    'full_width' => true
                )
            ),
        ),
        'isocal_options' => array(
            'type' => 'group',
            'heading' => __( 'Mạng xã hội' ),
            'options' => array(
                'link_tiktok' => array(
                    'type' => 'textfield',
                    'heading' => __( 'TickTok' ),
                    'default' => '',
                    'full_width' => true
                ),
                'link_youtube' => array(
                    'type' => 'textfield',
                    'heading' => __( 'Youtube' ),
                    'default' => '',
                    'full_width' => true
                ),
                'link_instagram' => array(
                    'type' => 'textfield',
                    'heading' => __( 'Instagram' ),
                    'default' => '',
                    'full_width' => true
                ),
                'link_facebook' => array(
                    'type' => 'textfield',
                    'heading' => __( 'Facebook' ),
                    'default' => '',
                    'full_width' => true
                ),
                'link_pinterest' => array(
                    'type' => 'textfield',
                    'heading' => __( 'Pinterest' ),
                    'default' => '',
                    'full_width' => true
                ),
                'link_twitter' => array(
                    'type' => 'textfield',
                    'heading' => __( 'Twitter' ),
                    'default' => '',
                    'full_width' => true
                ),
                'link_linkendin' => array(
                    'type' => 'textfield',
                    'heading' => __( 'Linkendin' ),
                    'default' => '',
                    'full_width' => true
                ),
            ),
        ),
    ),
));