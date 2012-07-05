/**
* package: NXG Support Request Template Generator
* author: nextgen http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1292660
* license: http://opensource.org/licenses/gpl-license.php GNU Public License
**/
function nxgsrtg_postgen(color, bbopen, bbclose)
{
	var original_post = document.getElementById('message');
	var nxgsrtg_post = '';
	var color_open = color_close =''
	if (color)
	{
		color_open = '[color=' + color + ']'
		color_close = '[/color]'
	}
	
	var nxgsrtg_url_label = document.getElementById("nxgsrtg_url_label");
	var nxgsrtg_url = document.getElementById('nxgsrtg_url');
	if (nxgsrtg_url.value != '')
	{
		nxgsrtg_post += color_open + '[b]' + nxgsrtg_url_label.childNodes[0].nodeValue + '[/b]' + color_close + ': ' + nxgsrtg_url.value + "\n";
	}

	var nxgsrtg_host_label = document.getElementById('nxgsrtg_host_label');
	var nxgsrtg_host = document.getElementById('nxgsrtg_host');
	if (nxgsrtg_host.value != '')
	{
		nxgsrtg_post += color_open + '[b]' + nxgsrtg_host_label.childNodes[0].nodeValue + '[/b]' + color_close + ': ' + nxgsrtg_host.value + "\n";
	}

	var nxgsrtg_install_label = document.getElementById('nxgsrtg_install_label');
	var nxgsrtg_install = document.getElementById('nxgsrtg_install');
	if (nxgsrtg_install.value != '')
	{
		nxgsrtg_post += color_open + '[b]' + nxgsrtg_install_label.childNodes[0].nodeValue + '[/b]' + color_close + ': ' + nxgsrtg_install.value + "\n";
	}

	var nxgsrtg_version_label = document.getElementById('nxgsrtg_version_label');
	var nxgsrtg_version = document.getElementById('nxgsrtg_version');
	if (nxgsrtg_version.value != '')
	{
		nxgsrtg_post += color_open + '[b]' + nxgsrtg_version_label.childNodes[0].nodeValue + '[/b]' + color_close + ': ' + nxgsrtg_version.value + "\n";
	}
	
	var nxgsrtg_level_label = document.getElementById('nxgsrtg_level_label');
	var nxgsrtg_level = document.getElementById('nxgsrtg_level');
	if (nxgsrtg_level.value != '')
	{
		nxgsrtg_post += color_open + '[b]' + nxgsrtg_level_label.childNodes[0].nodeValue + '[/b]' + color_close + ': ' + nxgsrtg_level.value + "\n";
	}	

	var nxgsrtg_conversion_label = document.getElementById('nxgsrtg_conversion_label') ;
	var nxgsrtg_conversion = document.getElementById("nxgsrtg_conversion");
	if (nxgsrtg_conversion.value != '')
	{
		nxgsrtg_post += color_open + '[b]' + nxgsrtg_conversion_label.childNodes[0].nodeValue + '[/b]' + color_close + ': ' + nxgsrtg_conversion.value + "\n";
	}

	var nxgsrtg_style_label = document.getElementById('nxgsrtg_style_label');
	var nxgsrtg_style = document.getElementById("nxgsrtg_style");
	if (nxgsrtg_style.value != '')
	{
		nxgsrtg_post += color_open + '[b]' + nxgsrtg_style_label.childNodes[0].nodeValue + '[/b]' + color_close + ': ' + nxgsrtg_style.value + "\n";
	}

	var nxgsrtg_mods_label = document.getElementById('nxgsrtg_mods_label');
	var nxgsrtg_mods = document.getElementById('nxgsrtg_mods');
	if (nxgsrtg_mods.value != '')
	{
		nxgsrtg_post += color_open + '[b]' + nxgsrtg_mods_label.childNodes[0].nodeValue + '[/b]' + color_close + ': ' + nxgsrtg_mods.value + "\n";
	}

	if (nxgsrtg_post != '')
	{
		if (bbopen && bbclose)
		{
			nxgsrtg_post = bbopen + nxgsrtg_post + bbclose;
		}

		original_post.value = nxgsrtg_post + "\n" + original_post.value;
		nxgsrtg_postgen_reset();
	}

	dE('nxgsrtg_block');

	return false;
}

/**

**/
function nxgsrtg_postgen_reset()
{
	document.getElementById('nxgsrtg_url').value = '';
	document.getElementById('nxgsrtg_host').value = '';
	document.getElementById('nxgsrtg_install').value = '';
	document.getElementById('nxgsrtg_version').value = '';
	document.getElementById('nxgsrtg_level').value = '';
	document.getElementById('nxgsrtg_conversion').value = '';
	document.getElementById('nxgsrtg_style').value = '';
	document.getElementById('nxgsrtg_mods').value = '';

}