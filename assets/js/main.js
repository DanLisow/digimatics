let offset = document.querySelector('.container-header').offsetLeft;
let aboutPl = document.querySelector('.about__count');
gsap.registerPlugin(ScrollTrigger);

if (aboutPl) {
    aboutPl.style.paddingLeft = `${offset}px`;
}


let one = new Swiper('#slider-one', {
    slidesPerView: 'auto',
    freeMode: true,
    spaceBetween: 10,
    loop: true,
});

let two = new Swiper('#slider-two', {
    slidesPerView: 'auto',
    freeMode: true,
    spaceBetween: 10,
    loop: true,
});

let service = new Swiper('#service-slider', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: '#slider',
        clickable: true
    },
    autoplay: {
        delay: 7000,
        disableOnInteraction: false,
    }
});

let serviceMobile = new Swiper('#service-mobile', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: '#slider-mobile',
        clickable: true
    },
    autoplay: {
        delay: 7000,
        disableOnInteraction: false,
    }
});

let article = new Swiper('#article', {
    spaceBetween: 5,
    navigation: {
        nextEl: 'button.article__info-slider__next',
        prevEl: 'button.article__info-slider__prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        }
    }
});


function animateCases() {
    installMediaQueryWatcher("(min-width: 768px)", function (matches) {

        if (matches) {

            let tlProject = gsap.timeline({
                defaults: {
                    duration: 2,
                },
                scrollTrigger: {
                    trigger: '.client',
                    scrub: 0.1,
                    start: 'top 80%',
                }
            });

            tlProject.from('.client__slider-one', { xPercent: 15 })
                .from('.client__slider-two', { xPercent: -15 }, '<0');

        }
    });
}

function installMediaQueryWatcher(mediaQuery, layoutChangedCallback) {
    var mql = window.matchMedia(mediaQuery);
    mql.addListener(function (e) { return layoutChangedCallback(e.matches); });
    layoutChangedCallback(mql.matches);
}

animateCases();

ymaps.ready(init);
function init() {
    // Создание карты.
    let map = new ymaps.Map("map", {
        // Координаты центра карты.
        // Порядок по умолчанию: «широта, долгота».
        // Чтобы не определять координаты центра карты вручную,
        // воспользуйтесь инструментом Определение координат.
        center: [59.928, 30.368],
        // Уровень масштабирования. Допустимые значения:
        // от 0 (весь мир) до 19.
        zoom: 15,
        controls: []
    }, {
        searchControlProvider: 'yandex#search'
    });


    // let point = new ymaps.Placemark([59.928081, 30.368608], {
    //     // Свойства.
    //     // Содержимое хинта.
    //     hintContent: 'Цвиллинга, 6'
    // }, {
    //     // Опции
    //     iconLayout: 'default#image',
    //     // Своё изображение иконки метки.
    //     iconImageHref: 'https://webblack.ru/djumanji/wp-content/themes/djumanji/assets/img/point.svg',
    //     // Размеры метки.
    //     iconImageSize: [25, 25]
    //     // Смещение левого верхнего угла иконки относительно
    //     // её "ножки" (точки привязки).
    // });


    // map.geoObjects
    //     .add(point)
}

let input = document.getElementById('file_upload'),
    label = input.nextElementSibling,
    labelVal = label.querySelector('span').innerText;

if (input) {
    input.addEventListener('change', function (e) {
        let str = input.value.split('\\');
        label.querySelector('span').innerText = str[str.length - 1];
    });
}