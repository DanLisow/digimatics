<!-- 
    Template Name: Карьера
 -->

<?php get_header(); ?>

<div class="team">
    <div class="container-team">
        <div class="team__inner">
            <p>Карьера</p>
            <div class="team__top">
                <div class="team__top-left">
                    <h1>Присоединяйтесь к нашей компании</h1>
                    <div class="team__top-advantages">
                        <div class="team__top-advantages__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/career.png" alt="">
                        </div>
                        <?php 
                        $advantages = get_field('career_advantages');
                        if($advantages):
                        ?>
                        <div class="team__top-advantages__items">
                            <?php foreach($advantages as $advantage): ?>
                            <div class="team__top-advantages__item">
                                <h4><?php echo $advantage['career_advantages_title']; ?></h4>
                                <p><?php echo $advantage['career_advantages_subtitle']; ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="team__top-right">
                    <div class="team__top-right__block">
                        <h2>О нас</h2>
                        <p><?php the_field('career_about'); ?></p>
                        <a href="#send"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg"
                                alt="">Присоединиться к
                            команде</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="worth">
    <div class="container-new">
        <div class="worth__inner">
            <h1>Наши ценности</h1>
            <?php 
            $worth = get_field('career_worth');
            if($worth):
            ?>
            <div class="worth__items">
                <?php foreach($worth as $item): ?>
                <div class="worth__item">
                    <div class="worth__item-img">
                        <img src="<?php echo $item['career_worth_img']['url']; ?>" alt="">
                    </div>
                    <div class="worth__item-text">
                        <h4><?php echo $item['career_worth_title']; ?></h4>
                        <p><?php echo $item['career_worth_text']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="job">
    <div class="container-new">
        <div class="job__inner">
            <h1>Работа в Цифроматике — это:</h1>
            <?php 
            $job = get_field('career_job');
            if($job):
            ?>
            <div class="job__items">
                <?php foreach($job as $item): ?>
                <div class="job__item">
                    <div class="job__item-block">
                        <div class="job__item-block__img">
                            <img src="<?php echo $item['career_job_img']['url']; ?>" alt="">
                        </div>
                        <div class="job__item-block__text">
                            <h4><?php echo $item['career_job_title']; ?></h4>
                            <p><?php echo $item['career_job_text']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="open">
    <div class="container-new">
        <div class="open__inner">
            <h1>Открытые вакансии</h1>
            <div class="open__block">
                <?php 

                $terms = get_terms( array(
                    'taxonomy' => 'category-vacancy'
                ) );

                ?>
                <div class="open__tabs">
                    <?php foreach ( $terms as $key => $term ): ?>
                    <a href="#" data-tab="<?php echo $term->term_id; ?>"
                        <?php if ( $key == 0 ) echo 'class="active"'; ?>><?php echo $term->name; ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="open__content">
                    <?php foreach ( $terms as $key => $term ): ?>
                    <div class="open__tab <?php if ( $key == 0 ) echo 'active'; ?>"
                        data-tab="<?php echo $term->term_id; ?>">

                        <?php
                            $vacancy = array( 'post_type' => 'vacancy', 'category-vacancy' => $term->slug );
                            $posts = get_posts( $vacancy );
                        ?>
                        <div class="open__items">
                            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                            <div class="open__item">
                                <div class="open__item-text">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <p><?php the_field('job_preview'); ?></p>
                                </div>
                                <div class="open__item-link">
                                    <a href="<?php the_permalink(); ?>"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-career.svg"
                                            alt=""></a>
                                </div>
                            </div>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>