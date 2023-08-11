<?php
/*
Template name: Page - Ladipage
*/
get_header('ladipage'); ?>
<div id="content" role="main" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer('ladipage'); ?>

