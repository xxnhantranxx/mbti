<?php
/*
Template name: Page - Right Sidebar
*/
get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

<div class="page-wrapper page-right-sidebar">
	<div class="row">
		<div id="content" class="large-8 left col col-divided" role="main">
			<div class="page-inner">
				<?php echo do_shortcode('[rank_math_breadcrumb]'); ?>
				<?php if(get_theme_mod('default_title', 0)){ ?>
					<header class="entry-header">
						<h1 class="entry-title mb uppercase"><?php the_title(); ?></h1>
					</header>
				<?php } ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					<?php if ( comments_open() || '0' != get_comments_number() ){
								comments_template(); } ?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<div class="large-4 col table-content-sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<div class="row bvlq">
		<div class="col large-12">
			<?php echo do_shortcode('[block id="bai-viet-lien-quan"]'); ?>
		</div>
	</div>
</div>
<!-- <div class="btn-table-contentshow">
	Nội dung <i class="fa-solid fa-list"></i>
</div> -->
<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
