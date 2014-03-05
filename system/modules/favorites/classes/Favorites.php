<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package ContentBreak
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


/**
 * Class Favorites
 *
 * Adds Favorite system to Contao
 * @copyright  Thyon Design 2012
 * @author     John Brand <http://www.thyon.com>
 * @package    Controller
 */
class Favorites extends \Backend
{

	/**
	 * Import the Files library
	 */
	public function __construct()
	{
		parent::__construct();
		$this->Import('BackendUser', 'User');
	}


	public function getFavorites($arrNavigationModules, $blnShowAll=false)
	{
		// if still busy installing, don't display favorites until table is found, causes error in BE otherwise
		if (!$this->Database->tableExists('tl_user_fav'))
		{
			return $arrNavigationModules;
		}

		$blnShowAll = isset($GLOBALS['BE_ICONS'][$theme]['config']['blnShowAll']) ? $GLOBALS['BE_ICONS'][$theme]['config']['blnShowAll'] : $blnShowAll;

		// get theme
		$theme = $this->getTheme();
		$iconsize = $GLOBALS['BE_ICONS'][$theme]['config']['size'] ? $GLOBALS['BE_ICONS'][$theme]['config']['size'] : 16;
		
		//Return if favorites are disabled
		if ($this->User->favdisable)
		{
			return $arrNavigationModules;
		}

		$session = $this->Session->getData();

		$arrInactiveModules = deserialize($GLOBALS['TL_CONFIG']['inactiveModules']);
		$blnCheckInactiveModules = is_array($arrInactiveModules);
		
		$trail = false;

		// Add group heading
		$arrModules = array();
		$arrModules['favorites']['icon'] = 'modMinus.gif';
		$arrModules['favorites']['label'] = $GLOBALS['TL_LANG']['MOD']['favorites'];
		$arrModules['favorites']['title'] = specialchars($GLOBALS['TL_LANG']['MSC']['collapseNode']);
		$arrModules['favorites']['href'] = $this->addToUrl('mtg=favorites');
		$arrModules['favorites']['class'] = ''; // add trail after

		// Do not show the modules if the group is closed
		if (!$blnShowAll && isset($session['backend_modules']['favorites']) && $session['backend_modules']['favorites'] < 1)
		{
			$arrModules['favorites']['modules'] = false;
			$arrModules['favorites']['icon'] = 'modPlus.gif';
			$arrModules['favorites']['title'] = specialchars($GLOBALS['TL_LANG']['MSC']['expandNode']);
		}
		else
		{

			// Load favorites from database
			$objFav = $this->Database->prepare("SELECT * FROM tl_user_fav WHERE published=1 AND pid=? ORDER BY sorting")
								   ->execute($this->User->id);
			
			if ($objFav->numRows)
			{

				// !Current Trail
				$levels = $this->getTrail();

				$first = true;
				$maxlevel = 0;
				$activeGroup = '';
				
				while ($objFav->next())
				{
					$fileicon = $this->getFileIcon($objFav->icon, $iconsize);

					if (preg_match('@^(https?://|ftp://|mailto:|#)@i', $objFav->href))
					{
						$strGroupName = standardize($objFav->label).'_'.$objFav->id;
						$icon = $GLOBALS['BE_MOD']['accounts']['user']['icons']['favexternal'];
						if ($fileicon)
						{
							$icon = $fileicon;
						}

						$href = $objFav->href;
						$label = $objFav->label;
						if ($this->User->favexternal)
						{
							$label = $label . ' '. \Image::getHTML('system/modules/favorites/assets/external.png');
						}
						
						$icon = sprintf(' style="background-image:url(\'%s%s\')"', TL_SCRIPT_URL, $icon) . ($objFav->target ? ' onclick="window.open(this.href);return false;"' : '');


						$arrModules['favorites']['modules'][$strGroupName]['label'] = $label;
						$arrModules['favorites']['modules'][$strGroupName]['title'] = $objFav->title;
						$arrModules['favorites']['modules'][$strGroupName]['icon'] = $icon;
						$arrModules['favorites']['modules'][$strGroupName]['href'] = $href;
						$arrModules['favorites']['modules'][$strGroupName]['class'] = 'navigation '. $strGroupName . ($objFav->cssClass ? ' ' .$objFav->cssClass : '');

						continue;

					}

					// parse href query string
					$url = parse_url($objFav->href);
					parse_str($url['query'], $query);
	
					$strModuleName = $query['do'];
					$strTable = $query['table'];			
					$strGroupName = implode('_', array_values($query));

					// redirect to the first favorite item, if landing on the root
					// !check the redirect somehow, use at own risk
					// maybe add a TL_CONFIG entry to reset the favorites (or add a home item)
					if ($first && $this->User->favdefault && $this->Input->get('do') == '' && strlen($strModuleName))
					{
						$this->redirect($objFav->href);
					}
	
					// Exclude inactive modules
					if ($blnCheckInactiveModules && in_array($strModuleName, $arrInactiveModules))
					{
						continue;
					}
	
					$arrInfo = $this->getModuleInfo($strModuleName, $strTable);

					$strFavHref = $query['id'] ? $objFav->href . '&rt='.REQUEST_TOKEN : $this->replaceUrlRequestToken($objFav->href);

					$icon = $arrInfo['icon'];
					if ($fileicon)
					{
						$icon = $fileicon;
					}

					// override page icon
					if (!strlen($icon) && $strModuleName == 'page' && $query['act'] == 'edit' && strlen($query['id']))
					{
						$icon = $GLOBALS['BE_MOD']['design']['page']['icons']['tl_page'];
					}
	
					$arrModules['favorites']['modules'][$strGroupName]['label'] = $objFav->label ? $objFav->label : $arrInfo['label'];
					$arrModules['favorites']['modules'][$strGroupName]['title'] = $objFav->title ? $objFav->title : $arrInfo['title'];
					$arrModules['favorites']['modules'][$strGroupName]['icon'] = $icon ? sprintf(' style="background-image:url(\'%s%s\')"', TL_SCRIPT_URL, $icon) : '';
					$arrModules['favorites']['modules'][$strGroupName]['href'] = $strFavHref;
					$arrModules['favorites']['modules'][$strGroupName]['class'] = 'navigation ' . $strModuleName . ($strGroupName != $strModuleName ? ' ' . $strGroupName : '') . ($objFav->cssClass ? ' ' .$objFav->cssClass : '');
					
					// flag active
					$href = $this->Environment->request;
					if ($this->compareBackEndUrls($objFav->href, $href))
					{
						$activeGroup = $strGroupName;
						$trail = true;
						$maxlevel = 99999;
					}
					elseif (count($levels))
					{
						// !Check Trail
						foreach ($levels as $k=>$level)
						{
							if (strlen($level['do']))
							{
								$baseurl = $this->Environment->script . '?do='.$level['do'];

								if (count($levels) == 1 || $level['table'] == $GLOBALS['BE_MOD'][$this->findBackendModuleGroup($level['do'])][$level['do']]['tables'][0])
								{
									$href = $baseurl;
								}
								else
								{
									$href = $this->addToUrl('&table='.$level['table'].'&id='.$levels[$k]['id'], $baseurl);
								}

								$thislevel = (count($levels)+1-$k);

								if ($this->compareBackEndUrls($href, $objFav->href) && $thislevel > $maxlevel)
								{
									$maxlevel = $thislevel;
									$activeGroup = $strGroupName;
									$trail = true;					
								}

							}
						}
					}
					
					$first = false;	
				}
			}

			if ($trail && strlen($activeGroup))
			{
				$arrModules['favorites']['modules'][$activeGroup]['class'] .= ' active';		
			}

			
			if (!$this->User->favlock)
			{
				$manageUrl = $this->Environment->script .'?do=user&table=tl_user_fav&id='.$this->User->id;
		
				// favorite url
				$query = $this->Environment->queryString;
				$href = $this->Environment->script . (strlen($query) ? '?'. $query : '');

				// add favorite add/remove button
				$strModuleName = $this->Input->get('do');
				$arrInfo = $this->getModuleInfo($strModuleName, $this->Input->get('table'));
				$arrInfo['href'] = $this->removeUrlRequestToken($href);

				// Manage Favorites
				$icon = $GLOBALS['BE_MOD']['accounts']['user']['icons']['favmanage'];
	
				$arrModules['favorites']['modules']['favmanage']['label'] = $GLOBALS['TL_LANG']['MSC']['manageFavorites'][0];
				$arrModules['favorites']['modules']['favmanage']['title'] = $GLOBALS['TL_LANG']['MSC']['manageFavorites'][1];
				$arrModules['favorites']['modules']['favmanage']['icon'] = sprintf(' style="background-image:url(\'%s%s\')"', TL_SCRIPT_URL, $icon);
				$arrModules['favorites']['modules']['favmanage']['href'] = $manageUrl . '&rt='.REQUEST_TOKEN;
				$arrModules['favorites']['modules']['favmanage']['class'] = 'navigation favorites'. (ampersand($arrInfo['href']) == ampersand($manageUrl) ? ' active' : '');

				if (ampersand($arrInfo['href']) == ampersand($manageUrl))
				{
					$trail = true;
				}

				// Can't add manage url
				if (ampersand($arrInfo['href']) != ampersand($manageUrl) && strlen($this->Input->get('do')))
				{
					// Add or remove favorite
					if (strlen($this->Input->get('fav')))
					{
						// strip fav key
						$arrInfo['href'] = preg_replace('/&(amp;)?fav=[^&]*/', '', $arrInfo['href']);
			
						// update
						$this->updateFavorite($arrInfo);
					}
					
					$objFav = $this->Database->prepare("SELECT id FROM tl_user_fav WHERE pid=? AND href=?")->executeUncached($this->User->id, $arrInfo['href']);
					$isfavorite = ($objFav->numRows > 0);
		
					$favkey = ($isfavorite ? 'favdelete' : 'favcreate');
					$icon = $GLOBALS['BE_MOD']['accounts']['user']['icons'][$favkey];
		
					$arrModules['favorites']['modules'][$favkey]['label'] = ($isfavorite ? $GLOBALS['TL_LANG']['MSC']['removeFavorite'][0] : $GLOBALS['TL_LANG']['MSC']['addFavorite'][0]);
					$arrModules['favorites']['modules'][$favkey]['title'] = ($isfavorite ? $GLOBALS['TL_LANG']['MSC']['removeFavorite'][1] : $GLOBALS['TL_LANG']['MSC']['addFavorite'][1]);
					$arrModules['favorites']['modules'][$favkey]['icon'] = sprintf(' style="background-image:url(\'%s%s\')"', TL_SCRIPT_URL, $icon);
					$arrModules['favorites']['modules'][$favkey]['href'] = $href . '&fav='.($isfavorite ? 'delete' : 'create');
					$arrModules['favorites']['modules'][$favkey]['class'] = 'navigation ' . ($isfavorite ? 'delete' : 'create');
					$arrModules['favorites']['modules'][$favkey]['attributes'] = ($isfavorite ? 'onclick="if(!confirm(\'' . sprintf($GLOBALS['TL_LANG']['MSC']['deleteConfirm'], $objFav->id) . '\'))return false;Backend.getScrollOffset()"' : '');
					
				}
			}

			// add trail 
			$arrModules['favorites']['class'] .=  $trail ? ' trail' : '';

		}

		return $arrModules + $arrNavigationModules;
					
	}


	public function getFileIcon($icon, $size=16)
	{
		$newicon = '';
		// restore icon path from DBAFS
		$objFile = \FilesModel::findByPk($icon);
		if ($objFile !== null && is_file(TL_ROOT . '/' . $objFile->path))
		{
			//change size to 16x16
			$newpath = $this->getImage($objFile->path, $size, $size, 'box');
			$newicon = $newpath;
		}
		return $newicon;
	}

	public function getTrail()
	{
		$do = $this->Input->get('do');
		$id = $this->Input->get('id');
		$act = $this->Input->get('act');

		$levels = array();
		$parent = true;

		while ($parent)
		{
			$moduleGroup = $this->findBackendModuleGroup($do);
			
			if (strlen($ptable))
				$table = $ptable;
			elseif (strlen($this->Input->get('table')))
				$table = $this->Input->get('table');
			else
				$table = $GLOBALS['BE_MOD'][$moduleGroup][$do]['tables'][0];
				
			if (strlen($pid))
				$id = $pid;
				
			$this->loadDataContainer($table);
			$this->loadLanguageFile($table);
			$level = array
			(
				'id'			=> $id,
				'table'			=> $table,
				'moduleGroup'	=> $moduleGroup,
				'href'			=> $GLOBALS['TL_DCA'][$table]['list']['operations']['edit']['href'],
			);
			
			$ptable = $GLOBALS['TL_DCA'][$table]['config']['ptable'];
			$tables = $GLOBALS['BE_MOD'][$moduleGroup][$do]['tables'];
				
			if (!strlen($ptable))
				$parent = false;
			
			if ($GLOBALS['TL_DCA'][$table]['config']['dataContainer'] == 'Table')
			{
				if (in_array($table, $tables))
					$level['do'] = $do;
					
				if (strlen($id))
				{
					$row = $this->Database->prepare("SELECT * FROM ".$table." WHERE id=".$id)
												   ->limit(1)
												   ->execute()
										   	       ->fetchAssoc();
										   	       
					$pid = $row['pid'];
				}
			}
			else
			{
				$level['do'] = $do;
			}
			
			$levels[] = $level;
		}

		return $levels;
	}


	/**
	 * Overwrite parent method to allow any URL
	 * @param string
	 * @return string
	 */

	static function addToUrl($strRequest, $strUrl='')
	{
		$queryString = explode('?', $strUrl);
		$queryString = $queryString[1];
		
		$strRequest = preg_replace('/^&(amp;)?/i', '', $strRequest);
		$queries = preg_split('/&(amp;)?/i', $queryString);

		// Overwrite existing parameters
		foreach ($queries as $k=>$v)
		{
			$explode = explode('=', $v);

			if (preg_match('/' . preg_quote($explode[0], '/') . '=/i', $strRequest))
			{
				unset($queries[$k]);
			}
		}

		$href = '?';

		if (count($queries) > 0)
		{
			$href .= implode('&', $queries) . '&';
		}
		
		return \Environment::get('script')  . $href . str_replace(' ', '%20', $strRequest);
	}



	/**
	 * Remove Backend URL request token 
	 */
	protected function removeUrlRequestToken($strUrl)
	{
		return preg_replace(array('/&(amp;)?rt=[^&]*/', '/&(amp;)?ref=[^&]*/'), array('', ''), $strUrl);
	}


	/**
	 * Remove Backend URL request token 
	 */
	protected function replaceUrlRequestToken($strUrl)
	{
		return preg_replace(array('/&(amp;)?rt=[^&]*/', '/&(amp;)?ref=[^&]*/'), array('&rt='.REQUEST_TOKEN, ''), $strUrl);
	}


	/**
	 * Compare Backend URLs ignore the request token 
	 */
	protected function compareBackEndUrls($strUrl, $strUrlCmp)
	{
		return ($this->removeUrlRequestToken($strUrl) == $this->removeUrlRequestToken($strUrlCmp));
	}


	/**
	 * Find a particluar backend module
	 */
	protected function findBackendModuleGroup($strModule)
	{
		foreach($GLOBALS['BE_MOD'] as $moduleGroup => $modules)
		{
			if (in_array($strModule, array_keys($modules)))
				return $moduleGroup;
		}
		
		return false;
	}


	public function getModuleArray($strModuleName)
	{
		$arrModule = array();
		foreach ($GLOBALS['BE_MOD'] as $arrGroup)
		{
			if (isset($arrGroup[$strModuleName]))
			{
				$arrModule = $arrGroup[$strModuleName];
				break;
			}
		}

		return $arrModule;
	}

	public function getModuleInfo($strModuleName, $table)
	{
		$arrModule = $this->getModuleArray($strModuleName);
		$moduleGroup = $this->findBackendModuleGroup($strModuleName);

		$arrItem = array();

		// default module info
		$icon = $arrModule['icon'];

		$label = is_array($GLOBALS['TL_LANG']['MOD'][$strModuleName]) ? $GLOBALS['TL_LANG']['MOD'][$strModuleName][0] : (strlen($GLOBALS['TL_LANG']['MOD'][$strModuleName]) ? $GLOBALS['TL_LANG']['MOD'][$strModuleName] : $strModuleName);
		$title = specialchars(is_array($GLOBALS['TL_LANG']['MOD'][$strModuleName]) ? $GLOBALS['TL_LANG']['MOD'][$strModuleName][1] : $label);
		$module = $strModuleName;
					
		if ($strModuleName == 'repository_manager' && \Input::get('update') == 'database')
		{
			$icon = $GLOBALS['BE_ICONS'][$theme]['modules']['dbupdate'] ? $GLOBALS['BE_ICONS'][$theme]['modules']['dbupdate'] : $icon;	
			$label = (is_array($GLOBALS['TL_LANG']['TABLE']['tl_repository']['updatedatabase']) && $GLOBALS['TL_LANG']['TABLE']['tl_repository']['updatedatabase'][0]) ? specialchars($GLOBALS['TL_LANG']['TABLE']['tl_repository']['updatedatabase'][0]) :  $GLOBALS['TL_LANG']['tl_repository']['updatedatabase'];
			$title =  (is_array($GLOBALS['TL_LANG']['TABLE']['tl_repository']['updatedatabase']) && $GLOBALS['TL_LANG']['TABLE']['tl_repository']['updatedatabase'][1]) ? $GLOBALS['TL_LANG']['TABLE']['tl_repository']['updatedatabase'][1] : $GLOBALS['TL_LANG']['tl_repository']['updatedatabase'];

		}				

		// Override headlines, if available
		if (strlen($table) && $table != $arrModule['tables'][0])
		{
			$label = (is_array($GLOBALS['TL_LANG']['TABLE'][$table]) && $GLOBALS['TL_LANG']['TABLE'][$table][0]) ? specialchars($GLOBALS['TL_LANG']['TABLE'][$table][0]) :  $label;
			$title =  (is_array($GLOBALS['TL_LANG']['TABLE'][$table]) && $GLOBALS['TL_LANG']['TABLE'][$table][1]) ? $GLOBALS['TL_LANG']['TABLE'][$table][1] : $title;
			$module = str_replace('tl_', '', $table);
			$icon = $GLOBALS['BE_MOD'][$moduleGroup][$strModuleName]['icons'][$table] ? $GLOBALS['BE_MOD'][$moduleGroup][$strModuleName]['icons'][$table] : $icon;
		}

		$arrItem['label'] = $label;
		$arrItem['title'] = $title;
		$arrItem['module'] = $module;
		$arrItem['icon'] = $icon;

		return $arrItem;

	}
	
	/**
	 * Disable/enable a user group
	 * @param integer
	 * @param boolean
	 */
	public function updateFavorite($arrValues)
	{
		// Check permissions to publish
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_user_fav::published', 'alexf'))
		{
			$this->log('Not enough permissions to add/remove favorites for user ID "'.$this->User->id.'"', 'Favorite updateFavorite', TL_ERROR);
			$this->redirect('contao/main.php?act=error');
		}

		//Insert Item
		switch ($this->Input->get('fav'))
		{
			case 'create':

				$objNextSorting = $this->Database->prepare("SELECT MAX(sorting) AS sorting FROM tl_user_fav")
									->executeUncached();

				if ($objNextSorting->numRows)
				{
					$sorting = intval($objNextSorting->sorting + 128);
				}
				// first sorting item
				else
				{
					$sorting = 128; 
				}

				$arrValues['sorting'] = $sorting;
				$arrValues['pid'] = $this->User->id;
				$arrValues['tstamp'] = time();
				$arrValues['published'] = 1;

				// unset Module (not stored)
				unset($arrValues['module']);


				// Trigger the save_callback
				foreach (array_keys($arrValues) as $field)
				{
					if (is_array($GLOBALS['TL_DCA']['tl_user_fav']['fields'][$fields]['save_callback']))
					{
						foreach ($GLOBALS['TL_DCA']['tl_user_fav']['fields'][$fields]['save_callback'] as $callback)
						{
							$this->import($callback[0]);
							$arrValues[$field] = $this->$callback[0]->$callback[1]($arrValues[$fields], $this);
						}
					}
				}

				$numRows = $this->Database->prepare("SELECT * FROM tl_user_fav WHERE href=? AND pid=?")
							   ->executeUncached($arrInfo['href'], $this->User->id)->numRows;

				if (!$numRows)
				{
				
					// Insert the entry
					$objInsertStmt = $this->Database->prepare("INSERT INTO tl_user_fav %s")
										->set($arrValues)
										->execute();
						
					if ($objInsertStmt->affectedRows)
					{
						$this->log('Inserted new favorite for user ID "'.$this->User->id.'"', 'Favorite updateFavorite', TL_ERROR);
						$this->createNewVersion('tl_user_fav', $objInsertStmt->insertId);
					}
					
				}
				
				break;
			
			case 'delete':
			
				$this->Database->prepare("DELETE FROM tl_user_fav WHERE href=?")
							   ->execute($arrValues['href']);

				break;
			
			default:;
		}

		$this->redirect($this->getReferer());
	
	}

}

?>