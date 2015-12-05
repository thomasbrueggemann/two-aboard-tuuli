<?php
	
	ini_set("upload_max_size" , "64M");
	ini_set("post_max_size","64M");
	ini_set("max_execution_time", "300");

	// ACTIVATE MENU
	if(function_exists("register_nav_menus")) {
	    register_nav_menus(array(
	        "main-navi" => __("Hauptnavigation")
	    ));
	}

	// ADD THEME SUPPORT
	function custom_theme_setup() 
	{
		add_theme_support("post-thumbnails");
		add_theme_support("title-tag");
	}
	add_action("after_setup_theme", "custom_theme_setup");

	// MAIN MENU WALKER
	class MainMenu_Walker_Nav_Menu extends Walker_Nav_Menu 
	{
		// start level
		public function start_lvl( &$output, $depth = 0, $args = array() ) 
		{	
			if($depth > 0) 
			{
				$output .= "<ul class=\"nav navbar-nav\">";
			}
			else 
			{
				$output .= "<ul class=\"dropdown-menu\">";
			}
		}

		// end level
		public function end_lvl( &$output, $depth = 0, $args = array() ) 
		{
			$output .= "</ul>";
		}

		// start element
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) 
		{
			if($depth == 0)
			{
				if($item->type == "custom") 
				{
					$output .= "<li class=\"dropdown\">";
					$output .= "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
					$output .= $item->title;
					$output .= " <span class=\"caret\"></span></a>";
				}
				else 
				{
					$output .= "<li>";
					$output .= "<a role=\"button\" href=\"" . $item->url . "\">";
					$output .= $item->title;
					$output .= "</a>";
				}
			}
			else
			{
				$atts = array();
				$atts["title"]  = ! empty( $item->attr_title ) ? $item->attr_title : "";
				$atts["target"] = ! empty( $item->target )     ? $item->target     : "";
				$atts["rel"]    = ! empty( $item->xfn )        ? $item->xfn        : "";
				$atts["href"]   = ! empty( $item->url )        ? $item->url        : "";

				$attributes = "";
				foreach( $atts as $attr => $value) 
				{
					if (!empty($value)) 
					{
						$value = ( "href" === $attr ) ? esc_url( $value ) : esc_attr( $value );
						$attributes .= " " . $attr . "=\"" . $value . "\"";
					}
				}

				$output .= "<li><a " . $attributes . " href=\"#\">";
				$output .= $item->title;
				$output .= "</a>";
			}
		}

		// end element
		function end_el( &$output, $item, $depth = 0, $args = array() ) 
		{	
			$output .= "</li>";
		}
	}

	// EXCERPT LENGTH
	function custom_excerpt_length( $length ) 
	{
		return 80;
	}
	add_filter("excerpt_length", "custom_excerpt_length", 999);

	// EXCERPT MORE
	function new_excerpt_more($more) 
	{
		global $post;
		return "<p><a href='" . get_permalink($post->ID) . "'>Read more...</a></p>";
	}
	add_filter("excerpt_more", "new_excerpt_more");

	// REMOVE COMMENTS FROM ADMIN MENU
	function my_admin_menus() 
	{
	    remove_menu_page("edit-comments.php");
	}
	add_action("admin_menu", "my_admin_menus");

	// CHECK FUNCTIONS

	// check page type
	function check_page_type() 
	{
	    global $wp_query;
	    $loop = "notfound";

	    if ( $wp_query->is_page ) {
	        $loop = is_front_page() ? "front" : "page";
	    } elseif ( $wp_query->is_home ) {
	        $loop = "home";
	    } elseif ( $wp_query->is_single ) {
	        $loop = ( $wp_query->is_attachment ) ? "attachment" : "single";
	    } elseif ( $wp_query->is_category ) {
	        $loop = "category";
	    } elseif ( $wp_query->is_tag ) {
	        $loop = "tag";
	    } elseif ( $wp_query->is_tax ) {
	        $loop = "tax";
	    } elseif ( $wp_query->is_archive ) {
	        if ( $wp_query->is_day ) {
	            $loop = "day";
	        } elseif ( $wp_query->is_month ) {
	            $loop = "month";
	        } elseif ( $wp_query->is_year ) {
	            $loop = "year";
	        } elseif ( $wp_query->is_author ) {
	            $loop = "author";
	        } else {
	            $loop = "archive";
	        }
	    } elseif ( $wp_query->is_search ) {
	        $loop = "search";
	    } elseif ( $wp_query->is_404 ) {
	        $loop = "notfound";
	    }

	    return $loop;
	}
?>