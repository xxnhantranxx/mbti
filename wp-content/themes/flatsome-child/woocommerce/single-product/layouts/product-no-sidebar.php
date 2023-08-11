<div class="product-container">
<div class="product-main product_single_devmd">
<div class="row content-row mb-0">
	<div class="title_singlepro_devmd col large-12">
				<p><?php the_title(); ?></p>
				<div class="rating_sku_single">
					<div class="block-msp-brand">
						<?php $ma_sp = get_post_meta( get_the_ID(), '_sku', true );
							if ($ma_sp == NULL) {
								echo "";
							}else{
								echo '<p class="ma-sp">Mã sản phẩm: '.'<span>MS-'. get_post_meta( get_the_ID(), '_sku', true ).'</span></p>';
							}
						 ?>
					</div>
					<div class="rating_devmd_pro">
						<?php global $product;
						$review_ratings_enabled = fl_woocommerce_version_check( '3.6.0' ) ? wc_review_ratings_enabled() : 'yes' === get_option( 'woocommerce_enable_review_rating' );
						if ( ! $review_ratings_enabled ) {
							return;
						}

						$rating_count = $product->get_rating_count();
						$review_count = $product->get_review_count();
						$average      = $product->get_average_rating();

						if ( $rating_count > 0 ) : ?>

							<div class="woocommerce-product-rating">
								<?php echo flatsome_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>
								<?php if ( get_theme_mod( 'product_info_review_count' ) && get_theme_mod( 'product_info_review_count_style' ) != 'tooltip' ) : ?>
									<?php if ( comments_open() ) : ?>
									<?php //phpcs:disable ?>
										<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf( _n( '%s customer review', '%s customer reviews', $review_count, 'woocommerce' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?>)</a>
									<?php // phpcs:enable ?>
									<?php endif ?>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<div class="product-gallery large-<?php echo flatsome_option('product_image_width'); ?> col coltit_prosingle nopadding_bottom">

	<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
	</div>

	<div class="product-info summary col-fit col entry-summary <?php flatsome_product_summary_classes();?>">

		<?php
			/**
			 * woocommerce_single_product_summary hook
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>

	</div><!-- .summary -->

	<div id="product-sidebar" class="mfp-hide">
		<div class="sidebar-inner">
			<?php
				do_action('flatsome_before_product_sidebar');
				/**
				 * woocommerce_sidebar hook
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				if (is_active_sidebar( 'product-sidebar' ) ) {
					dynamic_sidebar('product-sidebar');
				} else if(is_active_sidebar( 'shop-sidebar' )) {
					dynamic_sidebar('shop-sidebar');
				}
			?>
		</div><!-- .sidebar-inner -->
	</div>

</div><!-- .row -->
</div><!-- .product-main -->

<div class="product-footer">
	<div class="container">
		<?php
			/**
			 * woocommerce_after_single_product_summary hook
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
		?>
	</div><!-- container -->
</div><!-- product-footer -->
</div><!-- .product-container -->
