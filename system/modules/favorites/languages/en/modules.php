<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2012
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Language
 * @license    LGPL
 * @filesource
 */


/**
 * Modules
 */

// Favorite module
$GLOBALS['TL_LANG']['MOD']['favorites']  = 'Favorites'; 
$GLOBALS['TL_LANG']['MOD']['home']    	= array('Home', 'Please select any one of the modules using the above menu.<br><br>Create pages, add articles, edit content and maintain your Contao CMS website.');


// Manage Favorites Module
//$GLOBALS['TL_LANG']['MOD']['favorites']  = 'Manage favorites';


/**
 * Tables
 */

// Core Tables
$GLOBALS['TL_LANG']['TABLE']['tl_content']    	= array('Content Elements', 'Create content elements like text, image, gallery, tables, etc.');
$GLOBALS['TL_LANG']['TABLE']['tl_style_sheet']      	= array('Style sheets', 'Create style sheets to format the front end output.');
$GLOBALS['TL_LANG']['TABLE']['tl_style']	= array('Styles', 'Create individual CSS styles within the style sheet.');
$GLOBALS['TL_LANG']['TABLE']['tl_module']     	= array('Front end modules', 'Manage the front end modules of the website.');
$GLOBALS['TL_LANG']['TABLE']['tl_layout']      	= array('Page layouts', 'Combine modules and style sheets to a page layout.');

$GLOBALS['TL_LANG']['TABLE']['tl_news']      		= array('News articles', 'Manage, publish and favorite news article posts by date.');
$GLOBALS['TL_LANG']['TABLE']['tl_calendar_events'] = array('Event dates', 'Manage, publish and favorite scheduled events.');
$GLOBALS['TL_LANG']['TABLE']['tl_form_field']   = array('Form fields', 'Manage and publish text, textarea, select, radio, checkbox, captcha and submit button form fields.');
$GLOBALS['TL_LANG']['TABLE']['tl_newsletter_recipients']     = array('Newsletter recipients', 'Import, manage and activate newsletter recipients.');
$GLOBALS['TL_LANG']['TABLE']['tl_newsletter']   = array('Newsletter mailers', 'Manage, publish and send newsletter mailers.');
$GLOBALS['TL_LANG']['TABLE']['tl_faq']      		= array('FAQ articles', 'Manage, publish and favorite FAQ article posts.');
$GLOBALS['TL_LANG']['TABLE']['tl_glossary']     = array('Glossary articles', 'Manage, publish and favorite glossary article posts.');

// Extension Tables
$GLOBALS['TL_LANG']['TABLE']['tl_user_fav']      	= array('Favorites', 'Manage your menu of favorites.');
$GLOBALS['TL_LANG']['TABLE']['tl_gallery']    	= array('Gallery photos', 'Manage, publish and favorite gallery photos.');
$GLOBALS['TL_LANG']['TABLE']['tl_invitation']   = array('Invitation mailers', 'Manage, publish and send invitation mailers.');
$GLOBALS['TL_LANG']['TABLE']['tl_zad_sendnews_rule'] = array('Send news rule', 'Manage send news processing rules');
$GLOBALS['TL_LANG']['TABLE']['tl_simplepoll_option'] = array('Simple poll options', 'Manage simple poll options');


// Core module short text for theme "favorite"

// Comment this section if you prefer the longer names
// START OF SHORT TITLES OVERRIDE

// Modules
/*
$GLOBALS['TL_LANG']['MOD']['accounts'] = 'Accounts';
$GLOBALS['TL_LANG']['MOD']['profile'] = 'Actions';
$GLOBALS['TL_LANG']['MOD']['page'][0] = 'Pages';
$GLOBALS['TL_LANG']['MOD']['form'][0] = 'Forms';
$GLOBALS['TL_LANG']['MOD']['files'][0] = 'Files';
$GLOBALS['TL_LANG']['MOD']['login'][0] = 'Profile';
$GLOBALS['TL_LANG']['MOD']['repository_catalog'][0] = 'Extensions';
$GLOBALS['TL_LANG']['MOD']['repository_manager'][0] = 'Installer';
$GLOBALS['TL_LANG']['TABLE']['tl_newsletter_recipients'][0] = 'Recipients';
$GLOBALS['TL_LANG']['TABLE']['tl_newsletter'][0] = 'Mailers';
$GLOBALS['TL_LANG']['TABLE']['tl_layout'][0] = 'Layouts';

$GLOBALS['TL_LANG']['MOD']['BackupDB'][0] = 'Data Backup';
$GLOBALS['TL_LANG']['MOD']['updatedb'][0] = 'Update DB';

$GLOBALS['TL_LANG']['MOD']['isotope'] = 'Isotope';
$GLOBALS['TL_LANG']['MOD']['iso_products'] = array('Products', 'Manage products, variants, groups and import image assets.');
$GLOBALS['TL_LANG']['MOD']['iso_orders'] = array('Orders', 'Edit, print orders and view payment and shipping info.');
$GLOBALS['TL_LANG']['MOD']['iso_rules'] = array('Rules', 'Setup product or cart rules for discounts, dates, cart quantities and coupon uses.');
$GLOBALS['TL_LANG']['MOD']['iso_setup'] = array('Store', 'Setup the store configuration for product types, attributes, related categories, payments, shipping, taxes and e-mail.');

// Tables
$GLOBALS['TL_LANG']['TABLE']['tl_module'][0] = 'Modules';
*/

// END OF SHORT TITLES OVERRIDE


/**
 * Miscellaneous
 */
/*
$GLOBALS['TL_LANG']['MSC']['help']    = 'Help';
$GLOBALS['TL_LANG']['MSC']['nohelp']    = 'Help not available.';
*/
?>