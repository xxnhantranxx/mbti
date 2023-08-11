<?php
function BoxCard($atts){
    extract(shortcode_atts(array(
        'img' => '',
        'sub_title' => '',
        'title' => '',
        'description' => '',
        'position' =>'p1',
        'name' => '',
        'link' => ''
    ), $atts));
    if ( empty( $img ) ) {
	 	return '<div class="uxb-no-content uxb-image">Tải ảnh...</div>';
	}
    ob_start();
    ?>
    <div class="boxCard">
        <div class="image-cardS4">
            <a href="<?php echo $link; ?>" class="d-block">
                <img src="<?php echo wp_get_attachment_image_url($img,'full'); ?>">
            </a>    
        </div>
        <div class="box-textS4 <?php echo $position; ?>">
            <div class="sub-title wow fadeInLeft" data-wow-offset="10"><?php echo $sub_title; ?></div>
            <div class="titleS4 wow fadeInRight" data-wow-offset="10"><?php echo $title; ?></div>
            <div class="description wow zoomIn" data-wow-offset="10"><?php echo $description; ?></div>
            <?php if(!empty($name)): ?>
            <div class="btn_s4 wow zoomInDown" data-wow-offset="10">
                <a href="<?php echo $link; ?>" class="btn_gotoShop">
                    <span><?php echo $name; ?></span>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('BoxCard', 'BoxCard');