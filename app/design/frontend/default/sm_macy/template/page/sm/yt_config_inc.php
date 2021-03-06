<?php
/*------------------------------------------------------------------------
 * Copyright (C) 2009 - 2012 The YouTech JSC. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: The YouTech JSC
 * Websites: http://www.smartaddons.com - http://www.cmsportal.net
-------------------------------------------------------------------------*/
/*--- BEGIN: Theme param config ---*/
$_params = new ThemeParameter();
$_config = array(
	'showcpanel'				=>'1',
	'show_notice'				=>'1',
	'body_font_size'			=>'14px',
	'body_font_family'			=>'Arial',
	'google_font'				=>'Questrial',
	'google_font_targets'		=>'
									#yt_tab_products .yt-tab-navi li a:hover, 
									#yt_tab_products .yt-tab-navi li.active, 
									li.selected a.subhead, 
									.block-layered-nav dt,
									#review-form h4, 
									
									.social h4, 
									.block-newsletter label, 
									.promotions p, 
									#yt_sidenav li a.subhead, 
									
									h1#logo a span, ul.yt-tab-navi li a, 
									ul.yt-tab-navi li.active a, 
									.yt-product-detail .product-name, 
									.product-name a, 
									.popup-box a.link-wishlist,
									 
									.header-nav-container-home ul#nav li.level0 > a, 
									.header-nav-container-home ul#nav li.level1 > a, 
									
									.sm_megamenu_wrapper_vertical_menu ul.sm_megamenu_menu li div div.sm_megamenu_title a, 
									.sm_megamenu_wrapper_horizontal_menu .sm_megamenu_head_item .sm_megamenu_title > span,
									.sm_megamenu_lv1 .sm_megamenu_nodesc .sm_megamenu_title, 
									.sm_megamenu_content h2.product-name a, 
									
									.login-quick .more-actions a, 
									.block-title h3,
									.ytc_background_theme1 .ytc-content-slickslider .content-box .block-title a ,
									
									.block-wrapper.custom-type .block-custom  .block-title,
									.page-title h1,
									.col-left .block-title strong,
									.breadcrumbs li,
									.col-left h1,
									.bottom-footer .block-title,
									.top-footer .title,
									
									.link-wishlist,
									.link-compare,
									.bottomsl1-wrap .block-title,
									.add-review button.button,
									.actions input.submit-repl,
									.block-address .block-title,
									.btn-cart, .btn-contact, .button.register-button,
									#product-options-wrapper.product-options span.label-option,
									.moretext,
									#sm_slideshow .dynamicslideshow-container .custom-title a,
									
									.f-base
								',
	'color'						=>'yellow',
	'menu_styles'				=>'1',
	'body_background_color'		=>'#FFF',
	'body_background_image'		=>'6',
	'body_link_color'			=>'#686868',
	'body_text_color'			=>'#909090',
	'header_background_color'	=>'#292929',
	'header_background_image'	=>'1',	
	'footer_background_color'	=>'#000',
	'footer_background_image'	=>'',
);
if(Mage::getConfig()->getNode('modules/Sm_Macy')){
	$_config	=	Mage::helper('macy/data')->get($attributes);
	// Zend_Debug::dump($_config['google_font_targets']);die;
}
// Zend_Debug::dump($_config);die;
// enable Cpanel
$_params->set('showCpanel',$_config['showcpanel']);//image: Image; text: Text
// show custom box notice
$_params->set('shownotice',$_config['show_notice']);//image: Image; text: Text
// Logo type
$_params->set('logoType','Text');//image: Image; text: Text
// Logo text desx
$_params->set('logoText','Logo Text');
// Slogan text
$_params->set('sloganText','Slogan'); 
// Fontsize
$_params->set('fontsize',$_config['body_font_size']);//value from 1 to 6
// font family
$_params->set('font_name',$_config['body_font_family']);
// Google web font
$_params->set('googleWebFont',$_config['google_font']);
// Google WebFont Targets
$_params->set('googleWebFontTargets',$_config['google_font_targets']);

// Theme color
$_params->set('sitestyle',$_config['color']);//'black','blue','brown','cyan';
// Theme menu
if($_config['menu_styles'] ==1) {	$menu_style='mega';}	
if($_config['menu_styles'] ==2) {	$menu_style='css';}	
if($_config['menu_styles'] ==3) {	$menu_style='split';}	
$_params->set('menustyle',$menu_style);//css:CSS Menu; split: Split Menu; mega: Mega Menu
// Body background-color
$_params->set('bgcolor', $_config['body_background_color']);
// Body background-image
$_params->set('body-bgimage', 'pattern'.$_config['body_background_image']);
// Body link color
$_params->set('linkcolor', $_config['body_link_color']);
// Body text color
$_params->set('textcolor', $_config['body_text_color']);
// Header background-color
$_params->set('header-bgcolor', $_config['header_background_color']);
// Header background-image
$_params->set('header-bgimage', 'hpattern'.$_config['header_background_image']);
// Footer background-color
$_params->set('footer-bgcolor', $_config['footer_background_color']);
// Footer background-image
$_params->set('footer-bgimage', 'fpattern'.$_config['footer_background_image']);

// CategoryID array of displays 2nd image when hover - Catalog list
$_params->set('yt_arraydisplaylist', array('4','5','16','17','18'));
/*--- END: Theme param config ---*/

// Zend_Debug::dump($_params);die;
// Array param for cookie
$paramscookie =array(
				  'direction', 
				  'fontsize',
				  'font_name',
				  'sitestyle',
				  'bgcolor',
				  'body-bgimage',
				  'linkcolor',
				  'textcolor',
				  'header-bgimage',
				  'header-bgcolor',
				  'footer-bgcolor',
				  'footer-bgimage',
				  'menustyle',
				  'shownotice',
				  'googleWebFont'
);
// Global var
global $var_yttheme;
$var_yttheme = new YtTheme('sm_macy', $_params, $paramscookie);
// Zend_Debug::dump($_params);die;
?>


