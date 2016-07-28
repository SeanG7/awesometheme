<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
  <header class="entry-header">
    <h1><?php the_title(); ?></h1>
    <small>Posted on:
      <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(','); ?> by <?php the_author(); ?>.
    </small>
    <small><?php the_tags(); ?></small>
    <p><?php edit_post_link(); ?></p>
  </header>
  <div class="row">
    <?php if( has_post_thumbnail() ){ ?>
      <div class="col-xs-12 col-sm-4 entry-thumbnail-container">
        <?php the_post_thumbnail('thumbnail'); ?>
      </div>
      <div class="col-xs-12 col-sm-8 text-justify">
        <?php the_content(); ?>
      </div>
    <?php } else { ?>
      <div class="col-xs-12 text-justify">
        <?php the_content(); ?>
      </div>
    <?php } ?>
  </div>
  <div class="comments-section">
    <hr>
    <div class="row">
      <div class="text-left col-xs-6"><?php previous_post_link(); ?></div>
      <div class="text-right col-xs-6"><?php next_post_link(); ?></div>
    </div>
    <hr>
    <?php if(comments_open()){ ?>
      <div class="row">
        <div class="col-xs-12">
          <?php comments_template(); ?>
        </div>
      </div>
    <?php } else {?>
      <h5>Comments are disabled for this post. </h5>
    <?php } ?>
  </div>
</article>
