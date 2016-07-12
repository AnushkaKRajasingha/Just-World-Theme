<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" />
<title>
<?php wp_title('&laquo;', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>

<!-- Main WordPress Stylesheet -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slicknav.css" type="text/css" media="screen" />

<!-- WYSIWYG CSS -->

<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wysiwyg.css" type="text/css" media="screen" />-->

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<?php  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="top-header">
  <div class="wrapper">
    <?php if (   is_active_sidebar( 'header-area'  )) {  ?>
    <div class="tittle-get">
      <?php dynamic_sidebar( 'header-area' ); ?>
    </div>
    <?php } ?>
    <div class="top-right">
      <?php if (   is_active_sidebar( 'header-area'  )) {  ?>
      <div class="lagbage-col">
        <?php dynamic_sidebar( 'top-flag-area' ); ?>
      </div>
      <?php } ?>
      <?php if (   is_active_sidebar( 'search-area'  )) {  ?>
      <div class="search-col">
        <?php dynamic_sidebar( 'search-area' ); ?>
      </div>
      <?php  } ?>
      <?php if (   is_active_sidebar( 'login-donate-area'  )) {  ?>
      <?php dynamic_sidebar( 'login-donate-area' ); ?>
      <?php } ?>
    </div>
  </div>
</div>
<header>
  <div class="wrapper clearfix">
    <?php if (   is_active_sidebar( 'header-logo-area'  )) {  ?>
    <div class="logo"> <a href="

<?php echo esc_url( home_url( '/' ) ); ?>">
      <?php dynamic_sidebar( 'header-logo-area' ); ?>
      </a></div>
    <?php } ?>
    <?php $defaults = array(

    'theme_location'  =>'primary-menu' ,

    'menu'            => '',

    'container'       => 'div',

    'container_class' => 'navigation',

    'container_id'    => 'menu-nav',

    'menu_class'      => 'nav',

    'menu_id'         => '',

    'echo'            => true,

    'fallback_cb'     => 'wp_page_menu',

    'before'          => '',

    'after'           => '',

    'link_before'     => '',

    'link_after'      => '',

    'items_wrap'      => '<ul class="nav">%3$s</ul>',

    'depth'           => 0,

    'walker'          =>'' 

);

?>
    <?php wp_nav_menu( $defaults ); ?>
    
    <!--<ul class="nav">

					<li><a href="#">ABOUT</a></li>

					<li><a href="#">AMBASSADORS</a></li>

					<li><a href="#">PROJECTS</a></li>

					<li><a href="#">EVENTS</a></li>

					<li><a href="#">MERCHANDISE</a></li>                    

					</ul>--> 
    
  </div>
</header>
<?php if (is_active_sidebar( 'slider-area'  ) && is_front_page() ) {  ?>
<div class="slider">
  <?php dynamic_sidebar('slider-area'); ?>
  <?php //echo do_shortcode('[recent_post_slider limit="4" design="design-1" category="3" show_author="false" show_category_name="false" show_content="true" show_date="true" dots="true" arrows="true" autoplay="true" autoplay_interval="5000" speed="1000" content_words_limit="20"]'); ?>
  
  <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider.jpg" alt="">--></div>
<?php } ?>
<?php if(!is_front_page()) { ?>
<div class="inner-slider">
  <div class="wrapper">
    <h1>
      <?php 
	  global $post;
	  $tags_line="";
	  $tags_line=get_post_meta($post->ID, "Tag Line",true);
		if(!is_category() && !is_archive() && !is_search())
		{ 
			echo get_the_title(); 
		} 
		elseif(is_category()) 
		{ 
			echo single_cat_title();
		} 
		elseif(is_search())
		{
			echo 'Search Result(s)';
		}
		else
		{	
			the_time('F, Y'); 		
		} ?>
    </h1>
    <?php if($tags_line!="")
	{
		echo '<div class="tagline">'.$tags_line.'</div>';
	}?>
  </div>
</div>
<?php } ?>
<div class="content-box">
<div class="wrapper clearfix">
