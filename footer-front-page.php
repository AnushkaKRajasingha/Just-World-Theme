</div>
</div>
<?php if(is_front_page())  { ?>

<div class="news-col">
  <div class="wrapper">
  <div class="col-3 news">
  <?php if (   is_active_sidebar( 'news-title-area'  )) {  ?>
    	<?php dynamic_sidebar( 'news-title-area' ); ?>
    <?php } ?>
  </div>
    <div class="col-6">
    <?php
	$args=array('category_name' => 'News','orderby' => 'Desc','showposts' => 3);
   query_posts($args);
   if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-3">
      <div class="img">
        <a href="<?php echo get_permalink(get_the_ID())?>"><?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?></a>
      </div>
      <h3><a href="<?php echo get_permalink(get_the_ID())?>"><?php the_title(); ?></a></h3>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</div>
<?php if (   is_active_sidebar( 'background-section4-area'  )) {  ?>
<div class="img-section">
  <?php dynamic_sidebar( 'background-section4-area' ); ?>
</div>
<?php } ?>
<div class="connect-us">
  <div class="wrapper clearfix">
    <?php if ( is_active_sidebar( 'social-area'  )) {  ?>
    <?php dynamic_sidebar( 'social-area' ); ?>
    <?php } ?>
    <div class="cl"></div>
    <div class="subscribe-col">
      <?php dynamic_sidebar('news-latter-area'); ?>
    </div>
  </div>
</div>
<?php }  ?>
<footer>
  <div class="wrapper clearfix">
    <div class="col-3">
      <?php if (   is_active_sidebar( 'footer-area-1'  )) {  ?>
      <?php dynamic_sidebar( 'footer-area-1' ); ?>
      <?php } ?>
    </div>
    <div class="col-3">
      <?php if (   is_active_sidebar( 'footer-area-2'  )) {  ?>
      <?php dynamic_sidebar( 'footer-area-2' ); ?>
      <?php } ?>
    </div>
    <div class="col-3">
      <?php if (   is_active_sidebar( 'footer-area-3'  )) {  ?>
      <?php dynamic_sidebar( 'footer-area-3' ); ?>
      <?php } ?>
    </div>
    <div class="cl"></div>
    <?php if (   is_active_sidebar( 'copyright-area'  )) {  ?>
    <?php dynamic_sidebar( 'copyright-area' ); ?>
    <?php } ?>
  </div>
</footer>
<?php wp_footer(); ?>

<!-- Don't forget analytics --> 

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slicknav.js"></script> 
<script type="text/javascript">



jQuery(document).ready(function(){
jQuery('#menu-nav').slicknav();
});

</script>
</body></html>