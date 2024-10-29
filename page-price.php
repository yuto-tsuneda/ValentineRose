<?php get_header(); ?>

<div class="price">
  <div class="price__header"></div>
    <div class="price__title">
      <h2>PRICE MENU</h2>
    </div>
    <div class="price__fv">
      <div class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price-menu_top-pc.webp" alt="プライストトップ画像PC">
      </div>
      <div class="sp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price-menu_top-sp.webp" alt="プライストップ画像SP">
      </div>
  </div>
  <div class="price__menuNav">
    <div class="bled">
      <?php if(function_exists('bcn_display'))
        {
          bcn_display();
        }?>
    </div>
    <div class="price__menuNav__flex">
        <div class="price__menuNav__left">
          <p>バレンタインローズは、<br class="sp">
          お客様のなりたい姿に合わせて<br class="sp">
          選択いただけるよう<br class="sp">
          「トライアルコース」<br class="sp">
          「減毛コース」<br class="sp">
          「脱毛コース」<br class="sp">
          の3種類のコースをご用意しています。 <br>
          <br class="sp">
          トライアルコースは<br class="sp">
          脱毛効果を実感したい方に、<br class="sp">
          減毛コースは<br class="sp">
          体毛を薄くしたい・減らしたい方に、<br class="sp">
          脱毛コースは<br class="sp">
          施術箇所の体毛をすべて脱毛したい方に<br class="sp">
          おすすめのコースです。</p>
        </div>
        <div class="price__menuNav__right">
          <?php get_template_part('assets/template-parts/pricemenu');?>
        </div>
    </div>
  </div>
  <div class="price__menuContent pc">
      <div class="price__menuContent__body">
        <h3>Body</h3>
        <h4>Sパーツ</h4>
        <p>おでこ・ほほ・口周り・あご下の首・<br class="sp">
        うなじ・両脇・手の指&甲・ <br class="sp">
        足の指&甲・へそ周り・乳輪周り</p>
        <table>
          <tbody>
            <tr>
              <th></th>
              <th>トライアルコース(3回)</th>
              <th>減毛コース(6回)</th>
              <th>脱毛コース(12回)</th>
            </tr>
            <tr>
              <th>1箇所</th>
              <th>7,600 円</th>
              <th>6,500 円</th>
              <th>4,900 円</th>
            </tr>
          </tbody>
        </table>
        <p>※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
        <h4>Mパーツ</h4>
        <p>お腹全体・胸全体（乳輪周りを含む）・お尻・両腕上（肘含む）・ 両腕下・V（ハイジニーナ）</p>
        <table>
          <tbody>
            <tr>
              <th></th>
              <th>トライアルコース(3回)</th>
              <th>減毛コース(6回)</th>
              <th>脱毛コース(12回)</th>
            </tr>
            <tr>
              <th>1箇所</th>
              <th>14,900 円</th>
              <th>13,200 円</th>
              <th>9,900 円</th>
            </tr>
          </tbody>
        </table>
        <p>※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
        <h4>Lパーツ</h4>
        <p>背中全体・両膝上（膝含む）・両膝下</p>
        <table>
          <tbody>
            <tr>
              <th></th>
              <th>トライアルコース(3回)</th>
              <th>減毛コース(6回)</th>
              <th>脱毛コース(12回)</th>
            </tr>
            <tr>
              <th>1箇所</th>
              <th>22,800 円</th>
              <th>19,800 円</th>
              <th>16,500 円</th>
            </tr>
          </tbody>
        </table>
        <p>※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
      </div>
      <div class="price__menuContent__vline">
        <h3>V-line</h3>
        <table>
          <tbody>
          <tr>
              <th></th>
              <th>トライアルコース(3回)</th>
              <th>減毛コース(6回)</th>
              <th>脱毛コース(12回)</th>
            </tr>
            <tr>
              <th>1箇所</th>
              <th>7,600 円</th>
              <th>6,500 円</th>
              <th>4,900 円</th>
            </tr>
            <tr>
              <th>2箇所</th>
              <th>14,900 円</th>
              <th>13,200 円</th>
              <th>9,900 円</th>
            </tr>
            <tr>
              <th>3箇所</th>
              <th>22,800 円</th>
              <th>19,800 円</th>
              <th>16,500 円</th>
            </tr>
          </tbody>
        </table>
        <p>※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
      </div>
      <div class="price__menuContent__set">
        <h3>Set</h3>
        <table>
          <tbody>
          <tr>
              <th></th>
              <th>トライアルコース(3回)</th>
              <th>減毛コース(6回)</th>
              <th>脱毛コース(12回)</th>
            </tr>
            <tr>
              <th>顔全体</th>
              <th>7,600 円</th>
              <th>6,500 円</th>
              <th>4,900 円</th>
            </tr>
            <tr>
              <th>腕全体</th>
              <th>14,900 円</th>
              <th>13,200 円</th>
              <th>9,900 円</th>
            </tr>
            <tr>
              <th>足全体</th>
              <th>22,800 円</th>
              <th>19,800 円</th>
              <th>16,500 円</th>
            </tr>
            <tr>
              <th>全身脱毛</th>
              <th>27,200 円</th>
              <th>24,800 円</th>
              <th>20,900 円</th>
            </tr>
          </tbody>
        </table>
        <p class="price__menuContent__lastp">※ 表の料金は、すべて税込表記で、施術一回あたりの金額です。</p>
      </div>
  </div>
  <div class="price__menuContentSp sp tablet">
      <div class="price__menuContentSp__body">
        <h3>Body</h3>
        <h4>Sパーツ</h4>
        <p>おでこ・ほほ・口周り・あご下の首・<br class="sp">
        うなじ・両脇・手の指&甲・ <br class="sp">
        足の指&甲・へそ周り・乳輪周り</p>
        <p>1箇所</p>
        <table>
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>7,600 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>6,500 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>4,900 円</th>
            </tr>
          </tbody>
        </table>
        <p>※ 表の料金は、すべて税込表記で、<br class="sp">施術一回あたりの金額です。</p>
        <h4>Mパーツ</h4>
        <p>お腹全体・胸全体（乳輪周りを含む）・<br class="sp">お尻・両腕上（肘含む）・<br class="sp">両腕下・V（ハイジニーナ）</p>
        <p>1箇所</p>
        <table>
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>14,900 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>13,200 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>9,900 円</th>
            </tr>
          </tbody>
        </table>
        <p>※ 表の料金は、すべて税込表記で、<br class="sp">施術一回あたりの金額です。</p>
        <h4>Lパーツ</h4>
        <p>背中全体・両膝上（膝含む）・両膝下</p>
        <p>1箇所</p>
        <table>
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>22,800 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>19,800 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>16,500 円</th>
            </tr>
          </tbody>
        </table>
        <p>※ 表の料金は、すべて税込表記で、<br class="sp">施術一回あたりの金額です。</p>
      </div>
      <div class="price__menuContentSp__vline">
        <h3>V-line</h3>
        <p>1箇所</p>
        <table>
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>7,600 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>6,500 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>4,900 円</th>
            </tr>
          </tbody>
        </table>
        <p>2箇所</p>
        <table>
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>14,900 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>13,200 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>9,900 円</th>
            </tr>
          </tbody>
        </table>
        <p>3箇所</p>
        <table>
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>22,800 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>19,800 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>16,500 円</th>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="price__menuContentSp__set">
        <h3>Set</h3>
        <p>顔全体</p>
        <table>
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>7,600 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>6,500 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>4,900 円</th>
            </tr>
          </tbody>
        </table>
        <p>腕全体</p>
        <table>
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>14,900 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>13,200 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>9,900 円</th>
            </tr>
          </tbody>
        </table>
        <p>足全体</p>
        <table>
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>22,800 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>19,800 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>16,500 円</th>
            </tr>
          </tbody>
        </table>
        <p>全身脱毛</p>
        <table class="price__menuContentSp__lastTable">
          <tbody>
            <tr>
              <th>施術回数</th>
              <th>料金</th>
            </tr>
            <tr>
              <th>トライアルコース(3回)</th>
              <th>22,800 円</th>
            </tr>
            <tr>
              <th>減毛コース(6回)</th>
              <th>19,800 円</th>
            </tr>
            <tr>
              <th>脱毛コース(12回)</th>
              <th>16,500 円</th>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
  <div class="price__custom">
    <div class="price__custom__flex">
        <div class="price__custom__left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price-menu_custom.webp" alt="カスタムプライス画像">
        </div>
        <div class="price__custom__right">
          <h3>Custom</h3>
          <p>施術の効果は、脱毛箇所や毛質・毛量、毛周期などによって大きく左右されるため、画一的な施術ではお客様に合わせた最適な脱毛サービスを提供することはできません。<br>
          バレンタインローズでは、お客様に施術の効果をしっかりと感じていただくことができるよう、カウンセリング内容や脱毛箇所、毛質・毛量などを考慮し、オーダーメイドの脱毛メニューを作成しています。<br>
          よりお求めやすい価格で脱毛サービスを提供することができるケースもございますので、オーダーメイドの脱毛メニューをご希望の方はお気軽にご相談ください。</p>
        </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>