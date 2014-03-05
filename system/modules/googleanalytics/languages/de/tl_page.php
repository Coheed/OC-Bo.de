<?php 

/**
 * PHP version 5
 * @copyright  Jan Theofel 2011-2012, ETES GmbH 2010
 * @author     Jan Theofel <jan@theofel.de>
 * @package    googleanalytics
 * @license    LGPL
 * @filesource
 */
 
// Fields
$GLOBALS['TL_LANG']['tl_page']['ga_analyticsid']	= array('ID für Google Analytics', 'ID für Google Analytics in der Form "UA-xxxxxxx-x"');
$GLOBALS['TL_LANG']['tl_page']['ga_anonymizeip']	= array('IP anonymisieren', 'IP Adresse anonymisiert an Google übertragen');
$GLOBALS['TL_LANG']['tl_page']['ga_eventtracking']	= array('Event Tracking vorbereiten', 'JS Code zum manuellen Event Tracking ergänzen');
$GLOBALS['TL_LANG']['tl_page']['ga_externaltracking']	= array('Externe Links tracken', 'JS Code zum Tracking externer URLs ergänzen');
$GLOBALS['TL_LANG']['tl_page']['ga_setdomainname']	= array('Cookie-Domainname setzen', 'Diese Domain für das Tracking Cookie verwenden.');
$GLOBALS['TL_LANG']['tl_page']['ga_addlinktracking']	= array('Alle externen Links tracken', 'Tracking für alle externen Links aktivieren. ACHTUNG: Überschreibt vorhandene onClick-Events für externe Links! Nur wenn diese bereits gaTrackLink oder gaTrackEvent enthalten werden diese belassen.');
$GLOBALS['TL_LANG']['tl_page']['ga_titlelinktracking']	= array('Gruppenname für automatisch getrackte Links', 'Name der Eventgruppe unter der automatisch getrackte Links eingetragen werden. Als Action wird die jeweilige URL gesetzt.');
$GLOBALS['TL_LANG']['tl_page']['ga_bounceseconds']	= array('Besucherzeit als Bounce definieren (Sekunden)', 'Bei Besuchen bis zu den hier eingegeben Sekunden wird der Besuch als Bounce gezählt. 0 zum deaktivieren. Empfohlene Werte: 5-10 Sekunden.');
$GLOBALS['TL_LANG']['tl_page']['ga_ignoreadmins']	= array('Keine Zählung für Admins', 'Google Analytics nicht verwenden, wenn man zugleich im Backend angemeldet ist.');
$GLOBALS['TL_LANG']['tl_page']['ga_ignoremembers']	= array('Keine Zählung für Mitglieder', 'Google Analytics nicht verwenden, wenn man als Mitglied auf der Seite angemeldet ist.');


// Legends
$GLOBALS['TL_LANG']['tl_page']['googleanalytics_legend']	= 'Google Analytics';
