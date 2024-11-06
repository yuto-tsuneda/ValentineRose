<?php get_header(); ?>

<div class="reserve">
  <div class="reserve__header"></div>
  <div class="reserve__title">
    <h2>NEWS</h2>
  </div>
  <div class="reserve__fv">
    <div class="pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reserve_top-pc.webp" alt="ニューストップ画像PC">
    </div>
    <div class="sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reserve_top-sp.webp" alt="ニューストップ画像SP">
    </div>
  </div>
  <div class="bled">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
  <div class="reserve__dl">
    <div class="reserve__dl__left">
      <h3>未成年のお客様は必ずお読みください</h3>
      <p>脱毛箇所を問わず、未成年のお客様が施術を受けるためには、<br class="sp">保護者の同意が必要です。<br>
        「未成年契約同意書」をダウンロードし、保護者にご記入いただいた上で初回ご来店時に持参ください。</p>
    </div>
    <div class="reserve__dl__right">
      <p>未成年契約同意書</p>
      <a href="<?php echo get_template_directory_uri(); ?>/VALENTINE ROSE minors consent form.pdf" download="VALENTINE ROSE minors consent form.pdf"><i class="fa-solid fa-file-arrow-down"></i>Download</a>
    </div>
  </div>
  <div class="reserve__tell">
    <div class="reserve__tell__left">
      <h3>TEL</h3>
      <p>サービス・料金の質問や無料体験のご予約などを希望の方は、ご希望の店舗にお問い合わせください。<br>
      なお、施術中は、お電話に対応することができない可能性がありますので、あらためてお電話いただくか、メールフォームからお問い合わせください。</p>
    </div>
    <div class="reserve__tell__right">
      <a href="tel:0123456789">01-2345-6789</a>
      <p>9:00～22:00 定休日なし</p>
    </div>
  </div>
  <div class="reserve__contact">
    <div class="reserve__contact__title">
      <div class="reserve__contact__left">
        <h3>MAIL FORM</h3>
        <p>脱毛の無料体験や施術のご予約などをご希望の方は、<br>
        以下のフォームに必要事項を入力の上でお問い合わせください。<br>
        なお、当日または翌日のご予約を希望の方は、お電話で問い合わせください。</p>
      </div>
      <div class="reserve__contact__right">
        <div class="reserve__contact__rightFlex">
          <div class="reserve__contact__rightFlex--wrap">
            <p>Step 01</p>
            <h4>内容入力</h4>
          </div>
          <div class="reserve__contact__rightFlex--wrap just">
            <p>Step 02</p>
            <h4>内容確認</h4>
          </div>
          <div class="reserve__contact__rightFlex--wrap">
            <p>Step 03</p>
            <h4>送信完了</h4>
          </div>
        </div>
      </div>
    </div>

    <?php echo apply_shortcodes('[contact-form-7 id="5834a98" title="お問い合わせ(確認画面)"]'); ?>

  </div>
</div>

<?php get_footer(); ?>