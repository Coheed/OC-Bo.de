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
$GLOBALS['TL_LANG']['tl_page']['ga_analyticsid']	= array('Google Analytics ID', 'ID from Google Analytics (format: "UA-xxxxxxx-x")');
$GLOBALS['TL_LANG']['tl_page']['ga_anonymizeip']	= array('Anonymize IP', 'Anonymize IP before sending to Google');
$GLOBALS['TL_LANG']['tl_page']['ga_eventtracking']	= array('Add event tracking', 'Add the Javascript code for manual event tracking');
$GLOBALS['TL_LANG']['tl_page']['ga_externaltracking']	= array('Add external tracking ', 'Add the Javascript code for manual external URL tracking');
$GLOBALS['TL_LANG']['tl_page']['ga_setdomainname']	= array('Set cookie domain name', 'Use this domain name for tracking cookie.');
$GLOBALS['TL_LANG']['tl_page']['ga_addlinktracking']	= array('Track all external Links', 'Activates tracking for all external links. IMPORTANT: This removes all onClick events for external links. Only if they already contain gaTrackLink or gaTrackEvent they will not be removed.');
$GLOBALS['TL_LANG']['tl_page']['ga_titlelinktracking']	= array('Group name for automatically tracked links', 'Name for the event group in Google Analytics for automatically tracked events. The URL is used as action value.');
$GLOBALS['TL_LANG']['tl_page']['ga_bounceseconds']	= array('Visit time defined as bounce (seconds)', 'Visits with a time shorter than this are defined as bounce. 0 to turn off. Suggested values: 5-10 seconds.');
$GLOBALS['TL_LANG']['tl_page']['ga_ignoreadmins']	= array('Ignore admins', 'Do not use Google Analytics if the visitor is logged din to the backend.');
$GLOBALS['TL_LANG']['tl_page']['ga_ignoremembers']	= array('Ignore members', 'Do not use Google Analytics if the visitor is logged in as member of the web site.');

// Legends
$GLOBALS['TL_LANG']['tl_page']['googleanalytics_legend']	= 'Google Analytics';
