#================================================================================
# Contao-Website   : Contao Open Source CMS
# Contao-Database  : d018b6b6
# Saved by User    : rachidselma (rachid selma)
# Time stamp       : 2013-11-22 at 14:45:13
#
# Contao Extension : BackupDB, Version 3.0.0
# Copyright        : Softleister (www.softleister.de)
# Author           : Hagen Klemp
# Licence          : LGPL
#
# Visit Contao project page http://www.contao.org for more information
#
#-----------------------------------------------------
# Contao Version 3.2.0
# Folgende Module müssen installiert sein:
#-----------------------------------------------------
#   - botdetection                : Version 3.2.1 stable, Build 4
#   - content-slider              : Version 1.1.0 stable, Build 16
#   - dk_mmenu                    : Version 1.3.0 stable, Build 5
#   - extendedSEO                 : Version 1.2.0 stable, Build 12
#   - favorites                   : Version 3.1.0 stable, Build 25
#   - googleanalytics             : Version 1.4.0 stable, Build 9
#   - header_code                 : Version 3.0.1 stable, Build 2
#   - phpsass                     : Version 0.1.2 alpha1, Build 2
#   - superfish                   : Version 2.3.0 stable, Build 17
#
#================================================================================

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

#---------------------------------------------------------
# Table structure for table 'tl_article'
#---------------------------------------------------------
CREATE TABLE `tl_article` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `sorting` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `alias` varbinary(128)  NOT NULL default '',
  `author` int(10) unsigned  NOT NULL default '0',
  `inColumn` varchar(32) utf8_general_ci NOT NULL default '',
  `keywords` text utf8_general_ci NULL,
  `showTeaser` char(1) utf8_general_ci NOT NULL default '',
  `teaserCssID` varchar(255) utf8_general_ci NOT NULL default '',
  `teaser` text utf8_general_ci NULL,
  `printable` varchar(255) utf8_general_ci NOT NULL default '',
  `protected` char(1) utf8_general_ci NOT NULL default '',
  `groups` blob  NULL,
  `guests` char(1) utf8_general_ci NOT NULL default '',
  `cssID` varchar(255) utf8_general_ci NOT NULL default '',
  `space` varchar(64) utf8_general_ci NOT NULL default '',
  `published` char(1) utf8_general_ci NOT NULL default '',
  `start` varchar(10) utf8_general_ci NOT NULL default '',
  `stop` varchar(10) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;


#
# Dumping data for table 'tl_article'
#

INSERT INTO `tl_article` VALUES ( 1, 3, 128, 1384871015, 'Startseite', 'home', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 2, 4, 128, 1385038757, 'Philisophie', 'philisophie', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 3, 5, 128, 1385038767, 'Praxis', 'praxis', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 4, 6, 128, 1385038804, 'Menschen', 'menschen', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 5, 7, 128, 1385038830, 'Behandlung', 'behandlung', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 6, 8, 128, 1385038845, 'Aktuelles', 'aktuelles', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 7, 9, 128, 1385038850, 'Kontakt', 'kontakt', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 8, 10, 128, 1385038855, 'Sitemap', 'sitemap', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '', '', '' );
INSERT INTO `tl_article` VALUES ( 9, 11, 128, 1385038861, 'Impressum', 'impressum', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '', '', '' );
INSERT INTO `tl_article` VALUES ( 10, 12, 128, 1385038866, 'Datenschutz', 'datenschutz', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '', '', '' );
INSERT INTO `tl_article` VALUES ( 11, 14, 128, 1385039038, 'Überblick', 'ueberblick', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 12, 15, 128, 1385039043, 'Rundgang', 'rundgang', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '', '', '' );
INSERT INTO `tl_article` VALUES ( 13, 16, 128, 1385039052, 'Patienten-Appartement', 'patienten-appartement', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 14, 18, 128, 1385039148, 'Ärzteteam', 'aerzteteam', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 15, 19, 128, 1385039157, 'Mitarbeiter', 'mitarbeiter', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 16, 20, 128, 1385039162, 'Patienten', 'patienten', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 17, 21, 128, 1385039270, 'Leistungsspektrum', 'leistungsspektrum', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 18, 22, 128, 1385039276, 'Leistung im Überblick', 'leistung-im-ueberblick', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 19, 23, 128, 1385039283, 'Diagnostik', 'diagnostik', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 20, 24, 128, 1385039287, '3D-Computerplanung', 'id-3d-computerplanung', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 21, 25, 128, 1385039293, 'Implantologie', 'implantologie', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 22, 26, 128, 1385039303, 'Funkdiagnostik / CMD', 'funkdiagnostik-cmd', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '', '', '' );
INSERT INTO `tl_article` VALUES ( 23, 27, 128, 1385039308, 'Narkose', 'narkose', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 24, 29, 128, 1385039368, 'Feste Provision', 'feste-provision', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 25, 30, 128, 1385039374, 'Wenn ein Zahn fehlt', 'wenn-ein-zahn-fehlt', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 26, 32, 128, 1385039406, 'Mehrere Zähne fehlen', 'mehrere-zaehne-fehlen', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 27, 33, 128, 1385039419, 'Zahnloser Kiefer', 'zahnloser-kiefer', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 28, 34, 128, 1385039459, 'CMD / Diagnose', 'cmd-diagnose', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 29, 35, 128, 1385039468, 'CMD / Behandlung', 'cmd-behandlung', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );
INSERT INTO `tl_article` VALUES ( 30, 36, 128, 1385039475, 'CMD / Behandlung', 'cmd-behandlung-36', 1, 'main', NULL, '', '', NULL, '', '', NULL, '', '', '', '1', '', '' );

#---------------------------------------------------------
# Table structure for table 'tl_calendar'
#---------------------------------------------------------
CREATE TABLE `tl_calendar` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `protected` char(1) utf8_general_ci NOT NULL default '',
  `groups` blob  NULL,
  `allowComments` char(1) utf8_general_ci NOT NULL default '',
  `notify` varchar(32) utf8_general_ci NOT NULL default '',
  `sortOrder` varchar(32) utf8_general_ci NOT NULL default '',
  `perPage` smallint(5) unsigned  NOT NULL default '0',
  `moderate` char(1) utf8_general_ci NOT NULL default '',
  `bbcode` char(1) utf8_general_ci NOT NULL default '',
  `requireLogin` char(1) utf8_general_ci NOT NULL default '',
  `disableCaptcha` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_calendar' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_calendar_events'
#---------------------------------------------------------
CREATE TABLE `tl_calendar_events` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `alias` varbinary(128)  NOT NULL default '',
  `author` int(10) unsigned  NOT NULL default '0',
  `addTime` char(1) utf8_general_ci NOT NULL default '',
  `startTime` int(10) unsigned  NULL,
  `endTime` int(10) unsigned  NULL,
  `startDate` int(10) unsigned  NULL,
  `endDate` int(10) unsigned  NULL,
  `location` varchar(255) utf8_general_ci NOT NULL default '',
  `teaser` text utf8_general_ci NULL,
  `addImage` char(1) utf8_general_ci NOT NULL default '',
  `singleSRC` varchar(255) utf8_general_ci NOT NULL default '',
  `alt` varchar(255) utf8_general_ci NOT NULL default '',
  `size` varchar(64) utf8_general_ci NOT NULL default '',
  `imagemargin` varchar(128) utf8_general_ci NOT NULL default '',
  `imageUrl` varchar(255) utf8_general_ci NOT NULL default '',
  `fullsize` char(1) utf8_general_ci NOT NULL default '',
  `caption` varchar(255) utf8_general_ci NOT NULL default '',
  `floating` varchar(32) utf8_general_ci NOT NULL default '',
  `recurring` char(1) utf8_general_ci NOT NULL default '',
  `repeatEach` varchar(64) utf8_general_ci NOT NULL default '',
  `repeatEnd` int(10) unsigned  NOT NULL default '0',
  `recurrences` smallint(5) unsigned  NOT NULL default '0',
  `addEnclosure` char(1) utf8_general_ci NOT NULL default '',
  `enclosure` blob  NULL,
  `source` varchar(32) utf8_general_ci NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `articleId` int(10) unsigned  NOT NULL default '0',
  `url` varchar(255) utf8_general_ci NOT NULL default '',
  `target` char(1) utf8_general_ci NOT NULL default '',
  `cssClass` varchar(255) utf8_general_ci NOT NULL default '',
  `noComments` char(1) utf8_general_ci NOT NULL default '',
  `published` char(1) utf8_general_ci NOT NULL default '',
  `start` varchar(10) utf8_general_ci NOT NULL default '',
  `stop` varchar(10) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_calendar_events' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_calendar_feed'
#---------------------------------------------------------
CREATE TABLE `tl_calendar_feed` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `alias` varbinary(128)  NOT NULL default '',
  `language` varchar(32) utf8_general_ci NOT NULL default '',
  `calendars` blob  NULL,
  `format` varchar(32) utf8_general_ci NOT NULL default '',
  `source` varchar(32) utf8_general_ci NOT NULL default '',
  `maxItems` smallint(5) unsigned  NOT NULL default '0',
  `feedBase` varchar(255) utf8_general_ci NOT NULL default '',
  `description` text utf8_general_ci NULL,
  PRIMARY KEY  (`id`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_calendar_feed' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_comments'
#---------------------------------------------------------
CREATE TABLE `tl_comments` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `source` varchar(32) utf8_general_ci NOT NULL default '',
  `parent` int(10) unsigned  NOT NULL default '0',
  `date` varchar(64) utf8_general_ci NOT NULL default '',
  `name` varchar(64) utf8_general_ci NOT NULL default '',
  `email` varchar(255) utf8_general_ci NOT NULL default '',
  `website` varchar(128) utf8_general_ci NOT NULL default '',
  `comment` text utf8_general_ci NULL,
  `addReply` char(1) utf8_general_ci NOT NULL default '',
  `author` int(10) unsigned  NOT NULL default '0',
  `reply` text utf8_general_ci NULL,
  `published` char(1) utf8_general_ci NOT NULL default '',
  `ip` varchar(64) utf8_general_ci NOT NULL default '',
  `notified` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `source` (`source`),
  KEY `parent` (`parent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_comments' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_comments_notify'
#---------------------------------------------------------
CREATE TABLE `tl_comments_notify` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `source` varchar(32) utf8_general_ci NOT NULL default '',
  `parent` int(10) unsigned  NOT NULL default '0',
  `name` varchar(128) utf8_general_ci NOT NULL default '',
  `email` varchar(128) utf8_general_ci NOT NULL default '',
  `url` varchar(255) utf8_general_ci NOT NULL default '',
  `addedOn` varchar(10) utf8_general_ci NOT NULL default '',
  `ip` varchar(64) utf8_general_ci NOT NULL default '',
  `tokenConfirm` varchar(32) utf8_general_ci NOT NULL default '',
  `tokenRemove` varchar(32) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `source` (`source`),
  KEY `parent` (`parent`),
  KEY `tokenConfirm` (`tokenConfirm`),
  KEY `tokenRemove` (`tokenRemove`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_comments_notify' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_content'
#---------------------------------------------------------
CREATE TABLE `tl_content` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `ptable` varchar(64) utf8_general_ci NOT NULL default '',
  `sorting` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `type` varchar(32) utf8_general_ci NOT NULL default '',
  `headline` varchar(255) utf8_general_ci NOT NULL default '',
  `text` mediumtext utf8_general_ci NULL,
  `addImage` char(1) utf8_general_ci NOT NULL default '',
  `singleSRC` varchar(255) utf8_general_ci NOT NULL default '',
  `alt` varchar(255) utf8_general_ci NOT NULL default '',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `size` varchar(64) utf8_general_ci NOT NULL default '',
  `imagemargin` varchar(128) utf8_general_ci NOT NULL default '',
  `imageUrl` varchar(255) utf8_general_ci NOT NULL default '',
  `fullsize` char(1) utf8_general_ci NOT NULL default '',
  `caption` varchar(255) utf8_general_ci NOT NULL default '',
  `floating` varchar(32) utf8_general_ci NOT NULL default '',
  `html` mediumtext utf8_general_ci NULL,
  `listtype` varchar(32) utf8_general_ci NOT NULL default '',
  `listitems` blob  NULL,
  `tableitems` mediumblob  NULL,
  `summary` varchar(255) utf8_general_ci NOT NULL default '',
  `thead` char(1) utf8_general_ci NOT NULL default '',
  `tfoot` char(1) utf8_general_ci NOT NULL default '',
  `tleft` char(1) utf8_general_ci NOT NULL default '',
  `sortable` char(1) utf8_general_ci NOT NULL default '',
  `sortIndex` smallint(5) unsigned  NOT NULL default '0',
  `sortOrder` varchar(32) utf8_general_ci NOT NULL default '',
  `mooHeadline` varchar(255) utf8_general_ci NOT NULL default '',
  `mooStyle` varchar(255) utf8_general_ci NOT NULL default '',
  `mooClasses` varchar(255) utf8_general_ci NOT NULL default '',
  `highlight` varchar(32) utf8_general_ci NOT NULL default '',
  `shClass` varchar(255) utf8_general_ci NOT NULL default '',
  `code` text utf8_general_ci NULL,
  `url` varchar(255) utf8_general_ci NOT NULL default '',
  `target` char(1) utf8_general_ci NOT NULL default '',
  `titleText` varchar(255) utf8_general_ci NOT NULL default '',
  `linkTitle` varchar(255) utf8_general_ci NOT NULL default '',
  `embed` varchar(255) utf8_general_ci NOT NULL default '',
  `rel` varchar(64) utf8_general_ci NOT NULL default '',
  `useImage` char(1) utf8_general_ci NOT NULL default '',
  `multiSRC` blob  NULL,
  `orderSRC` text utf8_general_ci NULL,
  `useHomeDir` char(1) utf8_general_ci NOT NULL default '',
  `perRow` smallint(5) unsigned  NOT NULL default '0',
  `perPage` smallint(5) unsigned  NOT NULL default '0',
  `numberOfItems` smallint(5) unsigned  NOT NULL default '0',
  `sortBy` varchar(32) utf8_general_ci NOT NULL default '',
  `galleryTpl` varchar(64) utf8_general_ci NOT NULL default '',
  `playerSRC` blob  NULL,
  `youtube` varchar(16) utf8_general_ci NOT NULL default '',
  `posterSRC` varchar(255) utf8_general_ci NOT NULL default '',
  `playerSize` varchar(64) utf8_general_ci NOT NULL default '',
  `autoplay` char(1) utf8_general_ci NOT NULL default '',
  `sliderDelay` int(10) unsigned  NOT NULL default '0',
  `sliderSpeed` int(10) unsigned  NOT NULL default '300',
  `sliderStartSlide` smallint(5) unsigned  NOT NULL default '0',
  `sliderContinuous` char(1) utf8_general_ci NOT NULL default '',
  `cteAlias` int(10) unsigned  NOT NULL default '0',
  `articleAlias` int(10) unsigned  NOT NULL default '0',
  `article` int(10) unsigned  NOT NULL default '0',
  `form` int(10) unsigned  NOT NULL default '0',
  `module` int(10) unsigned  NOT NULL default '0',
  `protected` char(1) utf8_general_ci NOT NULL default '',
  `groups` blob  NULL,
  `guests` char(1) utf8_general_ci NOT NULL default '',
  `cssID` varchar(255) utf8_general_ci NOT NULL default '',
  `space` varchar(64) utf8_general_ci NOT NULL default '',
  `invisible` char(1) utf8_general_ci NOT NULL default '',
  `start` varchar(10) utf8_general_ci NOT NULL default '',
  `stop` varchar(10) utf8_general_ci NOT NULL default '',
  `com_order` varchar(32) utf8_general_ci NOT NULL default '',
  `com_perPage` smallint(5) unsigned  NOT NULL default '0',
  `com_moderate` char(1) utf8_general_ci NOT NULL default '',
  `com_bbcode` char(1) utf8_general_ci NOT NULL default '',
  `com_disableCaptcha` char(1) utf8_general_ci NOT NULL default '',
  `com_requireLogin` char(1) utf8_general_ci NOT NULL default '',
  `com_template` varchar(32) utf8_general_ci NOT NULL default '',
  `cslide_size` varchar(255) utf8_general_ci NOT NULL default '',
  `cslide_transition` varchar(255) utf8_general_ci NOT NULL default '',
  `cslide_transition_mode` varchar(255) utf8_general_ci NOT NULL default '',
  `cslide_duration` int(10) unsigned  NOT NULL default '0',
  `cslide_elem` varchar(255) utf8_general_ci NOT NULL default '',
  `cslide_autoplay` char(1) utf8_general_ci NOT NULL default '',
  `cslide_delay` int(10) unsigned  NOT NULL default '0',
  `cslide_addNavigation` char(1) utf8_general_ci NOT NULL default '',
  `cslide_addIndicator` char(1) utf8_general_ci NOT NULL default '',
  `cslide_slideleft` varchar(2) utf8_general_ci NOT NULL default '',
  `cslide_slideright` varchar(2) utf8_general_ci NOT NULL default '',
  `cslide_autoplayRandom` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `ptable` (`ptable`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


#
# Dumping data for table 'tl_content' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_cron'
#---------------------------------------------------------
CREATE TABLE `tl_cron` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `name` varchar(32) utf8_general_ci NOT NULL default '',
  `value` varchar(32) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;


#
# Dumping data for table 'tl_cron'
#

INSERT INTO `tl_cron` VALUES ( 1, 'lastrun', '1385043240' );
INSERT INTO `tl_cron` VALUES ( 2, 'monthly', '201311' );
INSERT INTO `tl_cron` VALUES ( 3, 'weekly', '201347' );
INSERT INTO `tl_cron` VALUES ( 4, 'daily', '20131121' );
INSERT INTO `tl_cron` VALUES ( 5, 'hourly', '0' );
INSERT INTO `tl_cron` VALUES ( 6, 'minutely', '0' );

#---------------------------------------------------------
# Table structure for table 'tl_extension'
#---------------------------------------------------------
CREATE TABLE `tl_extension` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(64) utf8_general_ci NOT NULL default '',
  `folder` varchar(48) utf8_general_ci NOT NULL default '',
  `author` varchar(128) utf8_general_ci NOT NULL default '',
  `copyright` varchar(128) utf8_general_ci NOT NULL default '',
  `package` varchar(64) utf8_general_ci NOT NULL default '',
  `license` varchar(64) utf8_general_ci NOT NULL default '',
  `addBeMod` char(1) utf8_general_ci NOT NULL default '',
  `beClasses` varchar(255) utf8_general_ci NOT NULL default '',
  `beTables` varchar(255) utf8_general_ci NOT NULL default '',
  `beTemplates` varchar(255) utf8_general_ci NOT NULL default '',
  `addFeMod` char(1) utf8_general_ci NOT NULL default '',
  `feClasses` varchar(255) utf8_general_ci NOT NULL default '',
  `feTables` varchar(255) utf8_general_ci NOT NULL default '',
  `feTemplates` varchar(255) utf8_general_ci NOT NULL default '',
  `addLanguage` char(1) utf8_general_ci NOT NULL default '',
  `languages` varchar(255) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_extension' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_faq'
#---------------------------------------------------------
CREATE TABLE `tl_faq` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `sorting` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `question` varchar(255) utf8_general_ci NOT NULL default '',
  `alias` varbinary(128)  NOT NULL default '',
  `author` int(10) unsigned  NOT NULL default '0',
  `answer` text utf8_general_ci NULL,
  `addImage` char(1) utf8_general_ci NOT NULL default '',
  `singleSRC` varchar(255) utf8_general_ci NOT NULL default '',
  `alt` varchar(255) utf8_general_ci NOT NULL default '',
  `size` varchar(64) utf8_general_ci NOT NULL default '',
  `imagemargin` varchar(128) utf8_general_ci NOT NULL default '',
  `imageUrl` varchar(255) utf8_general_ci NOT NULL default '',
  `fullsize` char(1) utf8_general_ci NOT NULL default '',
  `caption` varchar(255) utf8_general_ci NOT NULL default '',
  `floating` varchar(12) utf8_general_ci NOT NULL default '',
  `addEnclosure` char(1) utf8_general_ci NOT NULL default '',
  `enclosure` blob  NULL,
  `noComments` char(1) utf8_general_ci NOT NULL default '',
  `published` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_faq' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_faq_category'
#---------------------------------------------------------
CREATE TABLE `tl_faq_category` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `headline` varchar(255) utf8_general_ci NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `allowComments` char(1) utf8_general_ci NOT NULL default '',
  `notify` varchar(16) utf8_general_ci NOT NULL default '',
  `sortOrder` varchar(12) utf8_general_ci NOT NULL default '',
  `perPage` smallint(5) unsigned  NOT NULL default '0',
  `moderate` char(1) utf8_general_ci NOT NULL default '',
  `bbcode` char(1) utf8_general_ci NOT NULL default '',
  `requireLogin` char(1) utf8_general_ci NOT NULL default '',
  `disableCaptcha` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_faq_category' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_files'
#---------------------------------------------------------
CREATE TABLE `tl_files` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `type` varchar(16) utf8_general_ci NOT NULL default '',
  `path` blob  NULL,
  `extension` varchar(16) utf8_general_ci NOT NULL default '',
  `hash` varchar(32) utf8_general_ci NOT NULL default '',
  `found` char(1) utf8_general_ci NOT NULL default '1',
  `name` varbinary(255)  NOT NULL default '',
  `meta` blob  NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `extension` (`extension`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;


#
# Dumping data for table 'tl_files'
#

INSERT INTO `tl_files` VALUES ( 1, 0, 1384868167, 'folder', 0x66696c65732f6d757369635f61636164656d79, '', '45a21e51f6c63f582f0586a8e217aa92', '1', 'music_academy', NULL );
INSERT INTO `tl_files` VALUES ( 2, 1, 1384868167, 'folder', 0x66696c65732f6d757369635f61636164656d792f63616d707573, '', 'f6ffdac156ee92a19f87370e7612d423', '1', 'campus', NULL );
INSERT INTO `tl_files` VALUES ( 3, 2, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f63616d7075732f63616d7075735f6275696c64696e672e6a7067, 'jpg', 'a0ac423df6265537c7b1783ed9cbb698', '1', 'campus_building.jpg', NULL );
INSERT INTO `tl_files` VALUES ( 4, 2, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f63616d7075732f63616d7075735f68616c6c2e6a7067, 'jpg', '16074d6c3e3dfeb23d580715f486bff2', '1', 'campus_hall.jpg', NULL );
INSERT INTO `tl_files` VALUES ( 5, 2, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f63616d7075732f63616d7075735f6c6962726172792e6a7067, 'jpg', '1795dc0db4a1efcd2c390e3969ac3d3b', '1', 'campus_library.jpg', NULL );
INSERT INTO `tl_files` VALUES ( 6, 2, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f63616d7075732f63616d7075735f6f766572766965772e6a7067, 'jpg', '12360a385a87413fa9914d9f4b0f3113', '1', 'campus_overview.jpg', NULL );
INSERT INTO `tl_files` VALUES ( 7, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f61646d696e2e676966, 'gif', '37173d258871c781db2c025060e4f8ab', '1', 'admin.gif', NULL );
INSERT INTO `tl_files` VALUES ( 8, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f6261636b67726f756e642e676966, 'gif', 'b2a05c65803733133c981a2d4e386968', '1', 'background.gif', NULL );
INSERT INTO `tl_files` VALUES ( 9, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f66726f6e74656e646d6f64756c65732e676966, 'gif', '4f697b474f6d1e66f442c1c67d574a99', '1', 'frontendmodules.gif', NULL );
INSERT INTO `tl_files` VALUES ( 10, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f696d6167652e706e67, 'png', 'cb636d32a257f7b6337b7392afeab02d', '1', 'image.png', NULL );
INSERT INTO `tl_files` VALUES ( 11, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f6a616d65732d77696c736f6e2e6a7067, 'jpg', 'fd894d798786066577c9de8cbe9c1e38', '1', 'james-wilson.jpg', NULL );
INSERT INTO `tl_files` VALUES ( 12, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f6c61796f75742e676966, 'gif', 'ec5793c27e75e0426a69202d876733e2', '1', 'layout.gif', NULL );
INSERT INTO `tl_files` VALUES ( 13, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f6d6f64756c65732e676966, 'gif', 'cefbcdcc5facb958977376f2c46367dc', '1', 'modules.gif', NULL );
INSERT INTO `tl_files` VALUES ( 14, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f6e6577732e676966, 'gif', 'ee4c7b3e72fb750033036036176feace', '1', 'news.gif', NULL );
INSERT INTO `tl_files` VALUES ( 15, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f706167656d6f756e74732e676966, 'gif', '1317e91c34333dfd9bad071dd43e9f39', '1', 'pagemounts.gif', NULL );
INSERT INTO `tl_files` VALUES ( 16, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f7065726d697373696f6e732e676966, 'gif', 'edc93c562d750ea9e0b20052298f4aa5', '1', 'permissions.gif', NULL );
INSERT INTO `tl_files` VALUES ( 17, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f70726f746563742e676966, 'gif', '7d8c259b52dc2fe5ccd8b8ea7e8090fb', '1', 'protect.gif', NULL );
INSERT INTO `tl_files` VALUES ( 18, 1, 1384868167, 'file', 0x66696c65732f6d757369635f61636164656d792f73637265656e73686f742e6a7067, 'jpg', 'bc787a96a23265d4de60c9d1c8e21580', '1', 'screenshot.jpg', NULL );
INSERT INTO `tl_files` VALUES ( 19, 0, 1384868167, 'folder', 0x66696c65732f74696e795f74656d706c61746573, '', '3cb25412587bbaedd9901598abd93284', '1', 'tiny_templates', NULL );
INSERT INTO `tl_files` VALUES ( 20, 19, 1384868167, 'file', 0x66696c65732f74696e795f74656d706c617465732f696e6465782e68746d6c, 'html', 'aeebec42dc0335ea1e0853f4393259b4', '1', 'index.html', NULL );
INSERT INTO `tl_files` VALUES ( 21, 0, 1384868167, 'file', 0x66696c65732f74696e796d63652e637373, 'css', 'e6cfd2993ed50341da010e66be287d2d', '1', 'tinymce.css', NULL );
INSERT INTO `tl_files` VALUES ( 22, 0, 1384870312, 'folder', 0x66696c65732f4175746f4261636b75704442, '', 'a7d445d29fda627840567ea2696a41b0', '1', 'AutoBackupDB', NULL );
INSERT INTO `tl_files` VALUES ( 23, 22, 1384870312, 'file', 0x66696c65732f4175746f4261636b757044422f2e6874616363657373, 'htaccess', 'bff88aa9f255706dd1e53e330cb1a7b7', '1', '.htaccess', NULL );
INSERT INTO `tl_files` VALUES ( 24, 0, 1384870446, 'folder', 0x66696c65732f737570657266697368, '', 'aac4bef0bfa0d9641711aa6a2b5f3ef8', '1', 'superfish', NULL );
INSERT INTO `tl_files` VALUES ( 25, 24, 1384870446, 'folder', 0x66696c65732f7375706572666973682f637373, '', 'acce6be3c98dcc9a528252920e2586a0', '1', 'css', NULL );
INSERT INTO `tl_files` VALUES ( 26, 25, 1384870446, 'file', 0x66696c65732f7375706572666973682f6373732f7375706572666973682d626173652e637373, 'css', 'f13bd58f1b03af76311f875a3324fd5b', '1', 'superfish-base.css', NULL );
INSERT INTO `tl_files` VALUES ( 27, 25, 1384870446, 'file', 0x66696c65732f7375706572666973682f6373732f7375706572666973682d6e61766261722e637373, 'css', 'b21c8ac969af1b851d334cd520c15811', '1', 'superfish-navbar.css', NULL );
INSERT INTO `tl_files` VALUES ( 28, 25, 1384870446, 'file', 0x66696c65732f7375706572666973682f6373732f7375706572666973682d766572746963616c2e637373, 'css', 'e6c478ac4e8e188f127a6bc04573d85b', '1', 'superfish-vertical.css', NULL );
INSERT INTO `tl_files` VALUES ( 29, 25, 1384870446, 'file', 0x66696c65732f7375706572666973682f6373732f7375706572666973682e637373, 'css', '496b89d1a4cc89a8eed36ac269361baf', '1', 'superfish.css', NULL );
INSERT INTO `tl_files` VALUES ( 30, 0, 1384870645, 'folder', 0x66696c65732f6f63, '', 'b4c353b2eb46899f132a12b0f9022e6f', '1', 'oc', NULL );
INSERT INTO `tl_files` VALUES ( 31, 30, 1384870645, 'folder', 0x66696c65732f6f632f73637373, '', '438cf37ca75374cd9726b5d50583259e', '1', 'scss', NULL );
INSERT INTO `tl_files` VALUES ( 32, 31, 1384870645, 'file', 0x66696c65732f6f632f736373732f6772696470616b2e73637373, 'scss', '9f3fd4dc25701cfff5ea7e4d5a5ca68f', '1', 'gridpak.scss', NULL );
INSERT INTO `tl_files` VALUES ( 33, 30, 1384870665, 'folder', 0x66696c65732f6f632f637373, '', '12feba5881404e8e88fca7b840e5329b', '1', 'css', NULL );
INSERT INTO `tl_files` VALUES ( 34, 31, 1384870692, 'folder', 0x66696c65732f6f632f736373732f657874656e73696f6e73, '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 'extensions', NULL );
INSERT INTO `tl_files` VALUES ( 35, 30, 1384870714, 'folder', 0x66696c65732f6f632f696d61676573, '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 'images', NULL );
INSERT INTO `tl_files` VALUES ( 36, 30, 1384870719, 'folder', 0x66696c65732f6f632f6a73, '', 'bd48562a01d907ab070f59a1cd849af3', '1', 'js', NULL );
INSERT INTO `tl_files` VALUES ( 37, 36, 1384870719, 'file', 0x66696c65732f6f632f6a732f6772696470616b2e6a73, 'js', 'b6c825184b244d0b29b3eb5133116597', '1', 'gridpak.js', NULL );
INSERT INTO `tl_files` VALUES ( 38, 33, 1384871092, 'file', 0x66696c65732f6f632f6373732f6772696470616b2e637373, 'css', 'e3d9e0044789302f595b8140a5062d64', '1', 'gridpak.css', NULL );
INSERT INTO `tl_files` VALUES ( 39, 33, 1384871162, 'file', 0x66696c65732f6f632f6373732f6d61696e2e637373, 'css', 'e3d9e0044789302f595b8140a5062d64', '1', 'main.css', NULL );
INSERT INTO `tl_files` VALUES ( 40, 33, 1385127468, 'file', 0x66696c65732f6f632f6373732f3332302e637373, 'css', 'f05188b5ed99dababce6d6788e4fdf63', '1', '320.css', NULL );

#---------------------------------------------------------
# Table structure for table 'tl_form'
#---------------------------------------------------------
CREATE TABLE `tl_form` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `alias` varbinary(128)  NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `sendViaEmail` char(1) utf8_general_ci NOT NULL default '',
  `recipient` text utf8_general_ci NULL,
  `subject` varchar(255) utf8_general_ci NOT NULL default '',
  `format` varchar(12) utf8_general_ci NOT NULL default '',
  `skipEmpty` char(1) utf8_general_ci NOT NULL default '',
  `storeValues` char(1) utf8_general_ci NOT NULL default '',
  `targetTable` varchar(64) utf8_general_ci NOT NULL default '',
  `method` varchar(12) utf8_general_ci NOT NULL default '',
  `novalidate` char(1) utf8_general_ci NOT NULL default '',
  `attributes` varchar(255) utf8_general_ci NOT NULL default '',
  `formID` varchar(64) utf8_general_ci NOT NULL default '',
  `tableless` char(1) utf8_general_ci NOT NULL default '',
  `allowTags` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_form' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_form_field'
#---------------------------------------------------------
CREATE TABLE `tl_form_field` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `sorting` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `invisible` char(1) utf8_general_ci NOT NULL default '',
  `type` varchar(32) utf8_general_ci NOT NULL default '',
  `name` varchar(64) utf8_general_ci NOT NULL default '',
  `label` varchar(255) utf8_general_ci NOT NULL default '',
  `text` text utf8_general_ci NULL,
  `html` text utf8_general_ci NULL,
  `options` blob  NULL,
  `mandatory` char(1) utf8_general_ci NOT NULL default '',
  `rgxp` varchar(32) utf8_general_ci NOT NULL default '',
  `placeholder` varchar(255) utf8_general_ci NOT NULL default '',
  `maxlength` int(10) unsigned  NOT NULL default '0',
  `size` varchar(255) utf8_general_ci NOT NULL default '',
  `multiple` char(1) utf8_general_ci NOT NULL default '',
  `mSize` smallint(5) unsigned  NOT NULL default '0',
  `extensions` varchar(255) utf8_general_ci NOT NULL default '',
  `storeFile` char(1) utf8_general_ci NOT NULL default '',
  `uploadFolder` varchar(255) utf8_general_ci NOT NULL default '',
  `useHomeDir` char(1) utf8_general_ci NOT NULL default '',
  `doNotOverwrite` char(1) utf8_general_ci NOT NULL default '',
  `fsType` varchar(32) utf8_general_ci NOT NULL default '',
  `class` varchar(255) utf8_general_ci NOT NULL default '',
  `value` varchar(255) utf8_general_ci NOT NULL default '',
  `accesskey` char(1) utf8_general_ci NOT NULL default '',
  `tabindex` smallint(5) unsigned  NOT NULL default '0',
  `fSize` smallint(5) unsigned  NOT NULL default '0',
  `addSubmit` char(1) utf8_general_ci NOT NULL default '',
  `slabel` varchar(255) utf8_general_ci NOT NULL default '',
  `imageSubmit` char(1) utf8_general_ci NOT NULL default '',
  `singleSRC` varchar(255) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_form_field' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_layout'
#---------------------------------------------------------
CREATE TABLE `tl_layout` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `name` varchar(255) utf8_general_ci NOT NULL default '',
  `rows` varchar(8) utf8_general_ci NOT NULL default '',
  `headerHeight` varchar(255) utf8_general_ci NOT NULL default '',
  `footerHeight` varchar(255) utf8_general_ci NOT NULL default '',
  `cols` varchar(8) utf8_general_ci NOT NULL default '',
  `widthLeft` varchar(255) utf8_general_ci NOT NULL default '',
  `widthRight` varchar(255) utf8_general_ci NOT NULL default '',
  `sections` blob  NULL,
  `sPosition` varchar(32) utf8_general_ci NOT NULL default '',
  `framework` varchar(255) utf8_general_ci NOT NULL default '',
  `stylesheet` blob  NULL,
  `external` blob  NULL,
  `orderExt` text utf8_general_ci NULL,
  `newsfeeds` blob  NULL,
  `calendarfeeds` blob  NULL,
  `modules` blob  NULL,
  `template` varchar(64) utf8_general_ci NOT NULL default '',
  `doctype` varchar(32) utf8_general_ci NOT NULL default '',
  `webfonts` varchar(255) utf8_general_ci NOT NULL default '',
  `cssClass` varchar(255) utf8_general_ci NOT NULL default '',
  `onload` varchar(255) utf8_general_ci NOT NULL default '',
  `head` text utf8_general_ci NULL,
  `addJQuery` char(1) utf8_general_ci NOT NULL default '',
  `jSource` varchar(16) utf8_general_ci NOT NULL default '',
  `jquery` text utf8_general_ci NULL,
  `addMooTools` char(1) utf8_general_ci NOT NULL default '',
  `mooSource` varchar(16) utf8_general_ci NOT NULL default '',
  `mootools` text utf8_general_ci NULL,
  `analytics` varchar(64) utf8_general_ci NOT NULL default '',
  `script` text utf8_general_ci NULL,
  `static` char(1) utf8_general_ci NOT NULL default '',
  `width` varchar(255) utf8_general_ci NOT NULL default '',
  `align` varchar(32) utf8_general_ci NOT NULL default '',
  `superfish` char(1) utf8_general_ci NOT NULL default '',
  `hoverIntent` char(1) utf8_general_ci NOT NULL default '',
  `sf_disableHI` char(1) utf8_general_ci NOT NULL default '',
  `supersubs` char(1) utf8_general_ci NOT NULL default '',
  `sf_delay` int(10) unsigned  NOT NULL default '200',
  `sf_speed` varchar(32) utf8_general_ci NOT NULL default 'normal',
  `sf_speedOut` varchar(32) utf8_general_ci NOT NULL default 'fast',
  `sf_cssArrows` char(1) utf8_general_ci NOT NULL default '1',
  `sf_minWidth` int(10) unsigned  NOT NULL default '12',
  `sf_maxWidth` int(10) unsigned  NOT NULL default '27',
  `sf_extraWidth` int(10) unsigned  NOT NULL default '1',
  `sf_hoverClass` varchar(32) utf8_general_ci NOT NULL default 'sfHover',
  `sf_pathClass` varchar(32) utf8_general_ci NOT NULL default '',
  `sf_animation` text utf8_general_ci NULL,
  `sf_animationOut` text utf8_general_ci NULL,
  `sf_onInit` text utf8_general_ci NULL,
  `sf_onBeforeShow` text utf8_general_ci NULL,
  `sf_onShow` text utf8_general_ci NULL,
  `sf_onHide` text utf8_general_ci NULL,
  `sf_onIdle` text utf8_general_ci NULL,
  `sf_pathLevels` int(10) unsigned  NOT NULL default '1',
  `sf_onBeforeHide` text utf8_general_ci NULL,
  `sf_onDestroy` text utf8_general_ci NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


#
# Dumping data for table 'tl_layout'
#

INSERT INTO `tl_layout` VALUES ( 1, 1, 1385127565, 'oc', '3rw', 'a:2:{s:4:"unit";s:0:"";s:5:"value";s:0:"";}', 'a:2:{s:4:"unit";s:0:"";s:5:"value";s:0:"";}', '1cl', '', '', '', 'main', 'a:1:{i:0;s:10:"layout.css";}', '', 0x613a353a7b693a303b693a33393b693a313b693a32363b693a323b693a32373b693a333b693a32393b693a343b693a32313b7d, '26,29,27,21,39', '', '', 0x613a343a7b693a303b613a333a7b733a333a226d6f64223b733a313a2232223b733a333a22636f6c223b733a363a22686561646572223b733a363a22656e61626c65223b733a313a2231223b7d693a313b613a333a7b733a333a226d6f64223b733a313a2237223b733a333a22636f6c223b733a363a22686561646572223b733a363a22656e61626c65223b733a313a2231223b7d693a323b613a333a7b733a333a226d6f64223b733a313a2238223b733a333a22636f6c223b733a363a22686561646572223b733a363a22656e61626c65223b733a313a2231223b7d693a333b613a333a7b733a333a226d6f64223b733a313a2234223b733a333a22636f6c223b733a343a226d61696e223b733a363a22656e61626c65223b733a313a2231223b7d7d, 'fe_page', 'html5', '', '', '', '', '1', 'j_local', '', '', 'moo_local', NULL, 'a:1:{i:0;s:16:"analytics_google";}', '', '', '', 'center', '1', '', '', '', 200, 'normal', 'fast', '1', 12, 27, 1, 'sfHover', '', '', '', '', '', '', '', '', 1, '', '' );

#---------------------------------------------------------
# Table structure for table 'tl_log'
#---------------------------------------------------------
CREATE TABLE `tl_log` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `source` varchar(32) utf8_general_ci NOT NULL default '',
  `action` varchar(32) utf8_general_ci NOT NULL default '',
  `username` varchar(64) utf8_general_ci NOT NULL default '',
  `text` text utf8_general_ci NULL,
  `func` varchar(255) utf8_general_ci NOT NULL default '',
  `ip` varchar(64) utf8_general_ci NOT NULL default '',
  `browser` varchar(255) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;


#
# Dumping data for table 'tl_log'
#

INSERT INTO `tl_log` VALUES ( 1, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the system log', 'Automator purgeSystemLog()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 2, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the page cache', 'Automator purgePageCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 3, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the image cache', 'Automator purgeImageCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 4, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the page cache', 'Automator purgePageCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 5, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the script cache', 'Automator purgeScriptCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 6, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the page cache', 'Automator purgePageCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 7, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the search cache', 'Automator purgePageCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 8, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the internal cache', 'Automator purgeInternalCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 9, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the temp folder', 'Automator purgeTempFolder()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 10, 1385127666, 'BE', 'CRON', 'rachidselma', 'Purged the page cache', 'Automator purgePageCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 11, 1385127666, 'BE', 'CRON', 'rachidselma', 'Regenerated the XML files', 'Automator generateXmlFiles()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 12, 1385127671, 'BE', 'CRON', 'rachidselma', 'Purged the internal cache', 'Automator purgeInternalCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 13, 1385127671, 'BE', 'CRON', 'rachidselma', 'Generated the autoload cache', 'Automator generateDcaCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 14, 1385127671, 'BE', 'CRON', 'rachidselma', 'Generated the DCA cache', 'Automator generateDcaCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 15, 1385127683, 'BE', 'CRON', 'rachidselma', 'Generated the language cache', 'Automator generateLanguageCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 16, 1385127683, 'BE', 'CRON', 'rachidselma', 'Generated the DCA extracts', 'Automator generateDcaExtracts()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 17, 1385127815, 'BE', 'CRON', 'rachidselma', 'Purged the page cache', 'Automator purgePageCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 18, 1385127815, 'BE', 'CRON', 'rachidselma', 'Purged the script cache', 'Automator purgeScriptCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 19, 1385127815, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;debugMode&quot; has been changed from &quot;true&quot; to &quot;1&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 20, 1385127815, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;defaultUser&quot; has been changed from &quot;0&quot; to &quot;&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 21, 1385127815, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;defaultGroup&quot; has been changed from &quot;0&quot; to &quot;&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 22, 1385127815, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;repository_unsafe_catalog&quot; has been changed from &quot;&quot; to &quot;&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 23, 1385127815, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;backupdb_zip&quot; has been changed from &quot;&quot; to &quot;&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 24, 1385127815, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;backupdb_sendmail&quot; has been changed from &quot;&quot; to &quot;&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 25, 1385127815, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;backupdb_attmail&quot; has been changed from &quot;&quot; to &quot;&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 26, 1385127836, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;minifyMarkup&quot; has been changed from &quot;false&quot; to &quot;1&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 27, 1385127836, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;gzipScripts&quot; has been changed from &quot;false&quot; to &quot;1&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 28, 1385128686, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;minifyMarkup&quot; has been changed from &quot;true&quot; to &quot;&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 29, 1385128686, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;gzipScripts&quot; has been changed from &quot;true&quot; to &quot;&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 30, 1385128686, 'BE', 'CRON', 'rachidselma', 'Purged the page cache', 'Automator purgePageCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 31, 1385128686, 'BE', 'CRON', 'rachidselma', 'Purged the script cache', 'Automator purgeScriptCache()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 32, 1385128686, 'BE', 'CONFIGURATION', 'rachidselma', 'The global configuration variable &quot;debugMode&quot; has been changed from &quot;false&quot; to &quot;&quot;', 'DC_File save()', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 33, 1385130621, 'BE', 'ACCESS', 'rachidselma', 'User &quot;rachidselma&quot; has logged out', 'Contao\\User::logout', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 34, 1385130627, 'BE', 'ACCESS', 'rachidselma', 'User &quot;rachidselma&quot; has logged in', 'Contao\\User::login', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 35, 1385131255, 'FE', 'ERROR', '', 'No active page for page ID &quot;3&quot;, host &quot;www.oralchirurgie-bochum.de&quot; and languages &quot;de-DE, de, en-US, en&quot; (http://www.oralchirurgie-bochum.de/core/)', 'Contao\\PageError404::generate', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 36, 1385131264, 'FE', 'ERROR', '', 'No active page for page ID &quot;3&quot;, host &quot;www.oralchirurgie-bochum.de&quot; and languages &quot;de-DE, de, en-US, en&quot; (http://www.oralchirurgie-bochum.de/core/)', 'Contao\\PageError404::generate', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 37, 1385131279, 'FE', 'ERROR', '', 'No active page for page ID &quot;3&quot;, host &quot;www.oralchirurgie-bochum.de&quot; and languages &quot;de-DE, de, en-US, en&quot; (http://www.oralchirurgie-bochum.de/core/)', 'Contao\\PageError404::generate', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 38, 1385131290, 'FE', 'ERROR', '', 'No active page for page ID &quot;3&quot;, host &quot;www.oralchirurgie-bochum.de&quot; and languages &quot;de-DE, de, en-US, en&quot; (http://www.oralchirurgie-bochum.de/core/)', 'Contao\\PageError404::generate', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 39, 1385131292, 'FE', 'ERROR', '', 'No active page for page ID &quot;3&quot;, host &quot;www.oralchirurgie-bochum.de&quot; and languages &quot;de-DE, de, en-US, en&quot; (http://www.oralchirurgie-bochum.de/core/)', 'Contao\\PageError404::generate', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 40, 1385131298, 'BE', 'ACCESS', 'rachidselma', 'User &quot;rachidselma&quot; has logged out', 'Contao\\User::logout', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );
INSERT INTO `tl_log` VALUES ( 41, 1385131412, 'BE', 'ACCESS', 'rachidselma', 'User &quot;rachidselma&quot; has logged in', 'Contao\\User::login', '93.232.25.0', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0' );

#---------------------------------------------------------
# Table structure for table 'tl_member'
#---------------------------------------------------------
CREATE TABLE `tl_member` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `firstname` varchar(255) utf8_general_ci NOT NULL default '',
  `lastname` varchar(255) utf8_general_ci NOT NULL default '',
  `dateOfBirth` varchar(11) utf8_general_ci NOT NULL default '',
  `gender` varchar(32) utf8_general_ci NOT NULL default '',
  `company` varchar(255) utf8_general_ci NOT NULL default '',
  `street` varchar(255) utf8_general_ci NOT NULL default '',
  `postal` varchar(32) utf8_general_ci NOT NULL default '',
  `city` varchar(255) utf8_general_ci NOT NULL default '',
  `state` varchar(64) utf8_general_ci NOT NULL default '',
  `country` varchar(2) utf8_general_ci NOT NULL default '',
  `phone` varchar(64) utf8_general_ci NOT NULL default '',
  `mobile` varchar(64) utf8_general_ci NOT NULL default '',
  `fax` varchar(64) utf8_general_ci NOT NULL default '',
  `email` varchar(255) utf8_general_ci NOT NULL default '',
  `website` varchar(255) utf8_general_ci NOT NULL default '',
  `language` varchar(5) utf8_general_ci NOT NULL default '',
  `groups` blob  NULL,
  `login` char(1) utf8_general_ci NOT NULL default '',
  `username` varchar(64) utf8_general_ci NOT NULL default '',
  `password` varchar(128) utf8_general_ci NOT NULL default '',
  `assignDir` char(1) utf8_general_ci NOT NULL default '',
  `homeDir` varchar(255) utf8_general_ci NOT NULL default '',
  `disable` char(1) utf8_general_ci NOT NULL default '',
  `start` varchar(10) utf8_general_ci NOT NULL default '',
  `stop` varchar(10) utf8_general_ci NOT NULL default '',
  `dateAdded` int(10) unsigned  NOT NULL default '0',
  `lastLogin` int(10) unsigned  NOT NULL default '0',
  `currentLogin` int(10) unsigned  NOT NULL default '0',
  `loginCount` smallint(5) unsigned  NOT NULL default '3',
  `locked` int(10) unsigned  NOT NULL default '0',
  `session` blob  NULL,
  `autologin` varchar(32) utf8_general_ci NULL default NULL,
  `createdOn` int(10) unsigned  NOT NULL default '0',
  `activation` varchar(32) utf8_general_ci NOT NULL default '',
  `newsletter` blob  NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `autologin` (`autologin`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `activation` (`activation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_member' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_member_group'
#---------------------------------------------------------
CREATE TABLE `tl_member_group` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `name` varchar(255) utf8_general_ci NOT NULL default '',
  `redirect` char(1) utf8_general_ci NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `disable` char(1) utf8_general_ci NOT NULL default '',
  `start` varchar(10) utf8_general_ci NOT NULL default '',
  `stop` varchar(10) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_member_group' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_module'
#---------------------------------------------------------
CREATE TABLE `tl_module` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `name` varchar(255) utf8_general_ci NOT NULL default '',
  `headline` varchar(255) utf8_general_ci NOT NULL default '',
  `type` varchar(64) utf8_general_ci NOT NULL default '',
  `levelOffset` smallint(5) unsigned  NOT NULL default '0',
  `showLevel` smallint(5) unsigned  NOT NULL default '0',
  `hardLimit` char(1) utf8_general_ci NOT NULL default '',
  `showProtected` char(1) utf8_general_ci NOT NULL default '',
  `defineRoot` char(1) utf8_general_ci NOT NULL default '',
  `rootPage` int(10) unsigned  NOT NULL default '0',
  `navigationTpl` varchar(64) utf8_general_ci NOT NULL default '',
  `pages` blob  NULL,
  `orderPages` text utf8_general_ci NULL,
  `showHidden` char(1) utf8_general_ci NOT NULL default '',
  `customLabel` varchar(64) utf8_general_ci NOT NULL default '',
  `autologin` char(1) utf8_general_ci NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `redirectBack` char(1) utf8_general_ci NOT NULL default '',
  `cols` varchar(32) utf8_general_ci NOT NULL default '',
  `editable` blob  NULL,
  `memberTpl` varchar(64) utf8_general_ci NOT NULL default '',
  `tableless` char(1) utf8_general_ci NOT NULL default '',
  `form` int(10) unsigned  NOT NULL default '0',
  `queryType` varchar(32) utf8_general_ci NOT NULL default '',
  `fuzzy` char(1) utf8_general_ci NOT NULL default '',
  `contextLength` smallint(5) unsigned  NOT NULL default '0',
  `totalLength` smallint(5) unsigned  NOT NULL default '0',
  `perPage` smallint(5) unsigned  NOT NULL default '0',
  `searchType` varchar(32) utf8_general_ci NOT NULL default '',
  `searchTpl` varchar(64) utf8_general_ci NOT NULL default '',
  `inColumn` varchar(32) utf8_general_ci NOT NULL default '',
  `skipFirst` smallint(5) unsigned  NOT NULL default '0',
  `loadFirst` char(1) utf8_general_ci NOT NULL default '',
  `size` varchar(64) utf8_general_ci NOT NULL default '',
  `transparent` char(1) utf8_general_ci NOT NULL default '',
  `flashvars` varchar(255) utf8_general_ci NOT NULL default '',
  `altContent` text utf8_general_ci NULL,
  `source` varchar(32) utf8_general_ci NOT NULL default '',
  `singleSRC` varchar(255) utf8_general_ci NOT NULL default '',
  `url` varchar(255) utf8_general_ci NOT NULL default '',
  `interactive` char(1) utf8_general_ci NOT NULL default '',
  `flashID` varchar(64) utf8_general_ci NOT NULL default '',
  `flashJS` text utf8_general_ci NULL,
  `imgSize` varchar(64) utf8_general_ci NOT NULL default '',
  `useCaption` char(1) utf8_general_ci NOT NULL default '',
  `fullsize` char(1) utf8_general_ci NOT NULL default '',
  `multiSRC` blob  NULL,
  `orderSRC` text utf8_general_ci NULL,
  `html` text utf8_general_ci NULL,
  `rss_cache` int(10) unsigned  NOT NULL default '0',
  `rss_feed` text utf8_general_ci NULL,
  `rss_template` varchar(32) utf8_general_ci NOT NULL default '',
  `numberOfItems` smallint(5) unsigned  NOT NULL default '0',
  `disableCaptcha` char(1) utf8_general_ci NOT NULL default '',
  `reg_groups` blob  NULL,
  `reg_allowLogin` char(1) utf8_general_ci NOT NULL default '',
  `reg_skipName` char(1) utf8_general_ci NOT NULL default '',
  `reg_close` varchar(32) utf8_general_ci NOT NULL default '',
  `reg_assignDir` char(1) utf8_general_ci NOT NULL default '',
  `reg_homeDir` varchar(255) utf8_general_ci NOT NULL default '',
  `reg_activate` char(1) utf8_general_ci NOT NULL default '',
  `reg_jumpTo` int(10) unsigned  NOT NULL default '0',
  `reg_text` text utf8_general_ci NULL,
  `reg_password` text utf8_general_ci NULL,
  `protected` char(1) utf8_general_ci NOT NULL default '',
  `groups` blob  NULL,
  `guests` char(1) utf8_general_ci NOT NULL default '',
  `cssID` varchar(255) utf8_general_ci NOT NULL default '',
  `space` varchar(64) utf8_general_ci NOT NULL default '',
  `cal_calendar` blob  NULL,
  `cal_noSpan` char(1) utf8_general_ci NOT NULL default '',
  `cal_startDay` smallint(5) unsigned  NOT NULL default '1',
  `cal_format` varchar(32) utf8_general_ci NOT NULL default '',
  `cal_ignoreDynamic` char(1) utf8_general_ci NOT NULL default '',
  `cal_order` varchar(32) utf8_general_ci NOT NULL default '',
  `cal_readerModule` int(10) unsigned  NOT NULL default '0',
  `cal_limit` smallint(5) unsigned  NOT NULL default '0',
  `cal_template` varchar(32) utf8_general_ci NOT NULL default '',
  `cal_ctemplate` varchar(32) utf8_general_ci NOT NULL default '',
  `cal_showQuantity` char(1) utf8_general_ci NOT NULL default '',
  `com_order` varchar(32) utf8_general_ci NOT NULL default '',
  `com_moderate` char(1) utf8_general_ci NOT NULL default '',
  `com_bbcode` char(1) utf8_general_ci NOT NULL default '',
  `com_requireLogin` char(1) utf8_general_ci NOT NULL default '',
  `com_disableCaptcha` char(1) utf8_general_ci NOT NULL default '',
  `com_template` varchar(32) utf8_general_ci NOT NULL default '',
  `faq_categories` blob  NULL,
  `faq_readerModule` int(10) unsigned  NOT NULL default '0',
  `list_table` varchar(64) utf8_general_ci NOT NULL default '',
  `list_fields` varchar(255) utf8_general_ci NOT NULL default '',
  `list_where` varchar(255) utf8_general_ci NOT NULL default '',
  `list_search` varchar(255) utf8_general_ci NOT NULL default '',
  `list_sort` varchar(255) utf8_general_ci NOT NULL default '',
  `list_info` varchar(255) utf8_general_ci NOT NULL default '',
  `list_info_where` varchar(255) utf8_general_ci NOT NULL default '',
  `list_layout` varchar(32) utf8_general_ci NOT NULL default '',
  `list_info_layout` varchar(32) utf8_general_ci NOT NULL default '',
  `news_archives` blob  NULL,
  `news_featured` varchar(16) utf8_general_ci NOT NULL default '',
  `news_jumpToCurrent` varchar(16) utf8_general_ci NOT NULL default '',
  `news_readerModule` int(10) unsigned  NOT NULL default '0',
  `news_metaFields` varchar(255) utf8_general_ci NOT NULL default '',
  `news_template` varchar(32) utf8_general_ci NOT NULL default '',
  `news_format` varchar(32) utf8_general_ci NOT NULL default '',
  `news_startDay` smallint(5) unsigned  NOT NULL default '0',
  `news_order` varchar(255) utf8_general_ci NOT NULL default '',
  `news_showQuantity` char(1) utf8_general_ci NOT NULL default '',
  `newsletters` blob  NULL,
  `nl_channels` blob  NULL,
  `nl_hideChannels` char(1) utf8_general_ci NOT NULL default '',
  `nl_subscribe` text utf8_general_ci NULL,
  `nl_unsubscribe` text utf8_general_ci NULL,
  `nl_template` varchar(32) utf8_general_ci NOT NULL default '',
  `dk_mmenuPosition` varchar(32) utf8_general_ci NOT NULL default '',
  `dk_mmenuZposition` varchar(32) utf8_general_ci NOT NULL default '',
  `dk_mmenuSlidingSubmenus` varchar(32) utf8_general_ci NOT NULL default '',
  `dk_mmenuTheme` varchar(32) utf8_general_ci NOT NULL default '',
  `dk_mmenuCountersAdd` char(1) utf8_general_ci NOT NULL default '',
  `dk_mmenuSearchfieldAdd` char(1) utf8_general_ci NOT NULL default '',
  `dk_mmenuDragOpenOpen` char(1) utf8_general_ci NOT NULL default '',
  `dk_mmenuDragOpenThreshold` smallint(5)  NOT NULL default '50',
  `dk_mmenuOnClickClose` char(1) utf8_general_ci NOT NULL default '1',
  `dk_mmenuOnClickDelayLocationHref` char(1) utf8_general_ci NOT NULL default '1',
  `dk_mmenuOnClickBlockUI` char(1) utf8_general_ci NOT NULL default '',
  `dk_mmenuModal` char(1) utf8_general_ci NOT NULL default '',
  `dk_mmenuArticle` varchar(255) utf8_general_ci NOT NULL default '',
  `dk_mmenuTpl` varchar(255) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;


#
# Dumping data for table 'tl_module'
#

INSERT INTO `tl_module` VALUES ( 1, 1, 1384872216, 'del', '', 'html', 0, 0, '', '', '', 0, '', NULL, NULL, '', '', '', 0, '', '2cl', NULL, '', '', 0, 'and', '', 48, 1000, 0, 'simple', '', 'main', 0, '', '', '', '', NULL, 'internal', '', '', '', '', NULL, '', '', '', NULL, NULL, 'dasfdasfsdf', 3600, NULL, 'rss_default', 3, '', NULL, '', '', '', '', '', '', 0, NULL, NULL, '', NULL, '', '', '', NULL, '', 1, 'cal_month', '', 'ascending', 0, 0, 'event_full', 'cal_default', '', 'ascending', '', '', '', '', 'com_default', NULL, 0, '', '', '', '', '', '', '', 'list_default', 'info_default', NULL, 'all_items', '', 0, 'a:2:{i:0;s:4:"date";i:1;s:6:"author";}', 'news_latest', 'news_month', 0, 'descending', '', NULL, NULL, '', NULL, NULL, 'nl_simple', '', '', '', '', '', '', '', 50, '1', '1', '', '', '', '' );
INSERT INTO `tl_module` VALUES ( 2, 1, 1385038177, 'Logo &#40;container&#41;', '', 'html', 0, 0, '', '', '', 0, '', NULL, NULL, '', '', '', 0, '', '2cl', NULL, '', '', 0, 'and', '', 48, 1000, 0, 'simple', '', 'main', 0, '', '', '', '', NULL, 'internal', '', '', '', '', NULL, '', '', '', NULL, NULL, '<div id="logo"></div>', 3600, NULL, 'rss_default', 3, '', NULL, '', '', '', '', '', '', 0, NULL, NULL, '', NULL, '', '', '', NULL, '', 1, 'cal_month', '', 'ascending', 0, 0, 'event_full', 'cal_default', '', 'ascending', '', '', '', '', 'com_default', NULL, 0, '', '', '', '', '', '', '', 'list_default', 'info_default', NULL, 'all_items', '', 0, 'a:2:{i:0;s:4:"date";i:1;s:6:"author";}', 'news_latest', 'news_month', 0, 'descending', '', NULL, NULL, '', NULL, NULL, 'nl_simple', '', '', '', '', '', '', '', 50, '1', '1', '', '', '', '' );
INSERT INTO `tl_module` VALUES ( 4, 1, 1384964606, 'welcome', '', 'html', 0, 0, '', '', '', 0, '', NULL, NULL, '', '', '', 0, '', '2cl', NULL, '', '', 0, 'and', '', 48, 1000, 0, 'simple', '', 'main', 0, '', '', '', '', NULL, 'internal', '', '', '', '', NULL, '', '', '', NULL, NULL, '<div id="welcome"><p>Herzlich Willkommen in\nunserer Fachpraxis für\nzahnärztliche Chirurgie\nund Implantologie.</p></div>\n<div id="welcome"><img src="http://lorempixel.com/300/150/business/"/></div>', 3600, NULL, 'rss_default', 3, '', NULL, '', '', '', '', '', '', 0, NULL, NULL, '', NULL, '', '', '', NULL, '', 1, 'cal_month', '', 'ascending', 0, 0, 'event_full', 'cal_default', '', 'ascending', '', '', '', '', 'com_default', NULL, 0, '', '', '', '', '', '', '', 'list_default', 'info_default', NULL, 'all_items', '', 0, 'a:2:{i:0;s:4:"date";i:1;s:6:"author";}', 'news_latest', 'news_month', 0, 'descending', '', NULL, NULL, '', NULL, NULL, 'nl_simple', '', '', '', '', '', '', '', 50, '1', '1', '', '', '', '' );
INSERT INTO `tl_module` VALUES ( 7, 1, 1385038415, 'mmenu_nav', 'a:2:{s:4:"unit";s:2:"h1";s:5:"value";s:0:"";}', 'mmenu', 0, 0, '', '', '', 0, 'nav_default_mmenu', NULL, NULL, '', '', '', 0, '', '2cl', NULL, '', '', 0, 'and', '', 48, 1000, 0, 'simple', '', 'main', 0, '', '', '', '', NULL, 'internal', '', '', '', '', NULL, '', '', '', NULL, NULL, NULL, 3600, NULL, 'rss_default', 3, '', NULL, '', '', '', '', '', '', 0, NULL, NULL, '', NULL, '', 'a:2:{i:0;s:5:"mmenu";i:1;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:0:"";}', NULL, '', 1, 'cal_month', '', 'ascending', 0, 0, 'event_full', 'cal_default', '', 'ascending', '', '', '', '', 'com_default', NULL, 0, '', '', '', '', '', '', '', 'list_default', 'info_default', NULL, 'all_items', '', 0, 'a:2:{i:0;s:4:"date";i:1;s:6:"author";}', 'news_latest', 'news_month', 0, 'descending', '', NULL, NULL, '', NULL, NULL, 'nl_simple', 'right', 'front', 'horizontal', 'standard', '', '', '1', 50, '1', '1', '', '', '', 'mod_mmenu' );
INSERT INTO `tl_module` VALUES ( 8, 1, 1385040067, 'mmenu_link', '', 'html', 0, 0, '', '', '', 0, '', NULL, NULL, '', '', '', 0, '', '2cl', NULL, '', '', 0, 'and', '', 48, 1000, 0, 'simple', '', 'main', 0, '', '', '', '', NULL, 'internal', '', '', '', '', NULL, '', '', '', NULL, NULL, '<a href="#mmenu" id="mmenu"></a>', 3600, NULL, 'rss_default', 3, '', NULL, '', '', '', '', '', '', 0, NULL, NULL, '', NULL, '', '', '', NULL, '', 1, 'cal_month', '', 'ascending', 0, 0, 'event_full', 'cal_default', '', 'ascending', '', '', '', '', 'com_default', NULL, 0, '', '', '', '', '', '', '', 'list_default', 'info_default', NULL, 'all_items', '', 0, 'a:2:{i:0;s:4:"date";i:1;s:6:"author";}', 'news_latest', 'news_month', 0, 'descending', '', NULL, NULL, '', NULL, NULL, 'nl_simple', 'left', 'back', 'horizontal', 'standard', '', '', '', 50, '1', '1', '', '', '', '' );

#---------------------------------------------------------
# Table structure for table 'tl_news'
#---------------------------------------------------------
CREATE TABLE `tl_news` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `headline` varchar(255) utf8_general_ci NOT NULL default '',
  `alias` varbinary(128)  NOT NULL default '',
  `author` int(10) unsigned  NOT NULL default '0',
  `date` int(10) unsigned  NOT NULL default '0',
  `time` int(10) unsigned  NOT NULL default '0',
  `subheadline` varchar(255) utf8_general_ci NOT NULL default '',
  `teaser` text utf8_general_ci NULL,
  `addImage` char(1) utf8_general_ci NOT NULL default '',
  `singleSRC` varchar(255) utf8_general_ci NOT NULL default '',
  `alt` varchar(255) utf8_general_ci NOT NULL default '',
  `size` varchar(64) utf8_general_ci NOT NULL default '',
  `imagemargin` varchar(128) utf8_general_ci NOT NULL default '',
  `imageUrl` varchar(255) utf8_general_ci NOT NULL default '',
  `fullsize` char(1) utf8_general_ci NOT NULL default '',
  `caption` varchar(255) utf8_general_ci NOT NULL default '',
  `floating` varchar(12) utf8_general_ci NOT NULL default '',
  `addEnclosure` char(1) utf8_general_ci NOT NULL default '',
  `enclosure` blob  NULL,
  `source` varchar(12) utf8_general_ci NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `articleId` int(10) unsigned  NOT NULL default '0',
  `url` varchar(255) utf8_general_ci NOT NULL default '',
  `target` char(1) utf8_general_ci NOT NULL default '',
  `cssClass` varchar(255) utf8_general_ci NOT NULL default '',
  `noComments` char(1) utf8_general_ci NOT NULL default '',
  `featured` char(1) utf8_general_ci NOT NULL default '',
  `published` char(1) utf8_general_ci NOT NULL default '',
  `start` varchar(10) utf8_general_ci NOT NULL default '',
  `stop` varchar(10) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_news' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_news_archive'
#---------------------------------------------------------
CREATE TABLE `tl_news_archive` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `protected` char(1) utf8_general_ci NOT NULL default '',
  `groups` blob  NULL,
  `allowComments` char(1) utf8_general_ci NOT NULL default '',
  `notify` varchar(16) utf8_general_ci NOT NULL default '',
  `sortOrder` varchar(32) utf8_general_ci NOT NULL default '',
  `perPage` smallint(5) unsigned  NOT NULL default '0',
  `moderate` char(1) utf8_general_ci NOT NULL default '',
  `bbcode` char(1) utf8_general_ci NOT NULL default '',
  `requireLogin` char(1) utf8_general_ci NOT NULL default '',
  `disableCaptcha` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_news_archive' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_news_feed'
#---------------------------------------------------------
CREATE TABLE `tl_news_feed` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `alias` varbinary(128)  NOT NULL default '',
  `language` varchar(32) utf8_general_ci NOT NULL default '',
  `archives` blob  NULL,
  `format` varchar(32) utf8_general_ci NOT NULL default '',
  `source` varchar(32) utf8_general_ci NOT NULL default '',
  `maxItems` smallint(5) unsigned  NOT NULL default '0',
  `feedBase` varchar(255) utf8_general_ci NOT NULL default '',
  `description` text utf8_general_ci NULL,
  PRIMARY KEY  (`id`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_news_feed' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_newsletter'
#---------------------------------------------------------
CREATE TABLE `tl_newsletter` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `subject` varchar(255) utf8_general_ci NOT NULL default '',
  `alias` varbinary(128)  NOT NULL default '',
  `content` mediumtext utf8_general_ci NULL,
  `text` mediumtext utf8_general_ci NULL,
  `addFile` char(1) utf8_general_ci NOT NULL default '',
  `files` blob  NULL,
  `template` varchar(32) utf8_general_ci NOT NULL default '',
  `sendText` char(1) utf8_general_ci NOT NULL default '',
  `externalImages` char(1) utf8_general_ci NOT NULL default '',
  `sender` varchar(128) utf8_general_ci NOT NULL default '',
  `senderName` varchar(128) utf8_general_ci NOT NULL default '',
  `sent` char(1) utf8_general_ci NOT NULL default '',
  `date` varchar(10) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_newsletter' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_newsletter_channel'
#---------------------------------------------------------
CREATE TABLE `tl_newsletter_channel` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `useSMTP` char(1) utf8_general_ci NOT NULL default '',
  `smtpHost` varchar(64) utf8_general_ci NOT NULL default '',
  `smtpUser` varchar(128) utf8_general_ci NOT NULL default '',
  `smtpPass` varchar(32) utf8_general_ci NOT NULL default '',
  `smtpEnc` varchar(3) utf8_general_ci NOT NULL default '',
  `smtpPort` smallint(5) unsigned  NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_newsletter_channel' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_newsletter_recipients'
#---------------------------------------------------------
CREATE TABLE `tl_newsletter_recipients` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `email` varchar(255) utf8_general_ci NOT NULL default '',
  `active` char(1) utf8_general_ci NOT NULL default '',
  `addedOn` varchar(10) utf8_general_ci NOT NULL default '',
  `confirmed` varchar(10) utf8_general_ci NOT NULL default '',
  `ip` varchar(64) utf8_general_ci NOT NULL default '',
  `token` varchar(32) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_newsletter_recipients' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_page'
#---------------------------------------------------------
CREATE TABLE `tl_page` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `sorting` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `alias` varbinary(128)  NOT NULL default '',
  `type` varchar(32) utf8_general_ci NOT NULL default '',
  `pageTitle` varchar(255) utf8_general_ci NOT NULL default '',
  `language` varchar(5) utf8_general_ci NOT NULL default '',
  `robots` varchar(32) utf8_general_ci NOT NULL default '',
  `description` text utf8_general_ci NULL,
  `redirect` varchar(32) utf8_general_ci NOT NULL default '',
  `jumpTo` int(10) unsigned  NOT NULL default '0',
  `url` varchar(255) utf8_general_ci NOT NULL default '',
  `target` char(1) utf8_general_ci NOT NULL default '',
  `dns` varchar(255) utf8_general_ci NOT NULL default '',
  `staticFiles` varchar(255) utf8_general_ci NOT NULL default '',
  `staticPlugins` varchar(255) utf8_general_ci NOT NULL default '',
  `fallback` char(1) utf8_general_ci NOT NULL default '',
  `adminEmail` varchar(255) utf8_general_ci NOT NULL default '',
  `dateFormat` varchar(32) utf8_general_ci NOT NULL default '',
  `timeFormat` varchar(32) utf8_general_ci NOT NULL default '',
  `datimFormat` varchar(32) utf8_general_ci NOT NULL default '',
  `createSitemap` char(1) utf8_general_ci NOT NULL default '',
  `sitemapName` varchar(32) utf8_general_ci NOT NULL default '',
  `useSSL` char(1) utf8_general_ci NOT NULL default '',
  `autoforward` char(1) utf8_general_ci NOT NULL default '',
  `protected` char(1) utf8_general_ci NOT NULL default '',
  `groups` blob  NULL,
  `includeLayout` char(1) utf8_general_ci NOT NULL default '',
  `layout` int(10) unsigned  NOT NULL default '0',
  `mobileLayout` int(10) unsigned  NOT NULL default '0',
  `includeCache` char(1) utf8_general_ci NOT NULL default '',
  `cache` int(10) unsigned  NOT NULL default '0',
  `includeChmod` char(1) utf8_general_ci NOT NULL default '',
  `cuser` int(10) unsigned  NOT NULL default '0',
  `cgroup` int(10) unsigned  NOT NULL default '0',
  `chmod` varchar(255) utf8_general_ci NOT NULL default '',
  `noSearch` char(1) utf8_general_ci NOT NULL default '',
  `cssClass` varchar(64) utf8_general_ci NOT NULL default '',
  `sitemap` varchar(32) utf8_general_ci NOT NULL default '',
  `hide` char(1) utf8_general_ci NOT NULL default '',
  `guests` char(1) utf8_general_ci NOT NULL default '',
  `tabindex` smallint(5) unsigned  NOT NULL default '0',
  `accesskey` char(1) utf8_general_ci NOT NULL default '',
  `published` char(1) utf8_general_ci NOT NULL default '',
  `start` varchar(10) utf8_general_ci NOT NULL default '',
  `stop` varchar(10) utf8_general_ci NOT NULL default '',
  `keywords` text utf8_general_ci NULL,
  `rootTitle` varchar(255) utf8_general_ci NOT NULL default '',
  `ga_analyticsid` varchar(20) utf8_general_ci NOT NULL default '',
  `ga_anonymizeip` char(1) utf8_general_ci NOT NULL default '',
  `ga_ignoreadmins` char(1) utf8_general_ci NOT NULL default '',
  `ga_ignoremembers` char(1) utf8_general_ci NOT NULL default '',
  `ga_externaltracking` char(1) utf8_general_ci NOT NULL default '',
  `ga_addlinktracking` char(1) utf8_general_ci NOT NULL default '',
  `ga_setdomainname` char(150) utf8_general_ci NOT NULL default '',
  `ga_titlelinktracking` char(150) utf8_general_ci NOT NULL default '',
  `ga_bounceseconds` int(10) unsigned  NOT NULL default '0',
  `ga_eventtracking` char(1) utf8_general_ci NOT NULL default '',
  `hc_code` blob  NULL,
  `hc_footer_code` blob  NULL,
  `hc_inheritance` char(1) utf8_general_ci NOT NULL default '',
  `hc_mode` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `alias` (`alias`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;


#
# Dumping data for table 'tl_page'
#

INSERT INTO `tl_page` VALUES ( 1, 0, 128, 1384963918, 'Oralchirurgie Bochum', 'parent', 'root', 'seitentitel', 'de', '', 'beschreibung', 'permanent', 0, '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', NULL, '1', 1, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', '', '', '', 0, '', '1', '', '', 'suchbegriffe', '', '', '', '', '', '', '', '', '', 0, '', 0x3c6c696e6b20747970653d22746578742f637373222072656c3d227374796c6573686565742220687265663d22687474703a2f2f666173742e666f6e74732e6e65742f6373736170692f34373865636262382d333761612d343262612d616334612d3766613335353064303633652e637373222f3e0a3c6d657461206e616d653d2276696577706f72742220636f6e74656e743d2277696474683d6465766963652d77696474682c20696e697469616c2d7363616c653d312e30223e, '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 3, 1, 128, 1384871015, 'Startseite', 'home', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 4, 1, 256, 1385038757, 'Philisophie', 'philisophie', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 5, 1, 384, 1385038767, 'Praxis', 'praxis', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 6, 1, 512, 1385038804, 'Menschen', 'menschen', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 7, 1, 640, 1385038830, 'Behandlung', 'behandlung', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 8, 1, 768, 1385038845, 'Aktuelles', 'aktuelles', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 9, 1, 896, 1385038850, 'Kontakt', 'kontakt', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 10, 1, 1024, 1385039130, 'Sitemap', 'sitemap', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 11, 1, 1152, 1385039130, 'Impressum', 'impressum', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 12, 1, 1280, 1385039131, 'Datenschutz', 'datenschutz', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 14, 5, 128, 1385039038, 'Überblick', 'ueberblick', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 15, 5, 256, 1385039127, 'Rundgang', 'rundgang', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 16, 5, 384, 1385039052, 'Patienten-Appartement', 'patienten-appartement', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 18, 6, 128, 1385039148, 'Ärzteteam', 'aerzteteam', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 19, 6, 256, 1385039157, 'Mitarbeiter', 'mitarbeiter', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 20, 6, 384, 1385039162, 'Patienten', 'patienten', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 21, 7, 128, 1385039270, 'Leistungsspektrum', 'leistungsspektrum', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 22, 7, 256, 1385039276, 'Leistung im Überblick', 'leistung-im-ueberblick', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 23, 7, 384, 1385039283, 'Diagnostik', 'diagnostik', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 24, 7, 512, 1385039287, '3D-Computerplanung', 'id-3d-computerplanung', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 25, 7, 640, 1385039293, 'Implantologie', 'implantologie', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 26, 7, 768, 1385039324, 'Funkdiagnostik / CMD', 'funkdiagnostik-cmd', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 27, 7, 896, 1385039308, 'Narkose', 'narkose', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 29, 25, 128, 1385039368, 'Feste Provision', 'feste-provision', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 30, 25, 256, 1385039374, 'Wenn ein Zahn fehlt', 'wenn-ein-zahn-fehlt', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 32, 25, 384, 1385039406, 'Mehrere Zähne fehlen', 'mehrere-zaehne-fehlen', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 33, 25, 512, 1385039419, 'Zahnloser Kiefer', 'zahnloser-kiefer', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 34, 26, 128, 1385039459, 'CMD / Diagnose', 'cmd-diagnose', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 35, 26, 256, 1385039468, 'CMD / Behandlung', 'cmd-behandlung', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );
INSERT INTO `tl_page` VALUES ( 36, 26, 384, 1385039475, 'CMD / Behandlung', 'cmd-behandlung-36', 'regular', '', '', 'index,follow', '', 'permanent', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, 0, '', 0, '', 0, 0, 'a:9:{i:0;s:2:"u1";i:1;s:2:"u2";i:2;s:2:"u3";i:3;s:2:"u4";i:4;s:2:"u5";i:5;s:2:"u6";i:6;s:2:"g4";i:7;s:2:"g5";i:8;s:2:"g6";}', '', '', 'map_default', '', '', 0, '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '1', '1' );

#---------------------------------------------------------
# Table structure for table 'tl_phpsass'
#---------------------------------------------------------
CREATE TABLE `tl_phpsass` (
  `name` varchar(128) utf8_general_ci NOT NULL default '',
  `sass_dir` varchar(1024) utf8_general_ci NOT NULL default '',
  `css_dir` varchar(1024) utf8_general_ci NOT NULL default '',
  `extensions_dir` varchar(1024) utf8_general_ci NOT NULL default '',
  `images_dir` varchar(1024) utf8_general_ci NOT NULL default '',
  `javascripts_dir` varchar(1024) utf8_general_ci NOT NULL default '',
  `output_style` varchar(1024) utf8_general_ci NOT NULL default '',
  `disable` char(1) utf8_general_ci NOT NULL default '',
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


#
# Dumping data for table 'tl_phpsass'
#

INSERT INTO `tl_phpsass` VALUES ( 'oc_main_scss', '31', '33', '34', '35', '36', 'expanded', '', 1, 1384873582 );

#---------------------------------------------------------
# Table structure for table 'tl_repository_installs'
#---------------------------------------------------------
CREATE TABLE `tl_repository_installs` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `extension` varchar(32) utf8_general_ci NOT NULL default '',
  `version` int(9)  NOT NULL default '0',
  `build` int(9)  NOT NULL default '0',
  `alpha` char(1) utf8_general_ci NOT NULL default '',
  `beta` char(1) utf8_general_ci NOT NULL default '',
  `rc` char(1) utf8_general_ci NOT NULL default '',
  `stable` char(1) utf8_general_ci NOT NULL default '1',
  `lickey` varchar(255) utf8_general_ci NOT NULL default '',
  `delprot` char(1) utf8_general_ci NOT NULL default '',
  `updprot` char(1) utf8_general_ci NOT NULL default '',
  `error` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;


#
# Dumping data for table 'tl_repository_installs'
#

INSERT INTO `tl_repository_installs` VALUES ( 1, 1384870285, 'content-slider', 10010009, 16, '0', '0', '0', '1', 'iUhn64R39i', '', '', '' );
INSERT INTO `tl_repository_installs` VALUES ( 2, 1384870296, 'botdetection', 30020019, 4, '0', '0', '0', '1', '', '', '', '' );
INSERT INTO `tl_repository_installs` VALUES ( 3, 1384870312, 'BackupDB', 30010009, 18, '0', '0', '0', '1', '', '', '', '' );
INSERT INTO `tl_repository_installs` VALUES ( 4, 1384870409, 'extendedSEO', 10020009, 12, '0', '0', '0', '1', '', '', '', '' );
INSERT INTO `tl_repository_installs` VALUES ( 5, 1384870419, 'favorites', 30010009, 25, '0', '0', '0', '1', '', '', '', '' );
INSERT INTO `tl_repository_installs` VALUES ( 6, 1384870433, 'googleanalytics', 10040009, 9, '0', '0', '0', '1', '', '', '', '' );
INSERT INTO `tl_repository_installs` VALUES ( 7, 1384870440, 'header_code', 30000019, 2, '0', '0', '0', '1', '', '', '', '' );
INSERT INTO `tl_repository_installs` VALUES ( 8, 1384870446, 'superfish', 20030009, 17, '0', '0', '0', '1', '', '', '', '' );
INSERT INTO `tl_repository_installs` VALUES ( 9, 1384870479, 'phpsass', 10020, 2, '1', '1', '1', '1', '', '', '', '' );
INSERT INTO `tl_repository_installs` VALUES ( 10, 1385035722, 'dk_mmenu', 10030009, 5, '0', '0', '0', '1', '', '', '', '' );

#---------------------------------------------------------
# Table structure for table 'tl_repository_instfiles'
#---------------------------------------------------------
CREATE TABLE `tl_repository_instfiles` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `filename` varchar(255) utf8_general_ci NOT NULL default '',
  `filetype` char(1) utf8_general_ci NOT NULL default 'F',
  `flag` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=610 ;


#
# Dumping data for table 'tl_repository_instfiles'
#

INSERT INTO `tl_repository_instfiles` VALUES ( 1, 1, 1384870285, 'system/modules/cslide', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 2, 1, 1384870285, 'system/modules/cslide/CEcslide.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 3, 1, 1384870285, 'system/modules/cslide/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 4, 1, 1384870285, 'system/modules/cslide/config/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 5, 1, 1384870285, 'system/modules/cslide/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 6, 1, 1384870285, 'system/modules/cslide/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 7, 1, 1384870285, 'system/modules/cslide/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 8, 1, 1384870285, 'system/modules/cslide/config/database.sql', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 9, 1, 1384870285, 'system/modules/cslide/dca', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 10, 1, 1384870285, 'system/modules/cslide/dca/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 11, 1, 1384870285, 'system/modules/cslide/dca/tl_content.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 12, 1, 1384870285, 'system/modules/cslide/html', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 13, 1, 1384870285, 'system/modules/cslide/html/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 14, 1, 1384870285, 'system/modules/cslide/html/cslide.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 15, 1, 1384870285, 'system/modules/cslide/html/cslide.js', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 16, 1, 1384870285, 'system/modules/cslide/html/slider_bullets.png', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 17, 1, 1384870285, 'system/modules/cslide/html/slider_left.png', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 18, 1, 1384870285, 'system/modules/cslide/html/slider_right.png', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 19, 1, 1384870285, 'system/modules/cslide/languages', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 20, 1, 1384870285, 'system/modules/cslide/languages/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 21, 1, 1384870285, 'system/modules/cslide/languages/de', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 22, 1, 1384870285, 'system/modules/cslide/languages/de/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 23, 1, 1384870285, 'system/modules/cslide/languages/de/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 24, 1, 1384870285, 'system/modules/cslide/languages/de/tl_content.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 25, 1, 1384870285, 'system/modules/cslide/templates', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 26, 1, 1384870285, 'system/modules/cslide/templates/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 27, 1, 1384870285, 'system/modules/cslide/templates/cslide_delim.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 28, 1, 1384870285, 'system/modules/cslide/templates/cslide_delim.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 29, 1, 1384870285, 'system/modules/cslide/templates/cslide_end.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 30, 1, 1384870285, 'system/modules/cslide/templates/cslide_end.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 31, 1, 1384870285, 'system/modules/cslide/templates/cslide_start.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 32, 1, 1384870285, 'system/modules/cslide/templates/cslide_start.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 33, 2, 1384870296, 'system/modules/botdetection', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 34, 2, 1384870296, 'system/modules/botdetection/LICENSE.txt', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 35, 2, 1384870296, 'system/modules/botdetection/composer.json', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 36, 2, 1384870296, 'system/modules/botdetection/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 37, 2, 1384870296, 'system/modules/botdetection/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 38, 2, 1384870296, 'system/modules/botdetection/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 39, 2, 1384870296, 'system/modules/botdetection/config/bot-agent-list.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 40, 2, 1384870296, 'system/modules/botdetection/config/bot-agent-list.txt', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 41, 2, 1384870296, 'system/modules/botdetection/config/bot-ip-list-ipv6.txt', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 42, 2, 1384870296, 'system/modules/botdetection/config/bot-ip-list.txt', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 43, 2, 1384870296, 'system/modules/botdetection/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 44, 2, 1384870296, 'system/modules/botdetection/languages/de', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 45, 2, 1384870296, 'system/modules/botdetection/languages', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 46, 2, 1384870296, 'system/modules/botdetection/languages/de/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 47, 2, 1384870296, 'system/modules/botdetection/languages/de/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 48, 2, 1384870296, 'system/modules/botdetection/languages/en', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 49, 2, 1384870296, 'system/modules/botdetection/languages/en/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 50, 2, 1384870296, 'system/modules/botdetection/languages/en/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 51, 2, 1384870296, 'system/modules/botdetection/modules', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 52, 2, 1384870296, 'system/modules/botdetection/modules/ModuleBotDetection.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 53, 2, 1384870296, 'system/modules/botdetection/modules/ModuleFrontendDemo1.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 54, 2, 1384870296, 'system/modules/botdetection/modules/ModuleFrontendDemo2.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 55, 2, 1384870296, 'system/modules/botdetection/templates', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 56, 2, 1384870296, 'system/modules/botdetection/templates/mod_botdetection_demo1_fe.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 57, 2, 1384870296, 'system/modules/botdetection/templates/mod_botdetection_demo1_fe.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 58, 2, 1384870296, 'system/modules/botdetection/templates/mod_botdetection_demo2_fe.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 59, 2, 1384870296, 'system/modules/botdetection/templates/mod_botdetection_demo2_fe.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 60, 2, 1384870296, 'system/modules/botdetection/test', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 61, 2, 1384870296, 'system/modules/botdetection/test/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 62, 2, 1384870296, 'system/modules/botdetection/test/ModuleBotDetectionTest.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 63, 3, 1384870312, 'files/AutoBackupDB', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 64, 3, 1384870312, 'files/AutoBackupDB/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 65, 3, 1384870312, 'system/modules/BackupDB', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 66, 3, 1384870312, 'system/modules/BackupDB/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 67, 3, 1384870312, 'system/modules/BackupDB/AutoBackupDB.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 68, 3, 1384870312, 'system/modules/BackupDB/BackupDbCommon.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 69, 3, 1384870312, 'system/modules/BackupDB/BackupDbRun.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 70, 3, 1384870312, 'system/modules/BackupDB/CHANGELOG.txt', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 71, 3, 1384870312, 'system/modules/BackupDB/MakeWsTemplateRun.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 72, 3, 1384870312, 'system/modules/BackupDB/ModuleBackupDB.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 73, 3, 1384870312, 'system/modules/BackupDB/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 74, 3, 1384870312, 'system/modules/BackupDB/config/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 75, 3, 1384870312, 'system/modules/BackupDB/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 76, 3, 1384870312, 'system/modules/BackupDB/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 77, 3, 1384870312, 'system/modules/BackupDB/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 78, 3, 1384870312, 'system/modules/BackupDB/dca', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 79, 3, 1384870312, 'system/modules/BackupDB/dca/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 80, 3, 1384870312, 'system/modules/BackupDB/dca/tl_settings.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 81, 3, 1384870312, 'system/modules/BackupDB/htacc', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 82, 3, 1384870312, 'system/modules/BackupDB/iconBackup.gif', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 83, 3, 1384870312, 'system/modules/BackupDB/languages/de', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 84, 3, 1384870312, 'system/modules/BackupDB/languages', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 85, 3, 1384870312, 'system/modules/BackupDB/languages/de/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 86, 3, 1384870312, 'system/modules/BackupDB/languages/de/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 87, 3, 1384870312, 'system/modules/BackupDB/languages/de/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 88, 3, 1384870312, 'system/modules/BackupDB/languages/de/tl_settings.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 89, 3, 1384870312, 'system/modules/BackupDB/languages/en', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 90, 3, 1384870312, 'system/modules/BackupDB/languages/en/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 91, 3, 1384870312, 'system/modules/BackupDB/languages/en/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 92, 3, 1384870312, 'system/modules/BackupDB/languages/en/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 93, 3, 1384870312, 'system/modules/BackupDB/languages/en/tl_settings.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 94, 3, 1384870312, 'system/modules/BackupDB/languages/es', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 95, 3, 1384870312, 'system/modules/BackupDB/languages/es/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 96, 3, 1384870312, 'system/modules/BackupDB/languages/es/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 97, 3, 1384870312, 'system/modules/BackupDB/languages/es/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 98, 3, 1384870312, 'system/modules/BackupDB/languages/fa', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 99, 3, 1384870312, 'system/modules/BackupDB/languages/fa/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 100, 3, 1384870312, 'system/modules/BackupDB/languages/fa/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 101, 3, 1384870312, 'system/modules/BackupDB/languages/fa/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 102, 3, 1384870312, 'system/modules/BackupDB/languages/fa/tl_settings.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 103, 3, 1384870312, 'system/modules/BackupDB/languages/fr', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 104, 3, 1384870312, 'system/modules/BackupDB/languages/fr/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 105, 3, 1384870312, 'system/modules/BackupDB/languages/fr/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 106, 3, 1384870312, 'system/modules/BackupDB/languages/fr/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 107, 3, 1384870312, 'system/modules/BackupDB/languages/fr/tl_settings.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 108, 3, 1384870312, 'system/modules/BackupDB/languages/it', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 109, 3, 1384870312, 'system/modules/BackupDB/languages/it/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 110, 3, 1384870312, 'system/modules/BackupDB/languages/it/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 111, 3, 1384870312, 'system/modules/BackupDB/languages/it/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 112, 3, 1384870312, 'system/modules/BackupDB/languages/ja', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 113, 3, 1384870312, 'system/modules/BackupDB/languages/ja/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 114, 3, 1384870312, 'system/modules/BackupDB/languages/ja/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 115, 3, 1384870312, 'system/modules/BackupDB/languages/ja/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 116, 3, 1384870312, 'system/modules/BackupDB/languages/ja/tl_settings.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 117, 3, 1384870312, 'system/modules/BackupDB/languages/pl', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 118, 3, 1384870312, 'system/modules/BackupDB/languages/pl/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 119, 3, 1384870312, 'system/modules/BackupDB/languages/pl/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 120, 3, 1384870312, 'system/modules/BackupDB/languages/pl/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 121, 3, 1384870312, 'system/modules/BackupDB/languages/ru', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 122, 3, 1384870312, 'system/modules/BackupDB/languages/ru/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 123, 3, 1384870312, 'system/modules/BackupDB/languages/ru/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 124, 3, 1384870312, 'system/modules/BackupDB/languages/ru/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 125, 3, 1384870312, 'system/modules/BackupDB/languages/ru/tl_settings.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 126, 3, 1384870312, 'system/modules/BackupDB/templates', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 127, 3, 1384870312, 'system/modules/BackupDB/templates/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 128, 3, 1384870312, 'system/modules/BackupDB/templates/mod_backup_db.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 129, 3, 1384870312, 'system/modules/BackupDB/templates/mod_backup_db.tpl', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 130, 4, 1384870409, 'system/modules/x-seo', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 131, 4, 1384870409, 'system/modules/x-seo/ExtendedSeo.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 132, 4, 1384870409, 'system/modules/x-seo/LICENSE.txt', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 133, 4, 1384870409, 'system/modules/x-seo/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 134, 4, 1384870409, 'system/modules/x-seo/config/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 135, 4, 1384870409, 'system/modules/x-seo/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 136, 4, 1384870409, 'system/modules/x-seo/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 137, 4, 1384870409, 'system/modules/x-seo/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 138, 4, 1384870409, 'system/modules/x-seo/config/database.sql', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 139, 4, 1384870409, 'system/modules/x-seo/dca', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 140, 4, 1384870409, 'system/modules/x-seo/dca/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 141, 4, 1384870409, 'system/modules/x-seo/dca/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 142, 5, 1384870419, 'system/modules/favorites/assets', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 143, 5, 1384870419, 'system/modules/favorites', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 144, 5, 1384870419, 'system/modules/favorites/assets/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 145, 5, 1384870419, 'system/modules/favorites/assets/external.png', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 146, 5, 1384870419, 'system/modules/favorites/assets/favcreate.png', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 147, 5, 1384870419, 'system/modules/favorites/assets/favdelete.png', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 148, 5, 1384870419, 'system/modules/favorites/assets/favorites.png', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 149, 5, 1384870419, 'system/modules/favorites/classes', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 150, 5, 1384870419, 'system/modules/favorites/classes/Favorites.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 151, 5, 1384870419, 'system/modules/favorites/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 152, 5, 1384870419, 'system/modules/favorites/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 153, 5, 1384870419, 'system/modules/favorites/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 154, 5, 1384870419, 'system/modules/favorites/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 155, 5, 1384870419, 'system/modules/favorites/dca', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 156, 5, 1384870419, 'system/modules/favorites/dca/tl_user.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 157, 5, 1384870419, 'system/modules/favorites/dca/tl_user_fav.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 158, 5, 1384870419, 'system/modules/favorites/dca/tl_user_group.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 159, 5, 1384870419, 'system/modules/favorites/languages/de', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 160, 5, 1384870419, 'system/modules/favorites/languages', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 161, 5, 1384870419, 'system/modules/favorites/languages/de/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 162, 5, 1384870419, 'system/modules/favorites/languages/de/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 163, 5, 1384870419, 'system/modules/favorites/languages/de/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 164, 5, 1384870419, 'system/modules/favorites/languages/de/tl_user.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 165, 5, 1384870419, 'system/modules/favorites/languages/de/tl_user_fav.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 166, 5, 1384870419, 'system/modules/favorites/languages/de/tl_user_group.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 167, 5, 1384870419, 'system/modules/favorites/languages/en', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 168, 5, 1384870419, 'system/modules/favorites/languages/en/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 169, 5, 1384870419, 'system/modules/favorites/languages/en/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 170, 5, 1384870419, 'system/modules/favorites/languages/en/tl_user.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 171, 5, 1384870419, 'system/modules/favorites/languages/en/tl_user_fav.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 172, 5, 1384870419, 'system/modules/favorites/languages/en/tl_user_group.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 173, 6, 1384870433, 'system/modules/googleanalytics/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 174, 6, 1384870433, 'system/modules/googleanalytics', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 175, 6, 1384870433, 'system/modules/googleanalytics/config/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 176, 6, 1384870433, 'system/modules/googleanalytics/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 177, 6, 1384870433, 'system/modules/googleanalytics/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 178, 6, 1384870433, 'system/modules/googleanalytics/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 179, 6, 1384870433, 'system/modules/googleanalytics/config/database.sql', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 180, 6, 1384870433, 'system/modules/googleanalytics/dca', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 181, 6, 1384870433, 'system/modules/googleanalytics/dca/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 182, 6, 1384870433, 'system/modules/googleanalytics/dca/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 183, 6, 1384870433, 'system/modules/googleanalytics/googleanalytics.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 184, 6, 1384870433, 'system/modules/googleanalytics/languages', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 185, 6, 1384870433, 'system/modules/googleanalytics/languages/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 186, 6, 1384870433, 'system/modules/googleanalytics/languages/cs', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 187, 6, 1384870433, 'system/modules/googleanalytics/languages/cs/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 188, 6, 1384870433, 'system/modules/googleanalytics/languages/cs/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 189, 6, 1384870433, 'system/modules/googleanalytics/languages/cs/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 190, 6, 1384870433, 'system/modules/googleanalytics/languages/de', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 191, 6, 1384870433, 'system/modules/googleanalytics/languages/de/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 192, 6, 1384870433, 'system/modules/googleanalytics/languages/de/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 193, 6, 1384870433, 'system/modules/googleanalytics/languages/de/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 194, 6, 1384870433, 'system/modules/googleanalytics/languages/en', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 195, 6, 1384870433, 'system/modules/googleanalytics/languages/en/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 196, 6, 1384870433, 'system/modules/googleanalytics/languages/en/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 197, 6, 1384870433, 'system/modules/googleanalytics/languages/en/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 198, 6, 1384870433, 'system/modules/googleanalytics/languages/fr', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 199, 6, 1384870433, 'system/modules/googleanalytics/languages/fr/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 200, 6, 1384870433, 'system/modules/googleanalytics/languages/fr/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 201, 6, 1384870433, 'system/modules/googleanalytics/languages/fr/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 202, 6, 1384870433, 'system/modules/googleanalytics/languages/ja', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 203, 6, 1384870433, 'system/modules/googleanalytics/languages/ja/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 204, 6, 1384870433, 'system/modules/googleanalytics/languages/ja/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 205, 6, 1384870433, 'system/modules/googleanalytics/templates', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 206, 6, 1384870433, 'system/modules/googleanalytics/templates/ce_download_ga.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 207, 6, 1384870433, 'system/modules/googleanalytics/templates/ce_download_ga.tpl', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 208, 6, 1384870433, 'system/modules/googleanalytics/templates/ce_download_ga.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 209, 6, 1384870433, 'system/modules/googleanalytics/templates/ce_downloads_ga.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 210, 6, 1384870433, 'system/modules/googleanalytics/templates/ce_downloads_ga.tpl', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 211, 6, 1384870433, 'system/modules/googleanalytics/templates/ce_downloads_ga.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 212, 6, 1384870433, 'system/modules/googleanalytics/templates/mod_googleanalytics.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 213, 6, 1384870433, 'system/modules/googleanalytics/templates/mod_googleanalytics.tpl', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 214, 6, 1384870433, 'system/modules/googleanalytics/templates/mod_googleanalytics.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 215, 7, 1384870440, 'system/modules/header_code/classes', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 216, 7, 1384870440, 'system/modules/header_code', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 217, 7, 1384870440, 'system/modules/header_code/classes/HeaderCode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 218, 7, 1384870440, 'system/modules/header_code/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 219, 7, 1384870440, 'system/modules/header_code/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 220, 7, 1384870440, 'system/modules/header_code/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 221, 7, 1384870440, 'system/modules/header_code/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 222, 7, 1384870440, 'system/modules/header_code/dca', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 223, 7, 1384870440, 'system/modules/header_code/dca/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 224, 7, 1384870440, 'system/modules/header_code/languages/de', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 225, 7, 1384870440, 'system/modules/header_code/languages', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 226, 7, 1384870440, 'system/modules/header_code/languages/de/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 227, 7, 1384870440, 'system/modules/header_code/languages/en', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 228, 7, 1384870440, 'system/modules/header_code/languages/en/tl_page.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 229, 8, 1384870446, 'files/superfish/css', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 230, 8, 1384870446, 'files/superfish', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 231, 8, 1384870446, 'files/superfish/css/superfish-base.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 232, 8, 1384870446, 'files/superfish/css/superfish-navbar.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 233, 8, 1384870446, 'files/superfish/css/superfish-vertical.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 234, 8, 1384870446, 'files/superfish/css/superfish.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 235, 8, 1384870446, 'system/modules/superfish/assets', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 236, 8, 1384870446, 'system/modules/superfish', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 237, 8, 1384870446, 'system/modules/superfish/assets/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 238, 8, 1384870446, 'system/modules/superfish/assets/js', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 239, 8, 1384870446, 'system/modules/superfish/assets/js/hoverIntent.js', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 240, 8, 1384870446, 'system/modules/superfish/assets/js/superfish.js', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 241, 8, 1384870446, 'system/modules/superfish/assets/js/supersubs.js', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 242, 8, 1384870446, 'system/modules/superfish/classes', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 243, 8, 1384870446, 'system/modules/superfish/classes/Superfish.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 244, 8, 1384870446, 'system/modules/superfish/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 245, 8, 1384870446, 'system/modules/superfish/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 246, 8, 1384870446, 'system/modules/superfish/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 247, 8, 1384870446, 'system/modules/superfish/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 248, 8, 1384870446, 'system/modules/superfish/dca', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 249, 8, 1384870446, 'system/modules/superfish/dca/tl_layout.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 250, 8, 1384870446, 'system/modules/superfish/languages/en', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 251, 8, 1384870446, 'system/modules/superfish/languages', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 252, 8, 1384870446, 'system/modules/superfish/languages/en/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 253, 8, 1384870446, 'system/modules/superfish/languages/en/tl_layout.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 254, 8, 1384870446, 'system/modules/superfish/license.txt', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 255, 8, 1384870446, 'system/modules/superfish/templates', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 256, 8, 1384870446, 'system/modules/superfish/templates/nav_superfish_horizontal.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 257, 8, 1384870446, 'system/modules/superfish/templates/nav_superfish_horizontal.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 258, 8, 1384870446, 'system/modules/superfish/templates/nav_superfish_navbar.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 259, 8, 1384870446, 'system/modules/superfish/templates/nav_superfish_navbar.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 260, 8, 1384870446, 'system/modules/superfish/templates/nav_superfish_vertical.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 261, 8, 1384870446, 'system/modules/superfish/templates/nav_superfish_vertical.xhtml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 262, 9, 1384870479, 'system/modules/phpsass', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 263, 9, 1384870479, 'system/modules/phpsass/PHPSass.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 264, 9, 1384870479, 'system/modules/phpsass/README.md', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 265, 9, 1384870479, 'system/modules/phpsass/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 266, 9, 1384870479, 'system/modules/phpsass/config/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 267, 9, 1384870479, 'system/modules/phpsass/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 268, 9, 1384870479, 'system/modules/phpsass/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 269, 9, 1384870479, 'system/modules/phpsass/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 270, 9, 1384870479, 'system/modules/phpsass/config/database.sql', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 271, 9, 1384870479, 'system/modules/phpsass/dca', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 272, 9, 1384870479, 'system/modules/phpsass/dca/tl_phpsass.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 273, 9, 1384870479, 'system/modules/phpsass/html', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 274, 9, 1384870479, 'system/modules/phpsass/html/icon.gif', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 275, 9, 1384870479, 'system/modules/phpsass/languages/de', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 276, 9, 1384870479, 'system/modules/phpsass/languages', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 277, 9, 1384870479, 'system/modules/phpsass/languages/de/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 278, 9, 1384870479, 'system/modules/phpsass/languages/de/tl_phpsass.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 279, 9, 1384870479, 'system/modules/phpsass/languages/en', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 280, 9, 1384870479, 'system/modules/phpsass/languages/en/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 281, 9, 1384870479, 'system/modules/phpsass/languages/en/tl_phpsass.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 282, 9, 1384870479, 'system/modules/phpsass/lib/phpsass', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 283, 9, 1384870479, 'system/modules/phpsass/lib', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 284, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/.gitignore', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 285, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/.travis.yml', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 286, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 287, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 288, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/Compass.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 289, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 290, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/_compass.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 291, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/_lemonade.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 292, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 293, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/_css3.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 294, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/_layout.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 295, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/_reset-legacy.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 296, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/_reset.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 297, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/_support.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 298, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/_typography.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 299, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/_utilities.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 300, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 301, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_appearance.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 302, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_background-clip.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 303, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_background-origin.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 304, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_background-size.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 305, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_border-radius.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 306, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_box-shadow.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 307, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_box-sizing.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 308, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_box.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 309, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_columns.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 310, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_filter.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 311, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_font-face.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 312, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_hyphenation.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 313, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_images.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 314, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_inline-block.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 315, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_opacity.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 316, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_pie.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 317, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_regions.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 318, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_shared.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 319, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_text-shadow.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 320, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_transform-legacy.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 321, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_transform.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 322, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_transition.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 323, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/css3/_user-interface.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 324, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/layout', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 325, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/layout/_grid-background.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 326, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/layout/_sticky-footer.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 327, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/layout/_stretching.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 328, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/reset', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 329, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/reset/_utilities-legacy.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 330, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/reset/_utilities.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 331, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 332, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/_links.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 333, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/_lists.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 334, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/_text.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 335, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/_vertical_rhythm.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 336, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/links', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 337, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/links/_hover-link.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 338, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/links/_link-colors.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 339, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/links/_unstyled-link.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 340, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/lists', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 341, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/lists/_bullets.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 342, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/lists/_horizontal-list.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 343, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/lists/_inline-block-list.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 344, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/lists/_inline-list.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 345, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/text', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 346, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/text/_ellipsis.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 347, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/text/_force-wrap.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 348, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/text/_nowrap.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 349, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/typography/text/_replacement.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 350, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 351, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/_color.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 352, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/_general.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 353, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/_print.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 354, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/_sprites.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 355, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/_tables.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 356, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/color', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 357, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/color/_contrast.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 358, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/general', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 359, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/general/_clearfix.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 360, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/general/_float.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 361, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/general/_hacks.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 362, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/general/_min.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 363, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/general/_tabs.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 364, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/general/_tag-cloud.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 365, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/sprites', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 366, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/sprites/_base.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 367, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/sprites/_sprite-img.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 368, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/tables', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 369, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/tables/_alternating-rows-and-columns.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 370, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/tables/_borders.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 371, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Compass/stylesheets/compass/utilities/tables/_scaffolding.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 372, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/ExtensionInterface.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 373, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Own', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 374, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Own/Own.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 375, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Own/css/test/test2', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 376, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Own/css/test', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 377, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Own/css', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 378, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/Own/css/test/test2/test.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 379, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/README.md', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 380, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/example.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 381, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/Extensions/example.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 382, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/README.md', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 383, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/SassException.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 384, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/SassFile.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 385, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/SassParser.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 386, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/VERSION', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 387, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/compile-apache.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 388, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/composer.json', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 389, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/renderers', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 390, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/renderers/SassCompactRenderer.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 391, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/renderers/SassCompressedRenderer.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 392, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/renderers/SassExpandedRenderer.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 393, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/renderers/SassNestedRenderer.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 394, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/renderers/SassRenderer.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 395, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 396, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/SassScriptFunction.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 397, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/SassScriptFunctions.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 398, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/SassScriptLexer.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 399, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/SassScriptOperation.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 400, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/SassScriptParser.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 401, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/SassScriptParserExceptions.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 402, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/SassScriptVariable.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 403, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/literals', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 404, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/literals/SassBoolean.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 405, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/literals/SassColour.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 406, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/literals/SassList.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 407, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/literals/SassLiteral.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 408, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/literals/SassLiteralExceptions.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 409, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/literals/SassNumber.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 410, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/script/literals/SassString.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 411, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/test.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 412, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/test.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 413, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 414, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/_imported_charset_ibm866.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 415, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/_imported_charset_utf8.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 416, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/_imported_content.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 417, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/_partial.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 418, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/alt.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 419, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/alt.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 420, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/alt.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 421, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/basic.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 422, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/basic.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 423, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/bork1.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 424, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/bork2.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 425, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/bork3.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 426, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/bork4.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 427, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/bork5.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 428, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/comments.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 429, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/comments.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 430, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/compact.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 431, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/compact.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 432, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/complex.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 433, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/complex.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 434, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/compressed.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 435, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/compressed.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 436, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/content.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 437, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/content.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 438, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/css3.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 439, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/css3.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 440, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/default.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 441, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/default.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 442, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/default_imported.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 443, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/each.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 444, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/each.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 445, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/expanded.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 446, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/expanded.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 447, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/extend.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 448, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/extend.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 449, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/extend_included.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 450, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/extend_placeholders.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 451, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/extend_placeholders.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 452, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/filters.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 453, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/filters.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 454, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/functions.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 455, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/functions.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 456, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/holmes.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 457, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/holmes.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 458, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/hsl-functions.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 459, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/hsl-functions.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 460, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/if.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 461, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/if.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 462, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/import.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 463, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/import.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 464, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/import_content.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 465, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/import_content.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 466, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/importee.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 467, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/interpolation.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 468, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/interpolation.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 469, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/introspection.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 470, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/introspection.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 471, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/line_numbers.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 472, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/line_numbers.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 473, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/list.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 474, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/list.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 475, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/media.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 476, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/media.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 477, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/misc-functions.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 478, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/misc-functions.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 479, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/misc.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 480, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/misc.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 481, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixin-content.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 482, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixin-content.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 483, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixin-content.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 484, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixin-ja1.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 485, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixin-ja1.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 486, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixin-params.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 487, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixin-params.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 488, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixin_bork.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 489, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixins.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 490, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/mixins.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 491, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/multiline.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 492, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/multiline.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 493, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested-media.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 494, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested-media.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 495, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 496, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 497, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_bork1.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 498, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_bork2.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 499, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_bork3.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 500, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_bork4.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 501, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_bork5.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 502, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_import.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 503, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_import.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 504, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_media.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 505, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_media.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 506, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_mixin_bork.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 507, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_pseudo.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 508, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/nested_pseudo.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 509, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/number.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 510, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/number.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 511, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/opacity.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 512, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/opacity.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 513, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/other-color.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 514, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/other-color.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 515, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/parent_ref.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 516, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/parent_ref.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 517, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/phpSassTest.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 518, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/phpunit.xml.dist', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 519, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/proprietary-selector.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 520, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/proprietary-selector.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 521, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/rgb-functions.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 522, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/rgb-functions.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 523, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/scss_import.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 524, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/scss_import.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 525, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/scss_importee.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 526, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/scss_importee.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 527, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/splats.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 528, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/splats.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 529, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/string.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 530, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/string.scss', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 531, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/subdir/nested_subdir', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 532, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/subdir', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 533, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/subdir/nested_subdir/_nested_partial.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 534, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/subdir/nested_subdir/nested_subdir.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 535, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/subdir/nested_subdir/nested_subdir.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 536, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/subdir/subdir.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 537, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/subdir/subdir.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 538, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/units.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 539, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/units.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 540, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/warn.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 541, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/warn.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 542, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tests/warn_imported.sass', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 543, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 544, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassCommentNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 545, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassContentNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 546, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassContext.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 547, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassDebugNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 548, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassDirectiveNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 549, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassEachNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 550, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassElseNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 551, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassExtendNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 552, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassForNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 553, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassFunctionDefinitionNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 554, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassIfNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 555, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassImportNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 556, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassMediaNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 557, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassMixinDefinitionNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 558, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassMixinNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 559, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 560, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassNodeExceptions.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 561, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassPropertyNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 562, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassReturnNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 563, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassRootNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 564, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassRuleNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 565, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassVariableNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 566, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassWarnNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 567, 9, 1384870479, 'system/modules/phpsass/lib/phpsass/tree/SassWhileNode.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 568, 10, 1385035722, 'composer.json', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 569, 10, 1385035722, 'system/modules/dk_mmenu/assets', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 570, 10, 1385035722, 'system/modules/dk_mmenu', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 571, 10, 1385035722, 'system/modules/dk_mmenu/assets/.htaccess', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 572, 10, 1385035722, 'system/modules/dk_mmenu/assets/css', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 573, 10, 1385035722, 'system/modules/dk_mmenu/assets/css/army.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 574, 10, 1385035722, 'system/modules/dk_mmenu/assets/css/bordeaux.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 575, 10, 1385035722, 'system/modules/dk_mmenu/assets/css/dk_mmenu.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 576, 10, 1385035722, 'system/modules/dk_mmenu/assets/css/light.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 577, 10, 1385035722, 'system/modules/dk_mmenu/assets/css/lighter.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 578, 10, 1385035722, 'system/modules/dk_mmenu/assets/css/mmenu-positioning.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 579, 10, 1385035722, 'system/modules/dk_mmenu/assets/css/mmenu-theme-light.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 580, 10, 1385035722, 'system/modules/dk_mmenu/assets/css/mmenu.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 581, 10, 1385035722, 'system/modules/dk_mmenu/assets/css/navy.css', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 582, 10, 1385035722, 'system/modules/dk_mmenu/assets/js', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 583, 10, 1385035722, 'system/modules/dk_mmenu/assets/js/jquery.hammer.min.js', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 584, 10, 1385035722, 'system/modules/dk_mmenu/assets/js/jquery.mmenu.min.js', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 585, 10, 1385035722, 'system/modules/dk_mmenu/classes', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 586, 10, 1385035722, 'system/modules/dk_mmenu/classes/Mmenu.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 587, 10, 1385035722, 'system/modules/dk_mmenu/config', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 588, 10, 1385035722, 'system/modules/dk_mmenu/config/autoload.ini', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 589, 10, 1385035722, 'system/modules/dk_mmenu/config/autoload.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 590, 10, 1385035722, 'system/modules/dk_mmenu/config/config.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 591, 10, 1385035722, 'system/modules/dk_mmenu/dca', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 592, 10, 1385035722, 'system/modules/dk_mmenu/dca/tl_module.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 593, 10, 1385035722, 'system/modules/dk_mmenu/languages/de', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 594, 10, 1385035722, 'system/modules/dk_mmenu/languages', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 595, 10, 1385035722, 'system/modules/dk_mmenu/languages/de/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 596, 10, 1385035722, 'system/modules/dk_mmenu/languages/de/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 597, 10, 1385035722, 'system/modules/dk_mmenu/languages/de/tl_module.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 598, 10, 1385035722, 'system/modules/dk_mmenu/languages/en', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 599, 10, 1385035722, 'system/modules/dk_mmenu/languages/en/default.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 600, 10, 1385035722, 'system/modules/dk_mmenu/languages/en/modules.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 601, 10, 1385035722, 'system/modules/dk_mmenu/languages/en/tl_module.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 602, 10, 1385035722, 'system/modules/dk_mmenu/modules', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 603, 10, 1385035722, 'system/modules/dk_mmenu/modules/ModuleCustomMmenu.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 604, 10, 1385035722, 'system/modules/dk_mmenu/modules/ModuleMmenu.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 605, 10, 1385035722, 'system/modules/dk_mmenu/modules/ModuleMmenuArticle.php', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 606, 10, 1385035722, 'system/modules/dk_mmenu/templates/modules', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 607, 10, 1385035722, 'system/modules/dk_mmenu/templates', 'D', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 608, 10, 1385035722, 'system/modules/dk_mmenu/templates/modules/mod_mmenu.html5', 'F', '' );
INSERT INTO `tl_repository_instfiles` VALUES ( 609, 10, 1385035722, 'system/modules/dk_mmenu/templates/modules/mod_mmenu.xhtml', 'F', '' );

#---------------------------------------------------------
# Table structure for table 'tl_search'
#---------------------------------------------------------
CREATE TABLE `tl_search` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `url` varchar(255) utf8_general_ci NOT NULL default '',
  `text` mediumtext utf8_general_ci NULL,
  `filesize` double unsigned  NOT NULL default '0',
  `checksum` varchar(32) utf8_general_ci NOT NULL default '',
  `protected` char(1) utf8_general_ci NOT NULL default '',
  `groups` blob  NULL,
  `language` varchar(5) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `url` (`url`),
  FULLTEXT KEY `text` (`text`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_search' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_search_index'
#---------------------------------------------------------
CREATE TABLE `tl_search_index` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `word` varbinary(64)  NOT NULL default '',
  `relevance` smallint(5) unsigned  NOT NULL default '0',
  `language` varchar(5) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `word` (`word`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_search_index' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_session'
#---------------------------------------------------------
CREATE TABLE `tl_session` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `name` varchar(255) utf8_general_ci NOT NULL default '',
  `sessionID` varchar(128) utf8_general_ci NOT NULL default '',
  `hash` varchar(40) utf8_general_ci NOT NULL default '',
  `ip` varchar(64) utf8_general_ci NOT NULL default '',
  `su` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `hash` (`hash`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;


#
# Dumping data for table 'tl_session'
#

INSERT INTO `tl_session` VALUES ( 9, 1, 1385131513, 'BE_USER_AUTH', '0544d8c494a8e370fd3bcc190019a7e2', '5b197d40c95d6905fabee73af20b8eac3856b792', '93.232.25.196', '' );

#---------------------------------------------------------
# Table structure for table 'tl_style'
#---------------------------------------------------------
CREATE TABLE `tl_style` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `sorting` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `invisible` char(1) utf8_general_ci NOT NULL default '',
  `selector` varchar(255) utf8_general_ci NOT NULL default '',
  `category` varchar(32) utf8_general_ci NOT NULL default '',
  `comment` varchar(255) utf8_general_ci NOT NULL default '',
  `size` char(1) utf8_general_ci NOT NULL default '',
  `width` varchar(64) utf8_general_ci NOT NULL default '',
  `height` varchar(64) utf8_general_ci NOT NULL default '',
  `minwidth` varchar(64) utf8_general_ci NOT NULL default '',
  `minheight` varchar(64) utf8_general_ci NOT NULL default '',
  `maxwidth` varchar(64) utf8_general_ci NOT NULL default '',
  `maxheight` varchar(64) utf8_general_ci NOT NULL default '',
  `positioning` char(1) utf8_general_ci NOT NULL default '',
  `trbl` varchar(128) utf8_general_ci NOT NULL default '',
  `position` varchar(32) utf8_general_ci NOT NULL default '',
  `floating` varchar(32) utf8_general_ci NOT NULL default '',
  `clear` varchar(32) utf8_general_ci NOT NULL default '',
  `overflow` varchar(32) utf8_general_ci NOT NULL default '',
  `display` varchar(32) utf8_general_ci NOT NULL default '',
  `alignment` char(1) utf8_general_ci NOT NULL default '',
  `margin` varchar(128) utf8_general_ci NOT NULL default '',
  `padding` varchar(128) utf8_general_ci NOT NULL default '',
  `align` varchar(32) utf8_general_ci NOT NULL default '',
  `verticalalign` varchar(32) utf8_general_ci NOT NULL default '',
  `textalign` varchar(32) utf8_general_ci NOT NULL default '',
  `whitespace` varchar(8) utf8_general_ci NOT NULL default '',
  `background` char(1) utf8_general_ci NOT NULL default '',
  `bgcolor` varchar(64) utf8_general_ci NOT NULL default '',
  `bgimage` varchar(255) utf8_general_ci NOT NULL default '',
  `bgposition` varchar(32) utf8_general_ci NOT NULL default '',
  `bgrepeat` varchar(32) utf8_general_ci NOT NULL default '',
  `shadowsize` varchar(128) utf8_general_ci NOT NULL default '',
  `shadowcolor` varchar(64) utf8_general_ci NOT NULL default '',
  `gradientAngle` varchar(32) utf8_general_ci NOT NULL default '',
  `gradientColors` varchar(128) utf8_general_ci NOT NULL default '',
  `border` char(1) utf8_general_ci NOT NULL default '',
  `borderwidth` varchar(128) utf8_general_ci NOT NULL default '',
  `borderstyle` varchar(32) utf8_general_ci NOT NULL default '',
  `bordercolor` varchar(64) utf8_general_ci NOT NULL default '',
  `borderradius` varchar(128) utf8_general_ci NOT NULL default '',
  `bordercollapse` varchar(32) utf8_general_ci NOT NULL default '',
  `borderspacing` varchar(64) utf8_general_ci NOT NULL default '',
  `font` char(1) utf8_general_ci NOT NULL default '',
  `fontfamily` varchar(255) utf8_general_ci NOT NULL default '',
  `fontsize` varchar(64) utf8_general_ci NOT NULL default '',
  `fontcolor` varchar(64) utf8_general_ci NOT NULL default '',
  `lineheight` varchar(64) utf8_general_ci NOT NULL default '',
  `fontstyle` varchar(255) utf8_general_ci NOT NULL default '',
  `texttransform` varchar(32) utf8_general_ci NOT NULL default '',
  `textindent` varchar(64) utf8_general_ci NOT NULL default '',
  `letterspacing` varchar(64) utf8_general_ci NOT NULL default '',
  `wordspacing` varchar(64) utf8_general_ci NOT NULL default '',
  `list` char(1) utf8_general_ci NOT NULL default '',
  `liststyletype` varchar(32) utf8_general_ci NOT NULL default '',
  `liststyleimage` varchar(255) utf8_general_ci NOT NULL default '',
  `own` text utf8_general_ci NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `selector` (`selector`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_style' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_style_sheet'
#---------------------------------------------------------
CREATE TABLE `tl_style_sheet` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `name` varchar(64) utf8_general_ci NOT NULL default '',
  `disablePie` char(1) utf8_general_ci NOT NULL default '',
  `embedImages` int(10) unsigned  NOT NULL default '0',
  `cc` varchar(32) utf8_general_ci NOT NULL default '',
  `media` varchar(255) utf8_general_ci NOT NULL default '',
  `mediaQuery` text utf8_general_ci NULL,
  `vars` text utf8_general_ci NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_style_sheet' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_theme'
#---------------------------------------------------------
CREATE TABLE `tl_theme` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `name` varchar(128) utf8_general_ci NOT NULL default '',
  `author` varchar(128) utf8_general_ci NOT NULL default '',
  `folders` blob  NULL,
  `screenshot` varchar(255) utf8_general_ci NOT NULL default '',
  `templates` varchar(255) utf8_general_ci NOT NULL default '',
  `vars` text utf8_general_ci NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


#
# Dumping data for table 'tl_theme'
#

INSERT INTO `tl_theme` VALUES ( 1, 1384871556, 'OC', 'Rachid Selma / Tobias Zils', 0x613a313a7b693a303b693a33303b7d, '0', 'templates/oc', 'a:0:{}' );

#---------------------------------------------------------
# Table structure for table 'tl_undo'
#---------------------------------------------------------
CREATE TABLE `tl_undo` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `fromTable` varchar(255) utf8_general_ci NOT NULL default '',
  `query` text utf8_general_ci NULL,
  `affectedRows` smallint(5) unsigned  NOT NULL default '0',
  `data` mediumblob  NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


#
# Dumping data for table 'tl_undo' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_user'
#---------------------------------------------------------
CREATE TABLE `tl_user` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `username` varchar(64) utf8_general_ci NOT NULL default '',
  `name` varchar(255) utf8_general_ci NOT NULL default '',
  `email` varchar(255) utf8_general_ci NOT NULL default '',
  `language` varchar(5) utf8_general_ci NOT NULL default '',
  `backendTheme` varchar(32) utf8_general_ci NOT NULL default '',
  `uploader` varchar(32) utf8_general_ci NOT NULL default '',
  `showHelp` char(1) utf8_general_ci NOT NULL default '',
  `thumbnails` char(1) utf8_general_ci NOT NULL default '',
  `useRTE` char(1) utf8_general_ci NOT NULL default '',
  `useCE` char(1) utf8_general_ci NOT NULL default '',
  `password` varchar(128) utf8_general_ci NOT NULL default '',
  `pwChange` char(1) utf8_general_ci NOT NULL default '',
  `admin` char(1) utf8_general_ci NOT NULL default '',
  `groups` blob  NULL,
  `inherit` varchar(12) utf8_general_ci NOT NULL default '',
  `modules` blob  NULL,
  `themes` blob  NULL,
  `pagemounts` blob  NULL,
  `alpty` blob  NULL,
  `filemounts` blob  NULL,
  `fop` blob  NULL,
  `forms` blob  NULL,
  `formp` blob  NULL,
  `disable` char(1) utf8_general_ci NOT NULL default '',
  `start` varchar(10) utf8_general_ci NOT NULL default '',
  `stop` varchar(10) utf8_general_ci NOT NULL default '',
  `session` blob  NULL,
  `dateAdded` int(10) unsigned  NOT NULL default '0',
  `lastLogin` int(10) unsigned  NOT NULL default '0',
  `currentLogin` int(10) unsigned  NOT NULL default '0',
  `loginCount` smallint(5) unsigned  NOT NULL default '3',
  `locked` int(10) unsigned  NOT NULL default '0',
  `calendars` blob  NULL,
  `calendarp` blob  NULL,
  `calendarfeeds` blob  NULL,
  `calendarfeedp` blob  NULL,
  `faqs` blob  NULL,
  `faqp` blob  NULL,
  `news` blob  NULL,
  `newp` blob  NULL,
  `newsfeeds` blob  NULL,
  `newsfeedp` blob  NULL,
  `newsletters` blob  NULL,
  `newsletterp` blob  NULL,
  `favlock` char(1) utf8_general_ci NOT NULL default '',
  `favdefault` char(1) utf8_general_ci NOT NULL default '',
  `favdisable` char(1) utf8_general_ci NOT NULL default '',
  `favexternal` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


#
# Dumping data for table 'tl_user'
#

INSERT INTO `tl_user` VALUES ( 1, 1384868167, 'rachidselma', 'rachid selma', 'rachidselma@googlemail.com', 'de', '', '', '1', '1', '1', '1', '$6$d7903ef0d771207c$ajdz7CTqwimWjHejVMCQzgiLK4IrvC264iLmi2Ev.vQPIRQxSaXdKwh.Zk508ej4lWRjspu6AqYFxSX5b8XEf0', '', '1', NULL, '', NULL, NULL, 0x613a303a7b7d, NULL, 0x613a303a7b7d, NULL, NULL, NULL, '', '', '', 0x613a32333a7b733a373a2272656665726572223b613a32343a7b733a383a223230646536353562223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a34333a22636f6e74616f2f6d61696e2e7068703f646f3d6d61696e74656e616e6365267265663d6237386234343965223b7d733a383a226238336262396162223b613a323a7b733a343a226c617374223b733a34333a22636f6e74616f2f6d61696e2e7068703f646f3d6d61696e74656e616e6365267265663d6237386234343965223b733a373a2263757272656e74223b733a38353a22636f6e74616f2f6d61696e2e7068703f646f3d6d61696e74656e616e6365266269633d312672743d3862393433623262363462663839636238353631393632653362623834666336267265663d3230646536353562223b7d733a383a223935356530303132223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a34333a22636f6e74616f2f6d61696e2e7068703f646f3d6d61696e74656e616e6365267265663d6237386234343965223b7d733a383a223730663630323234223b613a323a7b733a31303a22746c5f61727469636c65223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a373a2263757272656e74223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b7d733a383a223065636265633265223b613a323a7b733a373a22746c5f75736572223b733a32343a22636f6e74616f2f6d61696e2e7068703f646f3d6c6f67696e223b733a373a2263757272656e74223b733a32343a22636f6e74616f2f6d61696e2e7068703f646f3d6c6f67696e223b7d733a383a226139666461343236223b613a333a7b733a31303a22746c5f61727469636c65223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a373a2263757272656e74223b733a35323a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65266d74673d6163636f756e7473267265663d3730663630323234223b733a343a226c617374223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b7d733a383a223534343233346134223b613a333a7b733a31303a22746c5f61727469636c65223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a373a2263757272656e74223b733a33393a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65267265663d3730663630323234223b733a343a226c617374223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b7d733a383a223462626234643837223b613a333a7b733a343a226c617374223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a31303a22746c5f61727469636c65223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d3730663630323234223b7d733a383a226364316163303338223b613a333a7b733a343a226c617374223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a31303a22746c5f61727469636c65223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d3730663630323234223b7d733a383a223261386433653965223b613a333a7b733a343a226c617374223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a31303a22746c5f61727469636c65223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d3730663630323234223b7d733a383a223165643534376362223b613a333a7b733a343a226c617374223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a31303a22746c5f61727469636c65223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d3730663630323234223b7d733a383a223236383064653861223b613a333a7b733a343a226c617374223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a31303a22746c5f61727469636c65223b733a32363a22636f6e74616f2f6d61696e2e7068703f646f3d61727469636c65223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d3730663630323234223b7d733a383a223939383432653033223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d6231343061646462223b7d733a383a223664343063343536223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d6231343061646462223b7d733a383a223837386464623564223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d6231343061646462223b7d733a383a223738633565373434223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d6231343061646462223b7d733a383a223561323734336531223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d6231343061646462223b7d733a383a223663356364613763223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d73657474696e6773267265663d6231343061646462223b7d733a383a226563363335636462223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a31353a22636f6e74616f2f6d61696e2e706870223b7d733a383a223538656662363230223b613a323a7b733a343a226c617374223b733a303a22223b733a373a2263757272656e74223b733a31353a22636f6e74616f2f6d61696e2e706870223b7d733a383a226166303130333961223b613a323a7b733a343a226c617374223b733a31353a22636f6e74616f2f6d61696e2e706870223b733a373a2263757272656e74223b733a34333a22636f6e74616f2f6d61696e2e7068703f646f3d6d61696e74656e616e6365267265663d3538656662363230223b7d733a383a223138653961313263223b613a323a7b733a343a226c617374223b733a31353a22636f6e74616f2f6d61696e2e706870223b733a373a2263757272656e74223b733a34333a22636f6e74616f2f6d61696e2e7068703f646f3d6d61696e74656e616e6365267265663d3538656662363230223b7d733a383a223835323637623566223b613a323a7b733a343a226c617374223b733a31353a22636f6e74616f2f6d61696e2e706870223b733a373a2263757272656e74223b733a34333a22636f6e74616f2f6d61696e2e7068703f646f3d6d61696e74656e616e6365267265663d3538656662363230223b7d733a383a223935333039623436223b613a323a7b733a343a226c617374223b733a34333a22636f6e74616f2f6d61696e2e7068703f646f3d6d61696e74656e616e6365267265663d3538656662363230223b733a373a2263757272656e74223b733a34303a22636f6e74616f2f6d61696e2e7068703f646f3d4261636b75704442267265663d3835323637623566223b7d7d733a373a2243555252454e54223b613a313a7b733a333a22494453223b613a31303a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a313a2233223b693a333b733a313a2234223b693a343b733a313a2235223b693a353b733a313a2236223b693a363b733a313a2237223b693a373b733a313a2238223b693a383b733a313a2239223b693a393b733a323a223130223b7d7d733a393a22434c4950424f415244223b613a343a7b733a373a22746c5f70616765223b613a303a7b7d733a31303a22746c5f636f6e74656e74223b613a303a7b7d733a31323a22746c5f74656d706c61746573223b613a303a7b7d733a393a22746c5f6d6f64756c65223b613a303a7b7d7d733a31313a226e65775f7265636f726473223b613a383a7b733a31333a22746c5f757365725f67726f7570223b613a313a7b693a303b693a313b7d733a373a22746c5f75736572223b613a313a7b693a303b693a323b7d733a31303a22746c5f70687073617373223b613a313a7b693a303b693a313b7d733a383a22746c5f7468656d65223b613a313a7b693a303b693a313b7d733a393a22746c5f6c61796f7574223b613a313a7b693a303b693a313b7d733a373a22746c5f70616765223b613a33363a7b693a303b693a313b693a313b693a323b693a323b693a333b693a333b693a343b693a343b693a353b693a353b693a363b693a363b693a373b693a373b693a383b693a383b693a393b693a393b693a31303b693a31303b693a31313b693a31313b693a31323b693a31323b693a31333b693a31333b693a31343b693a31343b693a31353b693a31353b693a31363b693a31363b693a31373b693a31373b693a31383b693a31383b693a31393b693a31393b693a32303b693a32303b693a32313b693a32313b693a32323b693a32323b693a32333b693a32333b693a32343b693a32343b693a32353b693a32353b693a32363b693a32363b693a32373b693a32373b693a32383b693a32383b693a32393b693a32393b693a33303b693a33303b693a33313b693a33313b693a33323b693a33323b693a33333b693a33333b693a33343b693a33343b693a33353b693a33353b693a33363b7d733a31303a22746c5f636f6e74656e74223b613a323a7b693a303b693a313b693a313b693a323b7d733a393a22746c5f6d6f64756c65223b613a383a7b693a303b693a313b693a313b693a323b693a323b693a333b693a333b693a343b693a343b693a353b693a353b693a363b693a363b693a373b693a373b693a383b7d7d733a31353a226669656c647365745f737461746573223b613a353a7b733a373a22746c5f75736572223b613a333a7b733a31343a226261636b656e645f6c6567656e64223b693a303b733a31323a227468656d655f6c6567656e64223b693a303b733a31353a2270617373776f72645f6c6567656e64223b693a313b7d733a373a22746c5f70616765223b613a31313a7b733a31323a2263616368655f6c6567656e64223b693a303b733a31323a2263686d6f645f6c6567656e64223b693a303b733a32323a22676f6f676c65616e616c79746963735f6c6567656e64223b693a303b733a31323a227469746c655f6c6567656e64223b693a303b733a31313a226d6574615f6c6567656e64223b693a303b733a31383a226865616465725f636f64655f6c6567656e64223b693a303b733a31303a22646e735f6c6567656e64223b693a303b733a31333a22676c6f62616c5f6c6567656e64223b693a303b733a31333a226c61796f75745f6c6567656e64223b693a303b733a31343a227075626c6973685f6c6567656e64223b693a313b733a31333a227365617263685f6c6567656e64223b693a303b7d733a393a22746c5f6c61796f7574223b613a383a7b733a31323a227469746c655f6c6567656e64223b693a303b733a31333a226865616465725f6c6567656e64223b693a313b733a31333a22636f6c756d6e5f6c6567656e64223b693a303b733a31323a227374796c655f6c6567656e64223b693a313b733a31333a226a71756572795f6c6567656e64223b693a303b733a31353a226d6f6f746f6f6c735f6c6567656e64223b693a303b733a31363a227375706572666973685f6c6567656e64223b693a303b733a31333a227363726970745f6c6567656e64223b693a303b7d733a393a22746c5f6d6f64756c65223b613a343a7b733a31363a2270726f7465637465645f6c6567656e64223b693a313b733a31333a226578706572745f6c6567656e64223b693a313b733a31363a227265666572656e63655f6c6567656e64223b693a303b733a31353a2274656d706c6174655f6c6567656e64223b693a313b7d733a31313a22746c5f73657474696e6773223b613a383a7b733a31323a227469746c655f6c6567656e64223b693a303b733a31313a22646174655f6c6567656e64223b693a303b733a31333a22676c6f62616c5f6c6567656e64223b693a313b733a31353a2273656374696f6e735f6c6567656e64223b693a313b733a31343a2274696d656f75745f6c6567656e64223b693a313b733a31323a2263686d6f645f6c6567656e64223b693a313b733a31333a227570646174655f6c6567656e64223b693a313b733a31353a226261636b757064625f6c6567656e64223b693a313b7d7d733a32373a227265706f7369746f72795f636174616c6f675f73657474696e6773223b613a383a7b733a31343a227265706f7369746f72795f746167223b733a303a22223b733a31353a227265706f7369746f72795f74797065223b733a303a22223b733a31393a227265706f7369746f72795f63617465676f7279223b733a303a22223b733a31363a227265706f7369746f72795f7374617465223b733a303a22223b733a31373a227265706f7369746f72795f617574686f72223b733a303a22223b733a31363a227265706f7369746f72795f6f72646572223b733a373a22706f70756c6172223b733a31353a227265706f7369746f72795f70616765223b733a313a2230223b733a31353a227265706f7369746f72795f66696e64223b733a353a226d6d656e75223b7d733a31333a2266696c655069636b6572526566223b733a3132343a22636f6e74616f2f66696c652e7068703f646f3d7468656d6573267461626c653d746c5f6c61796f7574266669656c643d65787465726e616c266163743d73686f772669643d312676616c75653d32362c32372c32392c32312672743d3862393433623262363462663839636238353631393632653362623834666336223b733a32343a22747265655f746c5f706870736173735f736173735f646972223b613a313a7b733a33323a226131613937616536373530633738653964303334383538343334373834333964223b693a313b7d733a31353a22746c5f66696c65735f7069636b6572223b733a303a22223b733a32333a22747265655f746c5f706870736173735f6373735f646972223b613a313a7b733a33323a226131613937616536373530633738653964303334383538343334373834333964223b693a313b7d733a33303a22747265655f746c5f706870736173735f657874656e73696f6e735f646972223b613a323a7b733a33323a226131613937616536373530633738653964303334383538343334373834333964223b693a313b733a33323a223163313833336531333533303935336563306131303061363166316662313039223b693a313b7d733a32363a22747265655f746c5f706870736173735f696d616765735f646972223b613a313a7b733a33323a226131613937616536373530633738653964303334383538343334373834333964223b693a313b7d733a33313a22747265655f746c5f706870736173735f6a617661736372697074735f646972223b613a313a7b733a33323a226131613937616536373530633738653964303334383538343334373834333964223b693a313b7d733a32323a227374796c655f73686565745f7570646174655f616c6c223b4e3b733a31303a2243555252454e545f4944223b733a313a2231223b733a32333a22747265655f746c5f6c61796f75745f65787465726e616c223b613a353a7b733a33323a226131613937616536373530633738653964303334383538343334373834333964223b693a313b733a33323a223465373538366233386539353131306139306264366135663562646538633035223b693a313b733a33323a226434653332306530303965666431623237396137373539376336326433366633223b693a313b733a33323a226465356563653539616663343535363662353530376235613536313337623164223b693a313b733a33323a226530313539353539343163353236616662376361316263333364393164323937223b693a313b7d733a31323a22746c5f706167655f74726565223b613a32353a7b693a313b693a313b693a333b693a303b693a343b693a303b693a353b693a303b693a363b693a303b693a373b693a313b693a383b693a303b693a393b693a303b693a31303b693a303b693a31313b693a303b693a31323b693a303b693a31343b693a303b693a31353b693a303b693a31363b693a303b693a32313b693a303b693a32323b693a303b693a32333b693a303b693a32343b693a303b693a32353b693a313b693a32363b693a303b693a32373b693a303b693a32393b693a303b693a33303b693a303b693a33323b693a303b693a33333b693a303b7d733a32333a22746c5f61727469636c655f746c5f706167655f74726565223b613a313a7b693a313b693a313b7d733a31323a22746c5f706167655f6e6f6465223b733a313a2231223b733a32363a22746c5f61727469636c655f746c5f61727469636c655f74726565223b613a31303a7b693a313b693a303b693a323b693a303b693a333b693a303b693a343b693a303b693a353b693a303b693a363b693a303b693a373b693a303b693a383b693a303b693a393b693a303b693a31303b693a303b7d733a383a2266696c6574726565223b613a313a7b733a383a223562383934333836223b693a313b7d733a31373a22494e56414c49445f544f4b454e5f55524c223b733a39313a22636f6e74616f2f6d61696e2e7068703f646f3d7468656d6573267461626c653d746c5f6c61796f7574266163743d656469742669643d312672743d3934393265356134336262336462333561363435326366336166393464383562223b733a31353a226261636b656e645f6d6f64756c6573223b613a313a7b733a383a226163636f756e7473223b693a303b7d7d, 1384868167, 1385130627, 1385131412, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '' );
INSERT INTO `tl_user` VALUES ( 2, 1384869264, 'tobiaszils', 'Tobias Zils', 'tobiaszils@gmail.com', 'de', 'default', 'FileUpload', '1', '1', '1', '1', '$6$f4e741bd9a35e18f$GaUVot/sBbKcf0zvsA7Vazo7sxWBTv5IMWBsY8lblbXwm063xBjMFuOT/2siAK5zp/GtDUD93zLdzZYO9H1Q0.', '1', '1', NULL, 'group', NULL, NULL, NULL, 0x613a333a7b693a303b733a373a22726567756c6172223b693a313b733a383a227265646972656374223b693a323b733a373a22666f7277617264223b7d, NULL, 0x613a333a7b693a303b733a323a226631223b693a313b733a323a226632223b693a323b733a323a226633223b7d, NULL, NULL, '', '', '', NULL, 1384868322, 0, 0, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '' );

#---------------------------------------------------------
# Table structure for table 'tl_user_fav'
#---------------------------------------------------------
CREATE TABLE `tl_user_fav` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `sorting` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `label` varchar(255) utf8_general_ci NOT NULL default '',
  `title` varchar(255) utf8_general_ci NOT NULL default '',
  `href` varchar(255) utf8_general_ci NOT NULL default '',
  `icon` blob  NULL,
  `target` char(1) utf8_general_ci NOT NULL default '',
  `cssClass` varchar(255) utf8_general_ci NOT NULL default '',
  `published` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;


#
# Dumping data for table 'tl_user_fav'
#

INSERT INTO `tl_user_fav` VALUES ( 1, 1, 128, 1384871048, 'Artikel', 'Artikel und Inhaltselemente verwalten', 'contao/main.php?do=article', NULL, '', '', '1' );
INSERT INTO `tl_user_fav` VALUES ( 2, 1, 256, 1384871054, 'Seiten', 'Die Seitenstruktur der Webseite(n) erstellen', 'contao/main.php?do=page', NULL, '', '', '1' );
INSERT INTO `tl_user_fav` VALUES ( 3, 1, 384, 1384871060, 'Themes', 'Frontend-Module, Stylesheets, Seitenlayouts und Templates verwalten', 'contao/main.php?do=themes&act=edit&id=1', NULL, '', '', '1' );
INSERT INTO `tl_user_fav` VALUES ( 4, 1, 512, 1384871070, 'Module', 'Erstellen und verwalten Sie die Frontend-Module Ihrer Webseite.', 'contao/main.php?do=themes&table=tl_module&id=1', 0x73797374656d2f7468656d65732f64656661756c742f696d616765732f6d6f64756c65732e676966, '', '', '1' );
INSERT INTO `tl_user_fav` VALUES ( 5, 1, 640, 1384871076, 'Layouts', 'Kombinieren Sie Module und Stylesheets zu Ihrem Seitenlayout.', 'contao/main.php?do=themes&table=tl_layout&act=edit&id=1', 0x73797374656d2f7468656d65732f64656661756c742f696d616765732f6c61796f75742e676966, '', '', '1' );

#---------------------------------------------------------
# Table structure for table 'tl_user_group'
#---------------------------------------------------------
CREATE TABLE `tl_user_group` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `name` varchar(255) utf8_general_ci NOT NULL default '',
  `modules` blob  NULL,
  `themes` blob  NULL,
  `pagemounts` blob  NULL,
  `alpty` blob  NULL,
  `filemounts` blob  NULL,
  `fop` blob  NULL,
  `forms` blob  NULL,
  `formp` blob  NULL,
  `alexf` blob  NULL,
  `disable` char(1) utf8_general_ci NOT NULL default '',
  `start` varchar(10) utf8_general_ci NOT NULL default '',
  `stop` varchar(10) utf8_general_ci NOT NULL default '',
  `calendars` blob  NULL,
  `calendarp` blob  NULL,
  `calendarfeeds` blob  NULL,
  `calendarfeedp` blob  NULL,
  `faqs` blob  NULL,
  `faqp` blob  NULL,
  `news` blob  NULL,
  `newp` blob  NULL,
  `newsfeeds` blob  NULL,
  `newsfeedp` blob  NULL,
  `newsletters` blob  NULL,
  `newsletterp` blob  NULL,
  `favlock` char(1) utf8_general_ci NOT NULL default '',
  `favdisable` char(1) utf8_general_ci NOT NULL default '',
  `favexternal` char(1) utf8_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


#
# Dumping data for table 'tl_user_group' - no entries
#


#---------------------------------------------------------
# Table structure for table 'tl_version'
#---------------------------------------------------------
CREATE TABLE `tl_version` (
  `id` int(10) unsigned  NOT NULL auto_increment,
  `pid` int(10) unsigned  NOT NULL default '0',
  `tstamp` int(10) unsigned  NOT NULL default '0',
  `version` smallint(5) unsigned  NOT NULL default '1',
  `fromTable` varchar(255) utf8_general_ci NOT NULL default '',
  `userid` int(10) unsigned  NOT NULL default '0',
  `username` varchar(64) utf8_general_ci NOT NULL default '',
  `description` varchar(255) utf8_general_ci NOT NULL default '',
  `editUrl` varchar(255) utf8_general_ci NOT NULL default '',
  `active` char(1) utf8_general_ci NOT NULL default '',
  `data` mediumblob  NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `fromTable` (`fromTable`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


#
# Dumping data for table 'tl_version'
#

INSERT INTO `tl_version` VALUES ( 1, 1, 1385128186, 1, 'tl_layout', 1, 'rachidselma', 'oc', 'contao/main.php?do=themes&table=tl_layout&act=edit&id=1&rt=8b943b2b64bf89cb8561962e3bb84fc6', '1', 0x613a35393a7b733a323a226964223b733a313a2231223b733a333a22706964223b733a313a2231223b733a363a22747374616d70223b733a31303a2231333835313237353635223b733a343a226e616d65223b733a323a226f63223b733a343a22726f7773223b733a333a22337277223b733a31323a22686561646572486569676874223b733a34333a22613a323a7b733a343a22756e6974223b733a303a22223b733a353a2276616c7565223b733a303a22223b7d223b733a31323a22666f6f746572486569676874223b733a34333a22613a323a7b733a343a22756e6974223b733a303a22223b733a353a2276616c7565223b733a303a22223b7d223b733a343a22636f6c73223b733a333a2231636c223b733a393a2277696474684c656674223b733a303a22223b733a31303a2277696474685269676874223b733a303a22223b733a383a2273656374696f6e73223b733a303a22223b733a393a2273506f736974696f6e223b733a343a226d61696e223b733a393a226672616d65776f726b223b733a32383a22613a313a7b693a303b733a31303a226c61796f75742e637373223b7d223b733a31303a227374796c657368656574223b733a303a22223b733a383a2265787465726e616c223b733a35313a22613a353a7b693a303b693a33393b693a313b693a32363b693a323b693a32373b693a333b693a32393b693a343b693a32313b7d223b733a383a226f72646572457874223b733a31343a2232362c32392c32372c32312c3339223b733a393a226e6577736665656473223b733a303a22223b733a31333a2263616c656e6461726665656473223b733a303a22223b733a373a226d6f64756c6573223b733a3239323a22613a343a7b693a303b613a333a7b733a333a226d6f64223b733a313a2232223b733a333a22636f6c223b733a363a22686561646572223b733a363a22656e61626c65223b733a313a2231223b7d693a313b613a333a7b733a333a226d6f64223b733a313a2237223b733a333a22636f6c223b733a363a22686561646572223b733a363a22656e61626c65223b733a313a2231223b7d693a323b613a333a7b733a333a226d6f64223b733a313a2238223b733a333a22636f6c223b733a363a22686561646572223b733a363a22656e61626c65223b733a313a2231223b7d693a333b613a333a7b733a333a226d6f64223b733a313a2234223b733a333a22636f6c223b733a343a226d61696e223b733a363a22656e61626c65223b733a313a2231223b7d7d223b733a383a2274656d706c617465223b733a373a2266655f70616765223b733a373a22646f6374797065223b733a353a2268746d6c35223b733a383a22776562666f6e7473223b733a303a22223b733a383a22637373436c617373223b733a303a22223b733a363a226f6e6c6f6164223b733a303a22223b733a343a2268656164223b733a303a22223b733a393a226164644a5175657279223b733a313a2231223b733a373a226a536f75726365223b733a373a226a5f6c6f63616c223b733a363a226a7175657279223b733a303a22223b733a31313a226164644d6f6f546f6f6c73223b733a303a22223b733a393a226d6f6f536f75726365223b733a393a226d6f6f5f6c6f63616c223b733a383a226d6f6f746f6f6c73223b4e3b733a393a22616e616c7974696373223b733a33343a22613a313a7b693a303b733a31363a22616e616c79746963735f676f6f676c65223b7d223b733a363a22736372697074223b733a303a22223b733a363a22737461746963223b733a303a22223b733a353a227769647468223b733a303a22223b733a353a22616c69676e223b733a363a2263656e746572223b733a393a22737570657266697368223b733a313a2231223b733a31313a22686f766572496e74656e74223b733a303a22223b733a31323a2273665f64697361626c654849223b733a303a22223b733a393a22737570657273756273223b733a303a22223b733a383a2273665f64656c6179223b733a333a22323030223b733a383a2273665f7370656564223b733a363a226e6f726d616c223b733a31313a2273665f73706565644f7574223b733a343a2266617374223b733a31323a2273665f6373734172726f7773223b733a313a2231223b733a31313a2273665f6d696e5769647468223b733a323a223132223b733a31313a2273665f6d61785769647468223b733a323a223237223b733a31333a2273665f65787472615769647468223b733a313a2231223b733a31333a2273665f686f766572436c617373223b733a373a227366486f766572223b733a31323a2273665f70617468436c617373223b733a303a22223b733a31323a2273665f616e696d6174696f6e223b733a303a22223b733a31353a2273665f616e696d6174696f6e4f7574223b733a303a22223b733a393a2273665f6f6e496e6974223b733a303a22223b733a31353a2273665f6f6e4265666f726553686f77223b733a303a22223b733a393a2273665f6f6e53686f77223b733a303a22223b733a393a2273665f6f6e48696465223b733a303a22223b733a393a2273665f6f6e49646c65223b733a303a22223b733a31333a2273665f706174684c6576656c73223b733a313a2231223b733a31353a2273665f6f6e4265666f726548696465223b733a303a22223b733a31323a2273665f6f6e44657374726f79223b733a303a22223b7d );

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# --- End of Backup ---
