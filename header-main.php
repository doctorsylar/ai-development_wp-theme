<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
          content="заказать сайт, заказ вебсайта, вебсайт, wordpress, разработка вебсайтов,
          купить сайт, красивые сайты, разработка адаптивных сайтов, вебприложения,
          frontend, backend, fullstack, react, vue.js, bootstrap"
    >
    <meta name="google-site-verification" content="nc9WZs8kpAm7lB0AbJrsj3FYb9hh8IDApepiiCwS-sc" />
    <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <div class="preloader">
        <div class="tetris"></div>
    </div>
    <section class="home" id="home">
        <div class="home-overlay"></div>
        <div class="heading">
            <p class="heading-beginning">Здравствуйте! Меня зовут Андрей и я</p>
            <h1>Full-Stack Web Developer</h1>
            <p class="heading-end">полный решимости выполнить любой Ваш заказ</p>
        </div>
        <div class="arrow-bottom">
            <a href="#header" class="anchor"><i class="fa fa-angle-down"></i></a>
        </div>
    </section>
    <header id="header">
        <div class="header-container col-12 col-sm-12 col-md-11 col-lg-10">
            <div class="header-logo">
                <a href="#home" class="anchor">
                    <img src="/wp-content/themes/doctorsyl_portfolio/img/logo.svg" alt="ai-development">
                </a>
            </div>
            <nav class="header-menu horizontal-menu">
                <ul>
                    <li class="link-home"><a href="<?=get_site_url() . '/blog'?>"><i class="fa fa-home"></i>Блог</a></li>
                    <li class="link-services"><a class="anchor" href="#services"><i class="fa fa-files-o"></i>Услуги</a></li>
                    <li class="link-portfolio"><a class="anchor" href="#portfolio"><i class="fa fa-book"></i>Портфолио</a></li>
                    <li class="link-skills"><a class="anchor" href="#skills"><i class="fa fa-star"></i>Навыки</a></li>
                    <li class="link-about"><a class="anchor" href="#about"><i class="fa fa-street-view"></i>Обо мне</a></li>
                    <li class="link-contact"><a class="anchor" href="#contact"><i class="fa fa-envelope-open"></i>Контакты</a></li>
                </ul>
            </nav>
            <div class="menu-toggler">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <nav class="header-menu vertical-menu">
            <ul>
                <li class="link-home"><a href="<?=get_site_url() . '/blog'?>"><i class="fa fa-home"></i>Блог</a></li>
                <li class="link-services"><a class="anchor" href="#services"><i class="fa fa-files-o"></i>Услуги</a></li>
                <li class="link-portfolio"><a class="anchor" href="#portfolio"><i class="fa fa-book"></i>Портфолио</a></li>
                <li class="link-skills"><a class="anchor" href="#skills"><i class="fa fa-star"></i>Навыки</a></li>
                <li class="link-about"><a class="anchor" href="#about"><i class="fa fa-street-view"></i>Обо мне</a></li>
                <li class="link-contact"><a class="anchor" href="#contact"><i class="fa fa-envelope-open"></i>Контакты</a></li>
            </ul>
        </nav>
    </header>