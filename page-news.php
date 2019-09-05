<?php
/*
 * Template Name: page-news
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


<!-- News -->
<section class="l-section l-section--archive">
  <div class="l-container l-container--narrow">
    <div class="m-sectionTitle l-row">
      <h1 class="m-sectionTitle-text">NEWS</h1>
    </div>

    <div class="m-newsList l-row">

      <?php $the_query = new WP_Query( array(
              'paged'     => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
              'posts_per_page' => get_field('itemsNumber'),
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
