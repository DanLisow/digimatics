<!-- 
    Template Name: Блог
 -->

<?php get_header(); ?>

<div class="articles">
    <div class="container">
        <div class="articles__inner">
            <div class="articles__bread">
                <a href="<?php bloginfo('url') ?>">Главная</a>
                <span> > </span>
                <p>Блог</p>
            </div>
            <div class="articles__info">
                <h1>Блог</h1>
                <div class="articles__items">
                    <?php

                    $current = absint(
                        max(
                        1,
                        get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' )
                        )
                    );

                    $query = new WP_Query(array(
                        "post_type"      => "post",  // тип записи
                        "posts_per_page" => 20,             // кол-во записей на странице
                        "paged"          => $current,  // текущая страница
                    ));

                    if($query->have_posts()): while( $query->have_posts() ) : $query->the_post(); ?>

                    <div class="articles__item">
                        <div class="articles__item-img">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <div class="articles__item-text">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span><?php echo get_the_date('d.m.Y'); ?></span>
                            <p><?php the_field('article_preview'); ?></p>
                            <div class="articles__item-text__link">
                                <a href="<?php the_permalink(); ?>">Читать далее <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                    <div class="articles__pagination">
                        <div class="articles__pagination-block">
                            <?php
                                echo wp_kses_post(
                                    paginate_links(
                                        [
                                            'total'   => $query->max_num_pages,
                                            'current' => $current,
                                            'prev_next' => false,
                                            'show_all' => true
                                        ]
                                    )
                                );
                            ?>
                        </div>
                    </div>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>