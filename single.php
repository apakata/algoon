<?php 

get_header(); 

?>
<div class="container-fluid movies">
	<div class="row">
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
</div>
<?php get_footer(); ?>