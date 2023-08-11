<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$classes = array();
if($product->is_on_sale()) $classes[] = 'price-on-sale';
if(!$product->is_in_stock()) $classes[] = 'price-not-in-stock'; ?>
<div class="price-wrapper">
	<p class="price product-page-price <?php echo implode(' ', $classes); ?>">
  		<?php echo 'Giá: '.$product->get_price_html(); ?><?php if ( $product->get_price() == 0 ){ ?>
  			<div class="show-call">
              <div class="tab-left-form"><a href="tel:<?php echo get_option('phone'); ?>"><i class="fas fa-phone"></i> <?php echo get_option('phone'); ?></a></div>
              <div class="tab-right-form"><a href="#popup-form-product" id="popup-form-product">Nhận thông tin</a></div>
              <div style="clear:both;"></div>
            </div>
  	<?php }else{ ?>
  		<span class="vat-thue"> <?php echo get_field('thue_vat'); ?></span></p>
 	<?php } ?>
</div>
