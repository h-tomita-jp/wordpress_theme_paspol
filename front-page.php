<?php get_header(); ?>
<!-- Main Visual -->
<div class="l-mainVisual">
  <div class="m-mainVisual js-mainVisual js-mainVisual-container">
    <div class="m-mainVisual-image js-mainVisual-image" style="position: relative; z-index: 0;">
      <div class="flexslider" style="width: 100%; border: none;">
        <ul class="slides">
          <li><img src="<?php the_field('main-visual1'); ?>"></li>
          <li><img src="<?php the_field('main-visual2'); ?>"></li>
          <li><img src="<?php the_field('main-visual3'); ?>"></li>
          <li><img src="<?php the_field('main-visual4'); ?>"></li>
          <li><img src="<?php the_field('main-visual5'); ?>"></li>
        </ul>
      </div>
    </div>
    <div class="m-mainVisual-logo">PAS-POL -旅のモノづくりブランド-｜TABIPPO</div>
    <div class="m-mainVisual-arrow"></div>
    <!-- overlay -->
    <div class="m-mainVisual-overlay"></div>
  </div>
</div>
<!-- Concept -->
<section class="l-section l-section--concept">
  <div class="l-container l-container--narrow">
    <div class="m-concept l-row">
      <h1 class="m-concept-title m-concept--index"><?php the_title_attribute(); ?></h1>

      <div class="m-concept-read m-concept-read--index">
        <?php if(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php wp_reset_postdata(); ?>
<!-- Product -->
<section class="l-section l-section--product">
  <div class="l-container l-container--narrow">
    <div class="m-sectionTitle l-row">
      <h1 class="m-sectionTitle-text">PRODUCT</h1>
      <div class="m-sectionTitle-button">
        <a href="<?php  echo site_url(); ?>/product/" class="m-button m-button--more">MORE</a>
      </div>
    </div>

    <div class="m-productList l-row">

      <?php $the_query = new WP_Query( array(
              'paged'     => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
	          'posts_per_page' => get_field('product-number'),
	          'post_type' => 'product',
	          'meta_key' => 'list-order',
	          'orderby' => 'meta_value',
	          'order' => 'DESC'
      ) ); ?>
      <?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <article class="m-productList-item l-grid-4">
        <a class="m-productList-item-link" href="<?php the_permalink(); ?>">
          <div class="m-productList-item-image">
            <?php the_post_thumbnail(); ?>
          </div>
          <h2 class="m-productList-item-title"><?php the_title(); ?></h2>
          <p class="m-productList-item-description"></p>
        </a>
      </article>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    </div>
  </div>
</section>
<!-- News -->
<section class="l-section l-section--news">
  <div class="l-container l-container--narrow">
    <div class="m-sectionTitle l-row">
      <h1 class="m-sectionTitle-text">NEWS</h1>
      <div class="m-sectionTitle-button">
        <a href="<?php  echo site_url(); ?>/news/" class="m-button m-button--more">MORE</a>
      </div>
    </div>

    <div class="m-newsList l-row">

      <?php $the_query = new WP_Query( array(
              'paged'     => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
              'posts_per_page' => get_field('news-number'),
              'category_name' => 'info',
      ) ); ?>
      <?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    </div>      
    <div class="m-newsList-more l-grid-12">
      <a href="<?php  echo site_url(); ?>/news/" class="m-button m-button--more">MORE</a>
    </div>
  </div>
</section>
<?php get_footer(); ?>
