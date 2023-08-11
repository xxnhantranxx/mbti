<?php
function Promoto($atts, $content){
    extract(shortcode_atts(array(
        'link' => '',
        'title' => '', 
        'img' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="home-banner-promo">
        <a href="<?php echo $link; ?>" class="d-block">
            <div class="home-banner-promo__box">
                <div class="home-banner-promo__img">
                    <img src="<?php echo wp_get_attachment_image_url($img,'full'); ?>" class="img-responsive">
                </div>
                <div class="home-banner-promo__body middle">
                    <div>
                        <div class="home-banner-promo__header"><?php echo $title; ?></div>
                        <div class="home-banner-promo__subheader">
                            <?php echo do_shortcode($content); ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('Promoto', 'Promoto');