<?php
function MegaMenuLv3ItemPanel($atts){
    extract(shortcode_atts(array(
        'name' => '',
        'img' => '',
        'link' => 'javascript:void(0)',
    ), $atts));
    ob_start();
    ?>
    <div class="item-product-box">
        <a href="<?php echo $link; ?>" class="d-block nav-link-product">
            <div class="inner-image animation">
                <img src="<?php echo wp_get_attachment_image_url($img,'full'); ?>">
            </div>
            <h4 class="entry-title-product-nav textLine-2"><?php echo $name; ?></h4>
        </a>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('MegaMenuLv3ItemPanel', 'MegaMenuLv3ItemPanel');