<?php
function BannerSection1($atts){
    extract(shortcode_atts(array(
        'img' => '',
        'text_title' => '',
        'text_description' => '',
        'text_button' => '',
        'text_link' => '',
    ), $atts));
    if ( empty( $img ) ) {
	 	  return '<div class="uxb-no-content uxb-image">Tải ảnh...</div>';
	  }
    ob_start();
    ?>
    <div class="banner-section-1">
        <div class="wapper-image">
            <img src="<?php echo wp_get_attachment_image_url($img,'full');  ?>">
        </div>
        <div class="text-banner">
            <div class="text-title wow fadeInUp" data-wow-duration="500ms"><?php echo $text_title; ?></div>
            <div class="text_description wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms"><?php echo $text_description; ?></div>
            <div class="text_button wow fadeInRight" data-wow-duration="500ms" data-wow-delay="1000ms">
                <a href="<?php echo $text_link; ?>" class="btn_baner">
                    <span><?php echo $text_button; ?></span>
                </a>
            </div>
        </div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('BannerSection1', 'BannerSection1');