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
  <div class="bled">
    <?php if(function_exists('bcn_display'))
      {
        bcn_display();
      }?>
  </div>
  <div class="concept__content">
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
</div>

<?php get_footer(); ?>