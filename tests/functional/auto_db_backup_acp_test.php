<?php
/**
*
* Auto Database Backup
*
* @copyright (c) 2014 Lukasz Kaczynski
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace pico\autodbbackup\tests\functional;

/**
* @group functional
*/
class auto_db_backup_acp_test extends \phpbb_functional_test_case
{
	static protected function setup_extensions()
	{
		return array('pico/autodbbackup');
	}

	public function test_acp_pages()
	{
		$this->login();
		$this->admin_login();

		$this->add_lang_ext('pico/autodbbackup', 'auto_db_backup_acp');

		$crawler = self::request('GET', 'adm/index.php?i=\pico\autodbbackup\acp\auto_db_backup_module&amp;mode=settings&sid=' . $this->sid);
		$this->assertContainsLang('AUTO_DB_BACKUP_SETTINGS', $crawler->text());
		$this->assertContainsLang('AUTO_DB_BACKUP_SETTINGS_EXPLAIN', $crawler->text());
	}
}