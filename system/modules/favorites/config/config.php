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
 * @package    Thyon BE Theme
 * @license    LGPL
 * @filesource
 */


/**
 * Add Favorite Table to user module
 */
$GLOBALS['BE_MOD']['accounts']['user']['tables'][] = 'tl_user_fav';

/**
 * Add Favorite Table to user module
 */
$GLOBALS['TL_HOOKS']['getUserNavigation'][] = array('Favorites', 'getFavorites');

// Favorite action icons 
$GLOBALS['BE_MOD']['accounts']['user']['icons']['favmanage'] = 'system/modules/favorites/assets/favorites.png';
$GLOBALS['BE_MOD']['accounts']['user']['icons']['favcreate'] = 'system/modules/favorites/assets/favcreate.png';
$GLOBALS['BE_MOD']['accounts']['user']['icons']['favdelete'] = 'system/modules/favorites/assets/favdelete.png';
$GLOBALS['BE_MOD']['accounts']['user']['icons']['favexternal'] = 'system/themes/default/images/redirect.gif';

/**
 * Add permissions
 */

/*
$GLOBALS['TL_PERMISSIONS'][] = 'favlock';
$GLOBALS['TL_PERMISSIONS'][] = 'favdisable';
*/

// Core tables
$GLOBALS['BE_MOD']['design']['page']['icons']['tl_page'] 			= 'system/themes/default/images/regular.gif';
$GLOBALS['BE_MOD']['design']['themes']['icons']['tl_style'] 			= 'system/themes/default/images/css.gif';
$GLOBALS['BE_MOD']['design']['themes']['icons']['tl_style_sheet']	= 'system/themes/default/images/css.gif';
$GLOBALS['BE_MOD']['design']['themes']['icons']['tl_module'] 			= 'system/themes/default/images/modules.gif';
$GLOBALS['BE_MOD']['design']['themes']['icons']['tl_layout'] 			= 'system/themes/default/images/layout.gif';


// Extension tables
$GLOBALS['BE_MOD']['accounts']['user']['icons']['tl_user_fav'] = 'system/modules/favorites/assets/favorites-16.png';

?>