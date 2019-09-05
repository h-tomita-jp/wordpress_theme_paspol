<?php get_header(); ?>

<!-- Main Visual -->
<div class="l-mainVisual">
    <!-- Product Single -->
    <div class="m-mainVisual m-mainVisual--product-single js-mainVisual">
      <!-- <div class="m-mainVisual-image js-mainVisual-image"> -->
      <div class="m-mainVisual-image">
        <img src="<?php the_field('product-main-visual'); ?>" />
      </div>
      <!-- overlay -->
      <div class="m-mainVisual-overlay"></div>
    </div>
    <!-- keyvisual -->
    <div class="key_visual_url"></div>
</div>

<!-- Concept -->
<section class="l-section l-section--concept">
  <div class="l-container l-container--narrow">
    <div class="m-concept l-row">
      <h1 class="m-concept-title"><?php the_field('concept-title'); ?></h1>
      <div class="m-concept-read">
        <p><?php the_field('concept-read'); ?></p>
      </div>
    </div>
  </div>
</section>


<!-- Product Detail -->
<?php
for ($i=1; $i<=3; $i++) :
  if( get_field('productDetail-'.$i)['productDetail-item-title'] ):
    $productDetail = get_field('productDetail-'.$i);
?>
<section class="l-section l-section--productDetail">
  <div class="l-container l-container--full">
    <div class="m-productDetail l-row">
      <div class="m-productDetail-item">
        <div class="m-productDetail-item-image" style="background-image:url(<?php echo $productDetail['productDetail-item-image'] ?>)">
          <h1 class="m-productDetail-item-title">
            <span><?php echo $productDetail['productDetail-item-title'] ?></span>
          </h1>
        </div>

        <!-- Product Description -->
        <div class="m-productDescription l-container l-container--narrow">

          <!-- Product Description Item -->
          <?php
          for ($j=1; $j<=3; $j++) :
            if( $productDetail['productDescription-'.$j]['productDescription-item-title'] ):
              $productDescription = $productDetail['productDescription-'.$j];
          ?>
          <div class="m-productDescription-item">
            <div class="m-productDescription-item-image">
              <img src="<?php echo $productDescription['productDescription-item-image'] ?>">
            </div>
            <div class="m-productDescription-item-text">
              <h2 class="m-productDescription-item-title"><?php echo $productDescription['productDescription-item-title'] ?></h2>
              <p class="m-productDescription-item-description"><?php echo $productDescription['productDescription-item-description'] ?></p>
            </div>
          </div>
          <?php
            endif;
          endfor;
          ?>
          <!-- /Product Description Item -->

        </div><!-- /Product Description -->

        <div class="m-productDetail-item-button">
          <a href="<?php the_field('button--buy'); ?>" target="_blank" class="m-button m-button--buy">購入はこちら</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  endif;
endfor;
?>
<!-- /Product Detail -->


<!-- Product Point -->
<?php
if( get_field('productPoint')['productPoint-title'] ):
?>
<section class="l-section l-section--productPoint">
  <div class="l-container l-container--narrow">
    <div class="m-productPoint l-row">
      <h1 class="m-productPoint-title"><?php echo get_field('productPoint')['productPoint-title'] ?></h1>
      <div class="m-productPoint-list">

        <!-- productPoint-item -->
        <?php
        for ($j=1; $j<=6; $j++) :
          if( get_field('productPoint')['productPoint-item-'.$j]['productPoint-item-title'] ):
            $productPointItem = get_field('productPoint')['productPoint-item-'.$j];
        ?>
        <div class="m-productPoint-item">
          <div class="m-productPoint-item-image">
            <img src="<?php echo $productPointItem['productPoint-item-image'] ?>">
          </div>
          <h2 class="m-productPoint-item-title"><?php echo $productPointItem['productPoint-item-title'] ?></h2>
        </div>
        <?php
          endif;
        endfor;
        ?>
        <!-- productPoint-item -->

      </div>

      <div class="m-productPoint-button">
        <a href="<?php the_field('button--buy'); ?>" target="_blank" class="m-button m-button--buy">購入はこちら</a>
      </div>
    </div>
  </div>
</section>
<?php
endif;
?>
<!-- /Product Point -->


<!-- Product Photo -->
<section class="l-section l-section--productPhoto">
  <div class="l-container l-container--full">
    <div class="m-productPhoto">
      <div class="m-productPhoto-image">
        <img src="<?php the_field('productPhoto-image'); ?>">
      </div>
    </div>
  </div>
</section>
<!-- /Product Photo -->

<!-- Product Share -->
<section class="l-section l-section--productShare">
  <div class="l-container l-container--narrow">
    <div class="m-entryShare l-row">
      <!-- Facebook -->
      <div class="m-entryShare-item m-entryShare-item--facebook">
        <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-share-button" data-layout="box_count"></div>
      </div>
      <!-- Twitter -->
      <div class="m-entryShare-item">
        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-count="vertical" data-text="<?php the_field('twitter_data_text'); ?>" data-hashtags="tabippo">ツイート</a>
        <script>
          ! function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
              p = /^http:/.test(d.location) ? 'http' : 'https';
            if (!d.getElementById(id)) {
              js = d.createElement(s);
              js.id = id;
              js.src = p + '://platform.twitter.com/widgets.js';
              fjs.parentNode.insertBefore(js, fjs);
            }
          }(document, 'script', 'twitter-wjs');
        </script>
      </div>
      <!-- Hatena -->
      <div class="m-entryShare-item">
        <a href="https://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img
            src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
        <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
      </div>
    </div>
  </div>
</section>
<!-- /Product Share -->


<?php get_template_part('backtotop'); ?>
<?php get_footer(); ?>
