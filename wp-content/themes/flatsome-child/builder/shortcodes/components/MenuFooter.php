<?php
// Block Head
function MenuFooter($atts){
    ob_start();
    if(isset($atts['class'])){$atts['class'] = $atts['class'];}else{$atts['class'] = "";}
    if(isset($atts['menu_1'])){$atts['menu_1'] = $atts['menu_1'];}else{$atts['menu_1'] = "";}
    if(isset($atts['link_1'])){$atts['link_1'] = $atts['link_1'];}else{$atts['link_1'] = "";}
    if(isset($atts['menu_2'])){$atts['menu_2'] = $atts['menu_2'];}else{$atts['menu_2'] = "";}
    if(isset($atts['link_2'])){$atts['link_2'] = $atts['link_2'];}else{$atts['link_2'] = "";}
    ?>
    <ul class="footer-menu <?php echo $atts['class']; ?>">
        <li class="item"><a href="<?php echo $atts['link_1']; ?>"><?php echo $atts['menu_1']; ?></a></li>
        <li class="item"><a href="<?php echo $atts['link_2']; ?>"><?php echo $atts['menu_2']; ?></a></li>
    </ul>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('MenuFooter', 'MenuFooter');