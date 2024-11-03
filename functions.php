<?php

function theme_enqueue_scripts()
{
  $theme_directory = get_template_directory_uri();

  wp_enqueue_script('jquery');
  wp_enqueue_style('common-style', $theme_directory . '/assets/css/style.css');
  wp_enqueue_script('common-script', $theme_directory . '/assets/js/common.js', array('jquery'), null, true);
  wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
  wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
  wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '', true);


  if (is_front_page()) {
    wp_enqueue_style('front-style', $theme_directory . '/assets/css/front-page.css', array('common-style'), null);
    wp_enqueue_script('front-script', $theme_directory . '/assets/js/front-page.js', array('common-script'), null, true);
  }

  if (is_page('concept')) {
    wp_enqueue_style('concept-style', $theme_directory . '/assets/css/page-concept.css', array('common-style'), null);
  }

  if (is_page('price')) {
    wp_enqueue_style('price-style', $theme_directory . '/assets/css/page-price.css', array('common-style'), null);
  }

  if (is_singular('salons')) {
    wp_enqueue_style('single-salons-style', $theme_directory . '/assets/css/single-salons.css', array('common-style'), null);
  }

  if (is_post_type_archive('salons')) {
    wp_enqueue_style('archive-salons', $theme_directory . '/assets/css/archive-salons.css', array('common-style'), null);
  }

  if (is_singular('news')) {
    wp_enqueue_style('single-news-style', $theme_directory . '/assets/css/single-news.css', array('common-style'), null);
  }

  if (is_post_type_archive('news')) {
    wp_enqueue_style('archive-news-salons', $theme_directory . '/assets/css/archive-news.css', array('common-style'), null);
  }
  if(is_tax('news_category')){
    wp_enqueue_style('news-category' , $theme_directory . '/assets/css/archive-news.css', array('common-style'), null);
  }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// カスタム投稿の追加(news)

function create_news_post_type()
{
  $labels = array(
    'name'               => 'ニュース一覧',
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

function create_news_taxonomy()
{
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

function create_salons_post_type()
{
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

function create_salons_taxonomy()
{
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

//salons(sub_title)
function add_salon_category_subtitle_field($term)
{
  $subtitle = get_term_meta($term->term_id, 'category_subtitle', true);
?>
  <tr class="form-field">
    <th scope="row" valign="top"><label for="category_subtitle">サブタイトル</label></th>
    <td>
      <input type="text" name="category_subtitle" id="category_subtitle" value="<?php echo esc_attr($subtitle); ?>">
      <p class="description">このカテゴリーのサブタイトルを入力してください</p>
    </td>
  </tr>
<?php
}
add_action('salon_category_edit_form_fields', 'add_salon_category_subtitle_field');

function save_salon_category_subtitle_field($term_id)
{
  if (isset($_POST['category_subtitle'])) {
    update_term_meta($term_id, 'category_subtitle', sanitize_text_field($_POST['category_subtitle']));
  }
}
add_action('edited_salon_category', 'save_salon_category_subtitle_field');

//categoryの順番
function my_theme_add_admin_page()
{
  add_menu_page(
    'カテゴリー順序設定', // ページタイトル
    'カテゴリー順序',     // メニュータイトル
    'manage_options',     // 権限
    'category-order-settings', // スラッグ
    'my_theme_category_order_settings_page', // 表示関数
    'dashicons-list-view', // アイコン
    100                     // 表示位置
  );
}
add_action('admin_menu', 'my_theme_add_admin_page');

function my_theme_category_order_settings_page()
{
?>
  <div class="wrap">
    <h1>カテゴリー順序設定</h1>
    <form method="post" action="options.php">
      <?php
      settings_fields('my_category_order_settings');
      do_settings_sections('category-order-settings');
      submit_button();
      ?>
    </form>
  </div>
<?php
}

function my_category_order_settings_init()
{
  register_setting('my_category_order_settings', 'custom_category_order');

  add_settings_section(
    'my_category_order_section',
    '表示するカテゴリーの順序',
    'my_category_order_section_callback',
    'category-order-settings'
  );

  add_settings_field(
    'custom_category_order_field',
    'カテゴリー順序（カンマ区切りでスラッグを入力）',
    'custom_category_order_field_callback',
    'category-order-settings',
    'my_category_order_section'
  );
}
add_action('admin_init', 'my_category_order_settings_init');

function my_category_order_section_callback()
{
  echo '<p>カテゴリースラッグをカンマで区切って入力してください（例: tokyo,kanagawa,saitama）。</p>';
}

function custom_category_order_field_callback()
{
  $custom_order = get_option('custom_category_order', '');
  echo '<input type="text" id="custom_category_order" name="custom_category_order" value="' . esc_attr($custom_order) . '" style="width: 100%;">';
}

add_theme_support('post-thumbnails');


//Newsカテゴリーの順番
// カスタム設定ページを追加
add_action('admin_menu', function() {
  add_menu_page(
      'ニュースカテゴリー設定', // ページタイトル
      'ニュースカテゴリー設定', // メニュータイトル
      'manage_options', // 権限
      'news-category-settings', // スラッグ
      'render_news_category_settings_page' // コールバック関数
  );
});

// 設定ページの内容を表示
function render_news_category_settings_page() {
  // オプションの取得
  $category_order = get_option('category_order', []);
  
  // フォームの送信処理
  if (isset($_POST['save_category_order'])) {
      $category_order = isset($_POST['category_order']) ? array_map('sanitize_text_field', explode(',', $_POST['category_order'])) : [];
      update_option('category_order', $category_order);
      echo '<div class="updated"><p>設定が保存されました。</p></div>';
  }

  // 設定フォーム
  ?>
  <div class="wrap">
      <h1>ニュースカテゴリー設定</h1>
      <form method="post">
          <label for="category_order">カテゴリーのスラッグ順（カンマ区切り）:</label>
          <input type="text" name="category_order" value="<?php echo esc_attr(implode(',', $category_order)); ?>" style="width: 100%;" />
          <button type="submit" name="save_category_order" class="button button-primary">保存</button>
      </form>
  </div>
  <?php
}