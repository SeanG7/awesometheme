<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <title><?php echo get_bloginfo('name'); echo wp_title('-'); ?></title>
    <meta name="description" content="<?php echo get_bloginfo('description');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
  </head>
  <?php
  $awesome_classes = array('main-page', 'show-header');
  ?>

  <body <?php body_class($awesome_classes);?>>
    <div class="container main-body">
    <div class="row">
      <div class="col-xs-12">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><?php echo get_bloginfo('name'); ?></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php wp_nav_menu(array(
                  'theme_location'=>'primary',
                  'container'=> false,
                  'menu_class' => 'nav navbar-nav navbar-right',
                  'walker' => new Walker_Nav_Primary()
                )); ?>
            </div>
            <div class="search-form-container">
              <?php get_search_form(); ?>
            </div>
          </div>
          </div><!-- /.container-fluid -->
        </nav><!-- end of nav -->

        <div class="col-xs-12">

      </div>

    </div>
    <div class="row text-center">
      <div class="col-xs-12">
        <header style="background-image: url(<?php header_image(); ?>); height: <?php echo get_custom_header()->height;?>px;">
          <div class="header-content" style="color: #<?php echo get_header_textcolor(); ?>;">
            <h1 class="header-title"><?php echo get_bloginfo('name');?></h1>
            <h3 class="header-subtitle"><?php echo get_bloginfo('description');?></h3>
          </div>
        </header>
      </div>
    </div>

    <!--hello git! -->
