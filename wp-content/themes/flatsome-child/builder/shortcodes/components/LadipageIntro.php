<?php
function LadipageIntro($atts){
    extract(shortcode_atts(array(
        'img' => '',
        'title' => '',
        'sub_title' => '',
        'button' => '',
        'link_button' => '',
    ), $atts));
    if ( empty( $img ) ) {
	 	  return '<div class="uxb-no-content uxb-image">Upload Image...</div>';
	  }
    ob_start();
    ?>
    <div class="LadipageIntro">
        <div class="image-bg">
            <img src="<?php echo wp_get_attachment_image_url($img,'full'); ?>">
        </div>
        <div class="container main-intro-ladipage">
            <h1 class="headding-intro"><?php echo $title; ?></h1>
            <p class="subtitle"><?php echo $sub_title; ?></p>
            <div class="button-ladipage">
                <a class="btn btn-ladi d-block" href="<?php echo $link_button; ?>"><span><?php echo $button; ?></span></a>
            </div>
        </div>
        <div class="icon-scrool">
            <img src="<?php echo home_url(); ?>/wp-content/themes/flatsome-child/img/scroll_vip.png" alt="">
        </div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('LadipageIntro', 'LadipageIntro');