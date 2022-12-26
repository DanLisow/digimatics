<?php get_header(); ?>

<div class="main" id="main">
    <div class="container">
        <div class="main__inner">
            <div class="main__info">
                <span>01</span>
                <h1><b>Разработка, консалтинг</b>
                    и внедрение IT-решений.</h1>
                <p><b>Цифроматика</b> — с 2019 года разрабатываем программные решения для органов власти,
                    государственных и
                    частных
                    компаний, лидеров
                    российской промышленной и транспортной отраслей</p>
                <button>
                    <a data-src="#modal" data-fancybox href="#">Оставить заявку</a>
                </button>
            </div>
            <div class="main__down">
                <div class="main__down-scroll">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-down.svg" alt="">
                    <p>Листай ниже</p>
                </div>
                <div class="main__items">
                    <div class="main__item">
                        <h4>15+</h4>
                        <p>крупных проектов
                            в разных сферах</p>
                    </div>
                    <div class="main__item">
                        <h4>3 года</h4>
                        <p>на рынке разработки
                            и IT-услуг</p>
                    </div>
                    <div class="main__item">
                        <h4>80%</h4>
                        <p>клиентов делятся
                            нашими контактами</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main__layer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-layer-1.svg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-layer-2.svg" alt="">
    </div>
    <div class="main__line">
        <div></div>
        <div></div>
    </div>
</div>

<?php
$option = (int)get_option('service_option');
?>

<?php if($option == 1): ?>
<div class="service one" id="service">
    <div class="container">
        <div class="service__inner">
            <div class="service__info">
                <span>02</span>
                <h1>Наши услуги</h1>
                <p>Предоставляем широкий спектр IT-услуг по разным направлениям — от IT-консалтинга до разработки
                </p>
                <div class="service__items mobile">
                    <div class="service__item">
                        <a href="<?php the_permalink('453'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>01</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>IT-консалтинг</h4>
                                    <p>от 560 тыс. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item">
                        <a href="<?php the_permalink('476'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>02</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>Outsource-разработка</h4>
                                    <p>от 2 млн. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item white">
                        <a href="">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>03</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>Внедрение IT-продуктов</h4>
                                    <p>от 2 млн. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a href="<?php the_permalink('467'); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt=""> Смотреть все
                    услуги</a>
            </div>
            <div class="service__items">
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>01</p>
                        </div>
                        <div class="service__item-text">
                            <h4>IT-консалтинг</h4>
                            <p>от 560 тыс. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>01. IT-консалтинг</h4>
                            <p>Технический аудит IT-продуктов и процессов, digital-исследование и ревью
                                legacy-кода
                                для enterprise</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('453'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>02</p>
                        </div>
                        <div class="service__item-text">
                            <h4>Outsource-разработка</h4>
                            <p>от 2 млн. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>02. Outsource-разработка</h4>
                            <p>Сформируем команду профессионалов под особенности вашего проекта. Быстрый старт</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('476'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item white">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>03</p>
                        </div>
                        <div class="service__item-text">
                            <h4>Внедрение
                                IT-продуктов</h4>
                            <p>от 2 млн. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>03. Внедрение
                                IT-продуктов</h4>
                            <p>Внедрение уникальных программных продуктов, отвечающих вашим бизнес-требованиям</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a data-src="#modal" data-fancybox href="#"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php elseif($option == 2): ?>
<div class="service two" id="service">
    <div class="container">
        <div class="service__inner">
            <div class="service__info">
                <span>02</span>
                <h1>Наши услуги</h1>
                <div class="service__items mobile">
                    <div class="service__item">
                        <a href="<?php the_permalink('453'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>01</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>IT-консалтинг</h4>
                                    <p>от 560 тыс. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item">
                        <a href="<?php the_permalink('476'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>02</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>Outsource-разработка</h4>
                                    <p>от 2 млн. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item white">
                        <a href="">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>03</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>Внедрение IT-продуктов</h4>
                                    <p>от 2 млн. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item">
                        <a href="<?php the_permalink('499'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>04</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>Информационная безопасность</h4>
                                    <p>от 500 тыс. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item">
                        <a href="<?php the_permalink('487'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>05</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>QA тестирование</h4>
                                    <p>от 300 тыс. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a href="<?php the_permalink('467'); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt=""> Смотреть все
                    услуги</a>
            </div>
            <div class="service__items">
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>01</p>
                        </div>
                        <div class="service__item-text">
                            <h4>IT-консалтинг</h4>
                            <p>от 560 тыс. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>01. IT-консалтинг</h4>
                            <p>Технический аудит IT-продуктов и процессов, digital-исследование и ревью
                                legacy-кода
                                для enterprise</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('453'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>02</p>
                        </div>
                        <div class="service__item-text">
                            <h4>Outsource-разработка</h4>
                            <p>от 2 млн. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>02. Outsource-разработка</h4>
                            <p>Сформируем команду профессионалов под особенности вашего проекта. Быстрый старт</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('476'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item white">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>03</p>
                        </div>
                        <div class="service__item-text">
                            <h4>Внедрение
                                IT-продуктов</h4>
                            <p>от 2 млн. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>03. Внедрение
                                IT-продуктов</h4>
                            <p>Внедрение уникальных программных продуктов, отвечающих вашим бизнес-требованиям</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a data-src="#modal" data-fancybox href="#"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>04</p>
                        </div>
                        <div class="service__item-text">
                            <h4>Информационная безопасность</h4>
                            <p>от 560 тыс. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>04. Информационная безопасность</h4>
                            <p>Технический аудит IT-продуктов и процессов, digital-исследование и ревью
                                legacy-кода
                                для enterprise</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('499'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>05</p>
                        </div>
                        <div class="service__item-text">
                            <h4>QA тестирование</h4>
                            <p>от 2 млн. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>05. QA тестирование</h4>
                            <p>Сформируем команду профессионалов под особенности вашего проекта. Быстрый старт</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('487'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php elseif($option == 3): ?>
<div class="service three" id="service">
    <div class="container">
        <div class="service__inner">
            <div class="service__info">
                <span>02</span>
                <h1>Наши услуги</h1>
                <div class="service__items mobile">
                    <div class="service__item">
                        <a href="<?php the_permalink('453'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>01</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>IT-консалтинг</h4>
                                    <p>от 560 тыс. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item">
                        <a href="<?php the_permalink('476'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>02</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>Outsource-разработка</h4>
                                    <p>от 2 млн. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item">
                        <a href="">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>03</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>Внедрение IT-продуктов</h4>
                                    <p>от 2 млн. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item">
                        <a href="<?php the_permalink('499'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>04</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>Информационная безопасность</h4>
                                    <p>от 500 тыс. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="service__item">
                        <a href="<?php the_permalink('487'); ?>">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>05</p>
                                </div>
                                <div class="service__item-text">
                                    <h4>QA тестирование</h4>
                                    <p>от 300 тыс. руб.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a href="<?php the_permalink('467'); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt=""> Смотреть все
                    услуги</a>
            </div>
            <div class="service__items">
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>01</p>
                        </div>
                        <div class="service__item-text">
                            <h4>IT-консалтинг</h4>
                            <p>от 560 тыс. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>01. IT-консалтинг</h4>
                            <p>Технический аудит IT-продуктов и процессов, digital-исследование и ревью
                                legacy-кода
                                для enterprise</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('453'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>02</p>
                        </div>
                        <div class="service__item-text">
                            <h4>Outsource-разработка</h4>
                            <p>от 2 млн. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>02. Outsource-разработка</h4>
                            <p>Сформируем команду профессионалов под особенности вашего проекта. Быстрый старт</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('476'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>03</p>
                        </div>
                        <div class="service__item-text">
                            <h4>Внедрение
                                IT-продуктов</h4>
                            <p>от 2 млн. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>03. Внедрение
                                IT-продуктов</h4>
                            <p>Внедрение уникальных программных продуктов, отвечающих вашим бизнес-требованиям</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a data-src="#modal" data-fancybox href="#"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>04</p>
                        </div>
                        <div class="service__item-text">
                            <h4>Информационная безопасность</h4>
                            <p>от 560 тыс. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>04. Информационная безопасность</h4>
                            <p>Технический аудит IT-продуктов и процессов, digital-исследование и ревью
                                legacy-кода
                                для enterprise</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('499'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__item-block">
                        <div class="service__item-count">
                            <p>05</p>
                        </div>
                        <div class="service__item-text">
                            <h4>QA тестирование</h4>
                            <p>от 2 млн. руб.</p>
                        </div>
                    </div>
                    <div class="service__item-hide">
                        <div class="service__item-hide__vertical">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__horizontal">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="service__item-hide__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png" alt="">
                        </div>
                        <div class="service__item-hide__body">
                            <h4>05. QA тестирование</h4>
                            <p>Сформируем команду профессионалов под особенности вашего проекта. Быстрый старт</p>
                        </div>
                        <div class="service__item-hide__button">
                            <a href="<?php the_permalink('487'); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php elseif($option == 4): ?>
<div class="service four" id="service">
    <div class="container">
        <div class="service__inner">
            <div class="service__info">
                <span>02</span>
                <h1>Наши услуги</h1>
                <p>Предоставляем широкий спектр IT-услуг по разным направлениям — от IT-консалтинга до разработки
                </p>
                <div class="service__items slider">
                    <div class="swiper" id="service-mobile">
                        <div class="swiper-wrapper">
                            <div class="service__item swiper-slide">
                                <div class="service__item-block">
                                    <div class="service__item-count">
                                        <p>01</p>
                                    </div>
                                    <div class="service__item-text">
                                        <h4>IT-консалтинг</h4>
                                        <p>от 560 тыс. руб.</p>
                                    </div>
                                </div>
                                <div class="service__item-hide">
                                    <div class="service__item-hide__vertical">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__horizontal">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                            alt="">
                                    </div>
                                    <div class="service__item-hide__button">
                                        <a href="<?php the_permalink('453'); ?>"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="service__item swiper-slide">
                                <div class="service__item-block">
                                    <div class="service__item-count">
                                        <p>02</p>
                                    </div>
                                    <div class="service__item-text">
                                        <h4>Outsource-разработка</h4>
                                        <p>от 2 млн. руб.</p>
                                    </div>
                                </div>
                                <div class="service__item-hide">
                                    <div class="service__item-hide__vertical">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__horizontal">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                            alt="">
                                    </div>
                                    <div class="service__item-hide__button">
                                        <a href="<?php the_permalink('476'); ?>"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="service__item swiper-slide">
                                <div class="service__item-block">
                                    <div class="service__item-count">
                                        <p>03</p>
                                    </div>
                                    <div class="service__item-text">
                                        <h4>Внедрение IT-продуктов</h4>
                                        <p>от 2 млн. руб.</p>
                                    </div>
                                </div>
                                <div class="service__item-hide">
                                    <div class="service__item-hide__vertical">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__horizontal">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                            alt="">
                                    </div>
                                    <div class="service__item-hide__button">
                                        <a href="#"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="service__item swiper-slide">
                                <div class="service__item-block">
                                    <div class="service__item-count">
                                        <p>04</p>
                                    </div>
                                    <div class="service__item-text">
                                        <h4>Информационная безопасность</h4>
                                        <p>от 500 тыс. руб.</p>
                                    </div>
                                </div>
                                <div class="service__item-hide">
                                    <div class="service__item-hide__vertical">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__horizontal">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                            alt="">
                                    </div>
                                    <div class="service__item-hide__button">
                                        <a href="<?php the_permalink('499'); ?>"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="service__item swiper-slide">
                                <div class="service__item-block">
                                    <div class="service__item-count">
                                        <p>05</p>
                                    </div>
                                    <div class="service__item-text">
                                        <h4>QA тестирование</h4>
                                        <p>от 300 тыс. руб.</p>
                                    </div>
                                </div>
                                <div class="service__item-hide">
                                    <div class="service__item-hide__vertical">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__horizontal">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="service__item-hide__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                            alt="">
                                    </div>
                                    <div class="service__item-hide__button">
                                        <a href="<?php the_permalink('487'); ?>"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination" id="slider-mobile"></div>
                </div>
                <a href="<?php the_permalink('467'); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt=""> Смотреть все
                    услуги</a>
            </div>
            <div class="service__items">
                <div class="swiper" id="service-slider">
                    <div class="swiper-wrapper">
                        <div class="service__item swiper-slide">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>01</p>
                                </div>
                                <div class="service__item-text">
                                    <p>от 560 тыс. руб.</p>
                                </div>
                            </div>
                            <div class="service__item-hide">
                                <div class="service__item-hide__vertical">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__horizontal">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                        alt="">
                                </div>
                                <div class="service__item-hide__body">
                                    <h4>01. IT-консалтинг</h4>
                                    <p>Технический аудит IT-продуктов и процессов, digital-исследование и ревью
                                        legacy-кода
                                        для enterprise</p>
                                </div>
                                <div class="service__item-hide__button">
                                    <a href="<?php the_permalink('453'); ?>"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="service__item swiper-slide">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>02</p>
                                </div>
                                <div class="service__item-text">
                                    <p>от 2 млн. руб.</p>
                                </div>
                            </div>
                            <div class="service__item-hide">
                                <div class="service__item-hide__vertical">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__horizontal">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                        alt="">
                                </div>
                                <div class="service__item-hide__body">
                                    <h4>02. Outsource-разработка</h4>
                                    <p>Сформируем команду профессионалов под особенности вашего проекта. Быстрый старт
                                    </p>
                                </div>
                                <div class="service__item-hide__button">
                                    <a href="<?php the_permalink('476'); ?>"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="service__item swiper-slide">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>03</p>
                                </div>
                                <div class="service__item-text">
                                    <p>от 2 млн. руб.</p>
                                </div>
                            </div>
                            <div class="service__item-hide">
                                <div class="service__item-hide__vertical">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__horizontal">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                        alt="">
                                </div>
                                <div class="service__item-hide__body">
                                    <h4>03. Внедрение
                                        IT-продуктов</h4>
                                    <p>Внедрение уникальных программных продуктов, отвечающих вашим бизнес-требованиям
                                    </p>
                                </div>
                                <div class="service__item-hide__button">
                                    <a data-src="#modal" data-fancybox href="#"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="service__item swiper-slide">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>04</p>
                                </div>
                                <div class="service__item-text">
                                    <p>от 560 тыс. руб.</p>
                                </div>
                            </div>
                            <div class="service__item-hide">
                                <div class="service__item-hide__vertical">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__horizontal">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                        alt="">
                                </div>
                                <div class="service__item-hide__body">
                                    <h4>04. Информационная безопасность</h4>
                                    <p>Технический аудит IT-продуктов и процессов, digital-исследование и ревью
                                        legacy-кода
                                        для enterprise</p>
                                </div>
                                <div class="service__item-hide__button">
                                    <a href="<?php the_permalink('499'); ?>"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="service__item swiper-slide">
                            <div class="service__item-block">
                                <div class="service__item-count">
                                    <p>05</p>
                                </div>
                                <div class="service__item-text">
                                    <p>от 2 млн. руб.</p>
                                </div>
                            </div>
                            <div class="service__item-hide">
                                <div class="service__item-hide__vertical">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__horizontal">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="service__item-hide__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-hide.png"
                                        alt="">
                                </div>
                                <div class="service__item-hide__body">
                                    <h4>05. QA тестирование</h4>
                                    <p>Сформируем команду профессионалов под особенности вашего проекта. Быстрый старт
                                    </p>
                                </div>
                                <div class="service__item-hide__button">
                                    <a href="<?php the_permalink('487'); ?>"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-black.svg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="slider"></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="prod" id="product">
    <div class="container">
        <div class="prod__inner">
            <div class="prod__title">
                <span>03</span>
                <h1>Наши продукты</h1>
                <a href="<?php the_permalink('354'); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt="">
                    Смотреть все продукты</a>
            </div>
            <?php
            
            $products = get_posts([
                'numberposts' => 3,
                'post_type' => 'product',
                'orderby' => 'date',
                'order' => 'ASC'
            ]);

            ?>
            <div class="prod__items">
                <?php foreach($products as $post):?>
                <div class="prod__item">
                    <div class="prod__item-img">
                        <img src="<?php echo get_field('product_icon')['url']; ?>" alt="">
                    </div>
                    <div class="prod__item-text">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <p><?php the_field('product_preview'); ?></p>
                    </div>
                    <div class="prod__item-price">
                        <p><?php echo get_field('product_cost')[0]['product_cost_price']; ?> </p>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt="">
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="prod__all">
                <a href="<?php the_permalink('354'); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt="">
                    Смотреть все продукты</a>
            </div>
        </div>
    </div>
</div>

<div class="project" id="project">
    <div class="container">
        <div class="project__title">
            <span>04</span>
            <h1>Наши проекты</h1>
        </div>
    </div>
    <div class="project__items">
        <?php 
        $posts = get_posts( array(
            'numberposts' => 6,
            'post_type'   => 'page',
            'orderby'    => 'menu_order',
            'order'  => 'ASC',
            'meta_query' => array(
                array(
                    'key' => '_wp_page_template',
                    'value' => 'type.php'
                )
            ),
            'suppress_filters' => true,
        ) );

        foreach( $posts as $post ):
            setup_postdata($post); ?>

        <div class="project__item">
            <a href="<?php the_permalink(); ?>">
                <div class="project__item-img">
                    <?php the_post_thumbnail('full'); ?>
                    <?php
                    $logo = get_field('case_logo');
                    if($logo):?>

                    <img src="<?php echo $logo['url']; ?>" alt="">

                    <?php endif; ?>
                </div>
                <div class="project__item-body">
                    <div class="project__item-body__vertical">
                        <div></div>
                        <div></div>
                    </div>
                    <div class="project__item-body__horizontal">
                        <div></div>
                    </div>
                    <div class="project__item-body__text">
                        <h4>
                            <?php the_field('case_title'); ?>
                        </h4>
                        <p><?php the_field('case_extend'); ?></p>
                    </div>
                    <div class="project__item-body__button">
                        <a href="<?php the_permalink(); ?>">Смотреть кейс <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt=""></a>
                    </div>
                </div>
            </a>
        </div>

        <?php endforeach; wp_reset_postdata();?>
    </div>
    <div class="container">
        <div class="project__all">
            <p>За 3 года выполнили
                более 15 крупных проектов</p>
            <a href="<?php the_permalink('369'); ?>"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt="">Смотреть
                все проекты</a>
        </div>
    </div>
</div>

<div class="about" id="about">
    <div class="about__count">
        <span>05</span>
    </div>
    <div class="about__inner">
        <div class="about__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.png" alt="">
            <div class="about__img-items">
                <div class="about__img-item">
                    <h4>> 40</h4>
                    <p>человек работает
                        в компании</p>
                </div>
                <div class="about__img-item">
                    <h4>2019</h4>
                    <p>год основания
                        Цифроматики</p>
                </div>
                <div class="about__img-item">
                    <h4>70%</h4>
                    <p>штата — разработчики и инженеры</p>
                </div>
            </div>
        </div>
        <div class="about__info">
            <h1>О компании</h1>
            <div class="about__info-text">
                <p>Цифроматика — разработчик программных решений для органов власти, государственных компаний и
                    лидеров российской промышленности и транспортной отрасли</p>
                <p>В нашей команде работают квалифицированные специалисты, имеющие следующие ключевые компетенции:
                </p>
                <ul>
                    <li>Cотрудничество с федеральными и региональными органами государственной власти,
                        государственными компаниями</li>
                    <li>Разработка и внедрение информационных систем для промышленности и транспорта</li>
                    <li>Big data</li>
                    <li>Семантический анализ</li>
                </ul>
                <a href="<?php the_permalink('112'); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt=""> Стать частью
                    команды</a>
            </div>
        </div>
    </div>
</div>

<div class="client">
    <div class="container">
        <div class="client__title">
            <span>06</span>
            <h1>Наши клиенты</h1>
            <a href="<?php bloginfo('url'); ?>/#project"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg" alt="">
                Смотреть
                кейсы клиентов</a>
        </div>
    </div>

    <div class="client__slider">
        <?php 

        $gallery_top = get_field('icon_top', 'option');
        $gallery_bottom = get_field('icon_bottom', 'option');
        
        ?>

        <?php if($gallery_top): ?>
        <div class="client__slider-one">
            <?php foreach( $gallery_top as $row ): ?>
            <div class="client__slider-item">
                <img src="<?php echo $row['icon_top_img']['url']; ?>" alt="">
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if($gallery_bottom): ?>
        <div class="client__slider-two">
            <?php foreach( $gallery_bottom as $row ): ?>
            <div class="client__slider-item">
                <img src="<?php echo $row['icon_bottom_img']['url']; ?>" alt="">
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

    </div>


    <div class="client__slider mobile">
        <?php if($gallery_top): ?>
        <div class="client__slider-one">
            <div class="swiper-container" id="slider-one">
                <div class="swiper-wrapper">
                    <?php foreach( $gallery_top as $row ): ?>
                    <div class="client__slider-item swiper-slide">
                        <img src="<?php echo $row['icon_top_img']['url']; ?>" alt="">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if($gallery_bottom): ?>
        <div class="client__slider-two">
            <div class="swiper-container" id="slider-two">
                <div class="swiper-wrapper">
                    <?php foreach( $gallery_bottom as $row ): ?>
                    <div class="client__slider-item swiper-slide">
                        <img src="<?php echo $row['icon_bottom_img']['url']; ?>" alt="">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>