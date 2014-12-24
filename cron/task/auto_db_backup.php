<?php
/**
*
* Auto Database Backup
*
* @copyright (c) 2014 Lukasz Kaczynski
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace pico\autodbbackup\cron\task;

class auto_db_backup extends \phpbb\cron\task\base
{
	protected $phpbb_root_path;
	protected $php_ext;
	protected $config;
	protected $db;
	protected $db_tools;
	protected $log;
	protected $user;

	/**
	* Constructor.
	*/
	public function __construct($phpbb_root_path, $php_ext, \phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\db\tools $db_tools, \phpbb\log\log $log, \phpbb\user $user)
	{
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
		$this->config = $config;
		$this->db = $db;
		$this->db_tools = $db_tools;
		$this->log = $log;
		$this->user = $user;
	}

	/**
	* Runs this cron task.
	*
	* @return null
	*/
	public function run()
	{
		include($this->phpbb_root_path . 'includes/acp/acp_database.' . $this->php_ext);

		$backup_date = getdate($this->config['auto_db_backup_last_gc']);
		$last_backup_date = mktime($backup_date['hours'], $backup_date['minutes'], 0, date("m"), date("j"), date("Y"));

		$this->config->set('auto_db_backup_last_gc', $last_backup_date, false);

		// Optimize database tables before backup them (only unoptimized tables)
		if ($this->config['auto_db_backup_optimize'])
		{
			if ($result = $this->db->sql_query('SHOW TABLE STATUS'))
			{
				$tables = $this->db->sql_fetchrowset($result);
				$size = sizeof($tables);

				for ($i = 0; $i < $size; $i++)
				{
					if ($tables[$i]['Data_free'] != 0)
					{
						$for_optimize[] = $tables[$i]['Name'];
					}
				}

				if (!empty($for_optimize))
				{
					$tables = implode(',', $for_optimize);
					$this->db->sql_query('OPTIMIZE TABLE ' . $tables);
				}
			}
		}

		@set_time_limit(1200);
		@set_time_limit(0);

		$time = time();
		$format = $this->config['auto_db_backup_filetype'];
		$filename = 'backup_' . $time . '_' . unique_id();

		switch ($this->db->get_sql_layer())
		{
			case 'mysqli':
			case 'mysql4':
			case 'mysql':
				$extractor = new \mysql_extractor($format, $filename, $time, false, true);
			break;

			case 'sqlite':
				$extractor = new \sqlite_extractor($format, $filename, $time, false, true);
			break;

			case 'sqlite3':
				$extractor = new \sqlite3_extractor($format, $filename, $time, false, true);
			break;

			case 'postgres':
				$extractor = new \postgres_extractor($format, $filename, $time, false, true);
			break;

			case 'oracle':
				$extractor = new \oracle_extractor($format, $filename, $time, false, true);
			break;

			case 'mssql':
			case 'mssql_odbc':
				$extractor = new \mssql_extractor($format, $filename, $time, false, true);
			break;
		}

		global $table_prefix;

		$tables = $this->db_tools->sql_list_tables();

		$extractor->write_start($table_prefix);

		foreach ($tables as $table_name)
		{
			$extractor->write_table($table_name);
			$extractor->write_data($table_name);
		}

		$extractor->write_end();

		$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_AUTO_DB_BACKUP');

		// Delete backup
		if ($this->config['auto_db_backup_copies'])
		{
			$rep = $this->phpbb_root_path . '/store/';
			$dir = opendir($rep);
			$files = array();
			while (($file = readdir($dir)) !== false)
			{
				if (is_file($rep . $file) && (substr($file, -3) == '.gz' || substr($file, -4) == '.bz2' || substr($file, -4) == '.sql' ))
				{
					$files[$file] = fileatime($rep . $file);
				}
			}
			closedir($dir);

			arsort($files);
			reset($files);

			if (sizeof($files) > $this->config['auto_db_backup_copies'])
			{
				$i = 0;
				while (list($key, $val) = each($files))
				{
					$i++;
					if ($i > $this->config['auto_db_backup_copies'])
					{
						@unlink($rep . $key);
					}
				}
			}
		}
	}

	/**
	* Returns whether this cron task can run, given current board configuration.
	*
	* @return bool
	*/
	public function is_runnable()
	{
		return (bool) $this->config['auto_db_backup_enable'];
	}

	/**
	* Returns whether this cron task should run now, because enough time
	* has passed since it was last run.
	*
	* @return bool
	*/
	public function should_run()
	{
		return $this->config['auto_db_backup_last_gc'] < time() - $this->config['auto_db_backup_gc'];
	}
}
