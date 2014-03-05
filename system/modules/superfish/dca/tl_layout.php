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
 * Table tl_layout
 */
// Changing the palette to add new fields.
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace
(
    '{script_legend}',
    '{superfish_legend},superfish;{script_legend}',
    $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']
);

// Add superfish fields to subpalettes.
$GLOBALS['TL_DCA']['tl_layout']['palettes']['__selector__'][] = 'superfish';
$GLOBALS['TL_DCA']['tl_layout']['palettes']['__selector__'][] = 'supersubs';
$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['superfish'] = 'hoverIntent,sf_hoverClass,sf_pathClass,sf_pathLevels,sf_delay,sf_animation,sf_animationOut,sf_speed,sf_speedOut,sf_cssArrows,sf_disableHI,sf_onInit,sf_onBeforeShow,sf_onShow,sf_onBeforeHide,sf_onHide,sf_onIdle,sf_onDestroy,supersubs';
$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['supersubs'] = 'sf_minWidth,sf_maxWidth,sf_extraWidth';

$GLOBALS['TL_DCA']['tl_layout']['fields']['superfish'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['superfish'],
    'exclude'    => true,
    'inputType'  => 'checkbox',
    'eval'       => array('submitOnChange'=>true),
    'sql'        => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['hoverIntent'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['hoverIntent'],
    'exclude'    => true,
    'inputType'  => 'checkbox',
    'eval'       => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
    'sql'        => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_disableHI'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_disableHI'],
    'exclude'    => true,
    'inputType'  => 'checkbox',
    'eval'       => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
    'sql'        => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['supersubs'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['supersubs'],
    'exclude'    => true,
    'inputType'  => 'checkbox',
    'eval'       => array('submitOnChange'=>true, 'tl_class'=>'w50 m12'),
    'sql'        => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_delay'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_delay'],
    'exclude'    => true,
    'default'    => '200',
    'inputType'  => 'text',
    'eval'       => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'clr'),
    'sql'        => "int(10) unsigned NOT NULL default '200'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_speed'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_speed'],
    'exclude'    => true,
    'default'    => 'normal',
    'inputType'  => 'text',
    'eval'       => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'        => "varchar(32) NOT NULL default 'normal'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_speedOut'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_speedOut'],
    'exclude'    => true,
    'default'    => 'fast',
    'inputType'  => 'text',
    'eval'       => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'        => "varchar(32) NOT NULL default 'fast'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_cssArrows'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_cssArrows'],
    'exclude'    => true,
    'default'    => true,
    'inputType'  => 'checkbox',
    'eval'       => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
    'sql'        => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_minWidth'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_minWidth'],
    'exclude'    => true,
    'default'    => '12',
    'inputType'  => 'text',
    'eval'       => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
    'sql'        => "int(10) unsigned NOT NULL default '12'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_maxWidth'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_maxWidth'],
    'exclude'    => true,
    'default'    => '27',
    'inputType'  => 'text',
    'eval'       => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
    'sql'        => "int(10) unsigned NOT NULL default '27'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_extraWidth'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_extraWidth'],
    'exclude'    => true,
    'default'    => '1',
    'inputType'  => 'text',
    'eval'       => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
    'sql'        => "int(10) unsigned NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_hoverClass'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_hoverClass'],
    'exclude'    => true,
    'default'    => 'sfHover',
    'inputType'  => 'text',
    'eval'       => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'        => "varchar(32) NOT NULL default 'sfHover'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_pathClass'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_pathClass'],
    'exclude'    => true,
    'inputType'  => 'text',
    'eval'       => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'        => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_animation'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_animation'],
    'exclude'    => true,
    'inputType'  => 'textarea',
    'eval'       => array('style'=>'height:100px;', 'preserveTags'=>true),
    'sql'        => "text NULL"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_animationOut'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_animationOut'],
    'exclude'    => true,
    'inputType'  => 'textarea',
    'eval'       => array('style'=>'height:100px;', 'preserveTags'=>true),
    'sql'        => "text NULL"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_onInit'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_onInit'],
    'exclude'    => true,
    'inputType'  => 'textarea',
    'eval'       => array('style'=>'height:100px;', 'preserveTags'=>true),
    'sql'        => "text NULL"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_onBeforeShow'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_onBeforeShow'],
    'exclude'    => true,
    'inputType'  => 'textarea',
    'eval'       => array('style'=>'height:100px;', 'preserveTags'=>true),
    'sql'        => "text NULL"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_onShow'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_onShow'],
    'exclude'    => true,
    'inputType'  => 'textarea',
    'eval'       => array('style'=>'height:100px;', 'preserveTags'=>true),
    'sql'        => "text NULL"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_onHide'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_onHide'],
    'exclude'    => true,
    'inputType'  => 'textarea',
    'eval'       => array('style'=>'height:100px;', 'preserveTags'=>true),
    'sql'        => "text NULL"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_onIdle'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_onIdle'],
    'exclude'    => true,
    'inputType'  => 'textarea',
    'eval'       => array('style'=>'height:100px;', 'preserveTags'=>true),
    'sql'        => "text NULL"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_pathLevels'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_pathLevels'],
    'exclude'    => true,
    'default'    => '1',
    'inputType'  => 'text',
    'eval'       => array('rgxp'=>'digit', 'maxlength'=>10, 'tl_class'=>'w50'),
    'sql'        => "int(10) unsigned NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_onBeforeHide'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_onBeforeHide'],
    'exclude'    => true,
    'inputType'  => 'textarea',
    'eval'       => array('style'=>'height:100px;', 'preserveTags'=>true),
    'sql'        => "text NULL"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['sf_onDestroy'] = array
(
    'label'      => &$GLOBALS['TL_LANG']['tl_layout']['sf_onDestroy'],
    'exclude'    => true,
    'inputType'  => 'textarea',
    'eval'       => array('style'=>'height:100px;', 'preserveTags'=>true),
    'sql'        => "text NULL"
);
?>