<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package Check
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Initialize the Contao Check
 *
 * @package   Check
 * @author    Leo Feyer <https://github.com/leofeyer>
 * @copyright Leo Feyer 2013
 */
class Bootstrap
{

	/**
	 * Start the session and set the locale
	 */
	public function initialize()
	{
		error_reporting(E_ALL^E_NOTICE);

		session_start();

		define('CONTAO_CHECK_VERSION', '7.5');
		define('IS_WINDOWS', (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'));
		define('TL_ROOT', dirname(dirname(dirname(__FILE__))));

		$this->setLocale($this->getLanguage());
	}


	/**
	 * Determine the user language and return the locale
	 *
	 * @return string The locale
	 */
	public function getLanguage()
	{
		$locale = '';

		if (isset($_GET['lng'])) {
			if ($this->isLocale($_GET['lng'])) {
				$locale = $_GET['lng'];
				$_SESSION['C_LANGUAGE'] = $_GET['lng'];
			}
		} elseif (isset($_SESSION['C_LANGUAGE'])) {
			$locale = $_SESSION['C_LANGUAGE'];
		} else {
			$locales = scandir('locale');
			$accepted = $this->getAcceptedLanguages();
			$limit = min(count($accepted), 8);

			// Check the first eight entries
			for ($i=0; $i<$limit; $i++) {
				$tag = $accepted[$i];

				// Find the locale or ISO language code
				if (in_array($tag, $locales)) {
					$locale = $tag;
				} else {
					$matches = array_values(preg_grep("/^$tag/", $locales));

					if (!empty($matches)) {
						$locale = $matches[0];
					}
				}

				// Store the locale in the session
				if ($locale != '') {
					$_SESSION['C_LANGUAGE'] = $locale;
					break;
				}
			}
		}

		// Fall back to English
		if ($locale == '') {
			$locale = 'en_US';
			$_SESSION['C_LANGUAGE'] = $locale;
		}

		return $locale;
	}


	/**
	 * Validate a locale
	 *
	 * @param string $locale The locale string (e.g. "en" or "en_US")
	 *
	 * @return boolean True if the locale is valid
	 */
	protected function isLocale($locale)
	{
		return preg_match('/^[a-z]{2}(_[A-Z]{2})?$/', $locale);
	}


	/**
	 * Return the first eight accepted languages as an array
	 *
	 * @return array The locale array
	 *
	 * @author Leo Unglaub <https://github.com/LeoUnglaub>
	 */
	protected function getAcceptedLanguages()
	{
		$return = array();
		$accepted = array();

		// The implementation differs from the original implementation and also works with .jp browsers
		preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $accepted);

		// Remove all invalid locales
		foreach ($accepted[1] as $v) {
			$chunks = explode('-', $v);

			// Language plus dialect, e.g. en_US, fr_FR
			if (isset($chunks[1]) && $this->isLocale(($locale = $chunks[0] . '_' . strtoupper($chunks[1])))) {
				$return[] = $locale;
			}

			// Language only, e.g. en, fr (see #29)
			if ($this->isLocale(($locale = $chunks[0]))) {
				$return[] = $locale;
			}
		}

		return array_slice(array_unique($return), 0, 8);
	}


	/**
	 * Set a locale and initialize the PHP gettext extension
	 *
	 * @param string $locale The locale
	 *
	 * @throws Exception In case the locale is not valid
	 */
	public function setLocale($locale)
	{
		if (!$this->isLocale($locale)) {
			throw new Exception("Unknown locale $locale");
		}

		if (!extension_loaded('gettext')) {
			return;
		}

		putenv("LANG=$locale");
		setlocale(LC_ALL, $locale);
		bindtextdomain('messages', dirname(dirname(__FILE__)) . '/locale');
		textdomain('messages');
		bind_textdomain_codeset('messages', 'UTF-8');
	}
}

// Add the gettext function
if (!extension_loaded('gettext')) {
	function _($str) {
		return $str;
	}
}

// Add the posix_getpwuid function
if (!function_exists('posix_getpwuid')) {
	function posix_getpwuid($int) {
		return array('name'=>$int);
	}
}

$bootstrap = new Bootstrap;
$bootstrap->initialize();
