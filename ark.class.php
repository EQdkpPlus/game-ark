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
		protected $class_dependencies = array(
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
			),
		);
		public $default_roles = array( 
			1 => array(1,2),
		);
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
			$this->load_type('equip_offhand', array($this->lang));
			$this->load_type('engram_resources', array($this->lang));
			$this->load_type('engram_container', array($this->lang));
			$this->load_type('engram_misc', array($this->lang));
			$this->load_type('engram_crafting', array($this->lang));
			$this->load_type('engram_thatch', array($this->lang));
			$this->load_type('engram_wood', array($this->lang));
			$this->load_type('engram_stone', array($this->lang));
			$this->load_type('engram_metal', array($this->lang));
			$this->load_type('engram_greenhouse', array($this->lang));
			$this->load_type('engram_vehicles', array($this->lang));
			$this->load_type('engram_tools', array($this->lang));
			$this->load_type('engram_ammunition', array($this->lang));
			$this->load_type('dossiers', array($this->lang));
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
			//Dinos
				'dino'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'character',
					'lang'			=> 'uc_dossier',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->dossiers[$this->lang],
					'sort'			=> 2,
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
			//Profilfelden reiter Equipment	
				'head'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_head',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_head[$this->lang],
					'sort'			=> 1,
				),
				'body'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_body',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_body[$this->lang],
					'sort'			=> 2,
				),
				'legs'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_leg',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_leg[$this->lang],
					'sort'			=> 3,
				),
				'feet'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_feet',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_feet[$this->lang],
					'sort'			=> 4,
				),
				'hand'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_hand',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_hand[$this->lang],
					'sort'			=> 5,
				),
				'offhand'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'equip',
					'lang'			=> 'uc_equip_offhand',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->equip_offhand[$this->lang],
					'sort'			=> 6,
				),
			//Profifelder reiter Engrams
				'resources'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_resources',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_resources[$this->lang],
					'sort'			=> 1,
				),
				'misc'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_misc',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_misc[$this->lang],
					'sort'			=> 2,
				),
				'container'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_containers',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_container[$this->lang],
					'sort'			=> 3,
				),
				'crafting'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_crafting_station',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_crafting[$this->lang],
					'sort'			=> 4,
				),
				'thatch'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_thatch',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_thatch[$this->lang],
					'sort'			=> 5,
				),
				'wood'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_wood',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_wood[$this->lang],
					'sort'			=> 6,
				),
				'stone'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_stone',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_stone[$this->lang],
					'sort'			=> 7,
				),
				'metal'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_metal',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_metal[$this->lang],
					'sort'			=> 8,
				),
				'greenhouse'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_greenhouse',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_greenhouse[$this->lang],
					'sort'			=> 9,
				),
				'vehicles'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_vehicles',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_vehicles[$this->lang],
					'sort'			=> 10,
				),
				'tools'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_tools',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_tools[$this->lang],
					'sort'			=> 11,
				),
				'ammunition'	=> array(
					'type'			=> 'multiselect',
					'category'		=> 'engram',
					'lang'			=> 'uc_ammunition',
					'undeletable'	=> true,
					'visible'		=> true,
					'options'		=> $this->engram_ammunition[$this->lang],
					'sort'			=> 11,
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