<?php
// Wapper Contact
function WapperContact($atts,$content){
    ob_start();
        if (empty($atts['class']) == true) {
            $class = "verticalitem";
        }else{
            $class = $atts['class'];
        }
    ?>
    <div class="WapperContact <?php echo $class; ?>">
        <?php echo do_shortcode($content); ?>
    </div>
    <?php 
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('SC_WapperContact', 'WapperContact');