<?php
/**
*
** nxgsrtg [Spanish]
*
* @package NXG Support Request Template Generator
* @author nextgen http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1292660
* @version 1.1.0
* @copyright (c) 2012 nextgen http://www.dragon-gfx.com
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
	'NXGSRTG_SUPPORT_TITLE'		=> 'Generador de Plantilla de Soporte',
	'NXGSRTG_SUPPORT_EXPLAIN'	=> 'Si vas a hacer una consulta, rellena tus datos pulsando este botón',
	
	'NXGSRTG_SUPPORT_RULES'		=> 'Esta es la manera más rápida y más eficiente para completar nuestra plantilla de solicitud de soporte.<br />
						           El generador le pedirá una serie de preguntas que son útiles para diagnosticar la mayoría de los problemas.<br /><br />
						           Luego, sus respuestas podran ser copiadas y pegadas en su tema de solicitud de soporte.',

	'NXGSRTG_TOOLTIP'		=> '[?]',
	'NXGSRTG_COPY'			=> '<b>NXG SRTG</b> by <a href="http://www.dragon-gfx.com">nextgen</a>',
	'NXGSRTG_URL'			=> '¿Cual es la URL de su foro?',
	'NXGSRTG_TIP_URL'        => 'a “URL de su foro”, es la dirección web que utiliza para acceder a su foro. La mayoría de los problemas son más fáciles de resolver cuando se pueden ver. Si no quiere dar a conocer esta información, por favor escriba “N/A”.',		
	'NXGSRTG_HOST'			=> '¿Con quien hospeda su sitio?',
    'NXGSRTG_TIP_HOST'       => 'Algunos de los problemas experimentados con phpBB se puede atribuir a determinados hosts. Complete este campo con el nombre de la empresa que le suministra alojamiento (como GoDaddy, Yahoo!, Dattatec, 1&amp;1, etc.) Si aloja el foro usted mismo, por favor, indíquelo. Del mismo modo, si no sabe con quién lo aloja.',		
	'NXGSRTG_INSTALLATION'	=> '¿De que manera ha instalado su foro?',
	'NXGSRTG_TIP_INSTALLATION'	=> 'Si ha instalado su foro descargando el software desde phpBB, subió los archivos a su servidor y a continuación ejecutó la instalación, seleccione “He instalado el foro por mí mismo.” Si alguien mas lo hizo por usted, seleccione “Otro lo hizo por mí.” Si ha utilizado una herramienta automatizada como Fantastico, elige “He utilizado una herramienta proporcionada por mi servidor”.',
	'NXGSRTG_VERSION'		=> '¿Que versión de phpBB está útilizando?',
	'NXGSRTG_TIP_VERSION'	=> 'Para encontrar esta información, entre en el “Panel de Administración (ACP)”, haga clic en la solapa “SISTEMA”, verá el número en “Versión actual”.',
	'NXGSRTG_LEVEL'		    => '¿Cuál es su nivel de experiencia?',
    'NXGSRTG_TIP_LEVEL'      => 'Del 1 al 4(nuevo), del 5 al 9(intermedio) al 10(experto)',	
	'NXGSRTG_CONVER'			=> '¿Es una instalación nueva o una conversión?',
	'NXGSRTG_TIP_CONVER'		=> 'Si su foro era una instalación desde cero, esto significa que su foro phpBB es nuevo. Si se trata de una conversión, esto significa que su foro fue instalado previamente cono otro software, más tarde convertido a phpBB.',
	'NXGSRTG_STYLES'			=> '¿Que estilo(s) tiene actualmente instalados?',
	'NXGSRTG_TIP_STYLES'		=> 'Un estilo desactualizado puede ser la causa de muchos problemas. Si no sabe qué estilo tiene instalado, entre en el “Panel de Administración (ACP)”, haga clic en la solapa “ESTILOS”, verá el nombre del estilo utilizado marcado con un * en “Estilos instalados”.',
	'NXGSRTG_MODS'			=> '¿Que MOD’s tiene actualmente instalados?',
	'NXGSRTG_TIP_MODS'	    => 'Las MODificaciones pueden ser la causa de muchos problemas. Esta información puede ayudar a determinar la causa exacta de su problema.',
//	more fields here - Start
	//	EXAMPLE 1 : ask for AutoMOD
	'NXGSRTG_AUTOMOD'		=> 'Tiene AutoMOD instalado? Especifique la versión',
	'NXGSRTG_TIP_AUTOMOD'    => 'Ejemplo',	
	//	EXAMPLE 2 : ask for Support ToolKit
	'NXGSRTG_STK'			=> 'Tiene STK instalado? Especifique la versión',
	'NXGSRTG_TIP_STK'        => 'Ejemplo',
//	more fields here - End

	'NXGSRTG_BUTTOM_ADD'				=> 'Agregar datos',
	'NXGSRTG_BUTTOM_ADD_EXPLAIN'		=> 'Agregar los datos ingresados al texto del mensaje',
	'NXGSRTG_BUTTOM_CLEAR'			=> 'Limpiar datos',
	'NXGSRTG_BUTTOM_CLEAR_EXPLAIN'	=> 'Limpiar datos para ingresarlos nuevamente',

// Need to enclosure into any special bbcode ?
	'NXGSRTG_BBCODE_EXTRA_OPEN'		=> '',	// Example : [hidden]
	'NXGSRTG_BBCODE_EXTRA_CLOSE'		=> '',	// Example : [/hidden]

	// Style color 
	'NXGSRTG_COLOR'					=> '#BC2A4D',

	// UMIL
	'NXGSRTG_INSTALLER_TITLE'		=> 'NXG Generador de Plantilla de Soporte',
));

?>