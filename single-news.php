<?php get_header(); ?>
<div class="news">
  <div class="news__header"></div>
  <div class="news__title">
    <h2>NEWS</h2>
  </div>
  <div class="news__fv">
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
  <div class="news__content">
    <div class="news__content__left">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h3><?php the_title(); ?></h3>
          <div class="news__content__date">
            <p><?php the_terms(get_the_ID(), 'news_category', '', ', '); ?></p>
            <p><?php echo get_the_date('Y.m.d'); ?></p>
          </div>
          <div class="pc">
            <?php
            // SP用のACFフィールドが空かどうかをチェック
            $pc_image = get_field('pc-img'); // ACFで設定したSP用フィールド名を入力してください

            if (!empty($pc_image) && is_array($pc_image) && isset($pc_image['url'])) {
              // 画像が設定されている場合、その画像を表示
              echo '<img src="' . esc_url($pc_image['url']) . '" alt="' . esc_attr($pc_image['alt'] ?? '') . '">';
            } else {
              // 画像がない場合、デフォルトの「no-image」を表示
              echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/no-image.webp') . '" alt="ノーイメージ画像">';
            }
            ?>
          </div>


          <div class="sp">
            <?php
            // SP用のACFフィールドが空かどうかをチェック
            $sp_image = get_field('sp-img'); // ACFで設定したSP用フィールド名を入力してください

            if (!empty($sp_image) && is_array($sp_image) && isset($sp_image['url'])) {
              // 画像が設定されている場合、その画像を表示
              echo '<img src="' . esc_url($sp_image['url']) . '" alt="' . esc_attr($sp_image['alt'] ?? '') . '">';
            } else {
              // 画像がない場合、デフォルトの「no-image」を表示
              echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/no-image.webp') . '" alt="ノーイメージ画像">';
            }
            ?>
          </div>

      <?php endwhile;
      endif; ?>
      <div class="news__content__infor">
        <?php echo nl2br(SCF::get('single-infor')); ?>
      </div>
      <?php
      $flow = SCF::get('single-contents');
      foreach ($flow as $item) : ?>
        <div class="">
          <h4 class=""><?php echo nl2br($item['single-subhead']); ?></h4>
          <p class=""><?php echo nl2br($item['single-content']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="news__more sp">
    <a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ一覧へ</a>
  </div>
    <div class="news__content__right">
      <p>Category</p>
      <?php
      $category_order = get_option('category_order', array());
      $terms = get_terms(array(
        'taxonomy' => 'news_category',
        'hide_empty' => false,
      ));
      echo '<ul class="news__content__category">';
      echo '<li><a href="' . esc_url(get_post_type_archive_link('news')) . '">すべて</a></li>';
      if (!empty($terms) && !is_wp_error($terms)) {
        usort($terms, function ($a, $b) use ($category_order) {
          $pos_a = array_search($a->slug, $category_order);
          $pos_b = array_search($b->slug, $category_order);
          return ($pos_a === false ? PHP_INT_MAX : $pos_a) - ($pos_b === false ? PHP_INT_MAX : $pos_b);
        });
        foreach ($terms as $term) {
          echo '<li><a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
        }
      } else {
        echo '<li>カテゴリーが見つかりませんでした。</li>';
      }
      echo '</ul>';
      ?>
    </div>
  </div>
  <div class="news__more pc">
    <a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ一覧へ</a>
  </div>
</div>
<?php get_footer(); ?>