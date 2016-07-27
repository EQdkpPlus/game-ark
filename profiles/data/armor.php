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
	//equip_head
	$equip_head = $this->pdh->get('member', 'profile_field', array($this->url_id, 'head'));
	$engramicon = $this->server_path."games/ark/profiles/engram/".$equip_head.".png";
	$this->tpl->assign_vars(array(
		'HEAD_ICON'	=> $engramicon,
		'HEAD_NAME'	=> $equip_head,
	));
	//equip_body
	$equip_body = $this->pdh->get('member', 'profile_field', array($this->url_id, 'body'));
	$engramicon = $this->server_path."games/ark/profiles/engram/".$equip_body.".png";
	$this->tpl->assign_vars(array(
		'BODY_ICON'	=> $engramicon,
		'BODY_NAME'	=> $equip_body,
	));
	//equip_leg
	$equip_leg = $this->pdh->get('member', 'profile_field', array($this->url_id, 'legs'));
	$engramicon = $this->server_path."games/ark/profiles/engram/".$equip_leg.".png";
	$this->tpl->assign_vars(array(
		'LEG_ICON'	=> $engramicon,
		'LEG_NAME'	=> $equip_leg,
	));
	//equip_feet
	$equip_feet = $this->pdh->get('member', 'profile_field', array($this->url_id, 'feet'));
	$engramicon = $this->server_path."games/ark/profiles/engram/".$equip_feet.".png";
	$this->tpl->assign_vars(array(
		'FEET_ICON'	=> $engramicon,
		'FEET_NAME'	=> $equip_feet,
	));
	//equip_hand
	$equip_hand = $this->pdh->get('member', 'profile_field', array($this->url_id, 'hand'));
	$engramicon = $this->server_path."games/ark/profiles/engram/".$equip_hand.".png";
	$this->tpl->assign_vars(array(
		'HAND_ICON'	=> $engramicon,
		'HAND_NAME'	=> $equip_hand,
	));
	//equip_offhand
	$equip_offhand = $this->pdh->get('member', 'profile_field', array($this->url_id, 'offhand'));
	$engramicon = $this->server_path."games/ark/profiles/engram/".$equip_offhand.".png";
	$this->tpl->assign_vars(array(
		'OFFHAND_ICON'	=> $engramicon,
		'OFFHAND_NAME'	=> $equip_offhand,
	));




	
	
	
 ?>