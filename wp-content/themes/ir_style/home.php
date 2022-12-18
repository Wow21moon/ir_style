<?php
/*

Template name: Главная страница

*/

get_header();?>

<section class="first">
    <div class="layout">
        <div class="first-block">
            <div class="first-block__left">
                <div class="first-block__table">
                    <p>Оформить заказ вы можете в соц.сетях или на сайте</p>
                    <ul>
                        <li><a href="https://vk.com/irina.evteeva" target="_blank">
                            <img src="<?php echo $ir_assets . 'images/vk.svg'?>" alt="VK">
                        </a></li>
                        <li><a href="#" target="_blank">
                            <img src="<?php echo $ir_assets . 'images/instagram.svg'?>" alt="Insta">
                        </a></li>
                    </ul>
                    <div class="first__price">
                        <a href="/price/"><i class="fas fa-search-dollar"></i>Узнать цены</a>
                    </div>
                </div>
            </div>
            <div class="first-block__right">
                <div class="img_irina">
                    <div class="img_border"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="icon">
    <div class="layout">
        <div class="icon__container">
            <div class="icon__item"><i class="fas fa-thumbs-up"></i>Высокое качество!</div>
            <div class="icon__item"><i class="fas fa-camera-retro"></i>Образы для фотосессии</div>
            <div class="icon__item"><i class="fas fa-wallet"></i>Доступно каждому</div>
        </div>
    </div>
</section>
<section class="second" id="video-block">
    <div class="photo-gallery-bg"></div>
    <div class="layout">
        <div class="second-block">
            <div class="second-block__table">
                <h2>Готовые образы</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <?php
                            query_posts([
                                'post_type' => 'video',
                                'order'   => 'ASC'
                            ]);

                            while(have_posts()) {
                                the_post();
                        ?>

                        <div class="swiper-slide">
                            <video src="<?php echo the_field('video')?>" controls="controls"></video>
                            <img src="<?php echo the_field('preview')?>" alt="">
                        </div>

                        
                        <?php
                            }
                            wp_reset_query();
                        ?>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
                <div class="swiper-button-next-custom">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="swiper-button-prev-custom">
                        <i class="fas fa-chevron-left"></i>
                    </div>
            </div>
        </div>
    </div>
</section>
<section class="third">
    <div class="layout">
        <div class="third-block">
            <h2>Отправьте заявку и мы обязательно Вам перезвоним</h2>
            <form>
                <div class="third-block__item">
                    <label for="user-name">Ваше имя</label>
                    <input type="text" id="user-name" placeholder="Введите имя">
                </div>
                <div class="third-block__item">
                    <label for="user-phone">Ваш номер</label>
                    <input type="text" id="user-phone" placeholder="Введите номер телефона">
                </div>
            </form>
            <button>Отправить</button>
        </div>
    </div>
</section>

<?php
get_footer();