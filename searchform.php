<form method="get" action="<?php echo get_option('home');  ?>">
	<input name="s" class="form-control" type="text" placeholder="Search Box" value="<?php the_search_query(); ?>">
	<input type="submit" style="display:none;" />
</form>