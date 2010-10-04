<?php get_header(); ?>
  <div class="post clearfix">
    <div id="topstories">
      <div id="slideshow">
        <div id="prison"></div>
      </div>

      <div class="title clearfix">
        <h3>Top Stories</h3> <a href="<?php bloginfo('url'); ?>/category/top-stories/feed/"><img src="<?php bloginfo('template_directory'); ?>/img/icons/feed.png" class="feed" alt="Subscribe to Top Stories" /></a>        
      </div>

      <ul class="headline">
        <?php query_posts('category_name=top-stories&showposts=8'); ?>
      	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <span class="byline-date">By <a href="<?php the_author_url(); ?>"><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></a> | <?php the_time('F jS, Y') ?> | <a href="<?php comments_link(); ?>"><?php comments_number('no responses','1 response','% responses'); ?></a></span>
            </li>  
          <?php endwhile; else: ?><p>There are currently no stories.</p>
        <?php endif; ?>
      </ul>
    </div>
    
    <div id="community">     
      <div class="title clearfix twitter">
        <h3><a href="http://twitter.com/prisonfamilies">On Twitter</a></h3> 
      </div>
      
      <?php
if ( function_exists('SimplePieWP') ) {
	echo SimplePieWP('http://feeds.feedburner.com/twitter/prisonfamilies', array(
		'items' => 4,
		'cache_duration' => 1800,
		'truncate_feed_title' => 0,
		'truncate_item_parent_title' => 0,
		'date_format' => 'j M Y, g:i a'
	));
}
?>
          
      <ul class="headline">
        <li><a href="http://www.facebook.com/group.php?v=wall&gid=37924049685" target='_blank'>Join the community</a> & <a href="http://twitter.com/prisonfamilies">follow us on Twitter</a></li>
      </ul>         
        
      
      <div class="title clearfix">
        <h3>Columns</h3> <a href="<?php bloginfo('url'); ?>/category/columns/feed/"><img src="<?php bloginfo('template_directory'); ?>/img/icons/feed.png" class="feed" alt="Subscribe to Columns" /></a>        
      </div>
        
      <ul class="headline">
        <?php query_posts('category_name=makebas-column&showposts=2'); ?>
      	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      	  <?php endwhile; else: ?><p>There are currently no stories.</p>
          <?php endif; ?> 
      </ul>

      <div class="title clearfix">
        <h3>Audio</h3> <a href="<?php bloginfo('url'); ?>/category/audio/feed/"><img src="<?php bloginfo('template_directory'); ?>/img/icons/feed.png" class="feed" alt="Subscribe to Top Stories" /></a>
      </div>

      <ul class="headline">
        <?php query_posts('category_name=audio&showposts=2'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; else: ?><p>There are currently no stories.</p>
          <?php endif; ?>
      </ul>
    </div>
    
    <div id="audio">
      <div class="title clearfix">
        <h3>Related News</h3><a name="relatednews"></a>
      </div>

      <script type="text/javascript" src="http://feeds.delicious.com/v2/js/FamilyLifeBehindBars?title=&count=9&sort=date"></script>
    </div>
    <div id="video">
      <div class="title clearfix">
        <h3>Video</h3> <a href="<?php bloginfo('url'); ?>/category/video/feed/"><img src="<?php bloginfo('template_directory'); ?>/img/icons/feed.png" class="feed" alt="Subscribe to Video" /></a>
      </div>	
      <embed src="http://blip.tv/play/AwGN8QE" type="application/x-shockwave-flash" width="450" height="350" allowscriptaccess="always" allowfullscreen="true"></embed>
    	
    <?php query_posts('category_name=video&showposts=3'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="headline clearfix" style="margin-top: 20px;">
          <span class="byline-date">By <a href="<?php the_author_url(); ?>"><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></a> | <?php the_time('F jS, Y') ?></span>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
      <?php endwhile; else: ?><p>There are currently no stories.</p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>      
<?php get_sidebar(); ?>
