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

if(!class_exists('ark')) {
	class ark extends game_generic {#
		protected static $apiLevel	= 20;
		public $version				= '0.1.0';
		protected $this_game		= 'ark';
		protected $types			= array('classes','roles');
		protected $classes			= array();
		protected $roles			= array();
		protected $factions			= array();
		protected $filters			= array();
		protected $realmlist		= array();
		protected $professions		= array();
		public $langs				= array('german','english');
		protected $class_dependencies = array();
		public $default_roles		= array();
		protected $class_colors		= array();

		protected $glang			= array();
		protected $lang_file		= array();
		protected $path				= '';
		public $lang				= false;

		public function __construct() {
			parent::__construct();
		}

		public function install($install=false){
			//config-values
			$info['config'] = array();
			return $info;
		}
		
		public function load_filters($langs){
			return array();
		}

		public function profilefields(){
			$this->load_type('equip_head', array($this->lang));
			$this->load_type('equip_body', array($this->lang));
			$this->load_type('equip_leg', array($this->lang));
			$this->load_type('equip_feet', array($this->lang));
			$this->load_type('equip_hand', array($this->lang));
			$fields = array(
			//Profilfelden reiter charakter
				'level'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'character',
					'lang'			=> 'uc_level',
					'max'			=> 500,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 1,
				),
			//Profilfelden reiter Stats
				'life'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_life',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 1,
				),
				'stamina'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_stamina',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 2,
				),
				'oxygen'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_oxygen',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 3,
				),
				'food'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_food',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 4,
				),
				'water'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_water',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 5,
				),
				'weight'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_weight',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 6,
				),
				'damage'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_damage',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 7,
				),
				'speed1'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_speed1',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 8,
				),
				'resistance'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_resistance',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 9,
				),
				'speed2'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_speed2',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 10,
				),
				'torpor'	=> array(
					'type'			=> 'spinner',
					'category'		=> 'stats',
					'lang'			=> 'uc_torpor',
					'max'			=> 1000000,
					'min'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 11,
				),
			// Equipment	
				'head'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_head',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_head[$this->lang],
					'sort'			=> 1,
				),
				'body'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_body',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_body[$this->lang],
					'sort'			=> 2,
				),
				'legs'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_leg',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_leg[$this->lang],
					'sort'			=> 3,
				),
				'feet'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_feet',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_feet[$this->lang],
					'sort'			=> 4,
				),
				'hand'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_hand',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_hand[$this->lang],
					'sort'			=> 5,
				),
			);
			return $fields;
		}

		public function admin_settings() {
			// array with admin fields
		}

	}#class
}
?>