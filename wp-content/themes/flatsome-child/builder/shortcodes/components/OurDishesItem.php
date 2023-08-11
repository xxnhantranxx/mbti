<?php
function ItemOurDishes($atts){
    ob_start();
    $atts['title'] = isset($atts['title'])?$atts['title']:""; 
    $atts['link'] = isset($atts['link'])?$atts['link']:"javascript:void(0);";
    $atts['blank'] = isset($atts['blank'])?$atts['blank']:false; 
    if(isset($atts['id'])){
        $image = wp_get_attachment_image_url($atts['id'], 'full');
    }else{
        $image = 'https://t1.xframe.io/000/081/661/81661.jpg';
    }
    ?>
        <div class="item-shape">
            <div class="box-image-shape">
                <a href="<?php echo $atts['link']; ?>" <?php if($atts['blank'] == true){echo 'target="_blank"';} ?> class="d-block">
                    <img src="<?php echo $image; ?>">
                    <div class="overlay-shape"></div>
                </a>
            </div>
            <div class="box-text-shape">
                <a href="<?php echo $atts['link']; ?>" <?php if($atts['blank'] == true){echo 'target="_blank"';} ?> class="d-block">
                    <?php echo $atts['title']; ?>
                </a>
            </div>
        </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode( 'SC_ItemOurDishes', 'ItemOurDishes' );