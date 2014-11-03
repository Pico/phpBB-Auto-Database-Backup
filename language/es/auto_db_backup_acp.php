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
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Ajustes de Auto Database Backup',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Aquí puede establecer la configuración predeterminada para los backups automáticos de la bases de datos. Según la configuración del servidor podría ser capaz de comprimir la base de datos.<br />Todos los backups serán almacenados en la carpeta <samp>/store/</samp>. Puede restaurar un backup desde el panel <em>Restaurar</em>.',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Ajustes de Auto Database Backup Settings cambiados.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Habilitar Auto Database Backup',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'			=> 'Habilitar o deshabilitar backups automáticos de la bases de datos',
	'AUTO_DB_BACKUP_FREQ'					=> 'Frecuencia de backups',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Establezca la frecuencia de backups. El valor debe ser mayor que 0.',
	'AUTO_DB_BACKUP_FREQ_ERROR'				=> 'El valor introducido para <em>Frecuencia de backups</em> no es correcto. El valor debe ser mayor que <strong>0</strong>.',
	'AUTO_DB_BACKUP_COPIES'					=> 'Backups almacenados',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'Cuántos backups serán almacenados en el servidor. 0 significa deshabilitado y todos los backups serán almacenados en el servidor.',
	'AUTO_DB_BACKUP_COPIES_ERROR'			=> 'El valor introducido para <em>Backups almacenados</em> no es correcto. El valor debe ser igual o mayor que <strong>0</strong>.',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'Tipo de archivo',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Elija el tipo de archivo para backups.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Optimizar DB antes del backup',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Optimizar sólo las tablas no optimizadas de la bases de datos antes de hacer su backup.',
	'AUTO_DB_BACKUP_TIME'					=> 'Fecha del siguiente backup',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Indique cuándo debe hacerse el siguiente backup de la base de datos.<br /><strong>Nota</strong>: Debe especificar un punto particular en el futuro.',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> 'La <em>fecha del siguiente backup</em> no es correcta. La fecha se ha de definir en el futuro.',

	'HOUR'		=> 'Hora',
	'MINUTE'	=> 'Minuto',
));
