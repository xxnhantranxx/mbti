<?php
function IntroSection($atts){
    ob_start();
    if(isset($atts['class'])){$atts['class'] = $atts['class'];}else{$atts['class'] = "";}
    if(isset($atts['text_button'])){$atts['text_button'] = $atts['text_button'];}else{$atts['text_button'] = "Click Me!";}
    if(isset($atts['link_button'])){$atts['link_button'] = $atts['link_button'];}else{$atts['link_button'] = "javascript:void(0);";}
    if(isset($atts['text_title'])){$atts['text_title'] = $atts['text_title'];}else{$atts['text_title'] = "";}
    if(isset($atts['sub_title'])){$atts['sub_title'] = $atts['sub_title'];}else{$atts['sub_title'] = "";}
    if(isset($atts['position'])){$atts['position'] = $atts['position'];}else{$atts['position'] = "key_ok";}
    if(isset($atts['id'])){
        $image = wp_get_attachment_image_url($atts['id'], 'full');
    }else{
        $image = 'https://t1.xframe.io/000/081/661/81661.jpg';
    }
    
    ?>
    <div class="Intro-section <?php echo $atts['class']; ?>">
        <div class="box-image-intro" style="background-image:url('<?php echo $image;?>');">
            <div class="content-intro container <?php if($atts['position'] == 'key_ok'){echo 'position-left';}else{echo 'position-center';} ?>">
                <div class="box-text-intro">
                    <div class="box-text-intro-inner">
                        <div class="subtitle-intro"><?php echo $atts['sub_title']; ?></div>
                        <div class="title-intro"><?php echo $atts['text_title']; ?></div>
                        <a class="btn-intro" href="<?php echo $atts['link_button']; ?>"><span class="btn-link-intro"><?php echo $atts['text_button']; ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('SC_IntroSection', 'IntroSection');