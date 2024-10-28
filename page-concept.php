<?php get_header(); ?>

<div class="concept">
  <div class="concept__header"></div>
  <div class="concept__title">
    <h2>SALON CONCEPT</h2>
  </div>
  <div class="concept__fv">
    <div class="pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-concept_top-pc.webp" alt="コンセプトトップ画像PC">
    </div>
    <div class="sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-concept_top-sp.webp" alt="コンセプトトップ画像SP">
    </div>
  </div>
  <div class="concept__content">
    <div class="bled">
      <?php if(function_exists('bcn_display'))
        {
          bcn_display();
        }?>
    </div>
    <div class="concept__content__top">
      <h2>洗練されたワンランク上の<br>女性を目指すために</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-concept_about.webp" alt="コンテンツ画像">
    </div>
    <div class="concept__content__bottom">
      <p>バレンタインローズは、東京や大阪、名古屋などの都市部をはじめ日本全国に店舗を構える脱毛サロンで、「洗練されたワンランク上の女性を目指す」というコンセプトのもとオーダーメイドの脱毛サービスを提供しています。<br>
      毎年30,000人以上のお客様にバレンタインローズの脱毛サービスをご利用いただいており、これまで年齢を問わず様々な女性の脱毛をサポートさせていただきました。しかし、私たちは、脱毛はあくまでもお客様がワンランク上の女性に近づくための一歩であり、目指すべきゴールではないと考えています。<br>
      お客様と脱毛サロンという関係だけでなく、脱毛の卒業後もお客様の隣で女性磨きをサポートすることができる存在となり、そしてバレンタインローズに通っていることを誇りに思ってもらえる、そんな脱毛サロンを目指していきます。</p>
    </div>
  </div>
  <div class="concept__instagram">
      <div class="concept__instagram__title">
        <h2>INSTAGRAM<span>Instagram</span></h2>
        <p>公式インスタグラム</p>
      </div>
      <div class="concept__instagram__content">
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
      </div>
  </div>
  <div class="concept__company">
    <div class="concept__company__title">
      <h2>COMPANY PROFILE<span>Company<br class="sp">profile</span></h2>
      <p>会社概要</p>
    </div>
    <div class="concept__company__img">
      <div class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-concept_profile-pc.webp" alt="会社概要イメージ画像PC">
      </div>
      <div class="sp tablet">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-concept_profile-sp.webp" alt="会社概要イメージ画像SP">
      </div>
    </div>
    <div class="concept__company__profile">
        <dl>
          <dt>運営会社</dt>
          <dd>株式会社VALENTINE ROSE</dd>
        </dl>
        <dl>
          <dt>商号</dt>
          <dd>VALENTINE ROSE</dd>
        </dl>
        <dl>
          <dt>代表者</dt>
          <dd>山田 花子</dd>
        </dl>
        <dl>
          <dt>所在地</dt>
          <dd>〒000-0000<br class="sp"><div class="pc">　</div>東京都港区青山0-00-00</dd>
        </dl>
        <dl>
          <dt>電話番号</dt>
          <dd>000-0000-0000</dd>
        </dl>
        <dl>
          <dt>資本金</dt>
          <dd>3000万円</dd>
        </dl>
        <dl>
          <dt>従業員数</dt>
          <dd>200名</dd>
        </dl>
        <dl>
          <dt>業務内容</dt>
          <dd><div class="pc">-</div>脱毛サロン「VALENTINE ROSE」の運営</dd>
        </dl>
    </div>
  </div>
</div>

<?php get_footer(); ?>