<?php
/*

Template name: Фотогалерея


*/

get_header();?>



<section class="photo-gallery" id="photo-gallery">
    <div class="photo-gallery-bg"></div>
    <div class="layout">
        <h1>Фотогалерея</h1>
        <div class="photo-gallery__container">
            <div class="photo-gallery__block">
                <?php
                    query_posts([
                        'post_type' => 'photo-gallery-client',
                        'order'   => 'ASC'
                    ]);

                    while(have_posts()) {
                        the_post();
                ?>

                <div class="slider_before-after">
               
                    <div id="slider" class="beer-slider" data-beer-label="До">
                        <img src="<?php echo the_field('photo_after');?>" alt="">
                        <div class="beer-reveal" data-beer-label="После">
                            <img src="<?php echo the_field('photo_before');?>" alt="">
                        </div>
                    </div>
                    
                </div>

                <?php
                    }
                    wp_reset_query();
                ?>
            </div>
        </div>
        <div class="photo-gallery__slider">
            <div class="swiper photo-slider">
                <div class="swiper-wrapper">
                    <?php
                        query_posts([
                            'post_type' => 'photo-gallery-client',
                            'order'   => 'ASC'
                        ]);

                        while(have_posts()) {
                            the_post();
                    ?>

                    <div class="swiper-slide">
                        <img src="<?php echo the_field('photo_client_prev'); ?>" alt="" />
                    </div>


                    <?php
                        }
                        wp_reset_query();
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>

    </div>
</section>


<?php
get_footer();