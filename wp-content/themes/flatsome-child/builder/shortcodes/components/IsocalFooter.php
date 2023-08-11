<?php

// IsocalFooter
function IsocalFooter($atts){
    extract(shortcode_atts(array(
        'description' => '',
        'id' => '',
        'link_tiktok' => '',
        'link_youtube' => '',
        'link_instagram' =>'',
        'link_facebook' => '',
        'link_pinterest' => '',
        'link_twitter' => '',
        'link_linkendin' => '',
    ), $atts));
    ob_start();
    ?>
    <div class="group-form">
        <div class="description"><?php echo $description; ?></div>
        <div class="form-footer">
            <?php if(!empty($id)): ?>
                <?php echo do_shortcode('[contact-form-7 id="'.$id.'"]'); ?>
            <?php endif; ?>
        </div>
        <div class="block-isocal">

            <?php if(!empty($link_tiktok)): ?>
            <!-- <li class="item-isocal link_tiktok">
                <a href="<?php echo $link_tiktok; ?>" class="d-block" target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </li> -->
            <?php endif; ?>

            <?php if(!empty($link_youtube)): ?>
            <li class="item-isocal link_youtube">
                <a href="<?php echo $link_youtube; ?>" class="d-block" target="_blank">
                    <i class="fa fa-youtube-square" aria-hidden="true"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if(!empty($link_instagram)): ?>
            <li class="item-isocal link_instagram">
                <a href="<?php echo $link_instagram; ?>" class="d-block" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if(!empty($link_facebook)): ?>
            <li class="item-isocal link_facebook">
                <a href="<?php echo $link_facebook; ?>" class="d-block" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if(!empty($link_pinterest)): ?>
            <li class="item-isocal link_pinterest">
                <a href="<?php echo $link_pinterest; ?>" class="d-block" target="_blank">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if(!empty($link_twitter)): ?>
            <li class="item-isocal link_twitter">
                <a href="<?php echo $link_twitter; ?>" class="d-block" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if(!empty($link_linkendin)): ?>
            <li class="item-isocal link_linkendin">
                <a href="<?php echo $link_linkendin; ?>" class="d-block" target="_blank">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </li>
            <?php endif; ?>

        </div>
    </div>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}

add_shortcode('IsocalFooter', 'IsocalFooter');