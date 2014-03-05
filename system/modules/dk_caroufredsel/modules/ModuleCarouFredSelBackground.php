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
 * Class ModuleCarouFredSelBackground
 *
 * Front end modul "caroufredsel_background".
 *
 * @copyright  Dirk Klemmt 2012-2013
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class ModuleCarouFredSelBackground extends \carouFredSel\ModuleCarouFredSelGallery
{

	/**
	 * Return if there are no files
	 *
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		parent::compile();
	}
}
