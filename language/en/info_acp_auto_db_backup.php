<?php
/**
*
* Auto Database Backup
*
* @copyright (c) 2014 Lukasz Kaczynski
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
	'ACP_AUTO_DB_BACKUP'					=> 'Auto Database Backup',
	'ACP_AUTO_DB_BACKUP_SETTINGS'			=> 'Auto backup settings',
	'LOG_AUTO_DB_BACKUP'					=> '<strong>Auto database backup</strong>',
	'LOG_AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> '<strong>Altered Auto Database Backup settings</strong>',
));
