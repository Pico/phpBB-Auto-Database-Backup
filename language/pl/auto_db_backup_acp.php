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
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Ustawienia automatycznej kopii zapasowej',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Tutaj możesz zmienić ustawienia automatycznej kopii zapasowej bazy danych. W zależności od konfiguracji serwera, możesz wybrać jedną z kliku metod kompresji.<br />Wszystkie utworzone kopie zapasowe bazy danych przechowywane są na serwerze w folderze <samp>/store/</samp>. Kopię zapasową można odtworzyć przy pomocy wbudowanej funkcji znajdującej się w zakładce <em>Przywracanie</em>.',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Ustawienia automatycznej kopii zapasowej bazy danych zostały zmienione.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Włącz automatyczną kopię zapasową bazy danych',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'			=> 'Włącz albo wyłącz automatyczną kopię zapasową bazy danych',
	'AUTO_DB_BACKUP_FREQ'					=> 'Częstotliwość kopii zapasowych',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Ustaw częstotliwość wykonywania automatycznej kopii zapasowej bazy danych. Podana wartość musi być większa niż 0.',
	'AUTO_DB_BACKUP_FREQ_ERROR'				=> 'Podana wartość dla <em>Częstotliwość kopii zapasowych</em> jest nieprawidłowa. Wartość ta musi być większa niż <strong>0</strong>.',
	'AUTO_DB_BACKUP_COPIES'					=> 'Przechowywane kopie zapasowe',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'Ile kopii zapasowych ma być przechowanych na serwerze. Wpisanie wartości 0 wyłączy tą opcję i wszystkie kopie zapasowe bazy danych będą przechowywane na serwerze.',
	'AUTO_DB_BACKUP_COPIES_ERROR'			=> 'Podana wartość dla <em>Przechowywane kopie zapasowe</em> jest nieprawidłowa. Wartość ta musi być równa, bądź większa niż <strong>0</strong>.',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'Metoda kompresji',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Wybierz metodę kompresji bazy danych.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Optymalizuj bazę danych przed wykonaniem kopii zapasowej',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Przed wykonaniem automatycznej kopii zapasowej bazy danych zostanie dodatkowo wykonana optymalizacja tabel bazy danych, które tego wymagają.',
	'AUTO_DB_BACKUP_TIME'					=> 'Data następnej kopii zapasowej',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Ustaw kiedy ma zostać wykonana następna automatyczna kopia zapasowa bazy danych.<br /><strong>Uwaga</strong>: należy podać konkretną datę w przyszłości.',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> '<em>Data następnej kopii zapasowej</em> jest nieprawidłowa. Należy podać datę z przyszłości.',

	'HOUR'		=> 'Godzina',
	'MINUTE'	=> 'Minuta',
));
