<?php
function make_link_relative( $link ) {
	return preg_replace('|https?://[^/]+(/.*)|i', '$1', $link );
}

function w2o_fbfn_acs_true_if_set( $param ) {
	return ( ( isset( $_GET[ $param ] ) && $_GET[ $param ] == 1 ) ? true : false );
}

$plugin	= isset( $_GET['p'] ) ? make_link_relative( $_GET['p'] ) : '';

header("Content-type:text/css; charset:UTF-8");
require(dirname(__FILE__).'/colors/colors.php');
?>
/* W2O_FBFN_ACS Style */

#adminmenu li#toplevel_page_w2o_fbfn_acs_wp {
	display:none !important;
}
<?php
if ($w2o_fbfn_acs_color_list) {
	foreach ($w2o_fbfn_acs_color_list as $color=>$info) {
?>
.admin-color-<?php echo $color;?> #adminmenu li#toplevel_page_w2o_fbfn_acs_wp {
	display:block !important;
}
.admin-color-<?php echo $color;?> #adminmenu li#toplevel_page_w2o_fbfn_acs_wp div.wp-menu-image {
	display:none !important;
}
.admin-color-<?php echo $color;?>.folded #adminmenu li#toplevel_page_w2o_fbfn_acs_wp div.wp-menu-image {
	display:block !important;
}

.admin-color-<?php echo $color;?> #adminmenu li#toplevel_page_w2o_fbfn_acs_wp div.wp-menu-image img, .admin-color-<?php echo $color;?>.folded #adminmenu li#toplevel_page_w2o_fbfn_acs_wp div.wp-menu-image img {
	display:none !important;
}

.admin-color-<?php echo $color;?> #adminmenu li#toplevel_page_w2o_fbfn_acs_wp div.w2o_fbfn_acs_logo {
    background-image:url("<?php echo ($plugin.$info->path.'/'.$info->logo);?>") !important;
    background-repeat: no-repeat !important;
    background-size: 150px 150px !important;
    background-position: center !important;
    height:150px !important;
}

.admin-color-<?php echo $color;?> #adminmenu li#toplevel_page_w2o_fbfn_acs_wp div.w2o_fbfn_acs_text {
   display:none;
   margin-top:10px; /*margin added in case the text under football team logo/batch needs to be shown */
   text-align:center !important;
}

.admin-color-<?php echo $color;?>.folded #adminmenu li#toplevel_page_w2o_fbfn_acs_wp div.wp-menu-image {
    background-image:url("<?php echo ($plugin.$info->path.'/'.$info->logo);?>") !important;
    background-repeat: no-repeat !important;
    background-size: 20px 20px !important;
    background-position: center !important;
}
.admin-color-<?php echo $color;?>.auto-fold #adminmenu li#toplevel_page_w2o_fbfn_acs_wp div.wp-menu-name {
	margin-left:0 !important;
}

.admin-color-<?php echo $color;?>.auto-fold #adminmenu li#toplevel_page_w2o_fbfn_acs_wp.menu-top:hover, .admin-color-<?php echo $color;?>.auto-fold #adminmenu li#toplevel_page_w2o_fbfn_acs_wp a.menu-top:hover, .admin-color-<?php echo $color;?>.auto-fold #adminmenu li#toplevel_page_w2o_fbfn_acs_wp > a.menu-top:focus {
	background-color:transparent !important;
}
<?php
	} //end of for each
}
?>
/* W2O_FBFN_ACS Style Ends */