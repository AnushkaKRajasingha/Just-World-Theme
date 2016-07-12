<div class="right-side">
		
		<div class="right-col post-col">
		
		<?php if (   is_active_sidebar( 'right-sidebar-justworld'  )) {  ?>
        <?php dynamic_sidebar('right-sidebar-justworld'); ?>
        <?php } ?>
			<!--<ul>
            
<li><a href="#">Lorem Ipsum is simply dummy </a></li>
<li><a href="#">Lorem  simply dummy </a></li>
<li><a href="#">Lorem simply dummy </a></li>
<li><a href="#">Lorem Ipsum is  dummy </a></li>
<li><a href="#">Ipsum is simply dummy </a></li>
<li><a href="#">Lorem Ipsum is simply dummy </a></li>
<li><a href="#">Lorem  simply dummy </a></li>
<li><a href="#">Lorem simply dummy </a></li>
</ul>-->
		
		
		</div>
		
		<div class="right-col post-col">
        <?php if (   is_active_sidebar( 'right-sidebar-newslatter'  )) {  ?>
		<?php dynamic_sidebar('right-sidebar-newslatter'); ?>
        <?php } ?>
		
		</div>
		
         <div class="right-col post-col nobg">
        <?php if (   is_active_sidebar( 'right-sidebar-map'  )) {  ?>
		<?php dynamic_sidebar('right-sidebar-map'); ?>
        <?php } ?>
		
		</div>
        
        <div class="right-col post-col nobg">
        <?php if (   is_active_sidebar( 'right-sidebar-video'  )) {  ?>
		<?php dynamic_sidebar('right-sidebar-video'); ?>
        <?php } ?>
		
		</div>
        
		<div class="right-col post-col">
        <?php if (   is_active_sidebar( 'right-sidebar-category'  )) {  ?>
		<?php dynamic_sidebar('right-sidebar-category'); ?>
        <?php } ?>
		
		</div>
        
       
        
		</div>