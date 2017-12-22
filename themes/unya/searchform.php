	
<div class="search-form-wrapper">	
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  	<div class="search-fieldset">
  		<label id="search-label">
  			<input type="search" class="search-field" placeholder="Search" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
  		</label>
  		<button class="search-submit">
  			<span class="icon-search" aria-hidden="true">
  				<i class="fa fa-search" id="nav-search-button"></i>
  			</span>
  			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
  		</button>
    </div>
  </form>
</div>