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
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Andmebaasi automaatse varukoopia seaded',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Sellel leheküljel saad vaikimisi seadistada automaatse varukoopia tegemise andmebaasist. Sõltuvalt sinu serveri seadetest võid ka kokku pakkida andmebaasi.<br />Kõik varukoopiad on salvestatakse serveri <samp>/store/</samp> kausta. Taastada varukoopiast saad ka läbi <em>Taasta</em> paneeli.',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Andmebaasi automaatse varukoopia seaded muudetud.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Luba automaatsete varukoopiate tegemine andmebaasist',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'			=> 'Lubab või keelab automaatsete varukoopiate tegemise andmebaasist',
	'AUTO_DB_BACKUP_FREQ'					=> 'Varukoopiate tegemise sagedus',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Seadista varukoopia tegemise sagedus. Sisestatud väärtus peab olema kõrgem, kui 0.',
	'AUTO_DB_BACKUP_FREQ_ERROR'				=> 'Sisestatud väärtus <em>varukoopia sageduseks</em> on vigane. Väärtus peab olema kõrgem, kui <strong>0</strong>.',
	'AUTO_DB_BACKUP_COPIES'					=> 'Salvestatud varukoopiad',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'Kui mitu varukoopiad salvestatakse serverisse. Väärtus 0 keelab selle funktsiooni ja kõik varukoopiad salvestatakse serverisse.',
	'AUTO_DB_BACKUP_COPIES_ERROR'			=> 'Sisestatud väärtus <em>salvestatud varukoopiate</em> jaoks on vigane. Väärtus peab olema võrdne või kõrgem kui <strong>0</strong>.',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'Faili tüüp',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Vali faili tüüp varukoopiate tegemiseks.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Optimeeri andmebaas enne varukoopiat',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Optimeeri ainult mitte optimeeritud andmebaasi tabelid enne varukoopia tegemist .',
	'AUTO_DB_BACKUP_TIME'					=> 'Järgmise varukoopia tegemise aeg',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Täpsusta millal tehakse foorumi andmebaasist varukoopia.<br /><strong>Märkus</strong>: Sa pead sisestama tulevase ajahetke praegusest.',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> '<em>Järgmise varukoopia tegemise aeg</em> on vigane. Aeg peab olema hilisem kui praegune.',

	'HOUR'		=> 'Tundi',
	'MINUTE'	=> 'Minutit',
));
