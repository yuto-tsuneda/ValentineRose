<?php get_header(); ?>
<div class="archiveNews">
  <div class="archiveNews__header"></div>
  <div class="archiveNews__title">
    <h2>NEWS</h2>
  </div>
  <div class="archiveNews__fv">
    <div class="pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news_top-pc.webp" alt="ニューストップ画像PC">
    </div>
    <div class="sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news_top-sp.webp" alt="ニューストップ画像SP">
    </div>
  </div>
  <div class="bled">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
  <div class="archiveNews__content">
    <div class="archiveNews__content__left">
      <?php
      // ページ番号を取得
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;

      // 選択されたカテゴリーのスラッグを取得
      $current_category = get_queried_object();
      $category_slug = isset($current_category->slug) ? $current_category->slug : '';

      // カスタム投稿タイプ 'news' のクエリ設定
      $args = array(
        'post_type' => 'news',
        'posts_per_page' => 10, // 取得する投稿数
        'paged' => $paged, // ページネーション
      );

      // カテゴリーが選択されている場合、そのカテゴリーに絞り込み
      if (!empty($category_slug)) {
        $args['tax_query'] = array(
          array(
            'taxonomy' => 'news_category',
            'field' => 'slug',
            'terms' => $category_slug,
          ),
        );
      }

      $query = new WP_Query($args);
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          
          // 最初のカテゴリーのスラッグを取得
          $categories = get_the_terms(get_the_ID(), 'news_category');
          $post_category_slug = !empty($categories) && !is_wp_error($categories) ? $categories[0]->slug : '';
      ?>
          <a href="<?php the_permalink(); ?>" class="news-item">
            <div class="news-item__date"><?php echo get_the_date('Y.m.d'); ?></div>
            <h3 class="news-item__title"><?php the_title(); ?></h3>
            <div class="news-item__slug"><?php echo esc_html($post_category_slug); ?></div>
          </a>
      <?php
        }
        // ページネーションの表示
        $pagination_args = array(
          'total'   => $query->max_num_pages,
          'current' => $paged,
          'prev_text' => __('<i class="fa-solid fa-chevron-left"></i>'),
          'next_text' => __('<i class="fa-solid fa-chevron-right"></i>'),
        );
        echo '<div class="pagination">' . paginate_links($pagination_args) . '</div>';
        wp_reset_postdata(); // 投稿データをリセット
      } else {
        echo '<p>投稿が見つかりませんでした。</p>';
      }
      ?>
    </div>
    <div class="archiveNews__content__right">
      <p>Category</p>
      <?php
      // カテゴリーの表示
      $terms = get_terms(array(
        'taxonomy' => 'news_category',
        'hide_empty' => false,
      ));
      echo '<ul class="news__content__category">';
      echo '<li><a href="' . esc_url(get_post_type_archive_link('news')) . '">すべて</a></li>';
      if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
          $class = ($term->slug === $category_slug) ? 'class="active"' : '';
          echo '<li><a href="' . esc_url(get_term_link($term)) . '" ' . $class . '>' . esc_html($term->name) . '</a></li>';
        }
      } else {
        echo '<li>カテゴリーが見つかりませんでした。</li>';
      }
      echo '</ul>';
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
