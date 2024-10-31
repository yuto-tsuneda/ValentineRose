<?php get_header(); ?>

<div class="salons">
  <div class="salons__header"></div>
    <div class="salons__title">
    <p>VALENTINE ROSE</p>
    <h2><?php echo get_field('store-name'); ?></h2>
  </div>
  <div class="salons__fv">
    <div class="pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-salons_top-pc.webp" alt="店舗紹介トップ画像PC">
    </div>
    <div class="sp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-salons_top-sp.webp" alt="店舗紹介トップ画像SP">
    </div>
  </div>
  <div class="bled">
    <?php if(function_exists('bcn_display'))
      {
        bcn_display();
      }?>
  </div>
  <div class="salons__infor">
      <p><?php echo nl2br(esc_html(get_field('store-infor'))); ?></p>
  </div>
  <div class="salons__flow">
    <div class="salons__flow__title">
      <h3>FLOW<span>Flow</span></h3>
      <p>お問い合わせからの流れ</p>
    </div>
    <div class="salons__flow__contents">
      <div class="salons__flow__contentsLeft">
        <?php if ($image1 = get_field('flow-image1')): ?>
          <img src="<?php echo esc_url($image1); ?>" alt="フローイメージ1">
        <?php endif; ?>
        <?php if ($image3 = get_field('flow-image3')): ?>
          <img src="<?php echo esc_url($image3); ?>" alt="フローイメージ1">
        <?php endif; ?>
      </div>
      <div class="salons__flow__contentsCenter">
        <?php
          $flow = SCF::get('flow');
          $count = 1;
          foreach ($flow as $item) :?>
          <div class="salons__flow__contentsCenterCover">
            <p class="salons__flow__contentsCenterCoverNumber  <?php echo ($count === 1) ? 'first' : ''; ?>"><?php echo $count; ?></p>
            <h4 class="salons__flow__contensCenterCoverTitle"><?php echo $item['flow-title']; ?></h4>
            <p class="salons__flow__contentsCenterCoverContent"><?php echo nl2br($item['flow-content']); ?></p>
          </div>
          <?php $count++; ?>
        <?php endforeach; ?>
      </div>
      <div class="salons__flow__contentsRight">
        <?php if ($image2 = get_field('flow-image2')): ?>
          <img src="<?php echo esc_url($image2); ?>" alt="フローイメージ2">
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="salons__staff">
    <div class="salons__staff__flex">
      <div class="salons__staff__left">
        <img src="<?php echo esc_url(get_field('staff-image')); ?>" alt="スタッフ画像">
      </div>
      <div class="salons__staff__right">
        <h3>Staff<span>スタッフから挨拶</span></h3>
        <p><?php echo get_field('staff-message'); ?></p>
        <p><?php echo get_field('staff-name-en'); ?><span><?php echo get_field('staff-name-jp'); ?></span></p>
      </div>
    </div>
  </div>
  <div class="salons__storeMap">
    <div class="salons__storeMap__flex">
      <div class="salons__storeMap__left">
        <dl>
          <dt>店舗名</dt>
          <dd>VALENTINE ROSE <?php echo get_field('store-name'); ?></dd>
        </dl>
        <dl>
          <dt>住所</dt>
          <dd><?php echo get_field('store-address'); ?></dd>
        </dl>
        <dl>
          <dt>電話番号</dt>
          <dd><?php echo get_field('store-tell'); ?></dd>
        </dl>
      </div>
      <div class="salons__storeMap__right">
        <?php
          $google_map = get_field('googlemap');
          $google_map_with_class = str_replace('<iframe', '<iframe class="salons__storeMap__map"', $google_map);
          echo $google_map_with_class;
        ?>
      </div>
    </div>
  </div>
  <div class="salons__more">
    <a href="<?php echo get_post_type_archive_link('salons'); ?>">店舗一覧へ</a>
  </div>
</div>

<?php get_footer(); ?>