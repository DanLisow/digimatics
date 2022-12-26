<!-- 
    Template Name: Кейсы
 -->

<?php get_header(); ?>

<div class="case">
    <div class="container">
        <div class="case__inner">
            <div class="case__bread">
                <a href="<?php bloginfo('url') ?>/#project">Проекты</a>
                <span> > </span>
                <p>Кейсы</p>
            </div>
            <div class="case__info">
                <h1>Выполненные нами проекты</h1>
                <div class="case__items">
                    <?php 
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'post_type'   => 'page',
                        'orderby'    => 'menu_order',
                        'order'  => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => '_wp_page_template',
                                'value' => 'type.php'
                            )
                        ),
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ): setup_postdata($post); ?>

                    <div class="case__item">
                        <div class="case__item-img">
                            <?php the_post_thumbnail('full'); ?>
                            <?php
                            $logo = get_field('case_logo');
                            if($logo):?>

                            <img src="<?php echo $logo['url']; ?>" alt="">

                            <?php endif; ?>
                        </div>
                        <div class="case__item-text">
                            <h3><?php the_field('case_title'); ?></h3>
                            <p><?php the_field('case_preview'); ?></p>
                            <div class="case__item-text__link">
                                <a href="<?php the_permalink(); ?>">Смотреть кейс <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>