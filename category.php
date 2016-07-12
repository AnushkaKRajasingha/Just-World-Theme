<?php get_header(); ?>
	
		<div class="content-side">
			<div class="blog-list">
            <?php // Display blog posts on any page @ http://m0n.co/l
		/* $temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); */

while ( have_posts() ) : the_post();
?>
        
			<div class="list-row">
			<span class="date-col">
			<i><?php the_time('M'); ?></i><?php the_time('j'); ?></span>
		<div class="blog-dec">			<h2><?php the_title(); ?> </h2>
		<?php the_excerpt(); ?>
		
		<a href="<?php the_permalink(); ?>" class="read-btn">Read more</a>
		</div>
	</div>
		
		
        <?php endwhile; ?>
			</div>
		</div>
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>
