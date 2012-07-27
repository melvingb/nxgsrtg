<?php
/** 
*
* @package NXG Support Request Template Generator
* @author nextgen http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1292660
* @version 1.1.0
* @copyright (c) 2012 nextgen http://www.dragon-gfx.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit; 
}

nxgsrtg_display();

function nxgsrtg_display()
{
	global $user, $template;

	$user->add_lang('mods/nxgsrtg_mod');

	// Start assigning vars for main posting page ...
	$template->assign_vars(array(
		'S_ENABLE_NXGSRTG'		=> true,

		'NXGSRTG_URL_VALUE'		=> utf8_normalize_nfc(request_var('nxgsrtg_url', '', true)),
		'NXGSRTG_HOST_VALUE'		=> utf8_normalize_nfc(request_var('nxgsrtg_host', '', true)),
		'NXGSRTG_INSTALL_VALUE'	=> utf8_normalize_nfc(request_var('nxgsrtg_install', '', true)),
		'NXGSRTG_VERSION_VALUE'	=> utf8_normalize_nfc(request_var('nxgsrtg_version', '', true)),
		'NXGSRTG_LEVEL_VALUE'    => utf8_normalize_nfc(request_var('nxgsrtg_level', '', true)),
		'NXGSRTG_CONVER_VALUE'	=> utf8_normalize_nfc(request_var('nxgsrtg_conversion', '', true)),
		'NXGSRTG_STYLES_VALUE'	=> utf8_normalize_nfc(request_var('nxgsrtg_style', '', true)),
		'NXGSRTG_MODS_VALUE'		=> utf8_normalize_nfc(request_var('nxgsrtg_mods', '', true)),
	//	more fields here - Start
	//	EXAMPLE 1 : ask for autoMOD
		'NXGSRTG_AUTOMOD_VALUE'	=> utf8_normalize_nfc(request_var('nxgsrtg_automod', '', true)),
	//	EXAMPLE 2 : ask for Support toolkit
		'NXGSRTG_STK_VALUE'		=> utf8_normalize_nfc(request_var('nxgsrtg_stk', '', true)),
	//	more fields here - End		
	));
}

?>