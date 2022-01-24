<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input 
	class="search-input" 
	type="search" 
	name="" 
	placeholder="<?php _e( 'Search', 'udemy' ); ?>"  
	value="<?php the_search_query(); ?>">
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
</form>
<!-- /search -->