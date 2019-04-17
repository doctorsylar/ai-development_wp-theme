<?php
/*
Template Name: blog
*/
?>
<?php get_header('blog'); ?>

<div class="container">
    <main class="main-content col-12 col-md-9 col-lg-10">
        <section class="top-message">
            <?php
            the_post();
            the_content();
            ?>
        </section>
        <section class="posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post-item">
                <h2><?php the_title(); ?></h2>
                <p class="cut-text">
                    <?php the_excerpt_rss(); ?>
                </p>
            </div>


            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </section>
    </main>
    <aside class="blog-sidebar col-md-3 col-lg-2">
        <?php
        get_sidebar();
        ?>
    </aside>
</div>



<?php get_footer(); ?>