<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package xls_export
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'xls_bof'          => 'system/modules/xls_export/vendor/biff.php',
	'fat_class'        => 'system/modules/xls_export/vendor/fat.php',
	'xls_font'         => 'system/modules/xls_export/vendor/font.php',
	'xls_mergedcells'  => 'system/modules/xls_export/vendor/mergedcells.php',
	'xls_palette'      => 'system/modules/xls_export/vendor/palette.php',
	'xls_picture'      => 'system/modules/xls_export/vendor/picture.php',
	'xls_xf'           => 'system/modules/xls_export/vendor/xf.php',
	'xlsexport'        => 'system/modules/xls_export/vendor/xls_export.php',
));
