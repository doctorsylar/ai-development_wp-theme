<?php
/*
Template Name: blog
*/
?>
<?php get_header(); ?>

<aside class="blog-sidebar">
    <div class="sidebar-arrow">
        <i class="fa fa-arrow-left"></i>
    </div>
    <div class="sidebar-content">

    </div>
</aside>
<main>
    <div class="header-wrapper">
        <div class="header-inner">
            <header class="container">
                <div class="logo">
                    <a href="<?= get_home_url()?>" title="Главная страница">
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
            </header>
        </div>
    </div>
    <section class="main container">
<!--        <div class="construction">-->
<!--            <b>В данный момент блог находится в разработке</b>-->
<!--        </div>-->
        <?php
        the_post();
        the_content();
        ?>
    </section>
</main>


<?php get_footer(); ?>