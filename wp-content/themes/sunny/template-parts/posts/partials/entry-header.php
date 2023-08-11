<header class="entry-header">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php if ( ! is_single() || ( is_single() && get_theme_mod( 'blog_single_featured_image', 1 ) ) ) : ?>
			<div class="entry-image relative">
				<?php get_template_part( 'template-parts/posts/partials/entry-image', 'default' ); ?>
				<?php if ( get_theme_mod( 'blog_badge', 1 ) ) get_template_part( 'template-parts/posts/partials/entry', 'post-date' ); ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
</header>
