<?php
// About Us
function AboutUs($atts){
    ob_start();
    if(isset($atts['class'])){$atts['class'] = $atts['class'];}else{$atts['class'] = "";}
    if(isset($atts['sub_title'])){$atts['sub_title'] = $atts['sub_title'];}else{$atts['sub_title'] = "";}
    if(isset($atts['text_title'])){$atts['text_title'] = $atts['text_title'];}else{$atts['text_title'] = "";}
    if(isset($atts['text_description'])){$atts['text_description'] = $atts['text_description'];}else{$atts['text_description'] = "";}
    if(isset($atts['style'])){$atts['style'] = $atts['style'];}else{$atts['style'] = "style1";}
    if($atts['style'] == "style1"){ ?>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $(document).ready(function(){
                    $('.gallery-about-us-section').slick({
                        dots: true,
                        infinite: true,
                        speed: 300,
                        slidesToScroll: 1,
                        slidesToShow: 3,
                        autoplay: true,
                        autoplaySpeed: 3000,
                        prevArrow: '<i class="btn-prev"></i>',
                        nextArrow: '<i class="btn-next"></i>',
                        swipeToSlide: true,
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    }
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                        ]
                    });
                });
            });
        </script>
        <div class="wapper-style-about style-1">
            <div class="about-us-section <?php echo $atts['class']; ?>">
                <div class="heading-block-home">
                    <div class="subtitle-about"><h3 class="heading-home"><?php echo $atts['sub_title']; ?></h3></div>
                    <div class="title-about"><h2 class="heading-home"><?php echo $atts['text_title']; ?></h2></div>
                    <div class="desc-about"><p class="paragrapfy-home"><?php echo $atts['text_description']; ?></p></div>
                </div>
            </div>
            <div class="gallery-about-us-section">
                <?php
                $images = get_field('gallery_about_us','option');
                foreach($images as $image){ ?>
                    <div class="item-slider-gallery style-1"><img src="<?php echo $image; ?>"></div>
                <?php } ?>
            </div>
        </div>
    <?php }else if($atts['style'] == "style2"){ ?>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $(document).ready(function(){
                    $('.gallery-about-us-section').slick({
                        dots: true,
                        infinite: true,
                        speed: 300,
                        slidesToScroll: 1,
                        slidesToShow: 1,
                        autoplay: true,
                        autoplaySpeed: 3000,
                        prevArrow: '<i class="btn-prev"></i>',
                        nextArrow: '<i class="btn-next"></i>',
                        swipeToSlide: true,
                        centerMode: true,
                        centerPadding: '300px',
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    }
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    centerMode: false,
                                    centerPadding: '0px',
                                }
                            }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                        ]
                    });
                });
            });
        </script>
        <div class="wapper-style-about style-2">
            <div class="about-us-section <?php echo $atts['class']; ?>">
                <div class="heading-block-home">
                    <div class="subtitle-about"><h3 class="heading-home"><?php echo $atts['sub_title']; ?></h3></div>
                    <div class="title-about"><h2 class="heading-home"><?php echo $atts['text_title']; ?></h2></div>
                    <div class="desc-about"><p class="paragrapfy-home"><?php echo $atts['text_description']; ?></p></div>
                </div>
            </div>
            <div class="gallery-about-us-section">
                <?php
                $images = get_field('gallery_about_us','option');
                foreach($images as $image){ ?>
                    <div class="item-slider-gallery style-2"><img src="<?php echo $image; ?>"></div>
                <?php } ?>
            </div>
        </div><?php
   }else if($atts['style'] == "style3"){ ?> 
        <div class="wapper-style-about style-3">
            <div class="about-us-section <?php echo $atts['class']; ?>">
                <div class="heading-block-home">
                    <div class="subtitle-about"><h3 class="heading-home"><?php echo $atts['sub_title']; ?></h3></div>
                    <div class="title-about"><h2 class="heading-home"><?php echo $atts['text_title']; ?></h2></div>
                    <div class="desc-about"><p class="paragrapfy-home"><?php echo $atts['text_description']; ?></p></div>
                </div>
            </div>
            <div class="gallery-about-us-section">
                <?php
                $images = get_field('gallery_about_us','option');
                foreach($images as $image){ ?>
                    <div class="item-slider-gallery style-3">
                        <img src="<?php echo $image; ?>">
                    </div>
                <?php } ?>
            </div>
        </div>
   <?php }
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('SC_AboutUs', 'AboutUs');