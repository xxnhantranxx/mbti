<?php
// Opening hours home
function OpeningSection($atts){
    ob_start();
    if(isset($atts['class'])){$atts['class'] = $atts['class'];}else{$atts['class'] = "";}
    if(isset($atts['namebtn'])){$atts['namebtn'] = $atts['namebtn'];}else{$atts['namebtn'] = "";}
    if(isset($atts['desc'])){$atts['desc'] = $atts['desc'];}else{$atts['desc'] = "";}
    if(isset($atts['title'])){$atts['title'] = $atts['title'];}else{$atts['title'] = "";}
    if(isset($atts['subtitle'])){$atts['subtitle'] = $atts['subtitle'];}else{$atts['subtitle'] = "";}
    if(isset($atts['align'])){$atts['align'] = $atts['align'];}else{$atts['align'] = 'left';}
    if(isset($atts['id'])){
        $image = wp_get_attachment_image_url($atts['id'], 'full');
    }else{
        $image = 'https://t1.xframe.io/000/081/661/81661.jpg';
    }
    
    ?>
    <div class="Opening-section <?php echo $atts['class']; ?>">
        <?php 
            if($atts['align'] == 'left'){?>
                <div class="align-left wapper-openning">
                    <div class="box-image-opening">
                        <img src="<?php echo $image; ?>" alt="openning">
                    </div>
                    <div class="box-text-openning">
                        <div class="subtitle"><?php echo $atts['subtitle']; ?></div>
                        <div class="title"><?php echo $atts['title']; ?></div>
                        <p class="description-open"><?php echo $atts['desc']; ?></p>
                        <a href="#popup-form-contact" class="btn-opening"><span><?php echo $atts['namebtn']; ?></span></a>
                    </div>
                </div>
            <?php }else{ ?>
                <div class="align-right wapper-openning">
                    <div class="box-text-openning">
                        <div class="subtitle"><?php echo $atts['subtitle']; ?></div>
                        <div class="title"><?php echo $atts['title']; ?></div>
                        <p class="description-open"><?php echo $atts['desc']; ?></p>
                        <a href="#popup-form-contact" class="btn-opening"><span><?php echo $atts['namebtn']; ?></span></a>
                    </div>
                    <div class="box-image-opening">
                        <img src="<?php echo $image; ?>" alt="openning">
                    </div>
                </div>
            <?php }
        ?>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('SC_OpeningSection', 'OpeningSection');