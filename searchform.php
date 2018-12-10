<?php
/**
 * Template for displaying search forms
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <span class="searchglass">
        <input type="search" 
            class="search-field" 
            onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Search...'"
            placeholder="<?php echo esc_attr_x( 'Search...', 'jdequipment' ); ?>" 
            value="<?php echo get_search_query(); ?>" name="s" />
    </span>
</form>