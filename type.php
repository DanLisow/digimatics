<!-- 
    Template Name: Кейс
 -->

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="single">
    <div class="container">
        <div class="single__inner">
            <div class="single__info">
                <div class="single__bread">
                    <a href="<?php bloginfo('url'); ?>/#project">Проекты</a>
                    <span>/</span>
                    <a href="#"><?php the_title(); ?></a>
                </div>
                <div class="single__info-main">
                    <h1><?php the_field('case_title'); ?></h1>

                    <?php
                    $tags = get_field('case_tags');
                    if($tags): ?>

                    <div class="single__info-tags">
                        <div class="single__info-tags__block">
                            <?php foreach($tags as $tag): ?>
                            <p><?php echo $tag['case_tags_name']; ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <?php endif; ?>

                    <div class="single__info-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                        <?php
                        $logo = get_field('case_logo');
                        if($logo):?>

                        <img src="<?php echo $logo['url']; ?>" alt="">

                        <?php endif; ?>
                    </div>
                </div>
                <div class="single__about mobile">
                    <div class="single__about-block">
                        <div class="single__about-title">
                            <h2>О клиенте</h2>
                            <svg width="22" height="11" viewBox="0 0 22 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L11 10L21 1" stroke="#0000ff" />
                            </svg>
                        </div>
                        <div class="single__about-img">
                            <?php
                            $logo_black = get_field('case_logo_black');
                            if($logo_black):?>

                            <img src="<?php echo $logo_black['url']; ?>" alt="">

                            <?php endif; ?>
                        </div>
                        <div class="single__about-body">
                            <div class="single__about-text">
                                <p><?php the_field('client_description'); ?></p>
                            </div>

                            <?php
                            $values = get_field('client_values');
                            if($values): ?>

                            <div class="single__about-items">
                                <?php foreach($values as $value): ?>
                                <div class="single__about-item">
                                    <h2><?php echo $value['client_values_count']; ?></h2>
                                    <p><?php echo $value['client_values_text']; ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <?php endif; ?>

                            <div class="single__about-link">
                                <a href="https://<?php the_field('client_link'); ?>" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg"
                                        alt=""><?php the_field('client_link'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__info-block">
                    <div class="single__info-difficult">
                        <h2>Дано</h2>
                        <p><?php the_field('case_give'); ?></p>
                    </div>
                    <div class="single__info-task">
                        <h2>Задачи проекта</h2>
                        <?php the_field('case_task'); ?>
                    </div>
                    <div class="single__info-realize">
                        <h2>Реализация</h2>
                        <?php the_field('case_solution'); ?>
                    </div>
                </div>
                <?php
                $result = get_field('case_result');
                if($result): ?>
                <div class="single__info-result">
                    <h2>Результаты</h2>
                    <div class="single__info-result__items">
                        <?php foreach($result as $key => $item): ?>
                        <div class="single__info-result__item">
                            <img src="<?php echo $item['case_result_logo']['url']; ?>" alt="">
                            <p><?php echo $item['case_result_name']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="single__about">
                <div class="single__about-block">
                    <div class="single__about-title">
                        <h2>О клиенте</h2>
                        <svg width="22" height="11" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L11 10L21 1" stroke="#0000ff" />
                        </svg>
                    </div>
                    <div class="single__about-img">
                        <?php
                        $logo_black = get_field('case_logo_black');
                        if($logo_black):?>

                        <img src="<?php echo $logo_black['url']; ?>" alt="">

                        <?php endif; ?>
                    </div>
                    <div class="single__about-body">
                        <div class="single__about-text">
                            <p><?php the_field('client_description'); ?></p>
                        </div>
                        <?php
                            $values = get_field('client_values');
                            if($values): ?>

                        <div class="single__about-items">
                            <?php foreach($values as $value): ?>
                            <div class="single__about-item">
                                <h2><?php echo $value['client_values_count']; ?></h2>
                                <p><?php echo $value['client_values_text']; ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <?php endif; ?>

                        <div class="single__about-link">
                            <a href="https://<?php the_field('client_link'); ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg"
                                    alt=""><?php the_field('client_link'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>