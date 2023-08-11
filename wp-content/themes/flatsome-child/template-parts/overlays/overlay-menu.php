<!-- Mobile Sidebar -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="customize-html-sidebarmenu">
        <div class="block-top-mobile-menu">
            <div class="left-icon">
                <a href="<?php echo home_url(); ?>"><i class="fa-sharp fa-regular fa-house"></i></a>
            </div>
            <div class="logo-menu-side">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/uploads/2023/03/Logo-dark.png" alt=""></i></a>
            </div>
            <div class="close-sidebar">
                <button title="Close (Esc)" type="button" class="mfp-close"><i class="fa-sharp fa-regular fa-xmark"></i></button>
            </div>
        </div>
    </div>
    <div class="sidebar-menu no-scrollbar <?php if(get_theme_mod('mobile_overlay') == 'center') echo 'text-center';?>">
        <ul class="nav nav-sidebar <?php if(get_theme_mod('mobile_overlay') == 'center') echo 'nav-anim';?> nav-vertical nav-uppercase">
              <?php flatsome_header_elements('mobile_sidebar','sidebar'); ?>
        </ul>
    </div><!-- inner -->
</div><!-- #mobile-menu -->
