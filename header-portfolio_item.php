<?php
get_header();
?>
<header id="header" class="homepage-header">
    <div class="header-container col-12 col-sm-12 col-md-11 col-lg-10">
        <div class="header-logo">
            <a href="#home" class="anchor">
                <img src="<?= temp_dir ?>/img/svg/logo.svg" alt="ai-development">
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
