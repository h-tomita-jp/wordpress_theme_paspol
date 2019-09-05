<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- flexslider CSS -->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/css/flexslider.css">

    <!-- Original CSS -->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/css/style.css">

    <link rel="shortcut icon" type="image/x-icon" href="<?php  echo get_template_directory_uri(); ?>/favicon.ico">
    <?php wp_head(); ?>
	  
  </head>
  <body>
    <!-- Header -->
    <header class="l-header">
      <h1 class="m-siteLogo">
        <a href="<?php  echo site_url(); ?>/">PAS-POL -旅のモノづくりブランド-｜TABIPPO</a>
      </h1>

      <nav class="m-navigation js-navigation">
        <ul itemscope="" itemtype="https://schema.org/SiteNavigationElement">
          <li><a href="<?php  echo site_url(); ?>/">TOP</a></li>
          <li><a href="<?php  echo site_url(); ?>/product/">PRODUCT</a></li>
          <li><a href="<?php  echo site_url(); ?>/about/">ABOUT</a></li>
          <li><a href="<?php  echo site_url(); ?>/news/">NEWS</a></li>
          <li><a href="<?php  echo site_url(); ?>/contact/">CONTACT</a></li>
        </ul>
        <div class="m-navigationToggle js-navigationToggle">MENU</div>
      </nav>
    </header>
