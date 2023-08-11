<?php
get_header();?>
<div class="wapper-single-room container">
    <div class="row row-small r10">
        <div class="col large-8 small-12 main-detail">
            <div class="image-view">
                <?php the_post_thumbnail('full'); ?>
                <a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="gallery" class="btn-view-gallery" data-type="image"><i class="fa-light fa-image"></i> MORE PHOTOS</a>
            </div>
            <div class="only-mobile sidebar-detail">
                <div class="sidebar-inner">
                    <div class="heading-room">
                        <div class="title-room"><h1><?php the_title(); ?></h1></div>
                        <div class="price">
                            <div class="top-p">Form <span><?php the_field("price"); ?></span></div>
                            <div class="bottom-p">per night</div>
                        </div>
                    </div>
                    <div class="title-sidebar-detail">Room Details</div>
                    <div class="listcard-tien">
                        <div class="item-card">
                            <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/icon-01.png"; ?>"></div>
                            <div class="name">
                                <div class="top">Bed</div>
                                <div class="bottom">
                                    <?php the_field('bed'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/icon-04.png"; ?>"></div>
                            <div class="name">
                                <div class="top">Max guest</div>
                                <div class="bottom">
                                    <?php the_field('max_guest'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/icon-03.png"; ?>"></div>
                            <div class="name">
                                <div class="top">Room space</div>
                                <div class="bottom">
                                    <?php the_field('room_space'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="item-card">
                            <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/icon-02.png"; ?>"></div>
                            <div class="name">
                                <div class="top">Room view</div>
                                <div class="bottom">
                                    <?php the_field('room_view'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nut-an-booking">
                        <a href="<?php the_field('link_booking'); ?>" class="btn-bookingdetails">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="content-room">
                <div class="heading-room">
                    <div class="title-room"><h1><?php the_title(); ?></h1></div>
                    <div class="price">
                        <div class="top-p">Form <span><?php the_field("price"); ?></span></div>
                        <div class="bottom-p">per night</div>
                    </div>
                </div>
                <div class="noidung-room">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="facitities-detail">
                <div class="head-facitities">Hotel Facitities</div>
                <div class="main-facitities">
                    <?php
                        $facitities = get_field('hotel_facitities');
                        foreach( $facitities as $facititie ){ ?>
                            <div class="card">
                                <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/".$facititie['value']; ?>" alt=""></div>
                                <div class="name"><?php echo $facititie['label']; ?></div>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
        <div class="col large-4 small-12 sidebar-detail">
            <div class="sidebar-inner">
                <div class="title-sidebar-detail">Room Details</div>
                <div class="listcard-tien">
                    <div class="item-card">
                        <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/icon-01.png"; ?>"></div>
                        <div class="name">
                            <div class="top">Bed</div>
                            <div class="bottom">
                                <?php the_field('bed'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/icon-04.png"; ?>"></div>
                        <div class="name">
                            <div class="top">Max guest</div>
                            <div class="bottom">
                                <?php the_field('max_guest'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/icon-03.png"; ?>"></div>
                        <div class="name">
                            <div class="top">Room space</div>
                            <div class="bottom">
                                <?php the_field('room_space'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="item-card">
                        <div class="icon"><img src="<?php echo home_url()."/wp-content/themes/flatsome-child/img/icon-02.png"; ?>"></div>
                        <div class="name">
                            <div class="top">Room view</div>
                            <div class="bottom">
                                <?php the_field('room_view'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nut-an-booking">
                    <a href="<?php the_field('link_booking'); ?>" class="btn-bookingdetails">BOOK NOW</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-small r11">
        <div class="room-photo">
            <div class="title-detail">Room Photos</div>
            <div class="Gallery">
                <?php
                $images = get_field('room_photos');
                foreach ($images as $image){?>
                    <div class="item-gallery">
                        <a href="<?php echo $image; ?>" data-fancybox="gallery" data-type="image">
                            <img src="<?php echo $image; ?>" alt="">
                        </a>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <div class="row row-smaill r12">
        <div class="moreroom wapper-room">
            <div class="h2 title-detail">More Rooms</div>
            <div class="main-room">
                <?php 
                $args = array(
                    'post_type' => 'Rooms',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'order' => 'DESC',
                    'orderby' => 'random', 
                );
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    // Do Stuff
                    ?>
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
                    <?php    
                    endwhile;
                    endif;
                
                // Reset Post Data
                wp_reset_postdata();
            ?>
            </div>
        </div>           
    </div>
</div>
<?php get_footer();