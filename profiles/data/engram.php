<?php
/*	Project:	EQdkp-Plus
 *	Package:	World of Warships game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
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
//resources	
	$resources = $this->pdh->get('member', 'profile_field', array($this->url_id, 'resources'));
	$count = count ($resources);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$resources[$i].".png";
		$this->tpl->assign_block_vars(
			'resourcesB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $resources[$i],
			)
		);	
	}
//misc	
	$misc = $this->pdh->get('member', 'profile_field', array($this->url_id, 'misc'));
	$count = count ($misc);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$misc[$i].".png";
		$this->tpl->assign_block_vars(
			'miscB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $misc[$i],
			)
		);	
	}
//container	
	$container = $this->pdh->get('member', 'profile_field', array($this->url_id, 'container'));
	$count = count ($container);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$container[$i].".png";
		$this->tpl->assign_block_vars(
			'containerB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $container[$i],
			)
		);	
	}
//crafting	
	$crafting = $this->pdh->get('member', 'profile_field', array($this->url_id, 'crafting'));
	$count = count ($crafting);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$crafting[$i].".png";
		$this->tpl->assign_block_vars(
			'craftingB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $crafting[$i],
			)
		);	
	}
//Thatch	
	$thatch = $this->pdh->get('member', 'profile_field', array($this->url_id, 'thatch'));
	$count = count ($thatch);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$thatch[$i].".png";
		$this->tpl->assign_block_vars(
			'thatchB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $thatch[$i],
			)
		);	
	}
//Wood
	$wood = $this->pdh->get('member', 'profile_field', array($this->url_id, 'wood'));
	$count = count ($wood);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$wood[$i].".png";
		$this->tpl->assign_block_vars(
			'woodB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $wood[$i],
			)
		);	
	}
//Stone
	$stone = $this->pdh->get('member', 'profile_field', array($this->url_id, 'stone'));
	$count = count ($stone);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$stone[$i].".png";
		$this->tpl->assign_block_vars(
			'stoneB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $stone[$i],
			)
		);	
	}
//Metal
	$metal = $this->pdh->get('member', 'profile_field', array($this->url_id, 'metal'));
	$count = count ($metal);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$metal[$i].".png";
		$this->tpl->assign_block_vars(
			'metalB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $metal[$i],
			)
		);	
	}
//Greenhouse
	$greenhouse = $this->pdh->get('member', 'profile_field', array($this->url_id, 'greenhouse'));
	$count = count ($greenhouse);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$greenhouse[$i].".png";
		$this->tpl->assign_block_vars(
			'greenhouseB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $greenhouse[$i],
			)
		);	
	}
//vehicles
	$vehicles = $this->pdh->get('member', 'profile_field', array($this->url_id, 'vehicles'));
	$count = count ($vehicles);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$vehicles[$i].".png";
		$this->tpl->assign_block_vars(
			'vehiclesB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $vehicles[$i],
			)
		);	
	}
/*dummy

	$xxx = $this->pdh->get('member', 'profile_field', array($this->url_id, 'xxx'));
	$count = count ($xxx);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/pics/engram/".$xxx[$i].".png";
		$this->tpl->assign_block_vars(
			'xxxB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $xxx[$i],
			)
		);	
	}
*/
	
	
 ?>