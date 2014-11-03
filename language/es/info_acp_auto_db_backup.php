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
	'ACP_AUTO_DB_BACKUP_SETTINGS'			=> 'Ajustes de Auto Backup',
	'LOG_AUTO_DB_BACKUP'					=> '<strong>Backup automático de base de datos</strong>',
	'LOG_AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> '<strong>Ajustes de Auto Database Backup alterados</strong>',
));
