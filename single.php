<?php 

/**
 * Menampilkan per item di single page
 */
get_header(); ?>

<div class="container-fluid single">
	<div class="row">
		<div class="col-md-3">
			<?php get_sidebar('left'); ?>
		</div>
		<div class="col-md-6 content">
			
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;

			the_content();

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
		
		?>

		</div>
		<div class="col-md-3">
			<?php get_sidebar('right'); ?>
		</div>
	</div>
</div>
<?php 

get_footer(); ?>