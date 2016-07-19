<?php 
/* languages customizations 
*/
	if ( !function_exists('eai_change_theme_text') ){
		function eai_change_theme_text( $translated_text, $text, $domain ) {
			  if ( is_singular() ) { 
			    switch ( $translated_text ) {

		            case 'Category' :
		                $translated_text = __( '',  $domain  );
		                break;
		            case 'Add Comment':
		            	$translated_text = __( 'Add Condolence',  $domain  );
		            	break;

		           	case 'Post Comment':
		            	$translated_text = __( 'Post Condolence',  $domain  );
		            	break;
		            case 'Comment':
		            	$translated_text = __( 'Condolence',  $domain  );
		            	break;
		            case 'Comments':
		            	$translated_text = __( 'Condolences',  $domain  );
		            	break;
		             /*case 'Share this post:':
		            	$translated_text = __('Share', ' $domain );
		            	break; */
		        }
		     } 

	    	return $translated_text;
		}
		add_filter( 'gettext', 'eai_change_theme_text', 20, 3 );
	}

?>