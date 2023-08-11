<?php
// Contact home
function Contact($atts){
    ob_start();
    if(isset($atts['class'])){$atts['class'] = $atts['class'];}else{$atts['class'] = "";}
    if(isset($atts['align'])){$atts['align'] = $atts['align'];}else{$atts['align'] = 'right';}
    if(isset($atts['subtitle'])){$atts['subtitle'] = $atts['subtitle'];}else{$atts['subtitle'] = "";}
    if(isset($atts['title'])){$atts['title'] = $atts['title'];}else{$atts['title'] = "";}
    if(isset($atts['hotline'])){$atts['hotline'] = $atts['hotline'];}else{$atts['hotline'] = "";}
    if(isset($atts['link_hotline'])){$atts['link_hotline'] = $atts['link_hotline'];}else{$atts['link_hotline'] = "";}
    if(isset($atts['email'])){$atts['email'] = $atts['email'];}else{$atts['email'] = "";}
    if(isset($atts['link_email'])){$atts['link_email'] = $atts['link_email'];}else{$atts['link_email'] = "";}
    if(isset($atts['address'])){$atts['address'] = $atts['address'];}else{$atts['address'] = "";}
    if(isset($atts['link_address'])){$atts['link_address'] = $atts['link_address'];}else{$atts['link_address'] = "";}
    if(isset($atts['maps'])){$atts['maps'] = $atts['maps'];}else{$atts['maps'] = "";}
    if(isset($atts['button'])){$atts['button'] = $atts['button'];}else{$atts['button'] = "";}
    if(isset($atts['link_button'])){$atts['link_button'] = $atts['link_button'];}else{$atts['link_button'] = "";}
    if(isset($atts['iframe'])){$atts['iframe'] = $atts['iframe'];}else{$atts['iframe'] = "";}
    ?>
    <div class="Contact-section <?php echo $atts['class']; ?> <?php echo $atts['align']; ?>">
        <div class="maps-wapper">
            <iframe src="<?php echo $atts['iframe']; ?>" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="info-contact-wapper">
            <div class="head-contact">
                <div class="subtitle"><?php echo $atts['subtitle']; ?></div>
                <div class="title"><?php echo $atts['title']; ?></div>
            </div>
            <div class="info-contact">
                <?php if($atts['hotline'] != ""){ ?>
                    <div class="item phone-contact-footer"><a href="tel:<?php echo $atts['link_hotline']; ?>"><?php echo $atts['hotline']; ?></a></div>
                <?php } ?>
                <?php if($atts['email'] != ""){ ?>
                    <div class="item email-contact-footer"><a href="mailto:<?php echo $atts['link_email']; ?>"><?php echo $atts['email']; ?></a></div>
                <?php } ?>
                <?php if($atts['address'] != ""){ ?>
                    <div class="item address-contact-footer"><a href="<?php echo $atts['link_address']; ?>" target="_blank"><?php echo $atts['address']; ?></a></div>
                <?php } ?>
            </div>
            <div class="btn-view-maps">
                <a href="<?php echo $atts['link_button']; ?>"><span><?php echo $atts['button']; ?></span></a>
            </div>
        </div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('SC_Contact', 'Contact');