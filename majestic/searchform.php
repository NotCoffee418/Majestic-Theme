<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Search', 'majestic' ); ?>">
	<button class="search-submit glyphicon glyphicon-search" role="button" type="submit"></button>
</form>
<button class="search-opener glyphicon glyphicon-search hidden" role="button" onclick="handleHeaderSearchForm();"></button>
<!-- /search -->
