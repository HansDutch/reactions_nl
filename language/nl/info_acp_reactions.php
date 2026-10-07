<?php
/**
	* Reactions $extends the phpBB Software package.
	* @copyright (c) 2024, Steve, https://steven-clark.tech/
	* @license GNU General Public License, version 2 (GPL-2.0)
*/

/**
	* [ ’ » “ ” … ]
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}
//sorted via html layout not a-z.
$lang = array_merge($lang, [
	'ACP_STEVE_HELP'					=> 'Hulp krijgen',
	'ACP_STEVE_EXTENSIONS'				=> 'Uitbreidingen',
	'ACP_STEVE_DONATE'					=> 'Doneren',
	
	'ACP_REACTIONS_SETTINGS'			=> 'Instellingen',
	'ACP_REACTIONS_SETTINGS_EXPLAIN'	=> 'Hier kunt u de algemene instellingen voor de Reacties-extensie aanpassen.',
	'ACP_REACTIONS_EXPLAIN'				=> 'Hier kunt u reactietypen toevoegen, bewerken, verwijderen, inschakelen, uitschakelen en opnieuw ordenen.',
	'ACP_REACTIONS_TITLE'				=> 'Reacties',
	'ACP_REACTION_TYPE_IDS'				=> 'Forum heeft Reactie-ID\'s uitgeschakeld',
//--
	'ACP_REACTIONS_ENABLE'				=> 'Reacties inschakelen',

	'ACP_REACTION_ENABLE_PAGE'			=> 'Weergave Reactiespagina inschakelen',	
	'ACP_REACTION_ENABLE_PAGES'			=> 'Pop-up pagina voor het bekijken van berichten inschakelen',
	
	'ACP_REACTIONS_ENABLE_PERCENTAGE'	=> 'Statistieken inschakelen op weergave Reacties pagina',
	'ACP_REACTIONS_ENABLE_BADGE'		=> 'Badge rond typetelling inschakelen',
	'ACP_REACTIONS_ENABLE_COUNT'		=> 'Schakel het totale aantal reactietypen in berichten in',
	'ACP_REACTION_TYPE_COUNT_ENABLE'	=> 'Reactietypetelling in berichten inschakelen',
	'ACP_REACTIONS_POST_AUTHOR_REACT'	=> 'Geef auteurs van berichten de mogelijkheid om op hun berichten te reageren',
	'ACP_REACTIONS_RESYNC_ENABLE'		=> 'Schakel berichten reacties opnieuw synchroniseren in',
	'ACP_REACTIONS_TOPIC_LOCKED'		=> 'Reacties in vergrendelde onderwerpen inschakelen',

//--
	'ACP_REACTIONS_NOTIFICATIONS_ENABLED'			=> 'Meldingen van deze extensie inschakelen',
	'ACP_REACTIONS_NOTIFICATIONS_EMAILS_ENABLED'	=> 'Schakel e-mailmeldingen die zijn gemaakt door meldingen van deze extensie te verzenden in',
//--
	'ACP_REACTIONS_RESYNC_BATCH'			=> 'Aantal berichten dat opnieuw gesynchroniseerd moet worden',
	'ACP_REACTIONS_RESYNC_BATCH_EXPLAIN'	=> 'Het aantal berichten dat bij het wijzigen van de reactie-afbeelding per pagina opnieuw moet worden gesynchroniseerd, verlaag het aantal om een ​​zware belasting van de server te voorkomen.',
	'ACP_REACTIONS_PER_PAGE'		=> 'Reacties per pagina',
	'ACP_REACTIONS_FLOOD_TIME'		=> 'Overstromingstijd tussen reacties',
//--
	'ACP_REACTION_PATH'				=> 'Reacties afbeelding opslagpad (uitgeschakeld)',
	'ACP_REACTION_PATH_EXPLAIN'		=> 'Pad onder uw phpBB-hoofdmap, bijvoorbeeld images/emoji',
	'ACP_REACTION_IMAGE_TYPES_EXT'	=> 'Reactie-afbeelding extensietypen (uitgeschakeld)',
	'ACP_REACTIONS_DIMENSIONS'		=> 'Reactie-afbeeldingsafmetingen',
	'ACP_REACTIONS_HEIGHT'			=> 'Hoogte',
	'ACP_REACTIONS_WIDTH'			=> '/ Breedte',
	'ACP_REACTIONS_CACHE'			=> 'Reacties afbeelding cache tijd',
	'ACP_REACTIONS_CACHE_EXPLAIN'	=> 'Min: <strong>300</strong> Seconden (5 minutes) Max: <strong>86400</strong> Seconden (1 Dag)',
//--
	'ACP_REACTIONS_DROPDOWN_WIDTH'	=> 'Breedte van het dropdownmenu',
	'ACP_REACTIONS_BUTTON_ICON'			=> 'Reactieknoppictogram',
	'ACP_REACTIONS_BUTTON_ICON_EXP'		=> 'Font Awesome-pictogrammen',
	'ACP_REACTIONS_BUTTON_COLOR'		=> 'Knopkleur',
	'ACP_REACTIONS_BUTTON'				=> 'Positie van de reactieknop',
	'ACP_REACTIONS_BUTTON_TOP'			=> 'Bovenkant',
	'ACP_REACTIONS_BUTTON_BOTTOM'		=> 'Onderkant',
//--
	'CAT_REACTION_COUNT'			=> 'Telling',
	'CAT_REACTION_DELETE'			=> 'Verwijderen',
	'CAT_REACTION_EDIT'				=> 'Bewerking',
	'CAT_REACTION_ENABLED'			=> 'Status',
	'CAT_REACTION_IMAGE'			=> 'Afbeeldingvoorbeeld',
	'CAT_REACTION_ORDER'			=> 'Volgorde',
	'CAT_REACTION_PERCENTAGE'		=> '%',
	'CAT_REACTION_RESYNC'			=> 'Opnieuw synchroniseren',
	'CAT_REACTION_RESYNC_ALL'		=> 'Alles opnieuw synchroniseren',
	'CAT_REACTION_TITLE'			=> 'Naam',
	'CAT_REACTION_TOTAL'			=> 'Totaal',
	'CAT_REACTION_TTL'				=> 'Type',
	'CAT_REACTION_URL'				=> 'URL',

	'ACP_REACTION_ENABLE'			=> 'Reactie inschakelen',
	'ACP_REACTION_TYPE'				=> 'Reactietype',
	'ACP_REACTION_IMAGE'			=> 'Reactie afbeelding',
	'ACP_REACTION_TITLE'			=> 'Reactienaam/titel',
	'ACP_REACTION_TYPES'			=> 'Reactietypen',
	'ACP_SELECT_REACTION_IMAGE'		=> 'Selecteer Reactie-afbeelding',
	'ACP_SELECT_REACTION_IMAGE_ALT' => 'Afbeeldingvoorbeeld',

	'ACP_DELETED_REACTION'				=> 'Verwijderde reactie',
	'ACP_DELETING_REACTION'				=> 'Reactie verwijderen',

	'ACP_NO_REACTION_IMAGE_SELECTED'	=> 'Er is geen afbeelding geselecteerd voor de reactie.',

	'ACP_REACTION_ADD'					=> 'Reactie toevoegen',
	'ACP_REACTION_ADDED'				=> 'Nieuwe reactie toegevoegd',

	'ACP_REACTION_CHANGE'				=> 'Reactie veranderen naar... ',
	'ACP_REACTION_CHANGED'				=> 'Reactie-afbeelding succesvol gewijzigd!',
	'ACP_REACTION_CHANGED_TO'			=> 'Reactie gewijzigd in...',
	'ACP_REACTION_CHANGE_WARN'			=> 'Als u de reactieafbeelding wijzigt, moeten de berichten opnieuw worden gesynchroniseerd. Na bevestiging wordt u automatisch doorgestuurd. <br><br> Sluit of vernieuw de pagina niet nadat de hersynchronisatie is begonnen.',
	'ACP_REACTION_CHANGE_WARN_TOP'		=> 'Sluit of vernieuw de pagina niet',

	'ACP_REACTION_DELETED_CONFIRM'		=> 'Weet u zeker dat u de gegevens die aan dit reactietype zijn gekoppeld, wilt verwijderen?',

	'ACP_REACTION_EDIT'					=> 'Reactie bewerken',

	'ACP_REACTION_TYPE_COUNT'			=> 'Deze reactie wordt gebruikt in %1$s berichten',
	'ACP_REACTION_TYPE_ID_EMPTY'		=> 'Het gevraagde reactietype bestaat niet',

	'ACP_REACTION_PATH_NOT_DIR'			=> 'Het lijkt erop dat het opgegeven opslagpad voor de afbeeldingen geen directory is. <br> %1s',

	'ACP_REACTION_UPDATED'				=> 'Reactie bijgewerkt',

	'ACP_REACTIONS_CONFIRM_CHANGE'		=> 'Bevestig verandering van reactiebeeld',
	'ACP_REACTIONS_CURRENTLY_DISABLED'	=> 'Reacties zijn momenteel uitgeschakeld.',

	'ACP_REACTIONS_DELETING'			=> 'Verwijderd... %1$s berichten',
	'ACP_REACTIONS_DELETING_DONE'		=> 'Reactie verwijderen voltooid... %1$s berichten bijgewerkt',

	'ACP_REACTIONS_DISABLE_ALL'			=> 'Alles uitschakelen',
	'ACP_REACTIONS_ENABLED_ALL'			=> 'Alles inschakelen',

	'ACP_REACTIONS_RESYNCING'			=> 'Bijgewerkt... %1$s van %2$s berichten',
	'ACP_REACTIONS_RESYNC_DONE'			=> 'Opnieuw synchroniseren voltooid... %1$s berichten bijgewerkt',
	'ACP_REACTIONS_RESYNC_TIME'			=> 'Opnieuw synchroniseren paginalaadtijd ',
	'ACP_REACTIONS_RESYNC_TIME_EXPLAIN'	=> 'Aantal seconden voordat de hersynchronisatie bij het wijzigen van de reactie-afbeelding opnieuw start . Dit kan ook helpen om zware belasting op de server te verminderen.',

	'ACP_REACTIONS_SETTING_SAVED'		=> 'Instellingen zijn succesvol opgeslagen!',
	'ACP_REACTIONS_SETTING_UPDATED'		=> 'Bijgewerkte reactie-instellingen',

	'ACP_RESYNCING_REACTION'			=> 'Reactie opnieuw synchroniseren',
]);
