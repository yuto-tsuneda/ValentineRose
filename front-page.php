<?php get_header(); ?>
<header>
  <?php get_template_part('assets/template-parts/top-nav/nav');?>
</header>
<div class="mainVisual">
  <?php get_template_part('assets/template-parts/front-page/mainVisual'); ?>
  <h2>自分を<br class="sp">知っている人は<br>美しい</h2>
</div>
<div class="news">
  <div class="news__title">
    <h2>News<span>News</span></h2>
    <p>お知らせ</p>
  </div>
  <?php get_template_part('assets/template-parts/front-page/news'); ?>
</div>
<div class="concept">
  <?php get_template_part('assets/template-parts/front-page/concept'); ?>
</div>
<div class="feature">
  <?php get_template_part('assets/template-parts/front-page/feature'); ?>
</div>

<div class="priceMenuTop">
  <div class="priceMenuTop__title">
    <h2>PRICE MENU<span>Pricemenu</span></h2>
    <p>メニュー料金</p>
  </div>
  <div class="priceMenuTop__menu">
    <?php get_template_part('assets/template-parts/pricemenu'); ?>
  </div>
</div>

<div class="faqTop">
  <div class="faqTop__title">
    <h2>FAQ<span>FAQ</span></h2>
    <p>よくある質問</p>
  </div>
  <?php get_template_part('assets/template-parts/front-page/faq'); ?>
</div>

<?php get_template_part('assets/template-parts/footer/reserveLink'); ?>
<?php get_template_part('assets/template-parts/footer/snsLink'); ?>
<?php get_template_part('assets/template-parts/footer/footerNav'); ?>

<?php get_footer(); ?>