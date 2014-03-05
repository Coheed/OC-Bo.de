<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Googleanalytics
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'googleanalytics' => 'system/modules/googleanalytics/googleanalytics.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_download_ga'      => 'system/modules/googleanalytics/templates',
	'ce_downloads_ga'     => 'system/modules/googleanalytics/templates',
	'mod_googleanalytics' => 'system/modules/googleanalytics/templates',
));
