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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_page']['hc_code']			= array('individual header code', 'Place here any header code. This may be META data, .js or .css code.');
$GLOBALS['TL_LANG']['tl_page']['hc_footer_code']	= array('individual footer code', 'Place here any footer code.  The footer code is placed before the closing div container from #wrapper.');
$GLOBALS['TL_LANG']['tl_page']['hc_inheritance']	= array('inherit code', 'Select Yes if you want to inheritance the header/footer code to every subpage. Select No to show this code only in the actual page.');
$GLOBALS['TL_LANG']['tl_page']['hc_mode']			= array('Select the display mode', 'Here you can select if you want to add the code from the actual site only or every code element witch is marked as inheritance.');


/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_page']['header_code_legend']= 'Header Code';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_page']['hc_mode_add']		= 'all (also inheritanced code)';
$GLOBALS['TL_LANG']['tl_page']['hc_mode_override']	= 'only the code from this site (no inheritance)';

?>