<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Ajustes de VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink es un servicio de terceros que discretamente monetiza enlaces publicados por los usuarios de su foro sin ningún cambio en la experiencia del usuario. Cuando los usuarios hacen clic en sus enlaces externos, a productos o servicios y compran algo, los comerciantes pagan a VigLink una comisión, de la cual se reparte una parte del proyecto phpBB. Al elegir activar VigLink y donar los ingresos al proyecto phpBB, está apoyando a nuestra organización de código abierto y asegurando nuestra seguridad financiera.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Puede cambiar estos ajustes en cualquier momento desde los “<a href="%1$s">Ajustes de VigLink</a>” panel.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Ya no será redirigido a esta página una vez que envíe sus opciones preferidas a continuación, haciendo clic en el botón Enviar.',
	'ACP_VIGLINK_ENABLE'			=> 'Habilitar VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Permite el uso de los servicios de VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Reclamar sus propios ingresos (opcional)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Puede reclamar sus propios ingresos inscribiéndose en una cuenta Convertir VigLink.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Los servicios de VigLink han sido desactivados por phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Reclamar sus ganancias',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Puede reclamar las ganancias de su foro de los enlaces monetarios VigLink, en lugar de donar las ganancias al proyecto phpBB. Para gestionar la configuración de su cuenta, regístre su cuenta “Convertir VigLink” haciendo clic en “Convertir Cuenta”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convertir cuenta',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'No se pudo recuperar el vínculo de cuenta de conversión de VigLink.',
));
