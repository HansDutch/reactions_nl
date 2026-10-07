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
	'SELECT_REACTION_TYPES'				=> 'Selecteer type Reacties die gebruikers niet kunnen gebruiken om op u te reageren',
	'UCP_ENABLE_REACTIONS'				=> 'Reacties inschakelen',
	'UCP_ENABLE_REACTIONS_EXPLAIN'		=> 'Als u Nee selecteert, worden uw mogelijkheid om te reageren, de mogelijkheid van gebruikers om op u te reageren, uw reactiepagina, aantallen en meldingen verwijderd!',
	'UCP_REACTIONS_DEFAULT_POST_SETTINGS'	=> 'Reactie-instellingen',
	'UCP_REACTIONS_SAVED'				=> 'Reactie-instellingen zijn succesvol opgeslagen!',
	'UCP_REACTIONS_SETTING'				=> 'Instellingen',
	'UCP_REACTIONS_TITLE'				=> 'Reacties',
	'UCP_FOE_REACTIONS_ENABLE'			=> 'Reacties van vijanden inschakelen',
	'UCP_POST_REACTIONS_ENABLE'			=> 'Reacties op berichten inschakelen',
	'UCP_POST_REACTIONS_EXPLAIN'		=> 'Gebruikers toestaan ​​te reageren op uw berichten?',
	'UCP_TOPIC_REACTIONS_ENABLE'		=> 'Onderwerpreacties inschakelen',
	'UCP_TOPIC_REACTIONS_EXPLAIN'		=> 'Reacties toestaan ​​in jouw onderwerpen?',
]);
