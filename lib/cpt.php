<?php 
	
	function create_posttype() {
       	  	
	  	register_post_type( 'werk',
	  	// CPT Options
	  		array(
	  			'labels' => array(
	  				'name'                  => __( 'Werk' ),
	  				'singular_name'         => __( 'Werk' ),
	      		'all_items'             => __( 'Al het werk' ),
	      		'add_new_item'          => __( 'Nieuw werk toevoegen' ),
	      		'new_item'              => __( 'Nieuw werk' ),
	          'add_new'               => __( 'Nieuw werk' ),
	      		'edit_item'             => __( 'Bewerk werk' ),
	      		'update_item'           => __( 'Update werk' ),
	      		'view_item'             => __( 'Bekijk werk' ),
	      		'search_items'          => __( 'Zoek werk' ),
	  			),
	  			'menu_icon'               => 'dashicons-welcome-view-site',
	  			'public'                  => true,
	  			'has_archive'             => true,
	  			'rewrite'                 => array('slug' => 'werk'),
	  			'supports'                => array( 'title', 'editor', 'thumbnail', 'revisions' ),
	  		)
	  	);
		  
	  	register_post_type( 'referenties',
	  	// CPT Options
	  		array(
	  			'labels' => array(
	  				'name'                  => __( 'Referenties' ),
	  				'singular_name'         => __( 'Referentie' ),
	      		'all_items'             => __( 'Alle referenties' ),
	      		'add_new_item'          => __( 'Nieuwe referentie toevoegen' ),
	      		'new_item'              => __( 'Nieuwe referentie' ),
	          'add_new'               => __( 'Nieuwe referentie' ),
	      		'edit_item'             => __( 'Bewerk referentie' ),
	      		'update_item'           => __( 'Update referentie' ),
	      		'view_item'             => __( 'Bekijk referentie' ),
	      		'search_items'          => __( 'Zoek referentie' ),
	  			),
	  			'menu_icon'               => 'dashicons-admin-comments',
	  			'public'                  => true,
	  			'has_archive'             => false,
	  			'supports'                => array( 'title', 'editor', 'thumbnail', 'revisions' ),
	  		)
	  	);
       	  	
	  	register_post_type( 'klanten',
	  	// CPT Options
	  		array(
	  			'labels' => array(
	  				'name'                  => __( 'Klanten' ),
	  				'singular_name'         => __( 'Klant' ),
	      		'all_items'             => __( 'Alle klanten' ),
	      		'add_new_item'          => __( 'Nieuwe klant toevoegen' ),
	      		'new_item'              => __( 'Nieuwe klant' ),
	          'add_new'               => __( 'Nieuwe klant' ),
	      		'edit_item'             => __( 'Bewerk klant' ),
	      		'update_item'           => __( 'Update klant' ),
	      		'view_item'             => __( 'Bekijk klant' ),
	      		'search_items'          => __( 'Zoek klant' ),
	  			),
	  			'menu_icon'               => 'dashicons-businessperson',
	  			'public'                  => true,
	  			'has_archive'             => false,
	  			'supports'                => array( 'title', 'editor', 'thumbnail', 'revisions' ),
	  		)
	  	);
	  	
	  	register_post_type( 'fonts',
	  	// CPT Options
	  		array(
	  			'labels' => array(
	  				'name'                  => __( 'Gratis Fonts' ),
	  				'singular_name'         => __( 'Font' ),
	      		'all_items'             => __( 'Alle fonts' ),
	      		'add_new_item'          => __( 'Nieuw font toevoegen' ),
	      		'new_item'              => __( 'Nieuw font' ),
	          'add_new'               => __( 'Nieuw font' ),
	      		'edit_item'             => __( 'Bewerk font' ),
	      		'update_item'           => __( 'Update font' ),
	      		'view_item'             => __( 'Bekijk font' ),
	      		'search_items'          => __( 'Zoek font' ),
	  			),
	  			'menu_icon'               => 'dashicons-editor-italic',
	  			'public'                  => true,
				  'rewrite'                 => array('slug' => 'freefonts'),
	  			'has_archive'             => false,
	  			'show_in_rest' 						=> true,
	  			'supports'                => array( 'title', 'editor', 'thumbnail', 'revisions' ),
	  		)
	  	);
	  	
		register_post_type( 'pro_fonts',
  		// CPT Options
	  		array(
		  		'labels' => array(
			  		'name'                  => __( 'Fonts' ),
			  		'singular_name'         => __( 'Font' ),
		  		'all_items'             => __( 'Alle fonts' ),
		  		'add_new_item'          => __( 'Nieuw font toevoegen' ),
		  		'new_item'              => __( 'Nieuw font' ),
	  		'add_new'               => __( 'Nieuw font' ),
		  		'edit_item'             => __( 'Bewerk font' ),
		  		'update_item'           => __( 'Update font' ),
		  		'view_item'             => __( 'Bekijk font' ),
		  		'search_items'          => __( 'Zoek font' ),
		  		),
		  		'menu_icon'               => 'dashicons-editor-italic',
		  		'public'                  => true,
		   		'has_archive'             => true,
		   		'rewrite'                 => array('slug' => 'fonts'),
		   		'supports'                => array( 'title', 'editor', 'thumbnail', 'revisions' ),
	  		)
  		);
  
    		
  }

  // Hooking up our function to theme setup
  add_action( 'init', 'create_posttype' ); 
  
	function add_custom_rewrite_rule() {
	
	    // First, try to load up the rewrite rules. We do this just in case
	    // the default permalink structure is being used.
	    if( ($current_rules = get_option('rewrite_rules')) ) {
	
	        // Next, iterate through each custom rule adding a new rule
	        // that replaces 'movies' with 'films' and give it a higher
	        // priority than the existing rule.
	        foreach($current_rules as $key => $val) {
	            if(strpos($key, 'posts') !== false) {
	                add_rewrite_rule(str_ireplace('posts', 'blog', $key), $val, 'top');   
	            } // end if
	        } // end foreach
	
	    } // end if/else
	
	    // ...and we flush the rules
	    flush_rewrite_rules();
	
	} // end add_custom_rewrite_rule
	add_action('init', 'add_custom_rewrite_rule');
?>