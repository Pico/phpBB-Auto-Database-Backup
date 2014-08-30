# phpBB Auto Database Backup

This is the repository for the development of the phpBB Auto Database Backup Extension.

## Quick Install
You can install this on the latest copy of the develop branch ([phpBB 3.1-dev](https://github.com/phpbb/phpbb3)) by following the steps below:

1. [Download the latest release](https://github.com/Pico/phpBB-Auto-Database-Backup/releases).
2. Unzip the downloaded release, and change the name of the folder to `autodbbackup`.
3. In the `ext` directory of your phpBB board, create a new directory named `pico` (if it does not already exist).
4. Copy the `autodbbackup` folder to `phpBB/ext/pico/`.
5. Navigate in the ACP to `Customise -> Manage extensions`.
6. Look for `Auto Database Backup` under the Disabled Extensions list, and click its `Enable` link.
7. Set up and configure `Auto Database Backup` by navigating in the ACP to `Maintenance` -> `Database` -> `Auto backup settings`.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Auto Database Backup` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/pico/autodbbackup` folder.

## Automated Testing

* master [![Build Status](https://travis-ci.org/Pico/phpBB-Auto-Database-Backup.svg?branch=master)](https://travis-ci.org/Pico/phpBB-Auto-Database-Backup)
* develop [![Build Status](https://travis-ci.org/Pico/phpBB-Auto-Database-Backup.svg?branch=develop)](https://travis-ci.org/Pico/phpBB-Auto-Database-Backup)

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
