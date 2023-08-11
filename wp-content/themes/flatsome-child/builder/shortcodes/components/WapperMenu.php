<?php
// Wapper Menu
function WapperMenu($atts,$content){
    ob_start();
        if (empty($atts['class']) == true) {
            $class = "layout1colunm";
        }else{
            $class = $atts['class'];
        }
        if (empty($atts['subtitle']) == true) {
            $subtitle = "";
        }else{
            $subtitle = $atts['subtitle'];
        }
        if (empty($atts['title']) == true) {
            $title = "";
        }else{
            $title = $atts['title'];
        }
        if (empty($atts['description']) == true) {
            $description = "";
        }else{
            $description = $atts['description'];
        }
    ?>
    <div class="WapperMenu <?php echo $class; ?>">
        <div class="block-header">
            <div class="subtitle"><?php echo $subtitle; ?></div>
            <div class="title"><?php echo $title; ?></div>
            <div class="description"><?php echo $description; ?></div>
        </div>
        <div class="list-menu-page">
            <?php echo do_shortcode($content); ?>
        </div>
    </div>
    <?php 
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('SC_WapperMenu', 'WapperMenu');