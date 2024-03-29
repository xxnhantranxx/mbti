<?php if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="single-post" class="article-inner <?php flatsome_blog_article_classes(); ?>">
		<?php
			if(flatsome_option('blog_post_style') == 'default' || flatsome_option('blog_post_style') == 'inline'){
				get_template_part('template-parts/posts/partials/entry-header', flatsome_option('blog_posts_header_style') );
			}
		?>
		<?php get_template_part( 'template-parts/posts/content', 'single' ); ?>
	</div><!-- .article-inner -->
</article><!-- #-<?php the_ID(); ?> -->
<style>
	#single-post h3,
	#single-post h3 span{
		font-size: 24px;
		color: #00266d !important;
	}
</style>
<?php endwhile; ?>
<?php else : ?>
	<?php get_template_part( 'no-results', 'index' ); ?>
<?php endif; ?>
