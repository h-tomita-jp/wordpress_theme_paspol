<?php
/*
 * Template Name: page-product
 */
?>

<?php get_header(); ?>

<!-- Main Visual -->
<div class="l-mainVisual">
  <!-- Page -->
  <div class="m-mainVisual js-mainVisual">
    <h1 class="m-siteLogo_smp">
      <a href="<?php  echo site_url(); ?>/">PAS-POL -旅のモノづくりブランド-｜TABIPPO</a>
    </h1>
    <div class="m-mainVisual-image js-mainVisual-image">
      <img src="<?php the_field('main-visual'); ?>" />
    </div>

    <!-- overlay -->
    <div class="m-mainVisual-overlay"></div>
  </div>

</div>


<!-- Product -->
<section class="l-section l-section--archive">
  <div class="l-container l-container--narrow">
    <div class="m-sectionTitle l-row">
      <h1 class="m-sectionTitle-text">PRODUCT</h1>
    </div>
    <div class="m-productList l-row">

      <?php $the_query = new WP_Query( array(
              'paged'     => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
	          'posts_per_page' => get_field('itemsNumber'),
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

    </div>
  </div>
</section>

<!-- pagination -->
<div class="l-pager">
  <div class="m-pager">
    <div class='wp-pagenavi'>
      <?php
      $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
      the_pagination();
      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<?php get_template_part('backtotop'); ?>
<?php get_footer(); ?>
