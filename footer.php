<?php if(!is_singular('post')): $hide = is_page('566') ? 'display: none' : ''; ?>
<div class="send" id="send" style="<?php echo $hide; ?>">
    <div class="container">
        <div class="send__inner">
            <div class="send__left">
                <div class="send__title">
                    <span>07</span>
                    <h1>Напишите нам</h1>
                    <p>Или <a data-src="#modal" data-fancybox href="#">оставьте заявку</a> на обратный звонок</p>
                </div>
                <form class="send__form" data-type="form" enctype="multipart/form-data">
                    <div class="send__form-inputs">
                        <div class="send__form-input">
                            <input type="text" name="name" maxlength="20" placeholder="Ваше имя *">
                        </div>
                        <div class="send__form-input">
                            <input type="text" name="phone" placeholder="Номер телефона *">
                        </div>
                    </div>
                    <div class="send__form-text">
                        <input type="text" name="email" placeholder="Email *">
                        <textarea name="text" placeholder="Сообщение"></textarea>
                    </div>
                    <?php if(is_single() || is_page('112') || is_page('354')): ?>
                    <div class="send__form-upload">
                        <input type="hidden" name="hr" value="hr">
                        <input name="file" type="file" id="file_upload">
                        <label for="file_upload">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/attach.svg" alt="">
                            <span>Прикрепить файл</span>
                        </label>
                    </div>
                    <?php endif; ?>
                    <div class="send__form-button">
                        <button type="submit" class="submit">
                            <a href="#">Отправить</a>
                        </button>
                        <p>Нажимая на кнопку, вы соглашаетесь
                            с <a href="<?php echo get_template_directory_uri(); ?>/Политика_обработки_персональных_данных_в_ООО_«ЦИФРОМАТИКА».pdf"
                                target="_blank" style="color:#0000ff;">условиями обработки персональных данных</a></p>
                    </div>
                </form>
            </div>
            <div class="send__right">
                <div class="send__right-block">
                    <h1>Или свяжитесь с нами <b>удобным</b> способом:</h1>
                    <div class="send__right-contact">
                        <div class="send__right-contact__item">
                            <div class="send__right-contact__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.svg" alt="">
                            </div>
                            <div class="send__right-contact__text">
                                <h5>Отдел продаж</h5>
                                <a href="tel:+78124083344">+7 (812) 408-33-44</a>
                            </div>
                        </div>
                    </div>
                    <div class="send__right-mail">
                        <div class="send__right-mail__item">
                            <div class="send__right-mail__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="">
                            </div>
                            <div class="send__right-mail__text">
                                <h5>Отдел продаж</h5>
                                <a href="mailto:info@digimatics.ru">info@digimatics.ru</a>
                            </div>
                        </div>
                    </div>
                    <a data-src="#modal" data-fancybox href="#"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt="">
                        Перезвоните
                        мне</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<footer class="footer">
    <div class="footer__items">
        <div class="footer__info" id="contact">
            <div class="footer__info-block">
                <div class="footer__logo">
                    <a href="<?php bloginfo('url'); ?>/#main">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-black.svg" alt="">
                    </a>
                </div>
                <div class="footer__text">
                    <a href="tel:+78124083344">+7 (812) 408-33-44</a>
                    <a href="mailto:info@digimatics.ru">info@digimatics.ru</a>
                    <p>191036, Санкт-Петербург,
                        ул. Гончарная, 27</p>
                </div>
                <p>© 2019-2022. Цифроматика. Все права защищены.</p>
            </div>
        </div>
        <div class="footer__nav">
            <h1>Навигация</h1>
            <div class="footer__nav-items">
                <a href="<?php bloginfo('url'); ?>/#project">Проекты</a>
                <a href="<?php bloginfo('url'); ?>/#service">IT-консалтинг</a>
                <a href="<?php bloginfo('url'); ?>/#product">Наши продукты</a>
                <a href="<?php bloginfo('url'); ?>/#service">Разработка</a>
                <a href="<?php bloginfo('url'); ?>/#about">О компании</a>
                <a href="<?php bloginfo('url'); ?>/#service">Внедрение IT-продуктов</a>
                <a href="<?php the_permalink('566'); ?>">Блог</a>
                <a href="<?php the_permalink('112'); ?>">Карьера у нас</a>
            </div>
            <a href="<?php echo get_template_directory_uri(); ?>/Политика_обработки_персональных_данных_в_ООО_«ЦИФРОМАТИКА».pdf"
                target="_blank">Политика
                конфиденциальности</a>
        </div>
        <div class="footer__map">
            <div id="map"></div>
        </div>
    </div>
</footer>

<div class="modal" id="modal">
    <div class="modal__body">
        <div class="modal__info">
            <h1>Оставить заявку</h1>
            <form class="send__form" data-type="popup">
                <div class="send__form-inputs">
                    <div class="send__form-input">
                        <input type="text" name="name" maxlength="20" placeholder="Ваше имя *">
                    </div>
                    <div class="send__form-input">
                        <input type="text" name="phone" placeholder="Номер телефона *">
                    </div>
                </div>
                <div class="send__form-text">
                    <input type="text" name="email" placeholder="Email *">
                    <textarea name="text" placeholder="Сообщение"></textarea>
                </div>
                <div class="send__form-button">
                    <button type="submit" class="submit">
                        <a href="#">Отправить</a>
                    </button>
                    <p>Нажимая на кнопку, вы соглашаетесь
                        с <a href="<?php echo get_template_directory_uri(); ?>/Политика_обработки_персональных_данных_в_ООО_«ЦИФРОМАТИКА».pdf"
                            target="_blank" style="color:#0000ff;">условиями обработки персональных данных</a></p>
                </div>
            </form>
        </div>
        <div class="modal__img">
            <div class="modal__img-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal.png" alt="">
                <div class="modal__img-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-success">
    <div class="modal__body">
        <div class="modal__info" style="padding: 36px 50px 36px 49px;">
            <p>Заявка успешно отправлена!</p>
        </div>
    </div>
</div>

<div class="modal" id="modal-error">
    <div class="modal__body">
        <div class="modal__info" style="padding: 36px 50px 36px 49px;">
            <p>Ошибка отправки сообщения!</p>
        </div>
    </div>
</div>

<div class="modal" id="modal-warning">
    <div class="modal__body">
        <div class="modal__info" style="padding: 36px 50px 36px 49px;">
            <p>Заполните все поля!</p>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
$('[data-fancybox]').fancybox({
    touch: false,
    autoFocus: false
});
</script>

</body>

</html>