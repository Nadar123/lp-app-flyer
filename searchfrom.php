<!-- search -->
<?php $unique_id = esc_attr(uniqid('search-form-')); ?>
<form class="search-form" method="get" action="<?php echo esc_url(home_url()); ?>" role="search">
	<input 
	class="form-control" 
	type="search" 
	name="s" 
	placeholder="<?php _e( 'Search', 'the5ers' ); ?>"  
	value="<?php the_search_query(); ?>">
	<i class="fas fa-search"></i>
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
</form>
<!-- /search -->