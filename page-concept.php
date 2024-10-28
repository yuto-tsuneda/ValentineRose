<?php get_header(); ?>

<div class="consept">
  <div class="consept__header"></div>
  <div class="consept__title">
    <h2>SALON CONCEPT</h2>
  </div>
  <div class="consept__fv">
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


  </div>
</div>

<?php get_footer(); ?>