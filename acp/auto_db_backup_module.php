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

class auto_db_backup_module
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	public $u_action;

	function main($id, $mode)
	{
		global $config, $phpbb_log, $request, $template, $user;

		$this->config = $config;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;

		$this->user->add_lang('acp/common');
		$this->user->add_lang_ext('pico/autodbbackup', 'auto_db_backup_acp');

		$this->tpl_name = 'acp_auto_db_backup';
		$this->page_title = $this->user->lang('AUTO_DB_BACKUP_SETTINGS');

		$form_key = 'acp_auto_db_backup';
		add_form_key($form_key);

		$errors = array();

		// File types
		$filetypes = array();

		if (@extension_loaded('zlib'))
		{
			$filetypes[] = 'gzip';
		}

		if (@extension_loaded('bz2'))
		{
			$filetypes[] = 'bzip2';
		}

		$filetypes[] = 'text';

		foreach ($filetypes as $filetype)
		{
			$this->template->assign_block_vars('filetypes', array(
				'S_CHECKED'		=> ($this->config['auto_db_backup_filetype'] == $filetype) ? true : false,

				'FILETYPE'		=> $filetype,
			));
		}

		$backup_date = getdate($this->config['auto_db_backup_last_gc'] + $this->config['auto_db_backup_gc']);

		// Days
		for ($i = 1; $i < 32; $i++)
		{
			$this->template->assign_block_vars('days', array(
				'S_SELECTED'	=> ($i == $backup_date['mday']) ? true : false,
				'DAY'			=> $i,
			));
		}

		// Months
		for ($i = 1; $i < 13; $i++)
		{
			$this->template->assign_block_vars('months', array(
				'S_SELECTED'	=> ($i == $backup_date['mon']) ? true : false,
				'MONTH'			=> $i,
			));
		}

		// Years
		for ($i = date("Y"); $i < (date("Y") + 1); $i++)
		{
			$this->template->assign_block_vars('years', array(
				'S_SELECTED'	=> ($i == date("Y")) ? true : false,
				'YEAR'			=> $i,
			));
		}

		// Hours
		for ($i = 0; $i < 24; $i++)
		{
			$this->template->assign_block_vars('hours', array(
				'S_SELECTED'	=> ($i == $backup_date['hours']) ? true : false,
				'HOUR'			=> $i,
			));
		}

		// Minutes
		for ($i = 0; $i < 60; $i++)
		{
			$this->template->assign_block_vars('minutes', array(
				'S_SELECTED'	=> ($i == $backup_date['minutes']) ? true : false,
				'MINUTE'		=> $i,
			));
		}

		if ($this->request->is_set_post('submit'))
		{
			$auto_db_backup_gc = $this->request->variable('auto_db_backup_gc', 0);
			$auto_db_backup_copies = $this->request->variable('auto_db_backup_copies', 0);

			if (!check_form_key($form_key))
			{
				$errors[] = $this->user->lang('FORM_INVALID');
			}

			if ($auto_db_backup_gc <= 0)
			{
				$errors[] = $this->user->lang('AUTO_DB_BACKUP_FREQ_ERROR');
			}

			if ($auto_db_backup_copies < 0)
			{
				$errors[] = $this->user->lang('AUTO_DB_BACKUP_COPIES_ERROR');
			}

			$day = $this->request->variable('auto_db_backup_day', 0) - $this->config['auto_db_backup_gc'] / 86400;
			$month = $this->request->variable('auto_db_backup_month', 0);
			$year = $this->request->variable('auto_db_backup_year', 0);
			$hour = $this->request->variable('auto_db_backup_hour', 0);
			$minute = $this->request->variable('auto_db_backup_minute', 0);

			$backup_date = mktime($hour, $minute, 0, $month, $day, $year);

			if ($backup_date + $this->config['auto_db_backup_gc'] <= time())
			{
				$errors[] = $this->user->lang('AUTO_DB_BACKUP_TIME_ERROR');
			}

			if (empty($errors))
			{
				$this->config->set('auto_db_backup_enable', $this->request->variable('auto_db_backup_enable', 0));
				$this->config->set('auto_db_backup_filetype', $this->request->variable('auto_db_backup_filetype', 'text'));
				$this->config->set('auto_db_backup_gc', $this->request->variable('auto_db_backup_gc', 0) * 86400);
				$this->config->set('auto_db_backup_copies', $this->request->variable('auto_db_backup_copies', 0));
				$this->config->set('auto_db_backup_optimize', $this->request->variable('auto_db_backup_optimize', 0));
				$this->config->set('auto_db_backup_last_gc', $backup_date);

				$phpbb_log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_AUTO_DB_BACKUP_SETTINGS_CHANGED');

				trigger_error($this->user->lang('AUTO_DB_BACKUP_SETTINGS_CHANGED') . adm_back_link($this->u_action));
			}
		}

		$this->template->assign_vars(array(
			'S_ERROR'		=> (sizeof($errors)) ? true : false,
			'ERROR_MSG'		=> (sizeof($errors)) ? implode('<br />', $errors) : '',

			'S_AUTO_DB_BACKUP_ENABLE'		=> $this->config['auto_db_backup_enable'],
			'S_AUTO_DB_BACKUP_OPTIMIZE'		=> $this->config['auto_db_backup_optimize'],

			'AUTO_DB_BACKUP_GC'			=> $this->config['auto_db_backup_gc'] / 86400,
			'AUTO_DB_BACKUP_COPIES'		=> $this->config['auto_db_backup_copies'],

			'U_ACTION'					=> $this->u_action,
		));
	}
}
