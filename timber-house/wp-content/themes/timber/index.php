<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <div class="main__title">
                <?php the_field('main__title')?>
            </div>
            <div class="main__text"> 
                <?php the_field('main__text')?>
            </div>
            <div class="main__img">
                <img src="<?php bloginfo( template_url); ?>/assets/images/main-img.png" alt="">
            </div>
            <div class="project">
                <div class="project__title">
                    <?php the_field('project__title')?>
                </div>
                    <?php 

                        $posts = get_field('project__item');

                        if( $posts ): ?>
                            <ul>
                            <?php foreach( $posts as $post):  ?>
                                <?php setup_postdata($post); ?>
                                <li class="project__item">
                                    <div class="project__name">
                                        <?php the_field('project__name')?>
                                    </div>
                                    <div class="project__size">
                                        <?php the_field('project__size')?>
                                    </div>
                                    <div class="project__area">
                                        <?php the_field('project__area')?>
                                    </div>
                                    <div class="project__price">
                                        <?php the_field('project__price')?>
                                    </div>
                                    <div class="project__images">
                                        <div class="project__images-item">
                                            <img src="<?php the_field('project__images-item-1')?>" alt="">
                                        </div>
                                        <div class="project__images-item">
                                            <img src="<?php the_field('project__images-item-2')?>" alt="">
                                        </div>
                                    </div>
                                    
                                </li>
                            <?php endforeach; ?>
                            </ul>
                            <?php wp_reset_postdata();  ?>
                        <?php endif; ?>
                <div class="project__item">
                    
                </div>
              <!--   <div class="project__item">
                    <div class="project__name">
                        ДОМ #1
                    </div>
                    <div class="project__size">
                        Размер дома: 6 x 6
                    </div>
                    <div class="project__area">
                        Общая площадь дома: 54 кв. м
                    </div>
                    <div class="project__price">
                        Стоимость - 402 000 рублей
                    </div>
                    <div class="project__images">
                        <div class="project__images-item">
                            <img src="images/project-1.jpg" alt="">
                        </div>
                        <div class="project__images-item">
                            <img src="images/project-2.jpg" alt="">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="download">
            <img src="<?php bloginfo( template_url); ?>/assets/images/download-im.png" alt="">
            <a href="<?php the_field('download-link')?>" download>СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
        </div>
        <div class="container">
            <div class="gallery">
                <div class="gallery__title">
                    <?php the_field('gallery__title')?>  
                </div>
                <div class="gallery__text">
                    <?php the_field('gallery__text')?> 
                </div>
                <div id="gallery__inner">
                    <?php the_field('gallery')?>  
                </div>
            </div>
            <div class="main__img">
                <img src="<?php bloginfo( template_url); ?>/assets/images/main-img.png" alt="">
            </div>
        </div>
    </main>

    <?php get_footer(); ?>
