<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( description); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<!--     <link rel="shortcut icon" href="images/home.png" type="image/png"> -->

    <?php wp_head(); ?>
</head>

<body>
    <header class="header" style="background-image: url('<?php the_field('header__bg')?> ');">
        <div class="header__inner">
            <img src=" <?php bloginfo( template_url); ?>/assets/images/home.png" alt="">
            <div class="header__name">
                <?php the_field('header__name')?>  
            </div>
            <a href="tel:<?php the_field('phone')?>" class="phone"><?php the_field('phone')?></a>
            <div class="header__title"><?php the_field('header__title')?></div>
            <div class="header__sale">
                <img src="<?php the_field('header__sale')?> " alt="">
            </div>
        </div>
    </header>