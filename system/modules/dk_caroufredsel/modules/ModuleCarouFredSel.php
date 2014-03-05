<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2013
 */


/**
 * Namespace
 */
namespace Dirch\carouFredSel;


/**
 * Class ModuleCarouFredSel
 *
 * Front end modul "caroufredsel".
 *
 * @copyright  Dirk Klemmt 2012-2013
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class ModuleCarouFredSel extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_caroufredsel';


	/**
	 * CSS Template
	 * @var string
	 */
	protected $strTemplateCss = 'css_caroufredsel';


	/**
	 * JS Template
	 * @var string
	 */
	protected $strTemplateJs = 'js_caroufredsel';


	/**
	 * Display a wildcard in the back end
	 *
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			// --- create BE template for carouFredSel module
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### CAROUFREDSEL MODUL ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		// replace default (HTML) template with chosen one
		if ($this->dk_cfsHtmlTpl)
		{
			$this->strTemplate = $this->dk_cfsHtmlTpl;
		}
		// replace default (CSS) template with chosen one
		if ($this->dk_cfsCssTpl)
		{
			$this->strTemplateCss = $this->dk_cfsCssTpl;
		}
		// replace default (JS) template with chosen one
		if ($this->dk_cfsJsTpl)
		{
			$this->strTemplateJs = $this->dk_cfsJsTpl;
		}

		return parent::generate();
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{
		// --- get content elements
		$arrElements = array();
		$objCte = \ContentModel::findPublishedByPidAndTable($this->dk_cfsCarouFredSel, 'tl_dk_caroufredsel');
		if ($objCte !== null)
		{
			while ($objCte->next())
			{
				$arrElements[] = $this->getContentElement($objCte->id);
			}
		}

		$this->Template->elements = $arrElements;

		// --- create FE template for css
		$objTemplateCss = new \FrontendTemplate($this->strTemplateCss);
		$objTemplateCss->id = $this->id;

		// --- create FE template for javascript caller
		$objTemplateJs = new \FrontendTemplate($this->strTemplateJs);
	
		// (unique) Element id will be used for unique HTML id element
		$objTemplateJs->id = $this->id;
	
		$carouFredSel = new CarouFredSel();
		$carouFredSel->createTemplateData($this->dk_cfsCarouFredSel, $this->type, $this->Template, $objTemplateCss, $objTemplateJs);
	}
}
