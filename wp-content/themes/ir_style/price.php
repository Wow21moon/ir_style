<?php
/*

Template name: Цены


*/

get_header();?>

<section class="price" id="price">
    <!-- <div class="photo-gallery-bg"></div> -->
    <div class="layout">
        
        <div class="price__container">
            <h1 class="price__main-title">
                Price List
            </h1>
            <p>Выберите свою услугу</p>
            <div class="price__table">
                <div class="price__item">
                    <div class="price__item--active"></div>
                    <div class="price__title">
                        <span>Макияж любой сложности</span>
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="price__subheader">
                        Нежный, вечерний, свадебный, яркий, лифтинг
                    </div>
                    
                    <div class="price__img">
                        <div class="price__form">
                            <p>Отправьте заявку и мы Вам перезвоним!</p>
                            <label for="user-name">Ваше имя</label>
                            <input type="text" id="user-name" placeholder="Введите имя">
                            <label for="user-phone">Ваш номер</label>
                            <input type="text" id="user-phone" placeholder="Введите номер телефона">
                            <button>Отправить</button>
                        </div>
                        <img src="<?php echo $ir_assets . 'images/makeup.jpg'?>" alt="">
                    </div>
                    <div class="price__description">
                        Проклейка ресниц входит в стоимость
                    </div>
                    <div class="price__price">
                        1300P
                    </div>
                </div>
                <div class="price__item">
                    <div class="price__item--active"></div>
                    <div class="price__title">
                        <span>Образ в 4 руки</span>
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="price__subheader">
                        Макияж + причёска
                    </div>
                    <div class="price__img">
                        <div class="price__form">
                            <p>Отправьте заявку и мы Вам перезвоним!</p>
                            <label for="user-name">Ваше имя</label>
                            <input type="text" id="user-name" placeholder="Введите имя">
                            <label for="user-phone">Ваш номер</label>
                            <input type="text" id="user-phone" placeholder="Введите номер телефона">
                            <button>Отправить</button>
                        </div>
                        <img src="<?php echo $ir_assets . 'images/makeup1.jpg'?>" alt="">
                    </div>
                    <div class="price__description">
                        Работаем вместе с мастером <a href="#">@islamova_hair</a>
                    </div>
                    <div class="price__price">
                        2500P
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php
get_footer();