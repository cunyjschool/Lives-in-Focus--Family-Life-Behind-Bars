<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/swfobject.js"></script>
<script type="text/javascript">
swfobject.embedSWF("<?php bloginfo('template_directory'); ?>/slideshow.swf", "prison", "400", "250", "9.0.0", "<?php bloginfo('template_directory'); ?>/expressInstall.swf");
</script>

    

<?php wp_head(); ?>
</head>

<body>
<div class="wrap">
  <div id="left">
    <div id="content">
<a href="/prison/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt="Lives in Focus: Family Life Behind Bars" id="logo" /></a>