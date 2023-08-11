<?php

// Block Head
function TitleHome($atts){
    extract(shortcode_atts(array(
        'text_title' => '',
        'align' => 'left',
        'text_shop' => '',
        'link_shop' => 'javascript:void(0)',
        'is_arrow' => false
    ), $atts));
    ob_start();
    ?>
    <div class="title_home" style="text-align:<?php echo $align; ?>">
        <h2 class="title"><?php echo $text_title; ?></h2>
        <?php if($is_arrow == true): ?>
        <a href="<?php echo $link_shop; ?>" class="link-text"><?php echo $text_shop; ?></a>
        <div class="slick-control">
            <span class="iconfont iconfont-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            <span class="iconfont iconfont-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        </div>
        <?php endif; ?>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('TitleHome', 'TitleHome');