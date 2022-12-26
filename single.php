<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="article">
    <div class="container">
        <div class="article__inner">
            <div class="article__info">
                <div class="article__bread">
                    <a href="<?php the_permalink('566'); ?>">Блог</a>
                    <span>/</span>
                    <p><?php the_title(); ?></p>
                </div>
                <div class="article__info-main">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="article__info-block">
                    <?php the_content(); ?>
                </div>
                <?php
                $gallery = get_field('article_img');

                if($gallery): 
                ?>
                <div class="article__info-slider">
                    <div class="article__info-slider__block">
                        <div class="swiper" id="article">
                            <div class="swiper-wrapper">
                                <?php foreach($gallery as $item): ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo $item['url']; ?>" data-fancybox="images">
                                        <img src="<?php echo $item['url']; ?>" alt="">
                                    </a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="article__info-slider__nav">
                        <button class="article__info-slider__prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-white.svg" alt="">
                        </button>
                        <button class="article__info-slider__next">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-white.svg" alt="">
                        </button>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>