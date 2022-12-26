<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="vacancy">
    <div class="container-team">
        <div class="vacancy__inner">
            <p><a href="<?php the_permalink('112'); ?>">Карьера</a> / <?php the_title(); ?></p>
            <div class="vacancy__block">
                <div class="vacancy__main">
                    <div class="vacancy__info">
                        <h1><?php the_title(); ?></h1>
                        <?php
                        
                        $advantages = get_field('job_advantages');
                        if($advantages):
                        ?>
                        <div class="vacancy__info-tags">
                            <?php foreach($advantages as $advantage): ?>
                            <p><?php echo $advantage['job_advantages_name']; ?></p>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <?php
                        $image = get_field('job_img');
                        if($image):
                        ?>
                        <div class="vacancy__info-img">
                            <img src="<?php echo $image['url']; ?>" alt="">
                        </div>
                        <?php endif; ?>
                        <div class="vacancy__info-text">
                            <?php the_field('job_preview'); ?>
                        </div>
                        <div class="vacancy__about mobile">
                            <?php
                            
                            $requires = get_field('job_require');
                            if($requires):
                            ?>
                            <div class="vacancy__about-block">
                                <?php foreach($requires as $require): ?>
                                <div class="vacancy__about-block__item">
                                    <h3><?php echo $require['job_require_title']; ?></h3>
                                    <p><?php echo $require['job_require_text']; ?></p>
                                </div>
                                <?php endforeach; ?>
                                <a href="#send"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg"
                                        alt="">
                                    Присоединиться к команде</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="vacancy__stack">
                        <h2><?php the_field('job_stack_title'); ?></h2>
                        <div class="vacancy__stack-block">
                            <?php the_field('job_stack'); ?>
                        </div>
                    </div>
                    <div class="vacancy__team">
                        <h2><?php the_field('job_team_title'); ?></h2>
                        <div class="vacancy__team-block">
                            <?php the_field('job_team'); ?>
                        </div>
                    </div>
                    <div class="vacancy__project">
                        <h2><?php the_field('job_project_title'); ?></h2>
                        <div class="vacancy__project-block">
                            <?php the_field('job_project'); ?>
                        </div>
                    </div>
                </div>
                <div class="vacancy__about">
                    <?php
                    if($requires):
                    ?>
                    <div class="vacancy__about-block">
                        <?php foreach($requires as $require): ?>
                        <div class="vacancy__about-block__item">
                            <h3><?php echo $require['job_require_title']; ?></h3>
                            <p><?php echo $require['job_require_text']; ?></p>
                        </div>
                        <?php endforeach; ?>
                        <a href="#send"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/send-blue.svg"
                                alt="">
                            Присоединиться к команде</a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

$conditions = get_field('job_condition');
if($conditions):
?>

<div class="condition">
    <div class="container">
        <div class="condition__inner">
            <h2><?php the_field('job_condition_title'); ?></h2>
            <div class="condition__items">
                <?php foreach($conditions as $condition): ?>
                <div class="condition__item">
                    <div class="condition__item-img">
                        <img src="<?php echo $condition['job_condition_img']['url']; ?>" alt="">
                    </div>
                    <div class="condition__item-text">
                        <h4><?php echo $condition['job_condition_title']; ?></h4>
                        <p><?php echo $condition['job_condition_text']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>