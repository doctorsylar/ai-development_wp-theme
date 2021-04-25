<?php get_header('portfolio_item');
$fields = get_fields();
?>

<div class="portfolio-item-container main-container">
    <main class="main-content col-12">
        <section class="portfolio-item">
            <?php
            var_dump($post);
            if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
                <!-- Цикл WordPress -->
                <!-- Вывод постов: the_title() и т.д. -->
                <div><?php the_content(); ?></div>
            <?php } } else { ?>
                <p>Записей нет.</p>
            <?php } ?>
        </section>
    </main>
</div>



<?php get_footer(); ?>