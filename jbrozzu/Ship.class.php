<?php

class Ship{

	private $_name;
	private $_sizeX;
	private $_sizeY;
	private $posX;
	private $posY;
	private $_sprite;
	private $_hull;
	private $_power;
	private $_speed;
	private $_flex;
	private $_shield;
	private $_weapon;
<<<<<<< HEAD
	public $verbose =  false;
=======
	public $verbose == True;
>>>>>>> 2789fefda05b33592899df8ef2e1f8478253e416
	
	public function __construct(array $kwargs) {
		if (array_key_exists('name', $kwargs))
			$this->_name = _setName($kwargs['name']);
		else
<<<<<<< HEAD
			$this->_name = "cruseship";
=======
			$this->_name = "CruseShip";
>>>>>>> 2789fefda05b33592899df8ef2e1f8478253e416
		if (array_key_exists('X', $kwargs))
			$this->_sizeX = _setSiseX($kwargs['sizeX']);
		else
			$this->_sizeX = 10;
		if (array_key_exists('Y', $kwargs))
			$this->_sizeY = _setSiseY($kwargs['sizeY']);
		else
			$this->_sizeY = 10;
<<<<<<< HEAD
		if (array_key_exists('sprite', $kwargs))
			$this->_sprite = _setSprite($kwargs['sprite']);
		else
			$this->_sprite = "plop.png";
		if (array_key_exists('hull', $kwargs))
			$this->_hull = _setHull($kwargs['hull']);
		else
			$this->_hull = 10; 
		if (array_key_exists('power', $kwargs))
			$this->_power = _setPower($kwargs['power']);
		else
			$this->_power = 10;
		if (array_key_exists('speed', $kwargs))
			$this->_speed = _setSpeed($kwargs['speed']);
		else
			$this->_speed = 10;
		if (array_key_exists('flex', $kwargs))
			$this->_flex = _setFlex($kwargs['flex']);
		else
			$this->_flex = 10;
		if (array_key_exists('shield', $kwargs))
			$this->_shield = _setShield($kwargs['shield']);
		else
			$this->_shield = 10;
		if (array_key_exists('weapon', $kwargs))
			$this->_weapon = _setWeapon($kwargs['weapon']);
		else
			$this->_weapon = "CANON A NEUTRON";
=======
		if (array_key_exists('posX', $kwargs))
			$this->_posX = _setSiseX($kwargs['posX']);
		else
			$this->_posX = 10;
		if (array_key_exists('posY', $kwargs))
			$this->_posY = _setSiseY($kwargs['posY']);
		else
			$this->_posY = 10;
		if (array_key_exists('sprite', $kwargs))
			$this->_sprite = _setSprite($kwargs['sprite']);
		else
			$this->_sprite = "plop.jpg";
		if (array_key_exists('hull', $kwargs))
			$this->_hull = _setHull($kwargs['hull']);
		else
			$this->_hull = 1;
		if (array_key_exists('power', $kwargs))
			$this->_power = _setPower($kwargs['power']);
		else
			$this->_power = 2;
		if (array_key_exists('speed', $kwargs))
			$this->_speed = _setSpeed($kwargs['speed']);
		else
			$this->_speed = 2;
		if (array_key_exists('flex', $kwargs))
			$this->_flex = _setFlex($kwargs['flex']);
		else
			$this->_flex = 2;
		if (array_key_exists('shield', $kwargs))
			$this->_shield = _setShield($kwargs['shield']);
		else
			$this->_shield = 5;
		if (array_key_exists('weapon', $kwargs))
			$this->_weapon = _setWeapon($kwargs['weapon']);
		else $this->_weapon = "plop";
>>>>>>> 2789fefda05b33592899df8ef2e1f8478253e416
		if (self::$verbose == True)
			printf("Color( name: %s.\nsize : %dx%d\nsprite : %s\nhull : %s\npower : %d\nspeed : %d\nflex : %d\nshield : %d\nweapon : %s\n) constructed.\n"
				, $this->_name, $this->_sizeX, $this->_sizeY, $this->_sprite, $this->_hull, $this->_power, $this->_speed, $this->_flex, $this->_shield, $this->_weapon->getName());
		return ;
	}

		private function _setName($val)
		{
			$this->_name = $val;
		}

		private function _setSiseX($val)
		{
			$this->_sizeX = $val;
		}

		private function _setSiseY($val)
		{
			$this->_sizeY = $val;
		}

		private function _setPosX($val)
		{
			$this->_posX = $val;
		}

		private function _setPosY($val)
		{
			$this->_posY = $val;
		}

		private function _setSprite($val)
		{
			$this->_sprite = $val;
		}

		private function _setHull($val)
		{
			$this->_hull = $val;
		}

		private function _setPower($val)
		{
			$this->_power = $val;
		}

		private function _setSpeed($val)
		{
			$this->_speed = $val;
		}

		private function _setFlex($val)
		{
			$this->_flex = $val;
		}

		private function _setShield($val)
		{
			$this->_shield = $val;
		}

		private function _setWeapon($val)
		{
			$this->_weapon = $val;
		}


		public function getName()
		{
			return $this->_name;
		}

		public function getSiseX()
		{
			return $this->_sizeX;
		}

		public function getSiseY()
		{
			return $this->_sizeY;
		}

		public function getSprite()
		{
			return $this->_sprite;
		}

		public function getPosX()
		{
			return $this->_sizeX;
		}

		public function getPosY()
		{
			return $this->_sizeY;
		}

		public function getHull()
		{
			return $this->_hull;
		}

		public function getPower()
		{
			return $this->_power;
		}

		public function getSpeed()
		{
			return $this->_speed;
		}

		public function getFlex()
		{
			return $this->_flex;
		}

		public function getShield()
		{
			return $this->_shield;
		}

		public function getWeapon()
		{
			return $this->_weapon;
		}

		public function print_ship()
		{
			echo ;

		}

	}

}

?>