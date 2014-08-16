<?php
/**
*
* Auto Database Backup
*
* @copyright (c) 2014 Lukasz Kaczynski
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace pico\autodbbackup\migrations\v1xx;

class m1_initial_config extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('auto_db_backup_enable', '0')),
			array('config.add', array('auto_db_backup_copies', 7)),
			array('config.add', array('auto_db_backup_gc', 86400)),
			array('config.add', array('auto_db_backup_last_gc', time(), 1)),
			array('config.add', array('auto_db_backup_filetype', 'text')),
			array('config.add', array('auto_db_backup_optimize', '0')),

			array('custom', array(array($this, 'remove_old_config'))),
		);
	}

	public function remove_old_config()
	{
		if (isset($this->config['auto_backup_version']))
		{
			$this->config->delete('auto_backup_enable');
			$this->config->delete('auto_backup_copies');
			$this->config->delete('auto_backup_gc');
			$this->config->delete('auto_backup_last_gc');
			$this->config->delete('auto_backup_filetype');
			$this->config->delete('auto_backup_optimize');
			$this->config->delete('auto_backup_version');
		}
	}
}
