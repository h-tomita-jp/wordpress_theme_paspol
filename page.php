<?php
/*
Template Name: pas-pol用固定ページテンプレート
*/
?>
<?php get_header(); ?>
<?php get_template_part('mv'); ?>
<div class="l-section l-section--entry">
  <div class="l-container l-container--narrow">
    <div class="m-sectionTitle l-row">
      <h1 class="m-sectionTitle-text"><?php the_title_attribute(); ?></h1>
    </div>

    <!-- Entry Content -->
    <div class="l-row">
      <div class="m-entryContent">
        <?php if(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endif; ?>
      </div>
    </div>
    <!-- /Entry Content -->
  </div>
</div>

<?php get_template_part('backtotop'); ?>
<?php get_footer(); ?>
