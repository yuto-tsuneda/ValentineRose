<div class="spNav">
  <div class="spNav__top">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="サイトロゴ">
    <button class="spNav__top__button">
      <p>メニュー</p>
      <div class="spNav__top__hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
  </div>
  <div class="navContent">
    <ul>
      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
      <li><a href="<?php echo home_url('/concept'); ?>">SALON CONCEPT</a></li>
      <li><a href="<?php echo home_url('/price'); ?>">PRICE MENU</a></li>
      <li><a href="<?php echo get_post_type_archive_link('salons'); ?>">SALONS</a></li>
      <li><a href="<?php echo get_post_type_archive_link('news'); ?>">NEWS</a></li>
      <li><a href="<?php echo home_url('/reserve'); ?>">RESERVE</a></li>
    </ul>
  </div>
</div>

