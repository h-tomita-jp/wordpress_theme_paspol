<!-- Main Visual -->
<div class="l-mainVisual">
      <!-- Page -->
    <div class="m-mainVisual js-mainVisual">
      <h1 class="m-siteLogo_smp">
        <a href="https://pas-pol.jp">PAS-POL -旅のモノづくりブランド-｜TABIPPO</a>
      </h1>
      <div class="m-mainVisual-image js-mainVisual-image">
		<?php if( get_field('main-visual') ): ?>
		    <img src="<?php the_field('main-visual'); ?>" />
		<?php endif; ?>
      </div>

      <!-- overlay -->
      <div class="m-mainVisual-overlay"></div>
    </div>

  </div>
