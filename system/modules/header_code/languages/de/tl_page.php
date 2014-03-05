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
$GLOBALS['TL_LANG']['tl_page']['hc_code']			= array('individueller Headercode', 'Hier können Sie beliebigen Header-Code eingeben. Dass können META-Daten, .js oder .css-Code sein.');
$GLOBALS['TL_LANG']['tl_page']['hc_footer_code']	= array('individueller Footercode', 'Hier können Sie beliebigen Footer-Code eingeben. Der Footer Code wird vor dem schließenden div vom #wrapper eingefügt und ist somit gleich über dem Google Analytics Code.');
$GLOBALS['TL_LANG']['tl_page']['hc_inheritance']	= array('Code vererben', 'Wählen Sie Ja um den Header/Footer Code auf Unterseiten zu vererben. Wenn Sie Nein wählen wird dieser Header/Footer Code nicht vererbt und steht nur auf der aktuellen Seite zur Verfügung.');
$GLOBALS['TL_LANG']['tl_page']['hc_mode']			= array('Anzeigemethode', 'Die Anzeigemethode bestimmt ob nur der aktuelle Header/Footer Code angezeigt werden soll oder ob alle als zu vererbenden Objekte der ausgabe hinzugefügt werden sollen.');


/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_page']['header_code_legend']= 'Header Code';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_page']['hc_mode_add']		= 'alles (auch vererbten Code)';
$GLOBALS['TL_LANG']['tl_page']['hc_mode_override']	= 'nur den aktuellen Header/Footer Code ausgeben';

?>