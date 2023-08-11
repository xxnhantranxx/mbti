<?php
/**
 * The template to display the reviewers meta data (name, verified owner, review date)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review-meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $comment;
$verified = wc_review_is_from_verified_owner( $comment->comment_ID );

if ( '0' === $comment->comment_approved ) { ?>

	<p class="meta">
		<em class="woocommerce-review__awaiting-approval">
			<?php esc_html_e( 'Your review is awaiting approval', 'woocommerce' ); ?>
		</em>
	</p>

<?php } else { ?>

	<div class="meta_reviews">
                    <strong class="woocommerce-review__author"><?php comment_author(); ?> </strong>
                    <div class="da_mua"><?php
                    if ( 'yes' === get_option( 'woocommerce_review_rating_verification_label' ) && $verified ) {
                        echo '<em class="woocommerce-review__verified verified">' . esc_attr__( 'Đã mua sản phẩm', 'woocommerce' ) . '</em> ';
                    }

                    ?></div>
                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                        <time datetime="<?php comment_time( 'c' ); ?>" class="pull-left time_meta_reviews">
                        <?php printf( _x( '%1$s đăng %2$s', '1: date, 2: time', 'flatsome' ), get_comment_date(), get_comment_time() ); ?>
                        </time>
                    </a>
                    <?php edit_comment_link( __( 'Sửa', 'flatsome' )); ?>
            <div class="reply">
                <?php
                comment_reply_link( array_merge( $args,array(
                	'depth'     => $depth,
                	'max_depth' => $args['max_depth'],
                ) ) );
            	?>
        	</div>
    </div>
<?php
}
