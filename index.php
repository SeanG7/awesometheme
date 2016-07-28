<?php get_header(); ?>
<div class="row">
  <div class="col-xs-12 col-sm-8 page-content">
    <div class="col-xs-12">
    <?php if(have_posts()):
      $count = 0;
      while( have_posts() ): the_post(); ?>
        <?php if($count ==0) {?>
          <div class="col-xs-12 no-col-padding">
        <?php } elseif($count > 0 && $count < 3) {?>
          <div class="col-xs-6 no-col-padding">
        <?php }elseif($count == 3){ ?>
          <div class="col-xs-12 no-col-padding">
        <?php }else{ ?>
          <div class="col-xs-6 no-col-padding">
        <?php }; ?>
        <?php get_template_part('content', 'block'); ?>
        </div>
      <?php $count++; endwhile; ?>
    </div>
      <div class="col-xs-6 text-left">
        <?php next_posts_link('<< Older Posts'); ?>
      </div>
      <div class="col-xs-6 text-right">
        <?php previous_posts_link('Newer Posts >>'); ?>
      </div>
    <?php endif;
    ?>
  </div>
  <div class="col-xs-12 col-sm-4">
  <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
