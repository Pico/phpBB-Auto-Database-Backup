<?php
/**
*
* Auto Database Backup
*
* @copyright (c) 2014 Lukasz Kaczynski
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace pico\autodbbackup\acp;

class auto_db_backup_info
{
	function module()
	{
		return array(
			'filename'	=> '\pico\autodbbackup\acp\auto_db_backup_module',
			'title'		=> 'ACP_AUTO_DB_BACKUP',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_AUTO_DB_BACKUP_SETTINGS', 'auth' => 'ext_pico/autodbbackup && acl_a_board', 'cat' => array('ACP_CAT_DATABASE')),
			),
		);
	}
}
