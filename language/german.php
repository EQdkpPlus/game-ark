<?php
/*	Project:	EQdkp-Plus
 *	Package:	Ark game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2016 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Standard',
	),
	'races' => array(
		'Standard',
	),
	'factions' => array(),
	'roles' => array(),
	'lang' => array(
		'ark'	=> 'ARK: Survival Evolved',
		'uc_level'	=>	'Stufe',
		'uc_cat_stats'	=>	'Werte',
		'uc_cat_equip'	=>	'Ausrüstung',
		'uc_cat_engram'	=>	'Engrams',
		'uc_life'	=>	'Gesundheit',
		'uc_stamina'	=>	'Ausdauer',
		'uc_oxygen'	=>	'Sauerstoff',
		'uc_food'	=>	'Nahrung',
		'uc_water'	=>	'Wasser',
		'uc_weight'	=>	'Gewicht',
		'uc_damage'	=>	'Nahkampfschaden',
		'uc_speed1'	=>	'Bewegungsgeschwindigkeit',
		'uc_speed2'	=>	'Herstellungsgeschwindigkeit',
		'uc_resistance'	=>	'Resistenz',
		'uc_torpor'	=>	'Benommenheit',
		'uc_equip_head'	=>	'Kopf',
		'uc_equip_body'	=>	'Brust',
		'uc_equip_leg'	=>	'Beine',
		'uc_equip_feet'	=>	'Füße',
		'uc_equip_hand'	=>	'Hände',
		'uc_engram_thatch'	=> 'Stroh',
	),
	'equip_head'	=>	array(
		1	=>	'Stoff',
		2	=>	'Leder',
		3	=>	'Pelz',
		4	=>	'Ghillie',
		5	=>	'Chitin',
		6	=>	'Flak',
		7	=>	'Riot',
		8	=>	'Scuba',
	),
	'equip_body'	=>	array(
		1	=>	'Stoff',
		2	=>	'Leder',
		3	=>	'Pelz',
		4	=>	'Ghillie',
		5	=>	'Chitin',
		6	=>	'Flak',
		7	=>	'Riot',
		8	=>	'Scuba',
	),
	'equip_leg'	=>	array(
		1	=>	'Stoff',
		2	=>	'Leder',
		3	=>	'Pelz',
		4	=>	'Ghillie',
		5	=>	'Chitin',
		6	=>	'Flak',
		7	=>	'Riot',
		8	=>	'Scuba',
	),
	'equip_feet'	=>	array(
		1	=>	'Stoff',
		2	=>	'Leder',
		3	=>	'Pelz',
		4	=>	'Ghillie',
		5	=>	'Chitin',
		6	=>	'Flak',
		7	=>	'Riot',
		8	=>	'Scuba',
	),
	'equip_hand'	=>	array(
		1	=>	'Stoff',
		2	=>	'Leder',
		3	=>	'Pelz',
		4	=>	'Ghillie',
		5	=>	'Chitin',
		6	=>	'Flak',
		7	=>	'Riot',
		8	=>	'Scuba',
	),
//Engram,Variablennamen nach ark.gamepedia.com
	'engram_thatch'	=>	array(
		'Thatch_Foundation'		=>	'Strohfundament',
		'Thatch_Wall'			=>		'Strohwand',
		'Thatch_Roof'			=>		'Strohdach',
		'Thatch_Doorframe'		=>	'Strohtürrahmen',
		'Thatch_Door'			=>		'Strohtür',
		'Sloped_Thatch_Roof'	=>	'Schräges Strohdach',
		'Sloped_Thatch_Wall_Left'	=>	'Schräges Strohdach links',
		'Sloped_Thatch_Wall_Right'	=>	'Schräges Strohdach rechts',
	),
	'engram_wood'	=>	array(
		'Wooden_Bench'	=>	'Holz-Bank',
		'Wooden_Billboard'	=>	'Holz-Tafel',
		'Wooden_Catwalk'	=>	'Holz-Steg',
		'Wooden_Ceiling'	=>	'Holz-Decke',
		'Wooden_Chair'	=>	'Holz-Stuhl',
		'Wooden_Club'	=>	'Holz-Keule',
		'Wooden_Door'	=>	'Holz-Tür',
		'Wooden_Doorframe'	=>	'Holz-Türrahmen',
		'Wooden_Fence_Foundation'	=>	'Holz-Zaunfundament',
		'Wooden_Foundation'	=>	'Holz-Fundament',
		'Wooden_Hatchframe'	=>	'Holz-Lucke',
		'Wooden_Ladder'	=>	'Holz-Leiter',
		'Wooden_Pillar'	=>	'Holz-Säule',
		'Wooden_Raft'	=>	'Holz-Floß',
		'Wooden_Railing'	=>	'Holz-Geländer',
		'Wooden_Ramp'	=>	'Holz-Rampe',
		'Wooden_Shield'	=>	'Holz-Schild',
		'Wooden_Sign'	=>	'Holz-Schild',
		'Wooden_Spike_Wall'	=>	'Holz-Spitzen',
		'Wooden_Table'	=>	'Holz-Tisch',
		'Wooden_Trapdoor'	=>	'Holz-Faltür',
		'Wooden_Wall'	=>	'Holz-Wand',
		'Wooden_Wall_Sign'	=>	'Holz-Wandschild',
		'Wooden_Window'	=>	'Holz-Fenster',
		'Wooden_Windowframe'	=>	'Holz-Fensterrahmen',
	),
);
?>