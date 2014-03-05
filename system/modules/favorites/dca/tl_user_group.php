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
 * @package    Favorite
 * @license    LGPL
 * @filesource
 */


/**
 * Extend default palette
 */
//$GLOBALS['TL_DCA']['tl_user_group']['palettes']['default'] = str_replace('themes;', 'themes;{favorite_legend},favlock,favdisable;', $GLOBALS['TL_DCA']['tl_user_group']['palettes']['default']);


/**
 * Add fields to tl_user_group
 */
$GLOBALS['TL_DCA']['tl_user_group']['fields']['favlock'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['favlock'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'											=> "char(1) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_user']['fields']['favdefault'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['favdefault'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'											=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_user_group']['fields']['favdisable'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['favdisable'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'											=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_user_group']['fields']['favexternal'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['favexternal'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'											=> "char(1) NOT NULL default ''"
);

?>