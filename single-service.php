<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="favor">
    <div class="container-header">
        <div class="favor__inner">
            <?php $image = get_field('service_img'); ?>
            <div class="favor__info">
                <div class="favor__bread">
                    <a href="<?php the_permalink('467'); ?>">Цифровые услуги</a>
                    <span>/</span>
                    <p><?php the_title(); ?></p>
                </div>
                <div class="favor__info-block">
                    <h1><?php the_title(); ?></h1>
                    <div class="favor__img mobile">
                        <?php
                        if($image):
                        ?>
                        <div class="favor__img-block">
                            <img src="<?php echo $image['url']; ?>" alt="">
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="favor__info-text">
                        <?php the_field('service_descr'); ?>
                    </div>
                </div>
            </div>
            <div class="favor__img">
                <?php
                if($image):
                ?>
                <div class="favor__img-block">
                    <img src="<?php echo $image['url']; ?>" alt="">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php 
if( get_field('task_if') ): 

$task = get_field('task');
?>
<div class="task">
    <div class="container">
        <div class="task__inner">
            <?php if(is_page('research-development')): ?>
            <h2>Наши ключевые направления R&D разработки</h2>
            <?php else: ?>
            <h2><?php the_field('task_title'); ?></h2>
            <?php endif; ?>
            <div class="task__items">
                <?php foreach($task as $key => $item): ?>
                <div class="task__item">
                    <div class="task__item-count">
                        <p><?php echo $key + 1; ?></p>
                    </div>
                    <div class="task__item-body">
                        <p><?php echo $item['task_text']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if( get_field('exp_if') ): ?>

<div class="exp">
    <div class="container">
        <div class="exp__inner">
            <h2><?php the_field('exp_title'); ?></h2>
            <p><?php the_field('exp_text'); ?></p>
            <div class="exp__items">
                <?php
                $exp = get_field('exp_item');

                foreach($exp as $item):
                ?>
                <div class="exp__item">
                    <div class="exp__item-main">
                        <div class="exp__item-main__img">
                            <img src="<?php echo $item['exp_item_img']['url']; ?>" alt="">
                        </div>
                        <div class="exp__item-main__info">
                            <h4><?php echo $item['exp_item_title']; ?></h4>
                            <?php
                            $tags = $item['exp_item_tags'];

                            if($tags):
                            ?>
                            <div class="exp__item-main__list">
                                <?php foreach($tags as $tag): ?>
                                <p><?php echo $tag['exp_item_tags_name']; ?></p>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="exp__item-task">
                        <h4>Задача</h4>
                        <p><?php echo $item['exp_item_task']; ?></p>
                    </div>
                    <div class="exp__item-solution">
                        <h4>Реализация</h4>
                        <p><?php echo $item['exp_item_solution']; ?></p>
                    </div>
                    <div class="exp__item-feature">
                        <h4>Особенности</h4>
                        <p><?php echo $item['exp_item_feature']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<?php 
if( get_field('work_if') ): 

$work = get_field('work');
?>
<div class="work">
    <div class="container">
        <div class="work__inner">
            <?php foreach($work as $block): ?>
            <div class="work__block">
                <h2><?php echo $block['work_title']; ?></h2>
                <?php echo $block['work_text']; ?>
                <div class="work__items">
                    <?php
                    $items = $block['work_item'];
                    foreach($items as $item):

                    $grid = $item['work_item_grid'] ? 'grid' : '';
                    ?>
                    <div class="work__item <?php echo $grid; ?>">
                        <div class="work__item-img">
                            <img src="<?php echo $item['work_item_icon']['url']; ?>" alt="">
                        </div>
                        <div class="work__item-body">
                            <h4><?php echo $item['work_item_title']; ?></h4>
                            <?php echo $item['work_item_text']; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if( get_field('get_if') ): ?>
<div class="get">
    <div class="container">
        <div class="get__inner">
            <h2><?php the_field('get_title'); ?></h2>
            <?php the_field('get_text'); ?>
            <div class="get__items">
                <?php
                $items = get_field('get_item');
                foreach($items as $item):
                ?>
                <div class="get__item">
                    <div class="get__item-img">
                        <img src="<?php echo $item['get_item_icon']['url']; ?>" alt="">
                    </div>
                    <div class="get__item-body">
                        <h4><?php echo $item['get_item_title']; ?></h4>
                        <?php echo $item['get_item_text']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if( get_field('benefit_if') ): ?>
<div class="benefit">
    <div class="container">
        <div class="benefit__inner">
            <h2><?php the_field('benefit_title'); ?></h2>
            <?php
            $grid = get_field('benefit_grid') ? 'grid' : '';
            ?>
            <div class="benefit__items <?php echo $grid; ?>">
                <?php
                $items = get_field('benefit_item');
                foreach($items as $item):
                ?>
                <div class="benefit__item">
                    <div class="benefit__item-img">
                        <img src="<?php echo $item['benefit_item_img']['url']; ?>" alt="">
                    </div>
                    <div class="benefit__item-body">
                        <h4><?php echo $item['benefit_item_title']; ?></h4>
                        <?php echo $item['benefit_item_text']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if( get_field('consult_if') ): ?>
<div class="consult">
    <div class="container">
        <div class="consult__inner">
            <h2>IT-консалтинг для государства</h2>
            <?php if(get_field('consult_warning')): ?>
            <div class="consult__warning">
                <div class="consult__warning-icon">
                    <p>!</p>
                </div>
                <p>Цифроматика является лицензиатом ФСТЭК России и ФСБ РФ</p>
            </div>
            <?php endif; ?>
            <div class="consult__items">
                <?php
                $items = get_field('consult_item');

                foreach($items as $key => $item):

                $blue = $key == 2 ? 'blue' : '';
                $black = $key == 2 ? 'black' : '';
                ?>
                <div class="consult__item">
                    <div class="consult__item-count <?php echo $blue; ?>">
                        <p>0<?php echo $key + 1; ?></p>
                    </div>
                    <div class="consult__item-body <?php echo $black; ?>">
                        <h4><?php echo $item['consult_item_title']; ?></h4>
                        <?php echo $item['consult_item_text']; ?>
                    </div>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-white.svg" alt="">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php
            $work = get_field('consult_work');
            if($work):
            ?>
            <div class="consult__work">
                <h3>Как мы работаем</h3>
                <div class="consult__work-block">
                    <?php foreach($work as $key => $item): ?>
                    <div class="consult__work-item">
                        <div class="consult__work-item__count">
                            <p><?php echo $key + 1; ?></p>
                        </div>
                        <p><?php echo $item['consult_work_text']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>


<?php 
$product = get_field('favor_product');
if( $product ): 
?>

<div class="favor__product">
    <div class="container">
        <div class="favor__product-inner">
            <h2>Наши продукты</h2>
            <div class="goods__items">
                <?php foreach( $product as $post): ?>
                <?php setup_postdata($post); ?>
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
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php 
$cases = get_field('favor_case');
if( $cases ): 
?>
<div class="favor__cases">
    <div class="container">
        <div class="favor__cases-inner">
            <h2>Наши кейсы</h2>
            <div class="case__items">
                <?php foreach( $cases as $post): ?>
                <?php setup_postdata($post); ?>

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

                <?php endforeach; wp_reset_postdata();?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>