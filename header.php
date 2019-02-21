<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="
          <?php
            $content = get_post(get_the_ID());
            echo apply_filters('the_content', $content->post_content);
          ?>">
    <meta name="keywords"
          content="заказать сайт, заказ вебсайта, вебсайт, wordpress, разработка вебсайтов,
          купить сайт, красивые сайты, разработка адаптивных сайтов, вебприложения,
          frontend, backend, fullstack, react, vue.js, bootstrap"
    >
    <meta name="google-site-verification" content="nc9WZs8kpAm7lB0AbJrsj3FYb9hh8IDApepiiCwS-sc" />
    <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <?php
    $templateName = get_page_template_slug();
    $templateName = explode('-', substr($templateName,0, strlen($templateName) - 4));
    $templateName = $templateName[count($templateName) - 1];
    ?>
    <link rel="stylesheet" href='<?=DS_ROOT . "/minified/$templateName.css"?>'>
    <?php wp_head(); ?>