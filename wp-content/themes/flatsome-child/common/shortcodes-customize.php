<?php
// shortcode Năm

function create_year()

{

  return date('Y');
}

add_shortcode('year', 'create_year');



// Custom share

function my_link_here()

{ ?>

  <div class="social-icons share-icons share-row relative">

    <span>Chia sẻ: </span>

    <div class="zalo-share-button" data-href="<?php echo get_permalink(); ?>" data-oaid="579745863508352884" data-customize=true></div>

    <a href="//www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon plain tooltip facebook tooltipstered"><i class="icon-facebook"></i></a>

    <a href="//twitter.com/share?url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon plain tooltip twitter tooltipstered"><i class="icon-twitter"></i></a>

    <a href="//pinterest.com/pin/create/button/?url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon plain tooltip pinterest tooltipstered"><i class="icon-pinterest"></i></a>

    <a href="//www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_permalink(); ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon plain tooltip linkedin tooltipstered"><i class="icon-linkedin"></i></a>

  </div>

<?php }

add_shortcode('my_link_shortcode', 'my_link_here');



// Custom isocal ALL WEB

function all_isoca_page()

{ ?>

  <li class="html header-social-icons">

    <div class="social-icons follow-icons">

      <a href="<?php echo get_option('fanpage'); ?>" target="_blank" rel="nofollow" class="icon facebook"><i class="icon-facebook"></i></a>

      <a href="mailto:<?php echo get_option('gmail'); ?>" rel="nofollow" class="icon email"><i class="icon-envelop"></i></a>

      <a href="<?php echo get_option('youtube'); ?>" target="_blank" rel="nofollow" class="icon youtube"><i class="icon-youtube"></i></a>

      <a href="<?php echo get_option('instagram'); ?>" target="_blank" rel="nofollow" class="icon instagram"><i class="fab fa-instagram"></i></a>

      <a href="<?php echo get_option('messenger'); ?>" target="_blank" class="icon messenger"><i class="fab fa-facebook-messenger"></i></a>

    </div>

  </li>

<?php }

add_shortcode('my_isocal', 'all_isoca_page');



// Lightbox promototion

function promototion()

{ ?>

  <div class="lightbox-promototion">

    <div class="block-head">

      <div class="subtitle"><?php echo get_field('subtitle_promototion', 'option') ?></div>

      <div class="title">
        <h2><?php echo get_field('title_promototion', 'option') ?></h2>
      </div>

      <p class="description"><?php echo get_field('description_promototion', 'option') ?></p>

    </div>

    <div class="image-promototion">

      <a href="<?php echo get_field('links_promototion', 'option') ?>" class="d-block">

        <img src="<?php echo get_field('image_promototion', 'option') ?>" alt="">

      </a>

    </div>

  </div>

<?php }

add_shortcode('SC_promototion', 'promototion');



// List Isocal header

function Isocal()

{

  ob_start();

?>

  <div class="list-isocal-top">

    <?php

    // Check rows existexists.

    if (have_rows('item_isocal', 'option')) :

      // Loop through rows.

      while (have_rows('item_isocal', 'option')) : the_row();

        // Load sub field value.

        $sub_name = get_sub_field('name', 'option');

        $sub_icon = get_sub_field('icon', 'option');

        $sub_url = get_sub_field('url', 'option');

    ?>

        <div class="item-isocal">

          <div class="image"><img width="14" height="14" src="<?php echo $sub_icon; ?>"></div>

          <div class="name_isocal"><a class="nav-link-isocal" href="<?php echo $sub_url; ?>"><?php echo $sub_name; ?></a></div>

        </div>

    <?php  // Do something...

      // End loop.

      endwhile;

    // No value.

    else :

    // Do something...

    endif;

    ?>

  </div>

  <?php

  $contentShortcode = ob_get_contents();

  ob_end_clean();

  return $contentShortcode;
}

add_shortcode('Isocal', 'Isocal');



// List Galerry

function slider_gallery()
{
    ob_start();

  ?>

    <div class="home-gallery">

      <?php

      $images = get_field('gallery_home', 'option');

      foreach ($images as $image) { 
      ?>
        <div class="item-slider-gallery">
          <picture>
            <img src="<?php echo $image; ?>" title="Du học nghề Đức" />
          </picture>
          

        </div>

      <?php } ?>

    </div>

  <?php
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
  return ;
}

add_shortcode('slider_gallery', 'slider_gallery');



// List Team

function MyTeam()

{

  ob_start();

  ?>

  <div class="home-myteam">

    <?php

    // Check rows existexists.

    if (have_rows('team', 'option')) :

      // Loop through rows.

      while (have_rows('team', 'option')) : the_row();

        // Load sub field value.

        $sub_avatar = get_sub_field('avatar', 'option');

        $sub_name_team = get_sub_field('name_team', 'option');

        $sub_chuc_vu = get_sub_field('chuc_vu', 'option');

        $sub_desc_team = get_sub_field('desc_team', 'option');

    ?>

        <div class="item-team">

          <div class="image">

            <img src="<?php echo $sub_avatar; ?>">

          </div>

          <div class="name-team"><?php echo $sub_name_team; ?></div>

          <div class="chuc-vu"><?php echo $sub_chuc_vu; ?></div>

          <div class="desc-team"><?php echo $sub_desc_team; ?></div>

        </div>

    <?php  // Do something...

      // End loop.

      endwhile;

    // No value.

    else :

    // Do something...

    endif;

    ?>

  </div>

<?php

  $contentShortcode = ob_get_contents();

  ob_end_clean();

  return $contentShortcode;
}

add_shortcode('MyTeam', 'MyTeam');
