<?php
function MegaMenuLv2($atts,$content){
    extract(shortcode_atts(array(
        'class' => '',
    ), $atts));
    ob_start();
    ?>
    <ul class="list-mega-menu lvl2-menu">
        <?php echo do_shortcode($content); ?>
    </ul>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('MegaMenuLv2', 'MegaMenuLv2');