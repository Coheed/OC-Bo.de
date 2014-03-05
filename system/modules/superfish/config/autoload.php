<?php

/**
 * Superfish
 * Superfish menu jQuery plugin for Contao
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   superfish
 * @license   MIT (http://lionel-m.mit-license.org/)
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\Superfish' => 'system/modules/superfish/classes/Superfish.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'nav_superfish_horizontal' => 'system/modules/superfish/templates',
	'nav_superfish_navbar'     => 'system/modules/superfish/templates',
	'nav_superfish_vertical'   => 'system/modules/superfish/templates',
));