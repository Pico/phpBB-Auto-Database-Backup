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
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Ustawienia automatycznej kopii zapasowej',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Tutaj możesz zmienić ustawienia automatycznej kopii zapasowej bazy danych. W zależności od konfiguracji serwera, możesz wybrać jeden z kilku formatów kompresji.<br />Wszystkie kopie zapasowe bazy danych przechowywane są w folderze <samp>/store/</samp>. Możesz odtworzyć kopię zapasową za pomocą zakładki <em>Przywracanie</em>.',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Ustawienia automatycznej kopii zapasowej bazy danych zostały zmienione.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Włącz automatyczną kopię zapasową bazy danych',
	'AUTO_DB_BACKUP_FREQ'					=> 'Częstotliwość kopii zapasowych',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Ustaw częstotliwość tworzenia automatycznej kopii zapasowej bazy danych. Podana wartość musi być większa niż 0.',
	'AUTO_DB_BACKUP_FREQ_ERROR'				=> 'Podana wartość dla częstotliwości <em>Częstotliwość kopii zapasowych</em> jest nieprawidłowa. Wartość ta musi być większa niż <strong>0</strong>.',
	'AUTO_DB_BACKUP_COPIES'					=> 'Stored backups',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'How many backups will be stored on the server. 0 means disabled and all backups will be stored on the server.',
	'AUTO_DB_BACKUP_COPIES_ERROR'			=> 'Podana wartość dla częstotliwości <em>Stored backups</em> jest nieprawidłowa. Wartość ta musi być równa bądź większa niż <strong>0</strong>.',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'Rodzaj kompresji',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Wybierz rodzaj kompresji.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Optymalizuj bazę danych przed wykonaniem kopii zapasowej',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Tabele niezoptymalizowane zostaną zoptymalizowane przed wykonaniem kopii zapasowej.',
	'AUTO_DB_BACKUP_TIME'					=> 'Data następnej kopii zapasowej',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Ustaw kiedy ma zostać wykonana następna automatyczna kopia zapasowa bazy danych.<br /><strong>Uwaga</strong>: należy podać konkretną datę w przyszłości.',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> '<em>Data następnej kopii zapasowej</em> jest nieprawidłowa. Należy podać datę z przyszłości.',

	'HOUR'		=> 'Godzina',
	'MINUTE'	=> 'MInuta',
));
