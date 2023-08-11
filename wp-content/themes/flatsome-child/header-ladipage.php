<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php do_action( 'flatsome_after_body_open' ); ?>
  <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>
  <div id="wrapper">
    <?php do_action( 'flatsome_before_header' ); ?>
      <?php do_action( 'flatsome_after_header' ); ?>
      <header id="header-ladipage">
        <div class="container main-header-ladipage">
            <div class="top-header-ladipage">
              <ul class="inner-thl">
                <li class="item"><a href="mailto:<?php echo get_field('email_ladipage','option'); ?>"><i class="fa-regular fa-envelope"></i> <?php echo get_field('email_ladipage','option'); ?></a></li>
                <li class="item"><a href="tel:<?php echo get_field('phone_ladipage','option'); ?>"><i class="fa-regular fa-phone"></i> <?php echo get_field('phone_ladipage','option'); ?></a></li>
              </ul>
            </div>
            <div class="main-header-ladipage">
              <div class="inner-mhl">
                <div class="logo-ladipage"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_field('logo_ladipage','option'); ?>" alt="logo"></a></div>
              </div>
            </div>
        </div>
      </header>
      <main id="main" class="<?php flatsome_main_classes(); ?>">