<?php
/**
*
* Auto Database Backup [Estonian]
*
* @copyright (c) 2014 Lukasz Kaczynski; Estonian translation by phpBBeesti.com (10/2014)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_AUTO_DB_BACKUP'					=> 'Automaatne varukoopia andmebaasist',
	'ACP_AUTO_DB_BACKUP_SETTINGS'			=> 'Automaatne varukoopia',
	'LOG_AUTO_DB_BACKUP'					=> '<strong>Automaatne varukoopia andmebaasist</strong>',
	'LOG_AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> '<strong>Andmebaasi automaatse varukoopia seaded muudetud</strong>',
));
