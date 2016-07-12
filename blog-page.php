<?php
/*
 *  Template Name: Blog Page
 *  Developed By Anushka K R
 *  http://www.anushkar.com
 * */
get_header(); ?>
<div class="content-side">
    <div class="blog-list">
        <?php if (have_posts()) : ?>

        <?php query_posts(array(
            'post_type' => 'post','posts_per_page' => 6,
            'paged' => (  get_query_var('paged') ? get_query_var('paged') : 1 )
        ));
        ?>
        <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
        <?  while ( have_posts() ) : the_post();  ?>
            <div class="list-row">
			<span class="date-col">
			<i><?php the_time('M'); ?></i><?php the_time('j'); ?></span>
                <div class="blog-dec"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><h2><?php the_title(); ?> </h2></a>
                    <?php the_excerpt(); ?>

                    <a href="<?php the_permalink(); ?>" class="read-btn">Read more</a>
                </div>
            </div>


        <?php endwhile; ?>
        <?php include (TEMPLATEPATH . '/inc/nav.php' );
            wp_reset_query();
        ?>
        <?php else : ?>

            <h2>Nothing found</h2>

        <?php endif; ?>
    </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

