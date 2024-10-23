<?php
  $title = get_the_title() .'|'. get_bloginfo('name');
  $description = '';

  if(is_front_page()){
    $title = 'VALENTINE ROSE｜女性専用の全国チェーン脱毛サロン';
    $description = '全国に店舗を構える女性向け脱毛サロンVALENTINE ROSEは、VIO、脚、腕、背中などの全身の脱毛に対応しています。痛みが少なく短時間で高い脱毛効果を得ることができる脱毛サービスをリーズナブルな価格で提供しています。';
  }elseif(is_page('concept')){
    $title = 'サロンコンセプト｜VALENTINE ROSE';
    $description = '全国に店舗を構える女性向け脱毛サロンVALENTINE ROSEは、「洗練されたワンランク上の女性を目指すために」というモットーで、お客様一人ひとりに合わせたオーダーメイドのプランを提供し、お客様の女性磨きを全力でサポートいたします。';
  }elseif(is_page('price')){
    $title = 'メニュー料金｜VALENTINE ROSE';
    $description = '全国に店舗を構える女性向け脱毛サロンVALENTINE ROSEのメニュー料金ページです。VIO、脚、腕、背中などの全身の脱毛に対応しており、痛みが少なく短期間で高い脱毛効果を得ることができる脱毛サービスをリーズナブルな価格で提供しています。';
  }elseif(is_page('reserve')){
    $title = 'ご予約・お問い合わせ｜VALENTINE ROSE';
    $description = '全国に店舗を構える女性向け脱毛サロンVALENTINE ROSEのご予約・お問い合わせページです。VIO、脚、腕、背中などの全身の脱毛に対応しており、痛みが少なく短期間で高い脱毛効果を得ることができる脱毛サービスをリーズナブルな価格で提供しています。ご予約はこちらから。';
  }elseif(is_archive('news')){
    $title = 'ニュース一覧｜VALENTINE ROSE';
    $description = '全国に店舗を構える女性向け脱毛サロンVALENTINE ROSEのニュースページです。VALENTINE ROSEのお知らせや脱毛に関するコラムなど、VALENTINE ROSEの最新情報をお届けします。';
  }elseif(is_404()){
    $title = '404';
    $description = 'お探しのページは存在しません。';
  }
?>

<title><?php echo $title; ?></title>
<meta name="descroption" content="<?php echo $description; ?>">

<link rel="canonical" href="<?php
    if (is_single()) {
      echo get_permalink();
    }elseif(is_page()) {
      echo get_permalink();
    }elseif (is_archive()) {
      echo home_url('news');
    }elseif (is_category()) {
      echo get_category_link(get_queried_object_id());
    }else{
      echo home_url();
    }
    ?>">

<meta property="og:url" content="<?php
    if(is_single()) {
      echo get_permalink();
    }elseif(is_page()) {
      echo get_permalink();
    }elseif(is_archive()) {
      echo home_url('news');
    }elseif(is_category()) {
      echo get_category_link(get_queried_object_id());
    }else {
      echo home_url();
    }
    ?>"/>

<meta property="og:type" content="<?php 
  if(is_front_page()){
    echo 'website';
  }elseif(is_archive()){
    echo 'blog';
  }elseif(is_category()){
    echo 'blog';
  }else{
    echo 'article';
  }
?>">

<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/OPG-image.webp" />