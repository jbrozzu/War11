<?php

class Ship {

	private $_posX;
	private $_posY;
	private $_sprite;
	private $_name;
	private $_hull;


	public static $verbose = False;
	

public function __construct (array $kwargs) {

        if (array_key_exists('posX', $kwargs))
            $this->_posX = intval($kwargs['posX']);
        else
            $this->_posX = 10;
        
        if (array_key_exists('name', $kwargs))
            $this->_name = $kwargs['name'];
        else
            $this->_name = "cruseship";

        if (array_key_exists('posY', $kwargs))
            $this->_posY = intval($kwargs['posY']);
        else
            $this->_posY = 10;

        if (array_key_exists('sprite', $kwargs))
            $this->_sprite = $kwargs['sprite'];
        else
            $this->_sprite = "plop.png";

        if (array_key_exists('hull', $kwargs))
            $this->_hull = $kwargs['hull'];
        else
            $this->_hull = 10;
		return ;
	}

		public function setName($val)
		{
			$this->_name = $val;
		}

		public function setPosX($val)
		{
			$this->_posX = $val;
		}

		public function setPosY($val)
		{
			$this->_posY = $val;
		}

		public function setSprite($val)
		{
			$this->_sprite = $val;
		}

		private function _setHull($val)
		{
			$this->_hull = $val;
		}

		public function getHull()
		{
			return $this->_hull;
		}
	
		public function getName()
		{
			return $this->_name;
		}

		public function getPosX()
		{
			return $this->_posX;
		}

		public function getPosY()
		{
			return $this->_posY;
		}

		public function getSprite()
		{
			return $this->_sprite;
		}

}

?>