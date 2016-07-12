</div>
</div>
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