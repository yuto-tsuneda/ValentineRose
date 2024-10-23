<?php  
  function display_latest_news($number_of_posts = 3) {
    $args = array(
        'post_type'      => 'news', // カスタム投稿タイプ
        'posts_per_page' => $number_of_posts, // 表示する件数
        'orderby'        => 'date', // 投稿日時でソート
        'order'          => 'DESC', // 降順
    );

    $latest_news = new WP_Query($args);

    if ($latest_news->have_posts()) {
        echo '<ul class="news__list">';
        while ($latest_news->have_posts()) {
            $latest_news->the_post();
            ?>
            <li class="news__list__item">
                <span class="news__list__date"><?php echo get_the_date('Y.m.d'); ?></span> <!-- 投稿日 -->
                <a href="<?php the_permalink(); ?>" class="news__list__title"><?php the_title(); ?></a> <!-- タイトル -->
                
                <?php
                // カスタムタクソノミー 'news_category' からカテゴリーを取得
                $terms = get_the_terms(get_the_ID(), 'news_category');
                if ($terms && !is_wp_error($terms)) {
                    echo '<span class="news__list__category">';
                    foreach ($terms as $term) {
                        echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a> ';
                    }
                    echo '</span>';
                }
                ?>
            </li>
            <?php
        }
        echo '</ul>';
        wp_reset_postdata(); // 投稿データをリセット
    } else {
        echo '<p>新着ニュースはありません。</p>';
    }
}
?>
<div class="pc">
  <div class="viewAll">
    <a href="<?php get_post_type_archive_link('news'); ?>" class="viewAll__a">View All</a>
  </div>
</div>
<?php display_latest_news(3); ?>
<div class="sp tablet">
  <div class="viewAll">
    <a href="<?php get_post_type_archive_link('news'); ?>" class="viewAll__a">View All</a>
  </div>
</div>