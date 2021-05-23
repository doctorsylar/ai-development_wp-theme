<?php get_header('portfolio_item');
$post->fields = get_fields();
$prev = get_previous_post();
$next = get_next_post();
?>

<div class="portfolio-item-container main-container">
    <?php if ($prev !== '' && $prev !== null) : ?>
        <a title="<?= $prev->post_title ?>" href="<?= get_permalink($prev->ID) ?>" class="portfolio-prev portfolio-arrow"><</a>
    <?php endif; ?>
    <?php if ($next !== '' && $next !== null) : ?>
        <a title="<?= $next->post_title ?>" href="<?= get_permalink($next->ID) ?>" class="portfolio-next portfolio-arrow">></a>
    <?php endif; ?>
    <main class="main-content col-12">
        <section class="portfolio-item">
            <?php
//            var_dump($post);
            ?>
        </section>
    </main>
</div>



<?php get_footer(); ?>