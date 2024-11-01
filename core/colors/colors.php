<?php
/**
* Part of Plugin: W2O Football Fans Admin Color Schemes
* http://www.w2orange.com/w2o-football-fans-admin-color-schemes.html
*/

/**
* List of colors and related info registered in this plugin.
*/
$colors = array(	
	/* Club Wise */
	'w2o_club_acmilan' => (object) array (
		'caption'=>'A.C. Milan', 
		'path'=> 'club/acmilan',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.acmilan.com',
		'screen_colors'=> array( '#B43A47', '#B43A47', '#1D161D', '#1D161D' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_club_arsenal' => (object) array (
		'caption'=>'Arsenal F.C.', 
		'path'=> 'club/arsenal',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.arsenal.com',
		'screen_colors'=> array( '#DB0007', '#DB0007', '#023474', '#023474' ),
		'icon_colors'=> array( 'base' => '#fff1e9', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_club_barcelona' => (object) array (
		'caption'=>'FC Barcelona', 
		'path'=> 'club/barcelona',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.fcbarcelona.com',
		'screen_colors'=> array( '#A50044', '#A50044', '#0F2A56', '#0F2A56' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_club_bayernmunich' => (object) array (
		'caption'=>'FC Bayern Munich', 
		'path'=> 'club/bayernmunich',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.fcbayern.de/en/',
		'screen_colors'=> array( '#E21F4E', '#E21F4E', '#2E6ABD', '#2E6ABD' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_club_borussiadortmund' => (object) array (
		'caption'=>'Borussia Dortmund', 
		'path'=> 'club/borussiadortmund',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.bvb.de',
		'screen_colors'=> array( '#EBDB04', '#EBDB04', '#21241D', '#21241D' ),
		'icon_colors'=> array( 'base' => '#fff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_club_chelsea' => (object) array (
		'caption'=>'Chelsea F.C.', 
		'path'=> 'club/chelseafc',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.chelseafc.com',
		'screen_colors'=> array( '#034694', '#034694', '#3886DE', '#3886DE' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_club_juventus_away' => (object) array (
		'caption'=>'Juventus F.C. (Away)', 
		'path'=> 'club/juventus_away',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.juventus.com',
		'screen_colors'=> array( '#FDABB1', '#FDABB1', '#bf7c81', '#bf7c81' ),
		'icon_colors'=> array( 'base' => '#fff', 'focus' => '#fbc1c5', 'current' => '#fbc1c5' )
	),	
	'w2o_club_liverpool' => (object) array (
		'caption'=>'Liverpool F.C.', 
		'path'=> 'club/liverpool',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.liverpoolfc.com',
		'screen_colors'=> array( '#E31B23', '#E31B23', '#00A185', '#00A185' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),	
	'w2o_club_manchestercity' => (object) array (
		'caption'=>'Manchester City F.C.', 
		'path'=> 'club/manchestercity',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.mcfc.co.uk',
		'screen_colors'=> array( '#5CBFEB', '#5CBFEB', '#3A7895', '#3A7895' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_club_parissaintgermain' => (object) array (
		'caption'=>'Paris Saint-Germain F.C.', 
		'path'=> 'club/parissaintgermain',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.psg.fr',
		'screen_colors'=> array( '#002952', '#002952', '#1D2733', '#1D2733' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),	
	'w2o_club_realmadrid_away' => (object) array (
		'caption'=>'Real Madrid F.C. (Away)', 
		'path'=> 'club/realmadrid_away',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.fcbarcelona.com',
		'screen_colors'=> array( '#7D7774', '#7D7774', '#4B4E55', '#4B4E55' ),
		'icon_colors'=> array( 'base' => '#ede8e6', 'focus' => '#fff', 'current' => '#fff' )
	),			
	'w2o_club_manchesterunited' => (object) array (
		'caption' => 'Manchester United', 
		'path'=> 'club/manchesterunited',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.manutd.com',
		'screen_colors'=> array( '#DB2118', '#DB2118', '#fbc705', '#fbc705' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	
	/* Country Wise */
	'w2o_country_agrentina' => (object) array (
		'caption' => 'Agrentina', 
		'path'=> 'country/agrentina',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.afa.org.ar',
		'screen_colors'=> array( '#48C0DD', '#48C0DD', '#fff', '#fff' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_belgium' => (object) array (
		'caption' => 'Belgium', 
		'path'=> 'country/belgium',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.belgianfootball.be/en',
		'screen_colors'=> array( '#C7141C', '#C7141C', '#29282D', '#29282D' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_brazil' => (object) array (
		'caption' => 'Brazil', 
		'path'=> 'country/brazil',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.cbf.com.br',
		'screen_colors'=> array( '#EFC53F', '#EFC53F', '#054883', '#054883' ),
		'icon_colors'=> array( 'base' => '#fffbed', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_chile' => (object) array (
		'caption' => 'Chile', 
		'path'=> 'country/chile',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.anfp.cl',
		'screen_colors'=> array( '#DE0E07', '#DE0E07', '#0039A6', '#0039A6' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_england_away' => (object) array (
		'caption' => 'England (Away)', 
		'path'=> 'country/england_away',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.thefa.com',
		'screen_colors'=> array( '#E32328', '#E32328', '#002A5B', '#002A5B' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_france' => (object) array (
		'caption' => 'France', 
		'path'=> 'country/france',
		'logo'=> 'logo.png',
		'official_site'=> 'https://www.fff.fr',
		'screen_colors'=> array( '#033B76', '#033B76', '#fff', '#fff' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_germany_away' => (object) array (
		'caption' => 'Germany (Away)', 
		'path'=> 'country/germany_away',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.dfb.de/en/start/',
		'screen_colors'=> array( '#d72027', '#d72027', '#000000', '#000000' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_italy' => (object) array (
		'caption' => 'Italy', 
		'path'=> 'country/italy',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.figc.it/index_en.shtml',
		'screen_colors'=> array( '#1742AA', '#1742AA', '#fff', '#fff' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_mexico' => (object) array (
		'caption' => 'Mexico', 
		'path'=> 'country/mexico',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.femexfut.org.mx',
		'screen_colors'=> array( '#006D55', '#006D55', '#AE231D', '#AE231D' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_nepal' => (object) array (
		'caption' => 'Nepal', 
		'path'=> 'country/nepal',
		'logo'=> 'logo.png',
		'official_site'=> 'http://the-anfa.com',
		'screen_colors'=> array( '#E72E3C', '#E72E3C', '#27336D', '#27336D' ),
		'icon_colors'=> array( 'base' => '#ffdfe3', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_netherlands' => (object) array (
		'caption' => 'Netherlands (Dutch)', 
		'path'=> 'country/netherlands',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.knvb.nl/english',
		'screen_colors'=> array( '#F36C21', '#F36C21', '#2B1312', '#2B1312' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_paraguay' => (object) array (
		'caption' => 'Paraguay', 
		'path'=> 'country/paraguay',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.apf.org.py',
		'screen_colors'=> array( '#8D2836', '#8D2836', '#fff', '#fff' ),
		'icon_colors'=> array( 'base' => '#ffdfe3', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_portugal' => (object) array (
		'caption' => 'Portugal', 
		'path'=> 'country/portugal',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.fpf.pt/en-us/',
		'screen_colors'=> array( '#CD2427', '#CD2427', '#922426', '#922426' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_spain' => (object) array (
		'caption' => 'Spain', 
		'path'=> 'country/spain',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.sefutbol.com/en',
		'screen_colors'=> array( '#BF1717', '#BF1717', '#1C3392', '#1C3392' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
	'w2o_country_uruguay' => (object) array (
		'caption' => 'Uruguay', 
		'path'=> 'country/uruguay',
		'logo'=> 'logo.png',
		'official_site'=> 'http://www.auf.org.uy',
		'screen_colors'=> array( '#7B9BD8', '#7B9BD8', '#000', '#000' ),
		'icon_colors'=> array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
	),
);

$w2o_fbfn_acs_color_list = (object) $colors;
?>