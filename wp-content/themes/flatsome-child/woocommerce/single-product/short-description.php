<?php
/**
 * Single product short description
 *
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>
<div class="product-short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
</div>
<div class="info-prod prod-price freeship">
    <span class="camketstar"><i class="fas fa-arrows-alt"></i>Giao hàng siêu nhanh trong 24h</span>
    <span class="camketstar"><i class="fas fa-arrows-alt"></i>Giảm giá tất cả đơn hàng trên hệ thống</span>
    <span class="camketstar"><i class="fas fa-arrows-alt"></i>Cam kết hàng chính hãng, đổi trả trong 7 ngày</span>
</div>
