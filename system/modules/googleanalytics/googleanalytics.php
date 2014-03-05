<?php 

/**
 * PHP version 5
 * @copyright  Jan Theofel 2011-2012, ETES GmbH 2010
 * @author     Jan Theofel <jan@theofel.de>
 * @package    googleanalytics
 * @license    LGPL
 * @filesource
 */

class googleanalytics extends Frontend 
{

	protected $strTemplate = 'mod_googleanalytics';
		
	// hook for parseFrontendTemplate 
	public function addGoogleAnalytics($strContent, $strTemplate)
	{
		// GA already included
		if ($GLOBALS['googleanalytics_included']) 
		{
			return $strContent;
		}
		
		$GLOBALS['googleanalytics_included'] = 'true';
		global $objPage;     
		$root_details = $this->Database->prepare("SELECT * FROM tl_page WHERE id=?")->limit(1)->execute($objPage->rootId);
			
		if($root_details->numRows AND $root_details->ga_analyticsid != '')
		{
			// Ignore admins and/or members
			if (($root_details->ga_ignoreadmins AND $this->Input->Cookie('BE_USER_AUTH')) OR ($root_details->ga_ignoremembers AND FE_USER_LOGGED_IN))
			{
				return $strContent;
			}
			
			// parse template file
			$objTemplate = new FrontendTemplate($this->strTemplate);
			$objTemplate->id = $root_details->ga_analyticsid;
			$objTemplate->addTrackEvent = ($root_details->ga_externaltracking || $root_details->ga_eventtracking || $root_details->ga_addlinktracking);
			$objTemplate->addTrackEvent = $root_details->ga_externaltracking;
			$objTemplate->anonymizeIp = ($root_details->ga_anonymizeip || $GLOBALS['TL_CONFIG']['privacyAnonymizeGA']);
			$objTemplate->setDomainName = $root_details->ga_setdomainname;
			$objTemplate->bounceseconds = $root_details->ga_bounceseconds;
			$objTemplate->addlinktracking = $root_details->ga_addlinktracking;
			$objTemplate->titlelinktracking = $root_details->ga_titlelinktracking;
			
			$GLOBALS['TL_HEAD'][] = $objTemplate->parse();
		}
		return $strContent;
	}
  
	// function to add Googles TOS text with an insert tag
	// using switch to add other functions later
	public function gaInsertTag($strTag)
	{
	    $arrTag = explode('::', $strTag);

    	if (!$arrTag[0] == 'ga') return false;

    	switch($arrTag[1])
    	{
			// Insert article count
			case 'privacytext':
				return $GLOBALS['TL_LANG']['MSC']['gaprivacytext'];
				break;
		}

		return false;
	}
  
}
 
?>
