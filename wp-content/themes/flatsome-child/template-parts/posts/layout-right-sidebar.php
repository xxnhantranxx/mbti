<?php 
	do_action('flatsome_before_blog');
?>

<?php if(!is_single() && flatsome_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<div class="row" <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>">
	
	<div class="large-8 left col col-divided">
		<?php echo do_shortcode('[rank_math_breadcrumb]'); ?>
	<?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			// comments_template();
		} elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
		} else {
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
		}
	?>
		<?php if ( get_theme_mod( 'blog_author_box', 1 ) ) : ?>
				<div class="entry-author author-box">
					<div class="flex-row align-top">
						<div class="flex-col mr circle">
							<div class="blog-author-image">
								<?php
								$user = get_the_author_meta( 'ID' );
								echo get_avatar( $user, 90 );
								?>
							</div>
						</div><!-- .flex-col -->
						<div class="flex-col flex-grow">
							<h5 class="author-name uppercase pt-half">
								<?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>
							</h5>
							<p class="author-desc small"><?php echo esc_html( get_the_author_meta( 'user_description' ) ); ?></p>
						</div><!-- .flex-col -->
					</div>
				</div>
			<?php endif; ?>
	</div> <!-- .large-9 -->

	<div class="post-sidebar large-4 col table-content-sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .post-sidebar -->

</div><!-- .row -->
<div class="row bvlq">
	<div class="col large-12">
		<?php echo do_shortcode('[block id="bai-viet-lien-quan"]'); ?>
	</div>
</div>
<?php 
	do_action('flatsome_after_blog');
?>