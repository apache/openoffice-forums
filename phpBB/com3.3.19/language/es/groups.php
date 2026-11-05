<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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


$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'		=> 'El grupo seleccionado ya es su grupo por defecto',
	'ALREADY_IN_GROUP'			=> 'Ya es miembro del grupo seleccionado',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ya solicitó ingresar en el grupo seleccionado.',

	'CANNOT_JOIN_GROUP'         => 'No puede unirse a este grupo. Solo puede unirse a grupos abiertos y grupos libres.',
	'CANNOT_RESIGN_GROUP'       => 'No puede abandonar este grupo. Solo puede abandonar grupos abiertos y grupos libres.',
	'CHANGED_DEFAULT_GROUP'		=> 'Grupo por defecto cambiado correctamente',

	'GROUP_AVATAR'				=> 'Avatar del grupo',
	'GROUP_CHANGE_DEFAULT'		=> '¿Está seguro de cambiar su pertenencia por defecto al grupo “%s”?',
	'GROUP_CLOSED'				=> 'Cerrado',
	'GROUP_DESC'				=> 'Descripción del grupo',
	'GROUP_HIDDEN'				=> 'Oculto',
	'GROUP_INFORMATION'			=> 'Información del grupo',
	'GROUP_IS_CLOSED'			=> 'Éste es un grupo cerrado, donde no pueden unirse automáticamente nuevos usuarios, solo por invitación de un responsable del grupo.',
	'GROUP_IS_FREE'				=> 'Éste es un grupo libre abierto, todos los nuevos usuarios son bienvenidos.',
	'GROUP_IS_HIDDEN'			=> 'Éste es un grupo oculto, solo usuarios de este grupo pueden ver su pertenencia.',
	'GROUP_IS_OPEN'				=> 'Éste es un grupo abierto, usuarios nuevos pueden unirse mediante una solicitud.',
	'GROUP_IS_SPECIAL'			=> 'Éste es un grupo especial, los grupos especiales son administrados por los Administradores del sitio.',
	'GROUP_JOIN'				=> 'Ingresar en el grupo',
	'GROUP_JOIN_CONFIRM'		=> '¿Está seguro de que quiere unirse al grupo seleccionado?',
	'GROUP_JOIN_PENDING'		=> 'Ingreso en el grupo solicitado',
	'GROUP_JOIN_PENDING_CONFIRM'	=> '¿Está seguro de que quiere solicitar unirse al grupo seleccionado?',
	'GROUP_JOINED'				=> 'Ha ingresado correctamente al grupo elegido',
	'GROUP_JOINED_PENDING'		=> 'Se ha solicitado correctamente su pertenencia al grupo. Por favor, aguarde a que un responsable del grupo apruebe su membresía.',
	'GROUP_LIST'				=> 'Administrar usuarios',
	'GROUP_MEMBERS'				=> 'Usuarios del grupo',
	'GROUP_NAME'				=> 'Nombre del grupo',
	'GROUP_OPEN'				=> 'Abierto',
	'GROUP_RANK'				=> 'Rango del grupo',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Renunciar al grupo',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> '¿Está seguro de que quiere renunciar al grupo seleccionado?',
	'GROUP_RESIGN_PENDING'			=> 'Renuncia al grupo solicitada',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> '¿Está seguro de que quiere renunciar a su membresía pendiente para el grupo seleccionado?',
	'GROUP_RESIGNED_MEMBERSHIP'		=> 'Ha sido eliminado correctamente del grupo seleccionado',
	'GROUP_RESIGNED_PENDING'		=> 'Su membresía pendiente ha sido eliminada correctamente del grupo seleccionado',
	'GROUP_TYPE'					=> 'Tipo de grupo',
	'GROUP_UNDISCLOSED'				=> 'Grupo oculto',
	'FORUM_UNDISCLOSED'				=> 'Moderación de foro(s) oculto(s)',

	'LOGIN_EXPLAIN_GROUP'			=> 'Necesita identificarse para ver los detalles del grupo',

	'NO_LEADERS'					=> 'No es responsable de ningún grupo',
	'NOT_LEADER_OF_GROUP'			=> 'La operación requerida no puede llevarse a cabo porque no es responsable del grupo seleccionado.',
	'NOT_MEMBER_OF_GROUP'			=> 'La operación requerida no puede llevarse a cabo porque no es miembro del grupo seleccionado.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'No puede renunciar a su grupo por defecto.',

	'PRIMARY_GROUP'					=> 'Grupo primario',

	'REMOVE_SELECTED'				=> 'Eliminar selección',

	'USER_GROUP_CHANGE'				=> 'Desde grupo “%1$s” hasta “%2$s”',
	'USER_GROUP_DEMOTE'				=> 'Deponer responsabilidad',
	'USER_GROUP_DEMOTE_CONFIRM'		=> '¿Está seguro de que quiere deponer su responsabilidad del grupo seleccionado?',
	'USER_GROUP_DEMOTED'			=> 'Responsabilidad depuesta correctamente.',
));
