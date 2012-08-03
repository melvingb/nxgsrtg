
/**
*
**/
function nxgsrtg_postgen(color, bbopen, bbclose)
{
	var original_post = document.getElementById('message');
	var nxgsrtg_post = '';
	var color_open = color_close = '';
	if (color)
	{
		color_open = '[color=' + color + ']';
		color_close = '[/color]';
	}
	// Get all elements from the post form
	var post_form = document.getElementById(form_name).elements;
	for (var i = 0; i < post_form.length; i++)
	{
		var nxgsrtg_form_el = post_form[i];
		var nxgsrtg_form_el_id = nxgsrtg_form_el.id;
		// Only continue if the form element is fron this MOD
		if (nxgsrtg_form_el_id.indexOf("nxgsrtg_") < 0) { continue; }
		var nxgsrtg_form_el_label = document.getElementById(nxgsrtg_form_el_id + "_label");
		// Checkig 
		if (nxgsrtg_form_el_label && nxgsrtg_form_el && nxgsrtg_form_el.value != '')
		{
			//									get the text from the label													 get the text from the input/textarea
			nxgsrtg_post += color_open + '[b]' + nxgsrtg_form_el_label.childNodes[0].nodeValue + '[/b]' + color_close + ': ' + nxgsrtg_form_el.value + "\n";
		}
	}
	// Id there something to submit ?
	if (nxgsrtg_post != '')
	{
		if (bbopen && bbclose)
		{
			nxgsrtg_post = bbopen + nxgsrtg_post + bbclose;
		}
		// Add data to the post at start
		original_post.value = nxgsrtg_post + "\n" + original_post.value;
		nxgsrtg_postgen_reset();
	}
	// Hide the form
	dE('nxgsrtg_block');
	// 
	return false;
}

/**
*
**/
function nxgsrtg_postgen_reset()
{
	var post_form = document.getElementById(form_name).elements;
	for (var i = 0; i < post_form.length; i++)
	{
		var nxgsrtg_form_el = post_form[i];
		var nxgsrtg_form_el_id = nxgsrtg_form_el.id;
		if (nxgsrtg_form_el_id.indexOf("nxgsrtg_") < 0) { continue; } else { post_form[i].value = ''; }
	}
}
