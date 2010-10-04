<div id="right">
    
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
    
<ul id="nav">
  <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
  <li><a href="<?php bloginfo('url'); ?>/about/">About</a></li>
  <li><a href="<?php bloginfo('url'); ?>/category/radio-show/">Radio Show</a></li>
  <li><a href="<?php bloginfo('url'); ?>/category/video/">Video</a></li>
  <li><a href="<?php bloginfo('url'); ?>/category/audio/">Audio</a></li>
  <li><a href="<?php bloginfo('url'); ?>/category/photographs/">Photos</a></li>
  <li><a href="<?php bloginfo('url'); ?>/2007/01/09/share_your_stories/">Phone-in</a></li>
  <li><a href="http://familylifebehindbars.ning.com/events">Events</a></li>
  <li><a href="<?php bloginfo('url'); ?>/2008/09/26/videoworkshop/">Free Workshops </a></li>
  <li><a href="<?php bloginfo('url'); ?>/#relatednews">Related News</a></li>
  <li><a href="<?php bloginfo('url'); ?>/links/">Helpful Links</a></li>
</ul>

<?php mc_display_widget(); ?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4288476">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


<ul id="recentcomments">
<?php if (function_exists('get_recent_comments')) { ?>
   <li><h2>Recent Comments</h2>
   <ul><?php get_recent_comments(); ?></ul>
   </li>
<?php } ?>   
</ul>

<h2><a href="<?php bloginfo('url'); ?>/about/">About Family Life Behind Bars</a></h2>
We examine the impact on family relations and dynamics when one or more member of a family is incarcerated. 

<h2><a href="<?php bloginfo('url'); ?>/info/">About Lives in Focus</a></h2>
We use video, audio and photographs to present the voices of those who are rarely given space or time in traditional news media. <a href="<?php bloginfo('url'); ?>/info/">More &raquo;</a>

    <div style="margin-top: 40px;">
<a href="http://www.j-newvoices.org"><img
src="http://www.j-lab.org/NV08winnerbutton.jpg" align="left" width="150"
height="150" border="0"></a>
    </div>
  </div>
</div>

</body>
</html>


