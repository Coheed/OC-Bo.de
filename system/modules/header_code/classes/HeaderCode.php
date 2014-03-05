<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * PHP version 5
 * @copyright  Leo Unglaub 2013
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    header_code
 * @license    LGPL
 */


/**
 * Class HeaderCode
 * Contain methods to handle the the header code
 */
class HeaderCode extends Controller
{
	/**
	 * Add the Header Code to the Site (Hook landing)
	 *
	 * @param	string	$strContent		The content of the template.
	 * @param	string	$strTemplate	The name of the template.
	 * @return	string					The content of the template.
	 */
	public function addHeaderCode($strContent, $strTemplate)
	{
		// make HC running only one time
		if ($GLOBALS['header_code_stop'] === true || TL_MODE != 'FE')
		{
			return $strContent;
		}

		global $objPage;
		$this->crawlTlPage($objPage->id);

		return $strContent;
	}

	/**
	 * crawl the page tree to find parrent entry's
	 *
	 * @param	int		$intId	The if of the page that should be parsed.
	 * @return	void			This method returns nothing.
	 */
	private function crawlTlPage($intId)
	{
		// define some variables
		$intOldId = $intId;
		$strBufferHead = '';
		$strBufferFoot = '';


		// walk thru every page until we hit 0
		while ($intId > 0)
		{
			$objRow = $this->getPageDetails($intId);

			// if the actual page has header code
			if ((strlen($objRow->hc_code) || strlen($objRow->hc_footer_code)) && $intOldId == $objRow->id)
			{
				if ($objRow->hc_mode == 1)
				{
					$strBufferHead .= PHP_EOL . $objRow->hc_code;
					$strBufferFoot .= PHP_EOL . $objRow->hc_footer_code;
				}
				else
				{
					$strBufferHead = $objRow->hc_code;
					$strBufferFoot = $objRow->hc_footer_code;

					// the user want's no inheritance code, so we break the while
					break;
				}
			}

			// check the parents
			if ((strlen($objRow->hc_code) || strlen($objRow->hc_footer_code)) && $intOldId !== $objRow->id && $objRow->hc_inheritance == 1)
			{
				if (count($objRow->hc_code))
				{
					$strBufferHead .= PHP_EOL . $objRow->hc_code;
				}

				if (count($objRow->hc_footer_code))
				{
					$strBufferFoot .= PHP_EOL . $objRow->hc_footer_code;
				}
			}

			// set the id to the next level to get the data from the parrent entry
			$intId = $objRow->pid;
		}


		// add the code to the right channel
		$GLOBALS['TL_HEAD'][] = $this->replaceInsertTags($strBufferHead);
		$GLOBALS['TL_MOOTOOLS'][] = $this->replaceInsertTags($strBufferFoot);


		// after the first run the code is in the header so we can skip all other templates
		$GLOBALS['header_code_stop'] = true;
	}
}

?>