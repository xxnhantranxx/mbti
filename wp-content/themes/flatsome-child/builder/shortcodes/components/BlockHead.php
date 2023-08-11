<?php
// Block Head
function HeadBlock($atts){
    ob_start();
    if(isset($atts['class'])){$atts['class'] = $atts['class'];}else{$atts['class'] = "";}
    if(isset($atts['subtitle'])){$atts['subtitle'] = $atts['subtitle'];}else{$atts['subtitle'] = "";}
    if(isset($atts['title'])){$atts['title'] = $atts['title'];}else{$atts['title'] = "";}
    if(isset($atts['description'])){$atts['description'] = $atts['description'];}else{$atts['description'] = "";}
    ?>
    <div class="head-feedback <?php echo $atts['class']; ?>">
        <div class="subtitle"><?php echo $atts['subtitle']; ?></div>
        <div class="title"><?php echo $atts['title']; ?></div>
        <p class="description-open"><?php echo $atts['description']; ?></p>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('SC_HeadBlock', 'HeadBlock');