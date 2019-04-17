<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="nc9WZs8kpAm7lB0AbJrsj3FYb9hh8IDApepiiCwS-sc" />
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
    <div class="preloader">
        <div class="tetris"></div>
    </div>

    <header class="header-wrapper">
        <div class="header-inner">
            <div class="container header-content">
                <div class="logo">
                    <a href="<?=get_home_url() ?>" title="Главная страница">
                        <img src="/wp-content/themes/doctorsyl_portfolio/img/blog/logo_blog.svg" alt="logo_blog">
                    </a>
                </div>
                <div class="heading">
                    <h1>
                        <span>Блог о</span>
                        <span>веб-разработке</span>
                        <span>и фрилансе</span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="mobile-bar">
            <a href="<?=get_home_url() ?>" title="Домой">
                <i class="fa fa-home fa-2x"></i>
                <span>Домой</span>
            </a>
            <button type="button" class="mobile-nav-toggler">
                <i class="fa fa-bars fa-2x"></i>
            </button>
        </div>
    </header>
