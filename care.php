<!-- 
    Template Name: Услуги
 -->

<?php get_header(); ?>

<div class="care">
    <div class="container">
        <div class="care__inner">
            <div class="care__bread">
                <p>Цифровые услуги</p>
            </div>
            <?php
            
            $posts = get_posts([
                'numberposts' => -1,
                'post_type' => 'service',
                'orderby' => 'date',
                'order' => 'ASC'
            ]);
            
            if($posts):
            ?>
            <div class="care__info">
                <h1>Наши Услуги</h1>
                <div class="care__items">
                    <?php foreach($posts as $post): ?>
                    <div class="care__item">
                        <div class="care__item-img">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_field('service_icon')['url']; ?>" alt="">
                            </a>
                        </div>
                        <div class="care__item-text">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php the_field('service_preview'); ?>
                        </div>
                        <div class="care__item-link">
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