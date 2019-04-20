<?php get_header('blog'); ?>

<div class="container main-container">
    <div class="row">
        <main class="main-content col-12 col-md-9">
            <section class="top-message">
<!--                --><?php
//                the_post();
//                the_content();
//                ?>
            </section>
            <section class="post">
                <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
                    <!-- Цикл WordPress -->
                    <!-- Вывод постов: the_title() и т.д. -->
                    <div><?php the_content(); ?></div>
                <?php } } else { ?>
                    <p>Записей нет.</p>
                <?php } ?>
            </section>
        </main>
        <aside class="blog-sidebar col-md-3">
            <?php
            get_sidebar();
            ?>
        </aside>
    </div>
</div>



<?php get_footer(); ?>