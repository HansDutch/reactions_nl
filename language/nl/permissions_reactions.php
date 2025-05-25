<?php
/**
	* Reactions $extends the phpBB Software package.
	* @copyright (c) 2024, Steve, https://steven-clark.tech/
	* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACL_CAT_REACTIONS'			=> 'Reacties',
]);

// Admin Permissions
$lang = array_merge($lang, [
	'ACL_A_DELETE_REACTIONS'	=> 'Kan reacties verwijderen',
]);

// Moderator Permissions
$lang = array_merge($lang, [
	'ACL_M_DELETE_REACTIONS'	=> 'Kan reacties verwijderen',
]);

// User Permissions	
$lang = array_merge($lang, [
	'ACL_U_ADD_REACTIONS'				=> 'Kan reacties toevoegen',
	'ACL_U_CHANGE_REACTIONS'			=> 'Kan reacties veranderen',
	'ACL_U_DELETE_REACTIONS'			=> 'Kan reacties verwijderen',
	'ACL_U_DISABLE_REACTIONS'			=> 'Kan de Reacties-extensie uitschakelen',
	'ACL_U_DISABLE_REACTION_TYPES'		=> 'Kan reactietypen voor hun berichten uitschakelen',
	'ACL_U_DISABLE_POST_REACTIONS'		=> 'Kan reacties op hun berichten uitschakelen',
	'ACL_U_DISABLE_TOPIC_REACTIONS'		=> 'Kan reacties op berichten in hun onderwerpen uitschakelen',
	'ACL_U_MANAGE_REACTIONS_SETTINGS'	=> 'Kan UCP-reactie-instellingen beheren',
	'ACL_U_RESYNC_REACTIONS'			=> 'Kan postreacties opnieuw synchroniseren',
	'ACL_U_VIEW_REACTIONS'				=> 'Kan reacties bekijken',
	'ACL_U_VIEW_REACTIONS_PAGE'			=> 'Kan de reactiepagina bekijken',
	'ACL_U_VIEW_POST_REACTIONS_PAGE'	=> 'Kan de pagina met postreacties bekijken',
]);
