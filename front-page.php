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

<?php get_footer(); ?>