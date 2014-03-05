<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   Efg
 * @author    Thomas Kuhn <mail@th-kuhn.de>
 * @license   http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @copyright Thomas Kuhn 2007-2014
 */

// This file is created when saving a form in form generator
// last created on 2014-02-21 21:30:00


/**
* to fix height of style class w50 in backend
*/
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'system/modules/efg/assets/w50_fix.css';
}


/**
 * Use class ExtendedForm
 */
$GLOBALS['FE_MOD']['application']['form'] = 'ExtendedForm';
$GLOBALS['TL_CTE']['includes']['form'] = 'ExtendedForm';


/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */

array_insert($GLOBALS['BE_MOD'], 1, array('formdata' => array()));

// this is used for the form independent "Feedback" module
$GLOBALS['BE_MOD']['formdata']['feedback'] = array
(
	'tables'     => array('tl_formdata', 'tl_formdata_details'),
	'icon'       => 'system/modules/efg/assets/formdata_all.gif',
	'stylesheet' => 'system/modules/efg/assets/style.css'
);

// following are used for the form dependent modules
$GLOBALS['BE_MOD']['formdata']['fd_anamnese'] = array
(
	'tables'     => array('tl_formdata', 'tl_formdata_details'),
	'import'     => array('FormdataBackend', 'importCsv'),
	'icon'       => 'system/modules/efg/assets/formdata.gif',
	'stylesheet' => 'system/modules/efg/assets/style.css'
);


/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */

array_insert($GLOBALS['FE_MOD']['application'], count($GLOBALS['FE_MOD']['application']), array
(
	'formdatalisting' => 'ModuleFormdataListing'
));


/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */

$GLOBALS['TL_HOOKS']['processFormData'][] = array('FormdataProcessor', 'processSubmittedData');
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('FormdataProcessor', 'processConfirmationContent');
$GLOBALS['TL_HOOKS']['listComments'][] = array('FormdataComments', 'listComments');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Formdata', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['executePostActions'][] = array('Formdata', 'executePostActions');
