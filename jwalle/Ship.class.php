<?php

class Ship{

	private $_name;
	private $_sizeX;
	private $_sizeY;
	private $_sprite;
	private $_hull;
	private $_power;
	private $_speed;
	private $_flex;
	private $_shield;
	private $_weapon;
	
	public function __construct(array $kwargs) {
		if (array_key_exists('name', $kwargs))
			$this->name = _SetName($kwargs['name']);
		if (array_key_exists('name', $kwargs))
			$this->name = _SetName($kwargs['name']);
		if (array_key_exists('name', $kwargs))
			$this->name = _SetName($kwargs['name']);
		if (array_key_exists('name', $kwargs))
			$this->name = _SetName($kwargs['name']);
		if (array_key_exists('name', $kwargs))
			$this->name = _SetName($kwargs['name']);
		if (array_key_exists('name', $kwargs))
			$this->name = _SetName($kwargs['name']);
		if (array_key_exists('name', $kwargs))
			$this->name = _SetName($kwargs['name']);
		if (array_key_exists('name', $kwargs))
			$this->name = _SetName($kwargs['name']);
		if (array_key_exists('name', $kwargs))
			$this->name = _SetName($kwargs['name']);

		if (self::$verbose == True)
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		return ;

		private function _setName($name)
		{
			$this->_name = $name;
		}

		private function _setName($name)
		{
			$this->_name = $name;
		}

		private function _setName($name)
		{
			$this->_name = $name;
		}

	}

}

?>