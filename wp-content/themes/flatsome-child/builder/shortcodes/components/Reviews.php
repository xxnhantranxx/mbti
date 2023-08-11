<?php
// Reviews Shortcode
function reviewItem($atts){
    ob_start(); 
    $atts['name_review'] = isset($atts['name_review'])?$atts['name_review']:"";
    $atts['content_review'] = isset($atts['content_review'])?$atts['content_review']:"";
    ?>
    <div class="block-review-content">
        <div class="custom_service_title">
            <h2 class="section-title">
                <span class="section-title-main"><?php echo $atts['name_review']; ?></span>
            </h2>
        </div>
        <div class="bottom-review">
            <div class="star">
                <?php
                if (isset($atts['star_count']) && $atts['star_count']) {
                    $count = $atts['star_count'];
                    $countNormal = 5 - $count;
                } else {
                    $count = 5;
                    $countNormal = 5 - $count;
                }
                for ($i = 1; $i <= $count; $i++) {
                    echo '<i class="item-star light"></i>';
                }
                for ($i = 1; $i <= $countNormal; $i++) {
                    echo '<i class="item-star" style="margin-left:5px;"></i>';
                }
                ?>
            </div>
        </div>
        <p class="content-review">
            <?php echo $atts['content_review']; ?>
        </p>
    </div>
<?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('SC_reviewItem', 'reviewItem');