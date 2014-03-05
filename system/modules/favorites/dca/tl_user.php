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

// Add Child Table
$GLOBALS['TL_DCA']['tl_user']['config']['ctable'][] = 'tl_user_fav';

// Add Favorite button to user
array_insert($GLOBALS['TL_DCA']['tl_user']['list']['operations'], 0, array
	(
		'favorites' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_user']['favorites'],
				'href'                => 'table=tl_user_fav',
				'icon'                => 'system/modules/favorites/assets/favorites.png',
				'button_callback'     => array('tl_user_favorite', 'getFavIcon')
			)
	)
);

$GLOBALS['TL_DCA']['tl_user']['palettes']['login'] = str_replace('backendTheme;', 'backendTheme;{favorite_legend},favlock,favdefault,favdisable,favexternal;', $GLOBALS['TL_DCA']['tl_user']['palettes']['login']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['default'] = str_replace('backendTheme;', 'backendTheme;{favorite_legend},favlock,favdefault,favdisable,favexternal;', $GLOBALS['TL_DCA']['tl_user']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['group'] = str_replace('backendTheme;', 'backendTheme;{favorite_legend},favlock,favdefault,favdisable,favexternal;', $GLOBALS['TL_DCA']['tl_user']['palettes']['group']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['extend'] = str_replace('backendTheme;', 'backendTheme;{favorite_legend},favlock,favdefault,favdisable,favexternal;', $GLOBALS['TL_DCA']['tl_user']['palettes']['extend']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['custom'] = str_replace('backendTheme;', 'backendTheme;{favorite_legend},favlock,favdefault,favdisable,favexternal;', $GLOBALS['TL_DCA']['tl_user']['palettes']['custom']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['admin'] = str_replace('backendTheme;', 'backendTheme;{favorite_legend},favlock,favdefault,favdisable,favexternal;', $GLOBALS['TL_DCA']['tl_user']['palettes']['admin']);

/**
 * Add fields to tl_user
 */
$GLOBALS['TL_DCA']['tl_user']['fields']['favlock'] = array
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

$GLOBALS['TL_DCA']['tl_user']['fields']['favdisable'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['favdisable'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'											=> "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_user']['fields']['favexternal'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['favexternal'],
	'exclude'                 => true,
	'default'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'											=> "char(1) NOT NULL default ''"
);


class tl_user_favorite extends tl_user
{

	/**
	 * Return the favorite button
	 * @param array
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @return string
	 */
	public function getFavIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (!$this->User->isAdmin && $row['id'] != $this->User->id)
		{
			return '';
		}

		return '<a href="'.$this->addToUrl($href.'&id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.\Image::getHTML($icon, $label).'</a> ';
	}
	
	
}

?>