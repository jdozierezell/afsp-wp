<form role="search" method="get" class="site-search site-header__search m-col-9" id="site-search" action="<?php echo home_url( '/' ); ?>">
  <label for="search" class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></label>
    <input  type="search" 
            placeholder="<?php echo esc_attr_x( 'What can we help you find?', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" 
            name="s"
            id="search"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  <button type="submit">
    <i class="far fa-search"></i>
  </button>
</form>