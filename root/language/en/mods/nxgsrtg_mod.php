<?php
/**
*
** nxgsrt [English]
*
* @package NXG Support Request Template Generator
* @author nextgen http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1292660
* @version 0.0.2
* @copyright (c) 2012 nextgen http://www.phpbbnxg.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'NXGSRTG_SUPPORT_TITLE'		=> 'Support Request Template Generator',
	'NXGSRTG_SUPPORT_EXPLAIN'	=> 'If you do a question, fill in your details by clicking this button',
	
	'NXGSRTG_SUPPORT_RULES'		=> 'This is the quickest and most efficient way to complete our support request template.<br />
						           The generator will ask a series of questions that are useful to diagnose most problems.<br /><br />
						           Then, your responses may be copied and pasted into the post area.',

	'NXGSRTG_TOOLTIP'		=> '[?]',
	'NXGSRTG_COPY'			=> '<b>NXG SRTG</b> by <a href="http://www.phpbbnxg.com">nextgen</a>',
	'NXGSRTG_URL'			=> '¿What is your board’s URL?',
	'NXGSRTG_TIP_URL'        => 'Your board URL is the address that you use to access your board. Most problems are more easily fixed when one can view your board. If you do not want to give out this information, please enter “n/a”.',	
	'NXGSRTG_HOST'			=> '¿Who do you host your board with?',
    'NXGSRTG_TIP_HOST'       => 'Some problems experienced with phpBB boards can be attributed to particular hosts. This field should be filled with the company that is providing your webhosting package (like GoDaddy, Yahoo!, 1&amp;1, etc.). If you are hosting the board yourself, please indicate this. Likewise, if you do not know who is hosting your board, please indicate this as well.',	
	'NXGSRTG_INSTALLATION'	=> '¿How did you install your board?',
	'NXGSRTG_TIP_INSTALLATION'	=> 'If you installed your board by downloading the phpBB files, uploading them to your host, then browsing to the installer, select “I installed the board by myself.” If you had someone do the installation for you, select “Someone else installed my board for me.” If you used an automated tool like Fantastico, select “I used a tool provided by my host”.',
	'NXGSRTG_VERSION'		=> '¿What version of phpBB are you using?',
	'NXGSRTG_TIP_VERSION'	=> 'To find this information, login to your board and scroll down to the bottom of the page. Click “Administration Control Panel”. Click the “System” tab.',
	'NXGSRTG_LEVEL'		    => '¿What is your level of experience?',
    'NXGSRTG_TIP_LEVEL'      => 'From 1 to 4(newbie), from 5 to 9(intermediate) to 10(expert)',	
	'NXGSRTG_CONVER'			=> '¿Is your board a fresh install or a conversion?',
	'NXGSRTG_TIP_CONVER'		=> 'If your board was a fresh install, this means your board did not exist prior to installing phpBB. If it is a conversion, this means your board was installed previously as another piece of software then later converted to phpBB.',
	'NXGSRTG_STYLES'			=> '¿What styles do you currently have installed?',
	'NXGSRTG_TIP_STYLES'		=> 'An out of date style is the cause of many problems. If you do not know which styles you have installed, go to the “Administration Control Panel”, then browse to the “Styles” tab.',
	'NXGSRTG_MODS'			=> '¿Do you have any MODs installed?',
	'NXGSRTG_TIP_MODS'	    => 'MODs are often the cause of many problems with phpBB. This information can help to determine the exact cause of your issue.',

	'NXGSRTG_BUTTOM_ADD'				=> 'Submit to post',
	'NXGSRTG_BUTTOM_ADD_EXPLAIN'		=> 'Add this data to the message',
	'NXGSRTG_BUTTOM_CLEAR'			=> 'Start over',
	'NXGSRTG_BUTTOM_CLEAR_EXPLAIN'	=> 'Clear data and start over',

// Need to enclosure into any special bbcode ?
	'NXGSRTG_BBCODE_EXTRA_OPEN'		=> '',	// Example : [hidden]
	'NXGSRTG_BBCODE_EXTRA_CLOSE'		=> '',	// Example : [/hidden]

	// Style color 
	'NXGSRTG_COLOR'					=> '#BC2A4D',

	// UMIL
	'NXGSRTG_INSTALLER_TITLE'		=> 'NXG Support Request Template Generator',
));

?>