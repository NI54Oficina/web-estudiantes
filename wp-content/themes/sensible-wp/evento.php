<?php
/**
Template Name: Page - Evento
 *
 * @package sensible-wp
 */

get_header(); ?>

	<header class="entry-header">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
	</header><!-- .entry-header --> 

	<div class="grid grid-pad">
	<section id="primary" class="content-area col-9-12">
		<main id="main" class="site-main evento-page" role="main">


		<?php 
		$page_num = $paged;
		query_posts('showposts=6&paged='.$page_num.'&post_type=post');
		if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php sensiblewp_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
		</main><!-- #main --> 
	</section><!-- #primary -->
     <?php get_sidebar(); ?>
	</div>
    
<?php get_footer(); ?>
