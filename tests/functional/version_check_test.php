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
class version_check_test extends \phpbb_functional_test_case
{
	static protected function setup_extensions()
	{
		return array('pico/autodbbackup');
	}

	public function setUp()
	{
		parent::setUp();
		$this->add_lang_ext('pico/autodbbackup', array('auto_db_backup_acp', 'info_acp_auto_db_backup'));
	}

	public function test_version_check()
	{
		$this->login();
		$this->admin_login();

		$crawler = self::request('GET', 'adm/index.php?i=acp_extensions&mode=main&action=list&versioncheck_force=1&sid=' . $this->sid);

		$this->assertContains(strtolower($this->lang('ACP_AUTO_DB_BACKUP_SETTINGS')), strtolower($crawler->filter('tr.ext_enabled td')->eq(0)->text()));

		$this->assertGreaterThan(1, $crawler->filter('tr.ext_enabled td strong')->count());
	}
}