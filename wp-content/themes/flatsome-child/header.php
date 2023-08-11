<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <?php wp_head(); ?>
	<meta name="facebook-domain-verification" content="tty8i1miir8lc5se5zr5jtdx66qwfo" />
</head>
<body <?php body_class(); ?>>
  <?php do_action( 'flatsome_after_body_open' ); ?>
  <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>
  <div id="wrapper">
    <?php do_action( 'flatsome_before_header' ); ?>
    <header id="header" class="header <?php flatsome_header_classes(); ?>">
      <div class="header-wrapper">
        <?php get_template_part( 'template-parts/header/header', 'wrapper' ); ?>
		<div class="noitify-sticky fa-fade" style="--fa-animation-duration: 2s; --fa-fade-opacity: 0.6;">
			<div class="inner-noitify">
				<a href="https://clevermann.eu/category/hoat-dong/">Những hoạt động nổi bật của Clevermann</a>
				<div class="close">
					<i class="fa-regular fa-xmark"></i>
				</div>
			</div>
		</div>
      </div><!-- header-wrapper-->
    </header>
      <?php do_action( 'flatsome_after_header' ); ?>
      <main id="main" class="<?php flatsome_main_classes(); ?>">