<?php

// PHP variables
define('DS_ROOT', get_template_directory_uri());
define('temp_dir', get_template_directory_uri());
// Подключение ссылки на AJAX-обработчик
function variables(){
    global $post;
    $variables = array (
        "ajax_url" => admin_url("admin-ajax.php"),
    );
    echo "<script type='text/javascript'>window.wp_data = ".json_encode($variables)."</script>";
}
add_action("wp_head", "variables");

// ---------------------------------------------------------
// Получение данных через AJAX
function contact_callback() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $managerEmail = 'soul.evans.15@gmail.com';
        $headers = array(
            "From: AI-development <no-reply@ai-development.ru>",
            "content-type: text/html"
        );
        $object = $_POST['item'];
        $message =
            "Заявка из формы обратной связи<br>" .
            "<br>" .
            "Имя: " . htmlspecialchars( trim( $object['name'] ) ) . "<br>" .
            "E-mail: " . htmlspecialchars( trim( $object['email'] ) ) . "<br>" .
            "Сообщение: " . htmlspecialchars( trim( $object['message'] ) ) . "<br>";
        echo wp_mail(
            $managerEmail,
            'Заявка с сайта AI-development.ru',
            $message,
            $headers
        );
    }
    wp_die();
}
//
add_action( "wp_ajax_contact", "contact_callback" );
add_action( "wp_ajax_nopriv_contact", "contact_callback" );
//Удалить Query Strings
function _remove_script_version( $src ){
    $parts = explode( '?ver', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
//Удаление CSS админ панели
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
//Удаление древовидных комментариев
function comments_clean_header_hook() {
    wp_deregister_script( 'comment-reply' );
}
add_action('init','comments_clean_header_hook');
//Удалить WP Embed
function speed_stop_loading_wp_embed() {
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
    }
}
add_action('init', 'speed_stop_loading_wp_embed');
//Удаление смайликов
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
//Удаление WP-JSON из кода WordPress
//remove_action( 'wp_head', 'rest_output_link_wp_head');
//remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
//remove_action( 'template_redirect', 'rest_output_link_header', 11);
//Удаление WLWManifest из кода WordPress
remove_action('wp_head', 'wlwmanifest_link');
// Удаление технической страницы wp-json
// Отключаем сам REST API
//add_filter('rest_enabled', '__return_false');
// Отключаем события REST API
//remove_action( 'init', 'rest_api_init' );
//remove_action( 'rest_api_init', 'rest_api_default_filters', 10);
//remove_action( 'parse_request', 'rest_api_loaded' );
// Отключаем Embeds связанные с REST API
//remove_action( 'rest_api_init', 'wp_oembed_register_route' );
//remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10);
// Отключаем фильтры REST API
//remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
//remove_action( 'wp_head', 'rest_output_link_wp_head', 10);
//remove_action( 'template_redirect', 'rest_output_link_header', 11);
//remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
//remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
//remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
//Удаление мета-тега generator
remove_action('wp_head', 'wp_generator');
//Удаление ссылки на RSD
remove_action('wp_head', 'rsd_link');
// Admin bar
if(!is_admin()){
    add_action( 'wp_enqueue_scripts', 'xyz_remove_admin_bar_css', 21 );
    add_action( 'admin_enqueue_scripts', 'xyz_remove_admin_bar_css', 21 );
    function xyz_remove_admin_bar_css() {
        wp_dequeue_style( 'admin-bar' );
        wp_dequeue_style( 'admin-bar-min' );
    }
}
add_filter('show_admin_bar', '__return_false');
// delete jQuery
//add_action('wp_enqueue_scripts', function () {
//    wp_deregister_script('jquery');
//});
add_theme_support( 'title-tag' );
// Register post type
add_action( 'init', 'register_post_types' );
function register_post_types(){
    add_theme_support('post-thumbnails');

    register_post_type('portfolio_item', array(
        'label'  => 'portfolio-item',
        'labels' => array(
            'name'               => 'Portfolio-item', // основное название для типа записи
            'singular_name'      => 'Portfolio-item', // название для одной записи этого типа
            'add_new'            => 'Добавить Portfolio-item', // для добавления новой записи
            'add_new_item'       => 'Добавление Portfolio-item', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Portfolio-item', // для редактирования типа записи
            'new_item'           => 'Новое Portfolio-item', // текст новой записи
            'view_item'          => 'Смотреть Portfolio-item', // для просмотра записи этого типа.
            'search_items'       => 'Искать Portfolio-item', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Portfolio-item', // название меню
        ),
        'description'           => '',
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'delete_with_user'      => false,
        'show_in_rest'          => true,
        'rest_base'             => "",
        'rest_controller_class' => "WP_REST_Posts_Controller",
        'has_archive'           => false,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'exclude_from_search'   => false,
        'capability_type'       => "post",
        'map_meta_cap'          => true,
        'hierarchical'          => false,
        'rewrite'               => array( "slug" => "portfolio_item", "with_front" => false ),
        'query_var'             => true,
        'menu_icon'             => 'dashicons-format-image',
        'supports'              => array('title','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        '_builtin'              => false
    ) );
}

function getPortfolioItems () {
    $args = array(
        'posts_per_page' => 8,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'portfolio_item',
    );

    $portfolioItems = [];
    $query =  new WP_Query($args);
    foreach ($query->posts as $post) {
        $item = get_fields($post -> ID);
        $item['title'] = $post -> post_title;
        $item['thumbnail'] = get_the_post_thumbnail_url($post -> ID, 'medium');
        $item['image'] = get_the_post_thumbnail_url($post -> ID, 'full');
        $portfolioItems[] = $item;
    }
    return $portfolioItems;
}
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('main-style', temp_dir . '/style.css');
    wp_enqueue_style('font-awesome', temp_dir . '/fonts/font-awesome/stylesheet.css');
    wp_enqueue_style('font1', 'https://fonts.googleapis.com/css?family=Oswald|Raleway');
//    wp_enqueue_script('ym',
//        '//api-maps.yandex.ru/2.1/?load=package.full&#038;lang=ru-RU',
//        Null,
//        Null,
//        true);
    wp_enqueue_script('main-script',
        temp_dir . '/js/script.js',
        Null,
        Null,
        true);
});


// Registering sidebar
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
    register_sidebar( array(
        'name'          => 'sidebar-blog',
        'id'            => 'sidebar-blog',
        'description'   => '',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
// Add defer to script
function add_defer_attribute( $tag, $handle ) {
    $handles = array(
        'main-script'
    );

    foreach( $handles as $defer_script) {
        if ( $defer_script === $handle ) {
            return str_replace( ' src', ' defer="defer" src', $tag );
        }
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'add_defer_attribute', 10, 2 );