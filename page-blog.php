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
    <div class="container">
        <header>
            <?php get_home_url()?>
            <a href="<?= get_home_url()?>" title="Главная страница">
                <img src="/wp-content/themes/doctorsyl_portfolio/img/blog/logo_blog.svg" alt="logo_blog">
            </a>
        </header>
    </div>
</main>


<?php get_footer(); ?>