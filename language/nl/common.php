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
	'UCP_REACTIONS_SETTING'			=> 'Instellingen',
	'UCP_REACTIONS_TITLE'			=> 'Reacties',

	'REACTIONS'						=> 'Reacties',
	'REACTIONS_TITLE'				=> 'Reacties',
	'REACTIONS_TITLES'				=> 'Reacties &bull; pagina %d',

	//notifications
	'NOTIFICATION_GROUP_REACTIONS'		=> 'Reacties',

	'NOTIFICATION_TYPE_POST_REACTION' 	=> 'Iemand reageert op jouw bericht',
	'POST_REACTION_NOTIFICATION'		=> '<strong>Nieuwe reactie</strong> <img src="%1$s" class="reaction-notification" alt="%2$s" /> van: %3$s In bericht:<br> “%4$s”',


	//Actions
	'ENABLE_POST_REACTIONS'			=> 'Reacties op dit bericht inschakelen',
	'ENABLE_TOPIC_REACTIONS'		=> 'Reacties inschakelen in dit onderwerp',
	'EXPLAIN_REACTIONS_POSTING'		=> 'Hier kunt u opties selecteren voor onderwerp en berichtreacties',
	
	'LOG_ACP_REACTION_ADDED'		=> '<strong>Nieuw reactietype toegevoegd %1$s</strong>',
	'LOG_ACP_REACTION_EDITED'		=> '<strong>Bewerkt reactietype %1$s',
	'LOG_ACP_REACTION_DELETED'		=> '<strong>Verwijderd reactietype</strong>',

	'ADD_REACTION'					=> 'Reageren op bericht',
	'DELETE_REACTION'				=> 'Reactie verwijderen',
	'REACTED'						=> 'Gereageerd',
	'REACTION_ADDED'				=> 'Reactie toegevoegd',
	'REACTIONS_ALL_VIEWDED'			=> 'Goed gedaan, je hebt alle gebruikers bekeken.',
	'REACTION_DELETED'				=> 'Reactie verwijderd',
	'REACTION_DUPLICATE'			=> 'Je hebt al gereageerd op dit bericht',
	'REACTIONS_LIST_VIEW'			=> 'Bekijk alles',
	'REACTIONS_LOAD_MORE'			=> 'Meer laden',

	'REACTION_TYPES'				=> 'Reactietypen',
	'REACTION_TYPE_DUPLICATE'		=> 'Reactie duplicaat',
	'REACTION_UPDATED'				=> 'Reactie bijgewerkt',
	'REACTION_RESYNC'				=> 'Opnieuw synchroniseren',
	'RESYNC_REACTIONS'				=> 'Reacties opnieuw synchroniseren',
	'SELECT_REACTION_TYPES'			=> 'Selecteer reacties die gebruikers niet kunnen gebruiken om op uw berichten te reageren',

	'UPDATE_REACTION'				=> 'Reactie bijwerken',

	//format/round
	'REACTIONS_K'					=> 'k',
	'REACTIONS_M'					=> 'm',
	'REACTION_PERCENT'				=> '%',

	//Errors
	'NOT_AUTHORISED_REACTIONS'			=> 'U bent niet bevoegd om te reageren.',
	'REACTIONS_DISABLED'				=> 'Deze reactiespagina is momenteel uitgeschakeld',
	'REACTIONS_DISABLED_USER'			=> 'Deze reactie kan niet worden weergegeven omdat de gebruiker reacties mogelijk heeft uitgeschakeld of geen rechten meer heeft.',
	'REACTIONS_NOT_FOUND'				=> 'Een <strong>fout</strong> heeft plaatsgevonden',//?
	'REACTION_ERROR'					=> 'Een <strong>fout</strong> is opgetreden, vernieuw de pagina en probeer het opnieuw',
	'RESYNC_DISABLED'					=> 'Het opnieuw synchroniseren van reacties is momenteel uitgeschakeld',

	'USER_REACTION'	=> [
		0 => 'Reacties',
		1 => 'Reactie',
		2 => 'Reacties',
	],

	'REACTIONS_GIVEN'				=> 'Gegeven reacties',
	'REACTIONS_RECIEVED'			=> 'Ontvangen reacties',
	'HR_RECENT_REACTIONS'			=> 'Recente reacties',
	'RECENT_REACTIONS'				=> 'Tonen %d Reacties van %2d',
	'REACTION_COUNT_TOTAL'			=> 'Totaal aantal berichten Reacties',
	'REACTIONS_TOTAL'				=> 'Totale reacties',
	
	'USER_REACTION'					=> 'Reactie %d',
	'USER_REACTIONS'				=> 'Reacties %d',
	'VIEW_REACTIONS'				=> 'Bekijk reacties',
	'VIEWING_REACTIONS'				=> 'Reactiespagina bekijken',
	'WELCOME_REACTIONS_PAGE'		=> 'Welkom %1$s, <br>  &nbsp  &nbsp  &nbsp  &nbsp  Totaal van <strong>%2$s</strong> geregistreerde gebruikers hebben reacties ontvangen, u kunt op de <strong>“Reactie Afbeelding”</strong> klikken om de ontvangen reactielijst te bekijken.',

	//pre populated reactions
	'REACTION_CRY'					=> 'Huilen',
	'REACTION_DISLIKE'				=> 'Afkeer',
	'REACTION_FUNNY'				=> 'Grappig',
	'REACTION_HAPPY'				=> 'Vrolijk',
	'REACTION_LIKE'					=> 'Leuk vinden',
	'REACTION_LOVE'					=> 'Liefde',
	'REACTION_MAD'					=> 'Boos',
	'REACTION_NEUTRAL'				=> 'Neutraal',
	'REACTION_SAD'					=> 'Verdrietig',
	'REACTION_SURPRISED'			=> 'Verrast',
	'REACTION_UNHAPPY'				=> 'Ongelukkig',
]);
