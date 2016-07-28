<?php
/*
  Template Name: Home page
*/
 get_header(); ?>
<div class="row">
  <div class="col-xs-12 page-content">

    <!-- Carousel -->
      <div id="seans-carousel" class="carousel slide" data-ride="carousel">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <!--generated slides -->
          <?php
              $count = 0;
              $bullets = '';
              $args = array(
                'type' => 'post',
                'posts_per_page' => 3,
              );
              $last_blog_post = new WP_Query($args);
              if( $last_blog_post->have_posts()):


                while($last_blog_post->have_posts() ): $last_blog_post->the_post(); ?>

                    <div class="item <?php if($count==0){echo 'active';}?>">
                    <?php the_post_thumbnail('full'); ?>
                    <div class="carousel-caption">
                      <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
                      <small><?php the_category(', '); ?></small>
                    </div>
                  </div>

                  <?php $bullets .= '<li data-target="#seans-carousel" data-slide-to="'.$count.'" class="';?>
                  <?php if($count == 0) {
                    $bullets .= 'active';
                  }?>
                  <?php $bullets .= '"></li>'; ?>

                <?php $count++; endwhile;

              endif;
              wp_reset_postdata();


          ?>
          <!-- end generated slides -->
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php echo $bullets; ?>
          </ol>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#seans-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#seans-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!-- Carousel END -->
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-8 page-content">
    <?php if(have_posts()):

      while( have_posts() ): the_post(); ?>

        <?php get_template_part('content', 'staticpage'); ?>

      <?php endwhile;
    endif;
    ?>

    <!--<?php
      $args = array(
        'type' => 'post',
        'posts_per_page' => 2,
        'offset' => 1
      );
      $last_blog_post = new WP_Query($args);
      if( $last_blog_post->have_posts()):

        while($last_blog_post->have_posts() ): $last_blog_post->the_post(); ?>

          <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;

      endif;
      wp_reset_postdata();

    ?>
    <hr>
    <h1>Work</h1>
    <?php

      $last_blog_post = new WP_Query('type=post&posts_per_page=-1&cat=7');
      if( $last_blog_post->have_posts()):

        while($last_blog_post->have_posts() ): $last_blog_post->the_post(); ?>

          <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;

      endif;
      wp_reset_postdata();

    ?>-->


  </div>
  <div class="col-xs-12 col-sm-4">
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
