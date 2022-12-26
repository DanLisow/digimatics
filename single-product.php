<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="product">
    <div class="container">
        <div class="product__inner">
            <div class="product__bread">
                <a href="<?php the_permalink('354'); ?>">Цифровые продукты</a>
                <span>/</span>
                <p><?php the_title(); ?></p>
            </div>
            <h1><?php the_title(); ?></h1>
            <?php
            $image = get_field('product_img');
            if($image):
            ?>
            <div class="product__img">
                <img src="<?php echo $image['url']; ?>" alt="">
            </div>
            <?php endif; ?>
            <div class="product__about">
                <div class="product__about-text">
                    <h2>О продукте</h2>
                    <div class="product__about-text__block">
                        <p><?php the_field('product_about'); ?></p>
                    </div>
                </div>
                <?php
                $docs = get_field('product_docs');
                if($docs):
                ?>
                <div class="product__about-docs">
                    <h2>Документы</h2>
                    <div class="product__about-docs__items">
                        <?php foreach($docs as $doc): ?>
                        <div class="product__about-docs__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doc.svg" alt="">
                            <a href="<?php echo $doc['product_docs_file']['url']; ?>"
                                download><?php echo $doc['product_docs_name'] ?></a>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="product__for">
                <?php
                $prFor = get_field('product_for');
                if($prFor):
                ?>
                <div class="product__for-left">
                    <h2>Для чего</h2>
                    <div class="product__for-block">
                        <div class="product__for-items">
                            <?php foreach($prFor as $item): ?>
                            <div class="product__for-item">
                                <img src="<?php echo $item['product_for_img']['url']; ?>" alt="">
                                <h4><?php echo $item['product_for_title']; ?></h4>
                                <p><?php echo $item['product_for_text']; ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif;
                $prWho = get_field('product_who');
                if($prWho):
                ?>
                <div class="product__for-right">
                    <h2>Для кого</h2>
                    <div class="product__for-right__list">
                        <?php foreach($prWho as $item): ?>
                        <p><?php echo $item['product_who_title']; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php
            $able = get_field('product_able');
            if($able):
            ?>
            <div class="product__able">
                <h2>Функциональные возможности</h2>
                <div class="product__able-items">
                    <?php foreach($able as $item): ?>
                    <div class="product__able-item">
                        <div class="product__able-item__img">
                            <img src="<?php echo $item['product_able_img']['url']; ?>" alt="">
                        </div>
                        <div class="product__able-item__text">
                            <h4><?php echo $item['product_able_title']; ?></h4>
                            <p><?php echo $item['product_able_text']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif;
            $cost = get_field('product_cost');
            if($cost):
            ?>
            <div class="product__cost">
                <div class="product__cost-block">
                    <h2>Стоимость продукта</h2>
                    <div class="product__cost-items">
                        <?php foreach($cost as $item): ?>
                        <div class="product__cost-item">
                            <div class="product__cost-item__text">
                                <h4><?php echo $item['product_cost_title']; ?></h4>
                                <p><?php echo $item['product_cost_text']; ?></p>
                            </div>
                            <div class="product__cost-item__price">
                                <p><?php echo $item['product_cost_price']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>