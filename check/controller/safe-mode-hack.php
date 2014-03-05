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
 * Check the Safe Mode Hack requirements
 *
 * @package   Check
 * @author    Leo Feyer <https://github.com/leofeyer>
 * @copyright Leo Feyer 2013
 */
class SafeModeHack
{

	/**
	 * Folder owner
	 * @var string
	 */
	protected $folderOwner;

	/**
	 * Test folder owner
	 * @var string
	 */
	protected $testFolderOwner;

	/**
	 * Test folder permissions
	 * @var integer
	 */
	protected $testFolderChmod;

	/**
	 * File owner
	 * @var string
	 */
	protected $fileOwner;

	/**
	 * Test file owner
	 * @var string
	 */
	protected $testFileOwner;

	/**
	 * Test file permissions
	 * @var integer
	 */
	protected $testFileChmod;

	/**
	 * Required
	 * @var boolean
	 */
	protected $required = false;


	/**
	 * Execute the command
	 */
	public function run()
	{
		include 'views/safe-mode-hack.phtml';
	}


	/**
	 * Return whether the Safe Mode Hack is required
	 *
	 * @return boolean True if the Safe Mode Hack is required
	 */
	public function isRequired()
	{
		return $this->required;
	}


	/**
	 * Check whether the PHP safe_mode is enabled
	 *
	 * @return boolean True if the PHP safe_mode is enabled
	 */
	public function isEnabled()
	{
		$safe_mode = ini_get('safe_mode');

		if ($safe_mode == '' || $safe_mode == 0 || $safe_mode == 'Off') {
			return false;
		}

		$this->required = true;
		return true;
	}


	/**
	 * Return the owner of the "check" folder
	 *
	 * @return string The owner name
	 */
	public function getFolderOwner()
	{
		return $this->folderOwner['name'];
	}


	/**
	 * Return the owner of the "test" folder
	 *
	 * @return string The owner name
	 */
	public function getTestFolderOwner()
	{
		return $this->testFolderOwner['name'];
	}


	/**
	 * Return the permissions of the "test" folder
	 *
	 * @return integer The CHMOD settings
	 */
	public function getTestFolderChmod()
	{
		return $this->testFolderChmod;
	}


	/**
	 * Check whether PHP is allowed to create folders
	 *
	 * @return boolean True if PHP is allowed create folders
	 */
	public function canCreateFolder()
	{
		$this->folderOwner = posix_getpwuid(@fileowner(dirname(__FILE__)));

		// Try to create a folder
		if (@mkdir('test') !== false) {
			$options = IS_WINDOWS ? array(777) : array(775, 755, 770, 750);

			// Check the folder permissions
			clearstatcache();
			$this->testFolderChmod = decoct(@fileperms('test') & 511);
			$this->testFolderOwner = posix_getpwuid(@fileowner('test'));

			// Check the folder owner
			if (in_array($this->testFolderChmod, $options)) {
				if ($this->folderOwner['name'] == $this->testFolderOwner['name']) {
					@rmdir('test');
					return true;
				}
			}
		}

		@rmdir('test');
		$this->required = true;

		return false;
	}


	/**
	 * Return the owner of the "check/safe-mode-hack.php" file
	 *
	 * @return string The owner name
	 */
	public function getFileOwner()
	{
		return $this->fileOwner['name'];
	}


	/**
	 * Return the owner of the "test.txt" file
	 *
	 * @return string The owner name
	 */
	public function getTestFileOwner()
	{
		return $this->testFileOwner['name'];
	}


	/**
	 * Return the permissions of the "test.txt" file
	 *
	 * @return integer The CHMOD settings
	 */
	public function getTestFileChmod()
	{
		return $this->testFileChmod;
	}


	/**
	 * Check whether PHP is allowed to create files
	 *
	 * @return boolean True if PHP is allowed create files
	 */
	public function canCreateFile()
	{
		$this->fileOwner = posix_getpwuid(@fileowner(__FILE__));

		// Try to create a file
		if (@file_put_contents('test.txt', '') !== false) {
			$options = IS_WINDOWS ? array(666) : array(664, 644, 660, 640);

			// Check the file permissions
			clearstatcache();
			$this->testFileChmod = decoct(@fileperms('test.txt') & 511);
			$this->testFileOwner = posix_getpwuid(@fileowner('test.txt'));

			// Check the file owner
			if (in_array($this->testFileChmod, $options)) {
				if ($this->fileOwner['name'] == $this->testFileOwner['name']) {
					@unlink('test.txt');
					return true;
				}
			}
		}

		@unlink('test.txt');
		$this->required = true;

		return false;
	}
}
