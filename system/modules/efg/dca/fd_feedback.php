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
// last created on 2014-02-21 21:30:00 by saving form ""



/**
 * Table tl_formdata defined by form ""
 */
$GLOBALS['TL_DCA']['tl_formdata'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Formdata',
		'ctable'                      => array('tl_formdata_details'),
		'closed'                      => true,
		'notEditable'                 => false,
		'enableVersioning'            => false,
		'doNotCopyRecords'            => true,
		'doNotDeleteRecords'          => true,
		'switchToEdit'                => true
	),
	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 2,
			'fields'                  => array('date DESC'),
			'flag'                    => 8,
			'panelLayout'             => 'filter;search,sort,limit',
		),
		'label' => array
		(
			'fields'                  => array('date', 'form', 'alias', 'be_notes' , 'Titel', 'nachname', 'vorname', 'geburtsdatum', 'straße', 'plz_ort', 'TelefonP', 'TelefonD', 'handy', 'email', 'berufArbeitgeber', 'erziehungsberechtigter', 'betreuer'),
			/*
			'format'                  => '<div class="fd_wrap">
	<div class="fd_head">%s<span>[%s]</span></div>
	<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h64' : '') . ' block">	<div class="fd_notes">%s</div>
	<div class="fd_row field_Titel"><div class="fd_label">Titel: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_nachname"><div class="fd_label">Nachname: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_vorname"><div class="fd_label">Vorname: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_geburtsdatum"><div class="fd_label">Geburtsdatum: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_straße"><div class="fd_label">Straße: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_plz_ort"><div class="fd_label">PLZ / Ort: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_TelefonP"><div class="fd_label">Telefon (privat): </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_TelefonD"><div class="fd_label">Telefon (dienstlich): </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_handy"><div class="fd_label">Handy: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_email"><div class="fd_label">E-Mail: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_berufArbeitgeber"><div class="fd_label">Beruf / Arbeitsgeber: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_erziehungsberechtigter"><div class="fd_label">Name des Erziehungsberechtigten: </div><div class="fd_value">%s </div></div>
	<div class="fd_row field_betreuer"><div class="fd_label">Name des Betreuers: </div><div class="fd_value">%s </div></div>
		</div></div>',
			*/
			'label_callback'          => array('tl_fd_feedback','getRowLabel')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['edit'],
				'href'                => 'act=edit',
				'button_callback'     => array('FormdataBackend', 'callbackEditButton'),
				'icon'                => 'edit.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_formdata']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),
	// Palettes
	'palettes' => array
	(
		'default'                     => 'form,alias,date,ip,published,sorting;{confirmation_legend},confirmationSent,confirmationDate;{fdNotes_legend:hide},be_notes;{fdOwner_legend:hide},fd_member,fd_user,fd_member_group,fd_user_group;{fdDetails_legend},Titel,nachname,vorname,geburtsdatum,straße,plz_ort,TelefonP,TelefonD,handy,email,berufArbeitgeber,erziehungsberechtigter,betreuer'
	),

	// Base fields in table tl_formdata
	'fields' => array
	(
		'form' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['form'],
			'inputType'               => 'select',
			'exclude'                 => false,
			'search'                  => true,
			'filter'                  => true,
			'sorting'                 => true,
			'options_callback'        => array('tl_formdata', 'getFormsSelect'),
			'eval'                    => array('chosen' => true, 'tl_class'=> 'w50')
		),
		'date' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['date'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'filter'                  => true,
			'flag'                    => 8,
			'eval'                    => array('rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard'),
		),
		'ip' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['ip'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => false,
			'filter'                  => false,
			'eval'                    => array('tl_class'=>'w50'),
		),
		'fd_member' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['fd_member'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('chosen' => true, 'mandatory' => false, 'includeBlankOption' => true, 'tl_class'=>'w50'),
			'options_callback'        => array('tl_formdata', 'getMembersSelect'),
		),
		'fd_user' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['fd_user'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('chosen' => true, 'mandatory' => false, 'includeBlankOption' => true, 'tl_class'=>'w50'),
			'options_callback'        => array('tl_formdata', 'getUsersSelect'),
		),
		'fd_member_group' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['fd_member_group'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('chosen' => true, 'mandatory' => false, 'includeBlankOption' => true, 'tl_class'=>'w50'),
			'options_callback'        => array('tl_formdata', 'getMemberGroupsSelect'),
		),
		'fd_user_group' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['fd_user_group'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('chosen' => true, 'mandatory' => false, 'includeBlankOption' => true, 'tl_class'=>'w50'),
			'options_callback'        => array('tl_formdata', 'getUserGroupsSelect'),
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12 cbx clr'),
			// 'default'                 => '1'
		),
		'sorting' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['sorting'],
			'exclude'                 => true,
			'filter'                  => false,
			'inputType'               => 'text',
			'eval'                    => array('rgxp' => 'digit', 'maxlength' => 10, 'tl_class'=>'w50')
		),
		'alias' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['alias'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'alnum', 'unique'=>true, 'spaceToUnderscore'=>true, 'maxlength'=>64, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_formdata', 'generateAlias')
			)
		),
		'confirmationSent' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['confirmationSent'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50', 'doNotCopy'=>true, 'isBoolean'=>true)
		),
		'confirmationDate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['confirmationDate'],
			'exclude'                 => true,
			'filter'                  => true,
			'flag'                    => 8,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker' => true, 'tl_class'=>'w50 wizard')
		),
		'be_notes' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['be_notes'],
			'inputType'               => 'textarea',
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => false,
			'filter'                  => false,
			'eval'                    => array('rte' => 'tinyMCE', 'cols' => 80,'rows' => 5, 'style' => 'height: 80px'),
		),
		'import_source' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_formdata']['import_source'],
			'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'csv', 'class'=>'mandatory')
		)
	),
	'tl_formdata' => array
	(
		'baseFields'                 => array('id','sorting','tstamp','form','ip','date','fd_member','fd_user','fd_member_group','fd_user_group','published','alias','be_notes','confirmationSent','confirmationDate'),
		'detailFields'               => array('Titel','nachname','vorname','geburtsdatum','straße','plz_ort','TelefonP','TelefonD','handy','email','berufArbeitgeber','erziehungsberechtigter','betreuer'),
	)
);

// Detail fields in table tl_formdata_details
// 'Titel'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['label'] = array('Titel', '[Titel] Titel');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['ff_id'] = 1;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['f_id'] = 2;
// 'nachname'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['label'] = array('Nachname', '[nachname] Nachname');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['ff_id'] = 25;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['f_id'] = 2;
// 'vorname'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['label'] = array('Vorname', '[vorname] Vorname');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['ff_id'] = 26;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['f_id'] = 2;
// 'geburtsdatum'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['label'] = array('Geburtsdatum', '[geburtsdatum] Geburtsdatum');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['ff_id'] = 27;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['f_id'] = 2;
// 'straße'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['label'] = array('Straße', '[straße] Straße');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['ff_id'] = 28;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['f_id'] = 2;
// 'plz_ort'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['label'] = array('PLZ / Ort', '[plz_ort] PLZ / Ort');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['ff_id'] = 29;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['f_id'] = 2;
// 'TelefonP'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['label'] = array('Telefon (privat)', '[TelefonP] Telefon (privat)');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['ff_id'] = 30;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['f_id'] = 2;
// 'TelefonD'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['label'] = array('Telefon (dienstlich)', '[TelefonD] Telefon (dienstlich)');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['ff_id'] = 31;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['f_id'] = 2;
// 'handy'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['label'] = array('Handy', '[handy] Handy');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['ff_id'] = 32;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['f_id'] = 2;
// 'email'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['label'] = array('E-Mail', '[email] E-Mail');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['ff_id'] = 33;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['f_id'] = 2;
// 'berufArbeitgeber'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['label'] = array('Beruf / Arbeitsgeber', '[berufArbeitgeber] Beruf / Arbeitsgeber');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['ff_id'] = 34;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['f_id'] = 2;
// 'erziehungsberechtigter'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['label'] = array('Name des Erziehungsberechtigten', '[erziehungsberechtigter] Name des Erziehungsberechtigten');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['ff_id'] = 35;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['f_id'] = 2;
// 'betreuer'
$GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['label'] = array('Name des Betreuers', '[betreuer] Name des Betreuers');
$GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['inputType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['formfieldType'] = 'text';
$GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['exclude'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['search'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['filter'] = false;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['ff_id'] = 36;
$GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['f_id'] = 2;

/**
 * Class tl_fd_
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @copyright  Thomas Kuhn 2007-2014
 * @author     Thomas Kuhn <mail@th-kuhn.de>
 * @package    Efg
 */
class tl_fd_feedback extends \Backend
{

	/**
	 * Database result
	 * @var array
	 */
	protected $arrData = null;

	public function __construct()
	{
		parent::__construct();
	}


	/*
	* Create list label for formdata item
	* This can be used to customize the backend list view for formdata
	*/
	public function getRowLabel($arrRow)
	{
		$strRowLabel = '';

		$strKey = 'unpublished';

		$strRowLabel .= '<div class="fd_wrap">';
		$strRowLabel .= '<div class="fd_head">' . date($GLOBALS['TL_CONFIG']['datimFormat'], $arrRow['date']) . '<span>[' . $arrRow['form'] . ']</span><span>' . $arrRow['alias'] . '</span></div>';
		$strRowLabel .= '<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h64' : '') . ' block">';
		$strRowLabel .= '<div class="fd_notes">' . $arrRow['be_notes'] . '</div>';
		$strRowLabel .= '<div class="mark_links">';
		if (strlen($arrRow['Titel']))
		{
			$strRowLabel .= '<div class="fd_row field_Titel">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['Titel']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['Titel'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['nachname']))
		{
			$strRowLabel .= '<div class="fd_row field_nachname">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['nachname']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['nachname'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['vorname']))
		{
			$strRowLabel .= '<div class="fd_row field_vorname">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['vorname']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['vorname'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['geburtsdatum']))
		{
			$strRowLabel .= '<div class="fd_row field_geburtsdatum">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['geburtsdatum']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['geburtsdatum'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['straße']))
		{
			$strRowLabel .= '<div class="fd_row field_straße">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['straße']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['straße'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['plz_ort']))
		{
			$strRowLabel .= '<div class="fd_row field_plz_ort">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['plz_ort']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['plz_ort'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['TelefonP']))
		{
			$strRowLabel .= '<div class="fd_row field_TelefonP">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonP']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['TelefonP'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['TelefonD']))
		{
			$strRowLabel .= '<div class="fd_row field_TelefonD">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['TelefonD']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['TelefonD'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['handy']))
		{
			$strRowLabel .= '<div class="fd_row field_handy">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['handy']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['handy'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['email']))
		{
			$strRowLabel .= '<div class="fd_row field_email">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['email']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['email'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['berufArbeitgeber']))
		{
			$strRowLabel .= '<div class="fd_row field_berufArbeitgeber">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['berufArbeitgeber']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['berufArbeitgeber'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['erziehungsberechtigter']))
		{
			$strRowLabel .= '<div class="fd_row field_erziehungsberechtigter">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['erziehungsberechtigter']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['erziehungsberechtigter'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		if (strlen($arrRow['betreuer']))
		{
			$strRowLabel .= '<div class="fd_row field_betreuer">';
			$strRowLabel .= '<div class="fd_label">' . $GLOBALS['TL_DCA']['tl_formdata']['fields']['betreuer']['label'][0] . ': </div>';
			$strRowLabel .= '<div class="fd_value">' . $arrRow['betreuer'] . ' </div>';
			$strRowLabel .= '</div>';
		}
		$strRowLabel .= '</div>';
		$strRowLabel .= '</div></div>';

		return $strRowLabel;

	}

}
