<?php
/**
 * Class for W2O Football Fans Admin Color Schemes
 * https://wordpress.org/plugins/w2o-football-fans-admin-color-schemes/
*/
require(dirname(__FILE__).'/colors/colors.php');
class W2O_FBFN_ACS {
	
	function __construct() {
		add_action( 'admin_init' , array( $this, 'w2o_fbfn_acs_add_colors' ) );
		add_action('admin_head', array( $this, 'w2o_fbfn_acs_head' ), 999);				
		add_action( 'admin_menu', array( $this, 'w2o_fbfn_acs_add_logo' ), 2000 );
		add_action( 'admin_menu', array( $this, 'w2o_fbfn_site_redirect' ), 2001 );
	}
	
	/* Return plugin URL (SSL pref compliant) (with trailing slash) */
	function w2o_fbfn_acs_pluginurl() {
		return plugin_dir_url( dirname(__FILE__) );
	}
	
	/* Add color schemes */	
	function w2o_fbfn_acs_add_colors() {		
		global $w2o_fbfn_acs_color_list;
		$plugin = $this->w2o_fbfn_acs_pluginurl()."core/colors/";
		
		$suffix = is_rtl() ? '-rtl' : '';
		if ($w2o_fbfn_acs_color_list) {
			foreach ($w2o_fbfn_acs_color_list as $color=>$info) {
				$color_scheme = $color;
				$color_caption = $info->caption;
				$color_path = $info->path;				
				
				$screen_colors_arr = $info->screen_colors;	
				$icon_colors_arr = $info->icon_colors;
			
				wp_admin_css_color(
					$color_scheme, __( $color_caption, 'admin_schemes' ),
					$plugin.$color_path."/colors$suffix.css",
					$screen_colors_arr,
					$icon_colors_arr
				);
			
			}
		}
		
	}
	// Insert inside admin section's <head>. Triggers by the admin_head hook.
	function w2o_fbfn_acs_head () {							
		$this->w2o_fbfn_acs_css();
	}
	
	/* Add CSS file(s) */
	function w2o_fbfn_acs_css() {
		$plugin = $this->w2o_fbfn_acs_pluginurl()."core/";
		$p = $plugin."colors/";
		// query params
		$query = array(
			'v' => W2O_FBFN_ACS_VER,
			'p' => wp_make_link_relative( $p )
		);
		$query = http_build_query($query);
	
		echo "<link rel='stylesheet' href='{$plugin}w2o_fbfn_acs.css.php?$query' type='text/css' media='all' w2ofbfnacs='shishir.adhikari' />\n
		";	
	}
	
	/* Add football team/club batch/logo */
	function w2o_fbfn_acs_add_logo() {
		$w2o_fbfn_acs_icon = $this->w2o_fbfn_acs_pluginurl()."core/colors/icon.png";
		$w2o_fbfn_acs_menu_title = '<div class="w2o_fbfn_acs_main">';
		$w2o_fbfn_acs_menu_title .= '<div class="w2o_fbfn_acs_logo"></div>';
		$w2o_fbfn_acs_menu_title .= '<div class="w2o_fbfn_acs_text"><w2o w2ofbfnacs="shishir.adhikari">W2O ACS (for football fans)</w2o></div>';
		$w2o_fbfn_acs_menu_title .= '</div>';		
		add_menu_page('W2O Football Fans Color Schemes', $w2o_fbfn_acs_menu_title, 'manage_options', 'w2o_fbfn_acs_wp', '$this->w2o_fbfn_site_redirect', $w2o_fbfn_acs_icon, '2016' );
	}

	/* Setting the link/redirection of the football team/club's logo to their respective official website */
	function w2o_fbfn_site_redirect() {
		global $w2o_fbfn_acs_color_list;	
		$user = wp_get_current_user();
		$current_color = get_user_option('admin_color', $user->ID);
		
		/* converting OBJECT into ARRAY */
		$w2o_fbfn_acs_color_list_arr = json_decode(json_encode($w2o_fbfn_acs_color_list), true);
		
		if( !empty($w2o_fbfn_acs_color_list_arr[$current_color]) && isset($w2o_fbfn_acs_color_list_arr[$current_color]) ) {			
			/* official website of the football team or club */
			$external_redirect_url = $w2o_fbfn_acs_color_list->$current_color->official_site;
		} else {
			/* official website of the plugin */
			$external_redirect_url = 'http://itrsnepal.com';
		}
			
		$redirect_url = get_admin_url().'admin.php?page=w2o_fbfn_acs_wp';
		$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://';
		$pageURL = $protocol.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		
		if ($pageURL == $redirect_url) {	
			wp_redirect( $external_redirect_url, 302 );
		}
	}
}
?>