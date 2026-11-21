<?php
/**
*
* Contact admin extension for the phpBB Forum Software package.
*
* @copyright 2016 Rich McGirr (RMcGirr83)
* @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
* @license GNU General Public License, version 2 (GPL-2.0)
* German translation by NetSecond.net 02/2024
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, [
	// General config options
	'ACP_CAT_CONTACTADMIN'	=> 'Admin kontaktieren',
	'ACP_CONTACTADMIN_CONFIG'	=> 'Konfiguration',
	'FORUM_EMAIL_INACTIVE'	=> 'Wie Benutzer den Kontakt aufnehmen können.<br><span style="color:red;">Laut Foreneinstellungen sind keine E-Mails erlaubt!</span>',
	'NO_FORUM_ATTACHMENTS'		=> 'Wenn aktiviert, sind Anhänge beim Posten im Forum und in privaten Nachrichten erlaubt. Die zulässigen Erweiterungen entsprechen der Boardkonfiguration.<br><span style="color:red;">Laut Foreneinstellungen sind keine Anhänge erlaubt!</span>',
	// Log entries
	'LOG_CONTACT_BOT_INVALID'		=> '<strong>Für den Admin-kontaktieren-Bot wurde eine ungültige Benutzer ID ausgewählt:</strong><br />Benutzer ID %1$s',
	'LOG_CONTACT_FORUM_INVALID'		=> '<strong>Im Forum der Admin-kontaktieren-Erweiterung wurde ein ungültiges Forum ausgewählt:</strong><br />Forum ID %1$s',
	'LOG_CONTACT_EMAIL_INVALID'		=> '<strong>Die Admin-kontaktieren-Erweiterung ist auf das Senden von E-Mails eingestellt, das Board ist jedoch nicht für das Senden von E-Mails eingerichtet.</strong>',
	'LOG_CONTACT_NONE'				=> '<strong>Es gibt keine Administratoren, die Benutzern erlauben, diese per %1$s in der Admin-kontaktieren-Erweiterung zu kontaktieren.</strong>',
	'LOG_CONTACT_CONFIG_UPDATE'		=> '<strong>Admin-kontaktieren-Konfiguration aktualisiert</strong>',
]);
