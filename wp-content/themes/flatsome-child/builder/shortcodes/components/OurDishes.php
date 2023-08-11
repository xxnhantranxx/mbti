<?php
// OurDishes
function OurDishes($atts,$content){
    ob_start();
    $atts['class'] = isset($atts['class'])?$atts['class']:"";
    $atts['title'] = isset($atts['title'])?$atts['title']:"";
    $atts['subtitle'] = isset($atts['subtitle'])?$atts['subtitle']:"";
    $atts['desc'] = isset($atts['desc'])?$atts['desc']:"";
    if(isset($atts['style'])){$atts['style'] = $atts['style'];}else{$atts['style'] = "layout3colunm";}
    ?>
    <div class="OurDishes <?php echo $atts['class']; ?>">
        <div class="block-title-home">
            <div class="subtitle"><?php echo $atts['subtitle']; ?></div>
            <div class="title"><?php echo $atts['title']; ?></div>
            <p class="description-open"><?php echo $atts['desc']; ?></p>
        </div>
        <div class="content-box <?php echo $atts['style']; ?>">
            <?php echo do_shortcode($content); ?>
        </div>
    </div>
    <?php 
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('SC_OurDishes', 'OurDishes');