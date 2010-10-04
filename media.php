      <div id="media">
<?php if(get_post_meta($post->ID, youtube1, true) != "") { ?>  
<object type="application/x-shockwave-flash" data="<?php echo get_post_meta( $post->ID,"youtube1", $single=true ) ; ?>" width="300" height="250"><param name="movie" value="<?php echo get_post_meta( $post->ID,"youtube1", $single=true ) ; ?>" /><param name="autostart" value="true" /><param name="wmode" value="transparent" /></object>
<?php } ?>



<?php query_posts('cat=8&showposts=8'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
        <div class="post">
<span class="byline-date">By <a href="<?php the_author_url(); ?>"><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></a> | <?php the_time('F jS, Y') ?> |  <a href="<?php comments_link(); ?>"><?php comments_number('no responses','1 response','% responses'); ?></a></span>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        
  <?php endwhile; else: ?><p>There are currently no stories.</p>
<?php endif; ?>

      </div>