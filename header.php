<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php get_template_part('assets/template-parts/meta-date'); ?>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.webp" sizes="180x180">
    <link rel="icon" type="image/webp" href="<?php echo get_template_directory_uri(); ?>/assets/images/android-touch-icon.webp" sizes="192x192">
    <link rel="stylesheet" href="https://use.typekit.net/lao4ker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3bdd652edf.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
  </head>
  <body>
  <header>
    <?php get_template_part('assets/template-parts/top-nav/nav');?>
  </header>