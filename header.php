<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(85043107, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/85043107" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-207160546-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-207160546-1');
    </script>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav.PNG" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body>

    <?php $header = is_home() ? '' : 'type';?>
    <header class="header <?php echo $header; ?>">
        <div class="container-header">
            <div class="header__inner">
                <div class="header__logo">
                    <a href="<?php bloginfo('url'); ?>/#main">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-blue.svg" alt="">
                    </a>
                </div>
                <div class="header__menu">
                    <div class="header__item">
                        <a href="<?php bloginfo('url'); ?>/#project">Проекты</a>
                    </div>
                    <div class="header__item">
                        <a href="<?php the_permalink('467'); ?>">Услуги</a>
                    </div>
                    <div class="header__item">
                        <a href="<?php the_permalink('354'); ?>">Продукты</a>
                    </div>
                    <div class="header__item">
                        <a href="<?php bloginfo('url'); ?>/#about">О компании</a>
                    </div>
                    <div class="header__item">
                        <a href="<?php the_permalink('566'); ?>">Блог</a>
                    </div>
                    <div class="header__item">
                        <a href="<?php bloginfo('url'); ?>/#contact">Контакты</a>
                    </div>
                    <div class="header__item">
                        <a href="<?php the_permalink('112'); ?>">Карьера</a>
                    </div>
                    <a data-src="#modal" data-fancybox href="#"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt=""> Оставить
                        заявку</a>
                </div>
                <div class="header__send">
                    <button>
                        <a data-src="#modal" data-fancybox href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""> Оставить
                            заявку</a>
                    </button>
                </div>
                <div class="header__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>