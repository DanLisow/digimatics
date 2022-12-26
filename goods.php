<!-- 
    Template Name: Продукты
 -->

<?php get_header(); ?>

<div class="goods">
    <div class="container">
        <div class="goods__inner">
            <div class="goods__bread">
                <p>Цифровые продукты</p>
            </div>
            <?php
            
            $posts = get_posts([
                'numberposts' => -1,
                'post_type' => 'product',
                'orderby' => 'date',
                'order' => 'ASC'
            ]);
            
            if($posts):
            ?>
            <div class="goods__info">
                <h1>Наши продукты</h1>
                <div class="goods__items">
                    <?php foreach($posts as $post): ?>
                    <div class="goods__item">
                        <div class="goods__item-img">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_field('product_icon')['url']; ?>" alt="">
                            </a>
                        </div>
                        <div class="goods__item-text">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p><?php the_field('product_preview'); ?></p>
                        </div>
                        <div class="goods__item-link">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/send.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>