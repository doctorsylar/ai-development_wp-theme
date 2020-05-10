<?php
/*
Template Name: blog
*/
?>
<?php get_header('blog'); ?>

<div class="container main-container">
    <div class="row">
        <main class="main-content col-12 col-md-9">
            <section class="top-message">
                <?php
                the_post();
                the_content();
                ?>
            </section>
            <section class="posts">
                <?php
                $posts = get_posts([

                ]);
                foreach ($posts as $post): ?>
                    <article class="post-item">
                        <div class="post-header">
                            <span>Andrey Izotov</span>
                            <span><?=$post->post_date; ?></span>
                            <h2><a href="<?php the_permalink(); ?>"><?=$post->post_title; ?></a></h2>
                        </div>
                        <div class="post-content">
                            <div class="post-text">
                                <p><?=$post->post_excerpt; ?></p>
                            </div>
                        </div>
                    </article>



                <?php endforeach; ?>
<!--                --><?php //echo sizeof($posts); ?>

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