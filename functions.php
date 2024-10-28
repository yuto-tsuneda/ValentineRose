<?php

function theme_enqueue_scripts(){
  $theme_directory = get_template_directory_uri();

  wp_enqueue_script('jquery');
  wp_enqueue_style('common-style',$theme_directory . '/assets/css/style.css');
  wp_enqueue_script('common-script',$theme_directory . '/assets/js/common.js', array('jquery'), null, true);
  wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
  wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
  wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '', true);


  if(is_front_page()){
    wp_enqueue_style('front-style',$theme_directory . '/assets/css/front-page.css', array('common-style'), null);
    wp_enqueue_script('front-script',$theme_directory . '/assets/js/front-page.js', array('common-script'), null, true);
  }

  if(is_page('concept')){
    wp_enqueue_style('concept-style', $theme_directory . '/assets/css/page-concept.css', array('common-style'), null);
    wp_enqueue_script('concept-script', $theme_directory . '/assets/js/page-concept.js', array('common-script'), null, true);
  }
}
add_action('wp_enqueue_scripts','theme_enqueue_scripts');

// カスタム投稿の追加(news)

function create_news_post_type() {
  $labels = array(
      'name'               => 'ニュース',
      'singular_name'      => 'ニュース',
      'menu_name'          => 'ニュース',
      'name_admin_bar'     => 'ニュース',
      'add_new'            => '新規追加',
      'add_new_item'       => '新しいニュースを追加',
      'new_item'           => '新しいニュース',
      'edit_item'          => 'ニュースを編集',
      'view_item'          => 'ニュースを表示',
      'all_items'          => 'すべてのニュース',
      'search_items'       => 'ニュースを検索',
      'parent_item_colon'  => '親ニュース:',
      'not_found'          => 'ニュースが見つかりません。',
      'not_found_in_trash' => 'ゴミ箱にニュースが見つかりません。',
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'news'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
  );

  register_post_type('news', $args);
}

add_action('init', 'create_news_post_type');

function create_news_taxonomy() {
  $labels = array(
      'name'              => 'ニュースカテゴリー',
      'singular_name'     => 'ニュースカテゴリー',
      'search_items'      => 'カテゴリーを検索',
      'all_items'         => 'すべてのカテゴリー',
      'parent_item'       => '親カテゴリー',
      'parent_item_colon' => '親カテゴリー:',
      'edit_item'         => 'カテゴリーを編集',
      'update_item'       => 'カテゴリーを更新',
      'add_new_item'      => '新しいカテゴリーを追加',
      'new_item_name'     => '新しいカテゴリー名',
      'menu_name'         => 'ニュースカテゴリー',
  );

  $args = array(
      'labels'            => $labels,
      'hierarchical'      => true, // trueの場合、階層型タクソノミーになります（親子関係が可能）
      'public'            => true,
      'show_admin_column' => true,
      'rewrite'           => array('slug' => 'news-category'), // スラッグを設定
  );

  register_taxonomy('news_category', array('news'), $args);
}

add_action('init', 'create_news_taxonomy');

// カスタム投稿(salons)

function create_salons_post_type() {
  $labels = array(
      'name'               => 'サロン',
      'singular_name'      => 'サロン',
      'menu_name'          => 'サロン',
      'name_admin_bar'     => 'サロン',
      'add_new'            => '新規追加',
      'add_new_item'       => '新しいサロンを追加',
      'new_item'           => '新しいサロン',
      'edit_item'          => 'サロンを編集',
      'view_item'          => 'サロンを表示',
      'all_items'          => 'すべてのサロン',
      'search_items'       => 'サロンを検索',
      'parent_item_colon'  => '親サロン:',
      'not_found'          => 'サロンが見つかりません。',
      'not_found_in_trash' => 'ゴミ箱にサロンが見つかりません。',
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'salons'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
  );

  register_post_type('salons', $args);
}

add_action('init', 'create_salons_post_type');

function create_salons_taxonomy() {
  $labels = array(
      'name'              => 'サロンカテゴリー',
      'singular_name'     => 'サロンカテゴリー',
      'search_items'      => 'カテゴリーを検索',
      'all_items'         => 'すべてのカテゴリー',
      'parent_item'       => '親カテゴリー',
      'parent_item_colon' => '親カテゴリー:',
      'edit_item'         => 'カテゴリーを編集',
      'update_item'       => 'カテゴリーを更新',
      'add_new_item'      => '新しいカテゴリーを追加',
      'new_item_name'     => '新しいカテゴリー名',
      'menu_name'         => 'サロンカテゴリー',
  );

  $args = array(
      'labels'            => $labels,
      'hierarchical'      => true, // trueの場合、階層型タクソノミーになります（親子関係が可能）
      'public'            => true,
      'show_admin_column' => true,
      'rewrite'           => array('slug' => 'salon-category'), // スラッグを設定
  );

  register_taxonomy('salon_category', array('salons'), $args);
}

add_action('init', 'create_salons_taxonomy');



