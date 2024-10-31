<?php get_header(); ?>
<div class="archiveSalons">
  <div class="archiveSalons__header"></div>
  <div class="archiveSalons__title">
    <h2>SALONS</h2>
  </div>
  <div class="salons__fv">
    <div class="pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive-salons_top-pc.webp" alt="店舗一覧トップ画像PC">
    </div>
    <div class="sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/archive-salons_top-sp.webp" alt="店舗一覧トップ画像SP">
    </div>
  </div>
  <div class="bled">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
  <div class="archiveSalons__prefectures">
    <div class="archiveSalons__prefectures__title">
      <h3>PREFECTURES<span>Prefectures</span></h3>
      <p>都道府県</p>
    </div>
    <div class="archiveSalons__prefectures__category">
      <?php
      $terms = get_terms(array(
        'taxonomy' => 'salon_category',
        'hide_empty' => true,
      ));
      $custom_order = explode(',', get_option('custom_category_order', ''));
      $custom_order = array_map('trim', $custom_order); // スペースを除去
      $ordered_terms = array();
      foreach ($custom_order as $slug) {
        foreach ($terms as $term) {
          if ($term->slug === $slug) {
            $ordered_terms[] = $term;
            break;
          }
        }
      }
      foreach ($terms as $term) {
        if (!in_array($term, $ordered_terms)) {
          $ordered_terms[] = $term;
        }
      }

      if (!empty($ordered_terms) && !is_wp_error($ordered_terms)) {
        echo '<ul class="archiveSalons__category__List">';
        foreach ($ordered_terms as $term) {
          $term_link = get_term_link($term);
          echo '<li><i class="fa-solid fa-play"></i><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';

          $subtitle = get_term_meta($term->term_id, 'category_subtitle', true);
          if ($subtitle) {
            echo '<p class="archiveSalons__category__subtitle">' . esc_html($subtitle) . '</p>';
          }

          echo '</li>';
        }
        echo '</ul>';
      }
      ?>
    </div>
    <div class="archiveSalons__prefectures__stores">
      <?php
      foreach ($ordered_terms as $term) {
        echo '<div class="archiveSalons__prefectures__stores__category">';
        echo '<h3>' . esc_html($term->name) . '</h3>';

        // カスタム投稿タイプ "salons" の取得
        $query = new WP_Query(array(
          'post_type' => 'salons',
          'tax_query' => array(
            array(
              'taxonomy' => 'salon_category',
              'field'    => 'slug',
              'terms'    => $term->slug,
            ),
          ),
        ));

        if ($query->have_posts()) {
          echo '<ul class="salon-list">';
          while ($query->have_posts()) : $query->the_post();
            $map = get_field('googlemap'); // 地図フィールド
            $store_name = get_field('store-name'); // 店舗名フィールド
            $address = get_field('store-address'); // 住所フィールド
            $store_name_en = get_field('store-name-en');

            echo '<li>';
            if ($map) {
              $google_map_with_class = str_replace('<iframe', '<iframe class="salon__map"', $map);
              echo $google_map_with_class;
            }
            echo '<p class="salon__nameEn">' . esc_html($store_name_en) . '</p>';
            echo '<p class="salon__name">' . esc_html($store_name) . '</p>';
            echo '<p class="salon__address">' . esc_html($address) . '</p>';
            echo '</li>';
          endwhile;
          echo '</ul>';
          wp_reset_postdata();
        } else {
          echo '<p>店舗情報はありません。</p>';
        }

        echo '</div>';
      }
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>