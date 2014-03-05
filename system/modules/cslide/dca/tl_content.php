<?php

	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_size'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_size'],
		'inputType'		=> 'text',
		'eval'			=> array('size' => 2, 'multiple' => true, 'tl_class' => 'w50')
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_transition'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_transition'],
		'inputType'		=> 'select',
		'options'		=> array('linear', 'Quad', 'Cubic', 'Quart', 'Quint', 'Pow', 'Expo', 'Circ', 'Sine', 'Back', 'Bounce', 'Elastic'),
		'eval'			=> array('tl_class' => 'w50')
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_transition_mode'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_transition_mode'],
		'inputType'		=> 'select',
		'options'		=> array('easeIn', 'easeOut'),
		'eval'			=> array('tl_class' => 'w50')
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_duration'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_duration'],
		'inputType'		=> 'text',
		'eval'			=> array('rgxp' => 'digit', 'tl_class' => 'w50'),
		'default'		=> 1000
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_elem'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_elem'],
		'inputType'		=> 'radio',
		'options'		=> array('cslide_start', 'cslide_delim', 'cslide_end'),
		'reference' 	=> &$GLOBALS['TL_LANG']['tl_content']['cslide_elem_label'],
		'default'		=> 'cslide_start',
		'eval'			=> array('submitOnChange' => true)
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_autoplay'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_autoplay'],
		'inputType'		=> 'checkbox',
		'eval'			=> array('submitOnChange' => true, 'tl_class' => 'clr w50')
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_delay'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_delay'],
		'inputType'		=> 'text',
		'eval'			=> array('rgxp' => 'digit', 'mandatory' => true, 'tl_class' => 'clr'),
		'default'		=> '3000'
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_addNavigation'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_addNavigation'],
		'inputType'		=> 'checkbox',
		'eval'			=> array('tl_class' => 'clr w50')
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_addIndicator'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_addIndicator'],
		'inputType'		=> 'checkbox',
		'eval'			=> array('tl_class' => 'w50')
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_slideleft'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_slideleft'],
		'inputType'		=> 'select',
		'options'		=> array('l', 'r', 'b', 't', 'lb', 'lt', 'rb', 'rt'),
		'reference' 	=> &$GLOBALS['TL_LANG']['tl_content']['cslide_directions'],
		'default'		=> 'l',
		'eval'			=> array('tl_class' => 'w50')
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_slideright'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_slideright'],
		'inputType'		=> 'select',
		'options'		=> array('l', 'r', 'b', 't', 'lb', 'lt', 'rb', 'rt'),
		'reference' 	=> &$GLOBALS['TL_LANG']['tl_content']['cslide_directions'],
		'default'		=> 'r',
		'eval'			=> array('tl_class' => 'w50')
	);
	
	$GLOBALS['TL_DCA']['tl_content']['fields']['cslide_autoplayRandom'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_content']['cslide_autoplayRandom'],
		'inputType'		=> 'checkbox',
		'eval'			=> array('tl_class' => 'w50')
	);
	
	
	
	
	
	$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'cslide_elem';
	$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'cslide_autoplay';
	
	$GLOBALS['TL_DCA']['tl_content']['palettes']['cslide'] = '{type_legend},type,headline;{config_legend},cslide_elem;{expert_legend:hide},guests,invisible,cssID,space;{protected_legend:hide},protected';
	$GLOBALS['TL_DCA']['tl_content']['subpalettes']['cslide_elem_cslide_start'] = 'cslide_size,cslide_duration,cslide_transition,cslide_transition_mode,cslide_slideleft,cslide_slideright,cslide_autoplay,cslide_addNavigation,cslide_addIndicator';
	$GLOBALS['TL_DCA']['tl_content']['subpalettes']['cslide_autoplay'] = 'cslide_autoplayRandom,cslide_delay';
	
?>