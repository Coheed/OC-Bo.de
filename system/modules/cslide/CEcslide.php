<?php

	class CEcslide extends ContentElement {
		
		protected $strTemplate = 'cslide_start';
		
		public function generate() {
			if(TL_MODE == 'BE') {
				if($this->cslide_elem == 'cslide_start') {
				$arrSize = deserialize($this->cslide_size, true);
				return(sprintf('### <b>Content-Slider</b><br/>### Breite: %s%s Höhe: %s%s<br/>### Transition: %s.%s<br/>### Übergangsdauer: %sms', $arrSize[0], is_numeric($arrSize[0]) ? 'px' : '', $arrSize[1], is_numeric($arrSize[1]) ? 'px' : '', $this->cslide_transition, $this->cslide_transition_mode, $this->cslide_duration));
				} elseif($this->cslide_elem == 'cslide_delim') {
					return('### <b>Content-Slider-Trennung</b>');
				} elseif($this->cslide_elem == 'cslide_end') {
					return('### <b>Content-Slider-Ende</b>');
				}
			} 
			return(parent::generate());
		}
		protected function compile() {
			if($this->cslide_elem == 'cslide_start') {
				$GLOBALS['TL_JAVASCRIPT']['cslide'] = 'system/modules/cslide/html/cslide.js';
				$GLOBALS['TL_CSS']['cslide'] = 'system/modules/cslide/html/cslide.css';
				$arrSize = deserialize($this->cslide_size, true);
				$this->Template->arrSize = $arrSize;
				$this->Template->addAutoplay = $this->cslide_autoplay == '1' ? true : false;
				$this->Template->delay = $this->cslide_delay;
				$this->Template->addIndicator = $this->cslide_addIndicator == '1' ? true : false;
				$this->Template->addNavigation = $this->cslide_addNavigation == '1' ? true : false;
				$this->Template->autoplayRandom = $this->cslide_autoplayRandom == '1' ? true : false;
				$this->Template->slideLeft = $this->cslide_slideleft;
				$this->Template->slideRight = $this->cslide_slideright;
				$this->Template->duration = $this->cslide_duration;
			} elseif($this->cslide_elem == 'cslide_delim') {
				$this->Template = new \FrontendTemplate('cslide_delim');
			} elseif($this->cslide_elem == 'cslide_end') {
				$this->Template = new \FrontendTemplate('cslide_end');
			}
		}
		
	}

?>