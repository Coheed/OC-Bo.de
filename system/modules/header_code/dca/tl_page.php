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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace
(
	'{layout_legend:hide}',
	'{header_code_legend},hc_code,hc_footer_code,hc_inheritance,hc_mode;{layout_legend:hide}',
	$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
);

$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace
(
	'{dns_legend}',
	'{header_code_legend},hc_code,hc_footer_code,hc_inheritance,hc_mode;{dns_legend}',
	$GLOBALS['TL_DCA']['tl_page']['palettes']['root']
);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['hc_code'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['hc_code'],
	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'eval'			=> array
	(
		'tl_class'			=> 'long clr',
		'preserveTags'		=> true,
		'decodeEntities'	=> false,
		'allowHtml'			=> true,
		'style'				=> 'height:150px',
		'rte'				=> 'codeMirror|html',
	),
	'sql'			=> 'blob NULL',
);

$GLOBALS['TL_DCA']['tl_page']['fields']['hc_footer_code'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['hc_footer_code'],
	'exclude'		=> true,
	'inputType'		=> 'textarea',
	'eval'			=> array
	(
		'tl_class'			=> 'long clr',
		'preserveTags'		=> true,
		'decodeEntities'	=> false,
		'allowHtml'			=> true,
		'style'				=> 'height:150px',
		'rte'				=> 'codeMirror|html',
	),
	'sql'			=> 'blob NULL',
);

$GLOBALS['TL_DCA']['tl_page']['fields']['hc_inheritance'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['hc_inheritance'],
	'exclude'		=> true,
	'default'		=> 1,
	'inputType'		=> 'select',
	'options'  		=> array
	(
		1 => $GLOBALS['TL_LANG']['MSC']['yes'],
		0 => $GLOBALS['TL_LANG']['MSC']['no'],
	),
	'eval'			=> array
	(
		'tl_class' => 'w50',
	),
	'sql'			=> "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_page']['fields']['hc_mode'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['hc_mode'],
	'exclude'		=> true,
	'default'		=> 1,
	'inputType'		=> 'select',
	'options'		=> array
	(
		1 => $GLOBALS['TL_LANG']['tl_page']['hc_mode_add'],
		0 => $GLOBALS['TL_LANG']['tl_page']['hc_mode_override'],
	),
	'eval'			=> array
	(
		'tl_class' => 'w50',
	),
	'sql'			=> "char(1) NOT NULL default ''",
);

?>