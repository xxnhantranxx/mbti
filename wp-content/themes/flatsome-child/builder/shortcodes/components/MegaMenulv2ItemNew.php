<?php
function MegaMenuLv2ItemNew($atts){
    extract(shortcode_atts(array(
        'match' => '',
        'name' => '',
        'link' => 'javascript:void(0)',
        'active' => false,
    ), $atts));
    ob_start();
    ?>

    <li class="item-menu <?php if($active == true){echo 'active';} ?>" data-match=<?php echo $match; ?>>
        <a href="<?php echo $link; ?>"><?php echo $name; ?></a>
    </li>
    <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('MegaMenuLv2ItemNew', 'MegaMenuLv2ItemNew');