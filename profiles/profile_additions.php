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
	$this->tpl->add_css("
		.wows-picture {
			margin-left: auto;
			margin-right: auto;
		}

		.wows-picture img {
			max-width: 800px;
			padding: 5px;
		}
		.wows-tab {
			outline: none;
			border-color: #008989;
			border-radius: 10px; 
			box-shadow: 0 0 10px #008989;
			-webkit-box-shadow: 0 0px 10px #008989;
			-moz-box-shadow: 0 0px 10px #008989;
		}
		.statsicon {
			width: 20px;
		}
		.statsfont {
			color: #008989 !important;
		}
		.charnamefont {
			font-size: 30px !important;
			color: #008989 !important;
		}
		.overlay { 
			background: #252525; 
			background: hsla(0,0%,15%,0.3); 
			color: white; 
			border-radius: 10px;
			transition: background 1s;
		}
	");
	
	$statspath = $this->server_path."games/ark/profiles/pics/stats/";
	$this->tpl->assign_vars(array(
		'CHARDATA_NAME'			=> $chardata['name'],
		'STATS_PATH'			=> $statspath,
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