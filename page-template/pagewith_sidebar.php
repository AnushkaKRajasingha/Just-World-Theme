<?php 

/* Template Name: With Right Sidebar */
get_header(); ?>
 
 
 <!-- <div class="inner-slider">
			<div class="wrapper">
			<h1>Blog</h1>
			</div>
		</div>   -->
		
		
		
		
		
		
		<div class="content-side">
			<div class="blog-list">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<!--  <h2><?php //the_title(); ?></h2>  -->

			<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php //edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php //comments_template(); ?>

		<?php endwhile; endif; ?>
		
			</div>
		</div>
		
		<?php get_sidebar(); ?>

		
		
		
 
<?php get_footer(); ?>