<?php if ( have_posts() ) : ?>
<div id="post-list">

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-inner <?php flatsome_blog_article_classes(); ?>">
		<div class="entry-header-text entry-header-text-top text-<?php echo get_theme_mod( 'blog_posts_title_align', 'center' ); ?>">
			<?php get_template_part( 'template-parts/posts/partials/entry', 'title' ); ?>
		</div>
		<?php get_template_part('template-parts/posts/partials/entry-header', flatsome_option('blog_posts_header_style') ); ?>
		<?php get_template_part('template-parts/posts/content', 'default' ); ?>
		<?php //get_template_part('template-parts/posts/partials/entry-footer', 'default' ); ?>
	</div>
</article>

<?php endwhile; ?>

<?php flatsome_posts_pagination(); ?>

</div>

<?php else : ?>

	<?php get_template_part( 'template-parts/posts/content','none'); ?>

<?php endif; ?>