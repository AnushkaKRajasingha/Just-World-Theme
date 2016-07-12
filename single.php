<?php get_header(); $cat = get_the_category(); ?>
<div class="content-side<?php if($cat[0]->name == 'ambassadors') { echo ' full'; }?>">
			<div class="blog-list">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<!-- <h2><?php the_title(); ?></h2>-->
			<?php // 
				if($cat[0]->name == 'ambassadors') { $class = " blue-back"; } else { $class = "";}
			?>
			<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			
			<?php
				// Output the featured image.
				if ( has_post_thumbnail() ) : ?>
				<div class="amb-img"> <?php
					the_post_thumbnail( 'full' );
				?> </div> <?php 
				endif;
			?>
	
			<div class="entry<?php echo $class; ?>">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php //edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php //comments_template(); ?>

	<?php endwhile; endif; ?>
	</div>
    </div>

<?php if($cat[0]->name == 'ambassadors') { ?>
<?php } else { ?>
	<?php get_sidebar(); ?>
<?php } ?>
<?php get_footer(); ?>