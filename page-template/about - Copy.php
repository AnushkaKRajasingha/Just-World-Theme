<?php 

/* Template Name: With Right Sidebar */
get_header(); ?>
 
 
 <!-- <div class="inner-slider">
			<div class="wrapper">
			<h1>Blog</h1>
			</div>
		</div>   -->
	
		
		<div class="content-box">
		<div class="wrapper clearfix">
		
		<div class="content-side">
			<div class="blog-list">
            <?php // Display blog posts on any page @ http://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        
			<div class="list-row">
			<span class="date-col">
			<i><?php the_time('M'); ?></i><?php the_time('j'); ?></span>
		<div class="blog-dec">			<h2><?php the_title(); ?> </h2>
		<?php the_excerpt(); ?>
		
		<a href="<?php the_permalink(); ?>" class="read-btn">Readmore</a>
		</div>
		
		
		</div>
		<!--<div class="list-row">
			<span class="date-col">
			<i>FEB</i>16</span>
		<div class="blog-dec">			<h2>Contrary to popular belief, Lorem Ipsum </h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 			1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
		
		<a href="#" class="read-btn">Readmore</a>
		</div>
		
		
		</div>
		<div class="list-row">
			<span class="date-col">
			<i>FEB</i>16</span>
		<div class="blog-dec">			<h2>Contrary to popular belief, Lorem Ipsum </h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 			1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
		
		<a href="#" class="read-btn">Readmore</a>
		</div>
		
		
		</div>
		<div class="list-row">
			<span class="date-col">
			<i>FEB</i>16</span>
		<div class="blog-dec">			<h2>Contrary to popular belief, Lorem Ipsum </h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 			1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
		
		<a href="#" class="read-btn">Readmore</a>
		</div>
		
		
		</div>-->
		<!--<div class="list-row">
			<span class="date-col">
			<i>FEB</i>16</span>
		<div class="blog-dec">			<h2>Contrary to popular belief, Lorem Ipsum </h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 			1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
		
		<a href="#" class="read-btn">Readmore</a>
		</div>
		
		
		</div>-->
		
        <?php endwhile; ?>
			</div>
		</div>
		
		<?php get_sidebar(); ?>

		
		
		</div>
		</div>
 
 
<?php get_footer(); ?>