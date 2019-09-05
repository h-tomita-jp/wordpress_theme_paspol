<?php get_header(); ?>

<!-- Main Visual -->
<div class="l-mainVisual">
    <!-- Product Single -->
    <div class="m-mainVisual m-mainVisual--product-single js-mainVisual">
      <!-- <div class="m-mainVisual-image js-mainVisual-image"> -->
      <div class="m-mainVisual-image">
        <img src="<?php the_field('main-visual'); ?>" />
      </div>
      <!-- overlay -->
      <div class="m-mainVisual-overlay"></div>
    </div>
    <!-- keyvisual -->
    <div class="key_visual_url"></div>
</div>

<!-- Entry -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="l-section l-section--entry">
  <div class="l-container l-container--narrow single-narrow">
    <div class="m-entryHeader l-row">
      <h1 class="m-entryHeader-title"><?php the_title(); ?></h1>
      <div class="m-entryHeader-info">
        <span class="m-entryHeader-date"><time pubdate="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></span>
        <span class="m-entryHeader-category">Category: <?php the_category(', '); ?></span>
      </div>
    </div>

    <!-- Entry Content -->
    <div class="l-row">
      <div class="m-entryContent">
        <?php the_content('Read more'); ?>
      </div>
    </div>
    <!-- Entry Share -->
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
        <div class="fb-like" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
      </div>
      <!-- Twitter -->
      <div class="m-entryShare-item">
        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-count="vertical">ツイート</a>
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
        <a href="https://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
        <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
      </div>
    </div>
    <!-- Entry Pager -->
    <div class="m-entryPager l-row">
      <?php if (get_previous_post(true)):?>
      <a href="<?php echo get_permalink( get_previous_post(true)->ID ); ?>" rel="prev">
        <div class="m-entryPager-prev"><span class="m-button m-button--entryPrev">PREV</span></div>
      </a>
      <?php endif; ?>
      <?php if (get_next_post(true)):?>
      <a href="<?php echo get_permalink( get_next_post(true)->ID ); ?>" rel="next">
        <div class="m-entryPager-next"><span class="m-button m-button--entryNext">NEXT</span></div>
      </a>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
  
<!-- Latest Entry -->
<div class="l-section l-section--latestEntry">
  <div class="l-container l-container--narrow">
    <div class="m-sectionTitle l-row">
      <h1 class="m-sectionTitle-text">LATEST NEWS</h1>
    </div>

    <div class="m-newsList l-row">

      <?php query_posts('category_name=info&posts_per_page=3');?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="m-newsList-item">
        <a href="<?php the_permalink() ?>" class="m-newsList-item-link l-row">
          <div class="m-newsList-item-image l-grid-5">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="m-newsList-item-text l-grid-7">
            <h2 class="m-newsList-item-title"><?php the_title(); ?></h2>
            <p class="m-newsList-item-date"><time pubdate="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
            <p class="m-newsList-item-description"><?php echo wp_trim_words( get_the_content(), 250, '...' ); ?></p>
          </div>
        </a>
      </article>
      <?php endwhile; endif; ?>

    </div>
  </div>
</div>

<?php get_template_part('backtotop'); ?>
<?php get_footer(); ?>
