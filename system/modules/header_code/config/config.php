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
 * Hooks
 */
$GLOBALS['TL_HOOKS']['parseFrontendTemplate'][] = array('HeaderCode', 'addHeaderCode');

?>