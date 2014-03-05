CREATE TABLE `tl_content` (
  `cslide_elem` varchar(255) NOT NULL default '',
  `cslide_size` varchar(255) NOT NULL default '',
  `cslide_transition` varchar(255) NOT NULL default '',
  `cslide_transition_mode` varchar(255) NOT NULL default '',
  `cslide_duration` int(10) unsigned NOT NULL default '0',
  `cslide_autoplay` char(1) NOT NULL default '',
  `cslide_autoplayRandom` char(1) NOT NULL default '',
  `cslide_delay` int(10) unsigned NOT NULL default '0',
  `cslide_addNavigation` char(1) NOT NULL default '',
  `cslide_addIndicator` char(1) NOT NULL default '',
  `cslide_slideleft` varchar(2) NOT NULL default '',
  `cslide_slideright` varchar(2) NOT NULL default ''
) ENGINE=MyISAM DEFALT CHARSET=utf8;