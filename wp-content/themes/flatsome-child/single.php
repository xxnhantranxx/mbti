<?php
/**
 * The blog template file.
 *
 * @package flatsome
 */

get_header();

?>

<div id="content" class="blog-wrapper blog-single page-wrapper">
	<?php get_template_part( 'template-parts/posts/layout', get_theme_mod('blog_post_layout','right-sidebar') ); ?>
</div>
<!-- <div class="btn-table-contentshow">
	Nội dung <i class="fa-solid fa-list"></i>
</div> -->
<?php get_footer();
