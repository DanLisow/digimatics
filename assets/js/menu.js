let heightMain = $('.main').height() - $('.header').height();
let heightType = $('.header').height();

$(window).scroll(function () {
    let scrolled = $(this).scrollTop();

    index(scrolled);
    type(scrolled);
});

function index(scrolled) {
    if (scrolled > heightMain) {
        $('.header').addClass('scroll');
    }
    else {
        $('.header').removeClass('scroll');
    }
}

function type(scrolled) {
    if (scrolled > heightType) {
        $('.header.type').addClass('scroll');
    }
    else {
        $('.header.type').removeClass('scroll');
    }
}

$('.header__burger').on('click', function () {
    $(this).toggleClass('active');
    $('.header__menu').toggleClass('active');
    $('body').toggleClass('lock');
});

$('.single__about-title').on('click', function () {
    $('.single__about-body').slideToggle('500');
});

$('.header__item a').on('click', function () {
    $('.header__burger').removeClass('active');
    $('.header__menu').removeClass('active');
    $('body').removeClass('lock');
});

$(".header, .footer, .client, .team__top-right__block, .vacancy__about-block").on('click', '[href*="#"]', function (e) {
    var fixed_offset = 100;
    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
    e.preventDefault();
});