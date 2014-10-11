<?php

/**
 * Archive by date
 */

get_header(); ?>

<div class="container-fluid archive">
	<div class="row">
		<div class="col-md-3">
			<?php get_sidebar('left'); ?>
		</div>
		<div class="col-md-6 content">
			
			<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="col-md-12">
				
				<?php
				
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
				
				?>
				</div>
			<?php
		endwhile;
		
		?>
			</div>
		</div>
		<div class="col-md-3">
			<?php get_sidebar('right'); ?>
		</div>
	</div>
</div>

<?php get_footer();