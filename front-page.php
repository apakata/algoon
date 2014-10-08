<?php 

/**
 * @author Fathur Rohman <akungbgl@gmail.com> 
 */

get_header(); ?>

<div class="container-fluid movies">
	<div class="row">

		<?php

		$query = new WP_Query( array(
			'posts_per_page'	=> get_option('posts_per_page')
		) );

		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : $query->the_post(); 
		?>

		<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 item">
				
				<?php 
	
				// Get the post featured image
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'large', array(
						'class'	=> 'img-responsive'
					) ); 
				} else {

					// Get first image from content post
					echo "<img src='".algoon_first_img()."' class='img-responsive' alt='' />";
				}
	
				?> 
			<div class="text text-center">
				<?php the_title('<h3>','</h3>'); ?>
			</div>

			<div class="title text-center">
				<a href="<?php esc_url( the_permalink() ); ?>">
					<?php the_title('<h3>','</h3>'); ?>
				</a>
			</div>
		</div>
					
		<?php 
			endwhile;
			
			algoon_paging_nav();
		else :
			// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );
		endif;
		// Special wordpress loop
		// /End
		// 
		wp_reset_postdata(); ?>

	</div>
</div>

<div class="paging">
	<?php ?>
	<ul class="pagination">
		<li class="disabled"><a href="#">Previous</a></li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">Next</a></li>
	</ul>
</div>

<?php get_footer(); ?>