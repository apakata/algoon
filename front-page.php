<?php 

/**
 * @author Fathur Rohman <akungbgl@gmail.com> 
 */

get_header(); ?>

<div class="container-fluid movies">
	<div class="row">
		<?php for ($i=0; $i < 18; $i++) { ?>
		<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 item">
			<a href="#">
				<img src="images/box.png" class="img-responsive">
			</a>
		</div>
		<?php }?>
	</div>
</div>

<div class="paging">
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