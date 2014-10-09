<?php 

/**
 * @author Fathur Rohman <akungbgl@gmail.com> 
 */

get_header(); ?>

<div class="container-fluid movies">
	<div class="row">

		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$query = new WP_Query( array(
			'posts_per_page'	=> get_option('posts_per_page'),
			'paged'				=> $paged
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
					echo "<img src='".algoon_first_img()."' alt='' />";
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
			
			//algoon_paging_nav();
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
	<?php wp_pagenavi(); ?>
</div>

<?php get_footer(); ?>