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
 
	$this->jquery->Tab_header('char1_tabs');
	
	$this->tpl->assign_vars(array(
		'CHARDATA_NAME'			=> $chardata['name'],
	));

//Thatch	
	$thatch = $this->pdh->get('member', 'profile_field', array($this->url_id, 'thatch'));
	$count = count ($thatch);
	for ($i=0; $i<$count; $i++){
		$engramicon = $this->server_path."games/ark/profiles/engram/".$thatch[$i].".png";
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
		$engramicon = $this->server_path."games/ark/profiles/engram/".$wood[$i].".png";
		$this->tpl->assign_block_vars(
			'woodB', array(
					'ICON'	=> $engramicon,
					'NAME'	=> $wood[$i],
			)
		);	
	}


?>