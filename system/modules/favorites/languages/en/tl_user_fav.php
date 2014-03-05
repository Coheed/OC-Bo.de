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
 * @copyright  Thyon Design 2012
 * @author     John Brand <http://www.thyon.com>
 * @package    Language
 * @license    LGPL
 * @filesource
 */


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['tl_user_fav']['label']   	= array('Label', 'Enter the display label of the favorite.');
$GLOBALS['TL_LANG']['tl_user_fav']['href']    	= array('Redirect target', 'Enter the redirect link of the favorite.');
$GLOBALS['TL_LANG']['tl_user_fav']['target']    = array('Open in new window', 'Opens link in a new window.');
$GLOBALS['TL_LANG']['tl_user_fav']['title']    	= array('Help text', 'Enter the help description or title pop-up text.');
$GLOBALS['TL_LANG']['tl_user_fav']['icon'] = array('Favorite icon', 'Please select an image to override the default icon.');
$GLOBALS['TL_LANG']['tl_user_fav']['cssClass']  = array('CSS class', 'Here you can enter one or more classes.');
$GLOBALS['TL_LANG']['tl_user_fav']['published'] = array('Publish item', 'Make the favorite item visible.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_user_fav']['title_legend'] = 'Title, redirect and icon';
$GLOBALS['TL_LANG']['tl_user_fav']['expert_legend'] = 'Expert settings';
$GLOBALS['TL_LANG']['tl_user_fav']['publish_legend'] = 'Publish settings';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_user_fav']['new']        = array('Add favorite', 'Add a new favorite');
$GLOBALS['TL_LANG']['tl_user_fav']['show']       = array('Favorite details', 'Show the details of favorite ID %s');
$GLOBALS['TL_LANG']['tl_user_fav']['edit']       = array('Edit favorite', 'Edit favorite ID %s');
$GLOBALS['TL_LANG']['tl_user_fav']['copy']       = array('Duplicate favorite', 'Duplicate favorite ID %s');
$GLOBALS['TL_LANG']['tl_user_fav']['cut']        = array('Move favorite', 'Move favorite ID %s');
$GLOBALS['TL_LANG']['tl_user_fav']['delete']     = array('Delete favorite', 'Delete favorite ID %s');
$GLOBALS['TL_LANG']['tl_user_fav']['editheader'] = array('Edit user profile', 'Edit the user profile');
$GLOBALS['TL_LANG']['tl_user_fav']['toggle']     = array('Publish/unpublish favorite', 'Publish/unpublish favorite ID %s');

?>