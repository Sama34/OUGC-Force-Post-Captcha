<?php

/***************************************************************************
 *
 *	OUGC Force Post Captcha plugin (/inc/plugins/ougc_force_post_captcha.php)
 *	Author: Omar Gonzalez
 *	Copyright: © 2020 Omar Gonzalez
 *
 *	Website: https://ougc.network
 *
 *	Force specific groups to fill a captcha when posting in specific forums.
 *
 ***************************************************************************
 
****************************************************************************
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
****************************************************************************/
 
// Die if IN_MYBB is not defined, for security reasons.
if(!defined('IN_MYBB'))
{
	die('This file cannot be accessed directly.');
}

define('OUGC_FORCE_POST_CAPTCHA_ROOT', MYBB_ROOT . 'inc/plugins/ougc_force_post_captcha');

require_once OUGC_FORCE_POST_CAPTCHA_ROOT.'/core.php';

// Add our hooks
if(defined('IN_ADMINCP'))
{
	require_once OUGC_FORCE_POST_CAPTCHA_ROOT.'/admin.php';
}
else
{
	require_once OUGC_FORCE_POST_CAPTCHA_ROOT.'/forum_hooks.php';

	\OUGCForcePostCaptcha\Core\addHooks('OUGCForcePostCaptcha\ForumHooks');
}

// Plugin API
function ougc_force_post_captcha_info()
{
	return \OUGCForcePostCaptcha\Admin\_info();
}

// Activate the plugin.
function ougc_force_post_captcha_activate()
{
	\OUGCForcePostCaptcha\Admin\_activate();
}

// Deactivate the plugin.
function ougc_force_post_captcha_deactivate()
{
	\OUGCForcePostCaptcha\Admin\_deactivate();
}

// Install the plugin.
function ougc_force_post_captcha_install()
{
	\OUGCForcePostCaptcha\Admin\_install();
}

// Check if installed.
function ougc_force_post_captcha_is_installed()
{
	return \OUGCForcePostCaptcha\Admin\_is_installed();
}

// Unnstall the plugin.
function ougc_force_post_captcha_uninstall()
{
	\OUGCForcePostCaptcha\Admin\_uninstall();
}