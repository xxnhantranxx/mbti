<?php
get_header();?>
<div id="content" class="content-area content-archive-rooms">
    <div class="container wapper-room">
        <div class="row row-small">
            <div class="blockhead-home text-center">
                <p class="subtitle-home">Conscious hospitality</p>
                    <h2 class="title-home">Rooms &amp; Suites</h2>
                <div class="line"></div>
            </div>
            <div class="main-room">
            <?php while (have_posts()) : the_post(); ?>
            <div class="item-room">
                <div class="image-room">
                    <a href="<?php echo get_permalink(); ?>" class="d-block"><?php the_post_thumbnail('full'); ?></a>
                </div>
                <div class="waptext">
                    <div class="entry-title-room"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="meta-room">
                        <div class="bed-room">
                            <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/bed.png"; ?>"></div>
                            <div class="count"><?php the_field("bed"); ?></div>
                        </div>
                        <div class="guests-room">
                            <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/pesion.png"; ?>"></div>
                            <div class="count"><?php the_field("max_guest"); ?></div>
                        </div>
                    </div>
                    <div class="btn-block">
                        <div class="btn-book-now">
                            <a href="<?php the_field("link_booking"); ?>" class="btn-base">BOOK NOW</a>
                        </div>
                        <div class="btn-detail">
                            <a href="<?php echo get_permalink(); ?>" class="btn-light">VIEW DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();