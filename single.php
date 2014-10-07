<?php 

/**
 * Menampilkan per item di single page
 */
get_header(); ?>

<div class="container-fluid movies">
	<div class="row">
		<div class="col-md-3">
			<?php get_sidebar('left'); ?>
		</div>
		<div class="col-md-6">
			
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();

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