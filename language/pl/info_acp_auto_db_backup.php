<?php
/**
*
* Auto Database Backup [Polish]
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
	'ACP_AUTO_DB_BACKUP'					=> 'Automatyczna kopia zapasowa bazy danych',
	'ACP_AUTO_DB_BACKUP_SETTINGS'			=> 'Ustawienia automatycznej kopii zapasowej',
	'LOG_AUTO_DB_BACKUP'					=> '<strong>Wykonano automatyczną kopię zapasową bazy danych</strong>',
	'LOG_AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> '<strong>Zmieniono ustawienia automatycznej kopii zapasowej bazy danych</strong>',
));
