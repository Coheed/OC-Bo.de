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
 * @package    Favorites
 * @license    LGPL
 * @filesource
 */


/**
 * Load tl_user language file
 */
$this->loadLanguageFile('tl_user');


/**
 * Table tl_news
 */
$GLOBALS['TL_DCA']['tl_user_fav'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_user',
		'enableVersioning'            => true,
		'onload_callback' => array
		(
			array('tl_user_fav', 'checkPermission'),
		),
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'pid' => 'index'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('sorting','label'),
			'panelLayout'             => 'filter;search,limit',
			'headerFields'            => array('name', 'email', 'tstamp'),
			'child_record_callback'   => array('tl_user_fav', 'listFavorites'),
			'child_record_class'      => 'no_padding'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_user_fav']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_user_fav']['copy'],
				'href'                => 'act=paste&amp;mode=copy',
				'icon'                => 'copy.gif'
			),
			'cut' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_user_fav']['cut'],
				'href'                => 'act=paste&amp;mode=cut',
				'icon'                => 'cut.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_user_fav']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_user_fav']['toggle'],
				'icon'                => 'visible.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
				'button_callback'     => array('tl_user_fav', 'toggleIcon')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_user_fav']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},label,title,href,target,icon;{expert_legend:hide},cssClass;{publish_legend},published'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'sorting' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'label' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_user_fav']['label'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=> 'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_user_fav']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=> 'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'href' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_user_fav']['href'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'icon' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_user_fav']['icon'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions' => 'gif,png', 'mandatory'=>false, 'tl_class'=>'clr'),
			'sql'                     => "blob NULL"
		),
		'target' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_user_fav']['target'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cssClass' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_user_fav']['cssClass'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_user_fav']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'flag'                    => 1,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
	)
);


/**
 * Class tl_user_fav
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Thyon Design 2012
 * @author     John Brand <http://www.thyon.com>
 * @package    Controller
 */
class tl_user_fav extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

	/**
	 * Check permissions to edit table tl_news
	 */
	public function checkPermission()
	{
		if ($this->User->isAdmin)
		{
			return;
		}
		
		$id = strlen($this->Input->get('id')) ? $this->Input->get('id') : CURRENT_ID;

		// Check current action
		switch ($this->Input->get('act'))
		{
			case 'paste':
				// Allow
				break;

			case 'create':
			case 'select':
				if (!strlen($this->Input->get('id')) || ($this->Input->get('id') != $this->User->id))
				{
					$this->log('Not enough permissions to create favorite item for user ID "'.$this->User->id.'"', 'tl_user_fav checkPermission', TL_ERROR);
					$this->redirect('contao/main.php?act=error');
				}
				break;

			case 'cut':
			case 'copy':
				$pid = $this->Input->get('pid');

				// Get form ID
				if ($this->Input->get('mode') == 1)
				{
					$objFav = $this->Database->prepare("SELECT pid FROM tl_user_fav WHERE id=?")
											   ->limit(1)
											   ->execute($this->Input->get('pid'));

					if ($objFav->numRows < 1)
					{
						$this->log('Invalid favorite item ID "'.$this->Input->get('pid').'"', 'tl_user_fav checkPermission', TL_ERROR);
						$this->redirect('contao/main.php?act=error');
					}

					$pid = $objFav->pid;
				}

				if ($this->User->id != $pid)
				{
					$this->log('Not enough permissions to '.$this->Input->get('act').' favorite ID "'.$id.'" to user ID "'.$this->User->id.'"', 'tl_user_fav checkPermission', TL_ERROR);
					$this->redirect('contao/main.php?act=error');
				}
				// NO BREAK STATEMENT HERE

			case 'edit':
			case 'show':
			case 'delete':
			case 'toggle':
				$objFav = $this->Database->prepare("SELECT pid FROM tl_user_fav WHERE id=?")
											 ->limit(1)
											 ->execute($id);

				if ($objFav->numRows < 1)
				{
					$this->log('Invalid favorite item ID "'.$id.'"', 'tl_user_fav checkPermission', TL_ERROR);
					$this->redirect('contao/main.php?act=error');
				}

				if ($this->User->id != $objFav->pid)
				{
					$this->log('Not enough permissions to '.$this->Input->get('act').' favorite item ID "'.$id.'" for user ID "'.$this->User->id.'"', 'tl_user_fav checkPermission', TL_ERROR);
					$this->redirect('contao/main.php?act=error');
				}
				break;

			case 'editAll':
			case 'deleteAll':
			case 'overrideAll':
			case 'cutAll':
			case 'copyAll':
				if ($this->User->id != $id)
				{
					$this->log('Not enough permissions to access user ID "'.$id.'"', 'tl_user_fav checkPermission', TL_ERROR);
					$this->redirect('contao/main.php?act=error');
				}

				$objFav = $this->Database->prepare("SELECT id FROM tl_user_fav WHERE pid=?")
											 ->execute($id);

				if ($objFav->numRows < 1)
				{
					$this->log('Invalid user ID "'.$id.'"', 'tl_user_fav checkPermission', TL_ERROR);
					$this->redirect('contao/main.php?act=error');
				}

				$session = $this->Session->getData();
				$session['CURRENT']['IDS'] = array_intersect($session['CURRENT']['IDS'], $objArchive->fetchEach('id'));
				$this->Session->setData($session);
				break;

			default:
				if (strlen($this->Input->get('act')))
				{
					$this->log('Invalid command "'.$this->Input->get('act').'"', 'tl_user_fav checkPermission', TL_ERROR);
					$this->redirect('contao/main.php?act=error');
				}
				elseif ($this->User->id != $id)
				{
					$this->log('Not enough permissions to access user ID "'.$id.'"', 'tl_user_fav checkPermission', TL_ERROR);
					$this->redirect('contao/main.php?act=error');
				}
				break;
		}
	}



	/**
	 * Add the type of input field
	 * @param array
	 * @return string
	 */
	public function listFavorites($arrRow)
	{
		$key = $arrRow['published'] ? 'published' : 'unpublished';
		//(preg_match('@^(https?://|ftp://|mailto:|#)@i', $arrRow['href']))
		$target = $arrRow['target'] ? ' <a href="'.$arrRow['href'].'" target="_blank">' . \Image::getHTML('system/modules/favorites/assets/external.png') . '</a>' : '';		

		return '
<div class="cte_type ' . $key . '"><strong>' . $arrRow['label'] . '</strong> <span style="color:#888;">[' . $arrRow['href'] . ']</span>'.$target.'</div>';
	}

	/**
	 * Return the "toggle visibility" button
	 * @param array
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @return string
	 */
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen($this->Input->get('tid')))
		{
			$this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
			$this->redirect($this->getReferer());
		}

		// Check permissions AFTER checking the tid, so hacking attempts are logged
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_user_fav::published', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

		if (!$row['published'])
		{
			$icon = 'invisible.gif';
		}		

		return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}


	/**
	 * Disable/enable a user group
	 * @param integer
	 * @param boolean
	 */
	public function toggleVisibility($intId, $blnVisible)
	{
		// Check permissions to edit
		$this->Input->setGet('id', $intId);
		$this->Input->setGet('act', 'toggle');
		$this->checkPermission();

		// Check permissions to publish
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_user_fav::published', 'alexf'))
		{
			$this->log('Not enough permissions to publish/unpublish favorite item ID "'.$intId.'"', 'tl_user_fav toggleVisibility', TL_ERROR);
			$this->redirect('contao/main.php?act=error');
		}

		$this->createInitialVersion('tl_user_fav', $intId);
	
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_user_fav']['fields']['published']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_user_fav']['fields']['published']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
			}
		}

		// Update the database
		$this->Database->prepare("UPDATE tl_user_fav SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
					   ->execute($intId);

		$this->createNewVersion('tl_user_fav', $intId);
	}
}

?>