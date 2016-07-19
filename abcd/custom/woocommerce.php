<?php 
/* woocommerce customizations 
*/
	// to remove sku from everywhere....
	add_filter( 'wc_product_sku_enabled', '__return_false' );

	// remove ordering ddl at top of archive page
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

	// hide the category count  
	add_filter( 'woocommerce_subcategory_count_html', 'jk_hide_category_count' );
	function jk_hide_category_count() {
			// No count
	}
	
?>