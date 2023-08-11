<?php
// Block Head
function VideoLadipage($atts){
    extract(shortcode_atts(array(
        'class' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="VideoLadipage <?php echo $class; ?>">   
    <?php if( have_rows('video_ladipage','option') ): ?>
        <div class="top-slider-video slide-syc">
        <?php while( have_rows('video_ladipage','option') ): the_row(); 
            $image = get_sub_field('banner_video','option');
            $link_video = get_sub_field('link_video','option');
            ?>
            <div class="item-video">
                <div class="block-image">
                    <img src="<?php echo $image; ?>">
                    <div class="overlay-image"></div>
                </div>
                <div class="play-icon">
                    <a class="open-video icon" href="<?php echo $link_video; ?>"><img src="<?php echo home_url() ?>/wp-content/themes/flatsome-child/img/play-icon-video.png" alt=""></a>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
        <div class="bottom-slider-video slide-syc">
        <?php while( have_rows('video_ladipage','option') ): the_row(); 
            $imageThumb = get_sub_field('banner_video','option');
            ?>
            <div class="item-video-thumb">
                <div class="block-image-thumb">
                    <img src="<?php echo $imageThumb; ?>">
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('VideoLadipage', 'VideoLadipage');