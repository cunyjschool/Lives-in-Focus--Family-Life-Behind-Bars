<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">
  <?php edit_post_link('Edit this entry', '<p>', '</p>'); ?>


<h2><?php the_title(); ?></h2>

      <div id="byline">By <a href="<?php the_author_url(); ?>"><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></a></div>

        <div class="entry">
    
	<?php if(get_post_meta($post->ID, video, true) != "") { ?>
          <div id="videos">
            <div id="video-embed">
	  <?php echo get_post_meta( $post->ID,"video", $single=true ) ; ?>
        <?php if(get_post_meta($post->ID, video_caption, true) != "") { ?>
              <div class="video-caption"><?php echo get_post_meta( $post->ID,"video_caption", $single=true ) ; ?></div>
		<?php } ?>
            </div>
        
            <div id="video-embed">
	  <?php echo get_post_meta( $post->ID,"video2", $single=true ) ; ?>
        <?php if(get_post_meta($post->ID, video2_caption, true) != "") { ?>
              <div class="video-caption"><?php echo get_post_meta( $post->ID,"video2_caption", $single=true ) ; ?></div>
		<?php } ?>
            </div>
          </div>
	<?php } ?>

      
			
	<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

          <div class="postmetadata alt">
<ul>
  <li id="timestamp">Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> <?php edit_post_link('Edit this entry.','',''); ?></li>
  <li id="cat">Filed under <?php the_category(', ') ?></li>
  <li id="tags">Tagged with <?php the_tags( '', ', ', ''); ?></li>
  <li id="rss">Follow responses to this story through the <?php post_comments_feed_link('RSS 2.0 feed'); ?></li>
</ul>
          </div>
        


		</div>
	  </div>

	<?php comments_template(); ?>
	<?php endwhile; else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>   
<?php get_footer(); ?>   
<?php get_sidebar(); ?>

