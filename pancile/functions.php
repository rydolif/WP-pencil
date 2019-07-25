<?php
//------------------додавання css + js ----------------------
  function ewa_scripts() {
    //---------------css---------------------
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.min.css' );
    //---------------js---------------------
    wp_enqueue_script( 'main-sctipt', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'ewa_scripts' );

//------------------подключение шрифтов------------------
  // function wph_add_google_fonts() {
  //     if ( !is_admin() ) {
  //         wp_register_style('Open+Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800', array(), null, 'all');
  //         wp_register_style('Merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,700', array(), null, 'all');
  //         wp_enqueue_style('Open+Sans');
  //         wp_enqueue_style('Merriweather');
  //     }
  // }
  // add_action('wp_enqueue_scripts', 'wph_add_google_fonts');

//------------------підключення додаткових функцій для постов ----------------------
  function myfirsttheme_setup() {
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  }
  add_action( 'after_setup_theme', 'myfirsttheme_setup' );
//------------------delet Post Type ----------------------
    function remove_menus(){
      // remove_menu_page( 'index.php' );                  //Консоль
      // remove_menu_page( 'edit.php' );                   //Записи
      // remove_menu_page( 'upload.php' );                 //Медиафайлы
      // remove_menu_page( 'edit.php?post_type=page' );    //Страницы
      // remove_menu_page( 'edit-comments.php' );          //Комментарии
      // remove_menu_page( 'themes.php' );                 //Внешний вид
      // remove_menu_page( 'users.php' );                  //Пользователи
      // remove_menu_page( 'tools.php' );                  //Инструменты
      // remove_menu_page( 'options-general.php' );        //Настройки
    }
    add_action( 'admin_menu', 'remove_menus' );

//------------------чистка від лишнього ----------------------
    remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
    remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
    remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
    remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
    remove_action('wp_head','wp_generator');  // скрыть версию wordpress
    // function modify_jquery() {
    //         if (!is_admin()) {           
    //         wp_deregister_script('jquery');
    //         }
    // }
    // add_action('init', 'modify_jquery');

//------------------информация---------------------
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title'    => 'Базовые блоки',
            'menu_title'    => 'Базовые блоки',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'  => false
        ));

    }

//------------------меню----------------------
    register_nav_menus(array(
        // 'portfolio-menu' => 'Фильтр',
    ));

//------------------Register Custom Post Команда----------------------
    function team_post_type() {
        $labels = array(
            'name'                  => _x( 'Команда', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Команда', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Команда', 'text_domain' ),
            'all_items'             => __( 'Команда', 'text_domain' ),
            'add_new_item'          => __( 'Добавить сотрудника', 'text_domain' ),
            'add_new'               => __( 'Добавить сотрудника', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Команда', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'team', $args );
    }
    add_action( 'init', 'team_post_type', 0 );
