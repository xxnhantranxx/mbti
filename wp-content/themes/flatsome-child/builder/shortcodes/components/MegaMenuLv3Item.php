<?php
function MegaMenuLv3Item($atts,$content){
    extract(shortcode_atts(array(
        'match' => '',
        'active' => false,
        'cta' => '',
        'link_cta' => 'javascript:void(0)',
        'animation' => false
    ), $atts));
    ob_start();
    ?>
    <div class="tab-pane <?php if($active == true){echo 'active';} ?>" id="<?php echo $match; ?>">
        <div class="inner-show-product <?php if($animation == true){echo 'animation';} ?>">
            <?php echo do_shortcode($content); ?>
        </div>
        <div class="cal-to-action">
            <a href="<?php echo $link_cta; ?>"><?php echo $cta; ?></a>
        </div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('MegaMenuLv3Item', 'MegaMenuLv3Item');