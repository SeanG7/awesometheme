<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
  <header class="entry-header">
    <h1><?php the_title(); ?></h1>
  </header>
  <div class="row">
    <?php if( has_post_thumbnail() ){ ?>
      <div class="col-xs-12 col-sm-4">
        <?php the_post_thumbnail('thumbnail'); ?>
      </div>
      <div class="col-xs-12 col-sm-8">
        <?php the_content(); ?>
      </div>
    <?php } else { ?>
      <div class="col-xs-12">
        <?php the_content(); ?>
      </div>
    <?php } ?>
  </div>
</article>
