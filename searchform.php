<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input id="edu_search" type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Vyhledat &hellip;', 'placeholder', 'wp-bootstrap-starter' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Vyhledávání článků:', 'label', 'wp-bootstrap-starter' ); ?>">
    </label>
    <button class="btn btn-primary">Vyhledat</button>
   <!-- <input type="submit" class="search-submit btn btn-default" value="<?php echo esc_attr_x( 'Search', 'submit button', 'wp-bootstrap-starter' ); ?>">
    --> 
</form>



