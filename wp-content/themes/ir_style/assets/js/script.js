;(function ($) {
    function init() {
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.mySwiper', {
                slidesPerView: 3,
                spaceBetween: 10,
                slidesPerGroup: 1,
                loop: true,
                centeredSlides: true,
                // pagination: {
                //     el: '.swiper-pagination',
                //     clickable: true,
                // },
                navigation: {
                    nextEl: '.swiper-button-next-custom',
                    prevEl: '.swiper-button-prev-custom',
                },
                on: {
                    init: function () {

                        let swiper_sliders = document.querySelectorAll('.swiper-slide')

                        for(let i = 0; i < swiper_sliders.length; i++) {
                            if(swiper_sliders[i].classList.contains('swiper-slide-active')) {
                                swiper_sliders[i].querySelector('video').classList.add('active')
                                swiper_sliders[i].querySelector('img').classList.add('disabled')
                            } else {
                                swiper_sliders[i].querySelector('video').classList.remove('active')
                                swiper_sliders[i].querySelector('img').classList.remove('disabled')
                            }
                        }
                     
                    },
                },
            })

            







            const swiper_photo = new Swiper('.photo-slider', {
                slidesPerView: 6,
                spaceBetween: 30,
                slidesPerGroup: 1,
                loop: false,
                // pagination: {
                //     el: '.swiper-pagination',
                //     clickable: true,
                // },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            })

            if (document.getElementById('photo-gallery')) {
                photoGallerySlider()
            }
            if (document.getElementById('price')) {
                priceForm()
            }
            if(document.getElementById('video-block')) {
                videoSwiper(swiper)
            }

            new BeerSlider(document.getElementById('slider'))

            $.fn.BeerSlider = function (options) {
                options = options || {}
                return this.each(function () {
                    new BeerSlider(this, options)
                })
            }
            $('.beer-slider').BeerSlider({ start: 50 })
        })
    }

    function photoGallerySlider() {
        const swiper_slider_photo = document.querySelectorAll('.swiper-slide')
        const slider_before_after = document.querySelectorAll(
            '.slider_before-after'
        )

        slider_before_after[0].classList.add('active')

        for (let i = 0; i < swiper_slider_photo.length; i++) {
            swiper_slider_photo[i].addEventListener('click', function () {
                for (let k = 0; k < slider_before_after.length; k++) {
                    slider_before_after[k].classList.remove('active')
                }
                slider_before_after[i].classList.add('active')
            })
        }
    }

    function priceForm() {
        const price_items = document.querySelectorAll('.price__item')
        const price_items_active = document.querySelectorAll(
            '.price__item--active'
        )

        for (let i = 0; i < price_items_active.length; i++) {
            price_items_active[i].addEventListener('click', function () {
                if (price_items[i].classList.contains('active')) {
                    for (let k = 0; k < price_items.length; k++) {
                        price_items[k].classList.remove('active')
                    }
                    price_items[i].classList.remove('active')
                } else {
                    for (let k = 0; k < price_items.length; k++) {
                        price_items[k].classList.remove('active')
                    }
                    price_items[i].classList.add('active')
                }
            })
        }
    }

    function videoSwiper(el) {
        let swiper_sliders = document.querySelectorAll('.swiper-slide')


        el.on('slideChangeTransitionEnd', function () {
            for(let i = 0; i < swiper_sliders.length; i++) {
                if(swiper_sliders[i].classList.contains('swiper-slide-active')) {
                    swiper_sliders[i].querySelector('video').classList.add('active')
                    swiper_sliders[i].querySelector('img').classList.add('disabled')
                } else {
                    swiper_sliders[i].querySelector('video').classList.remove('active')
                    swiper_sliders[i].querySelector('img').classList.remove('disabled')
                }
            }
        });
        el.update()
    }

    init()
})(jQuery)
