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

        </section>
    </main>
    <aside class="blog-sidebar col-md-3 col-lg-2">
        <?php
        get_sidebar();
        ?>
    </aside>
</div>



<?php get_footer(); ?>