<?php

class Weapons
{
	private $_nom;
    private $_charge;
    private $_courte_portee;
    private $_moyenne_portee;
    private $_longue_portee;
	private $_zone_effet;
	public static $verbose = FALSE;

	public function __construct($kwargs)
	{
		$this->init($kwargs);
        if (self::$verbose == TRUE)
			echo "Weapon constructed.".PHP_EOL;
	}
	public function __destruct()
    {
        if (self::$verbose == TRUE)
			echo "Weapon destructed.".PHP_EOL;
    }


	public function init(array $kwarg)
	{
		$this->setName($kwarg['nom']);
		$this->setLoad($kwarg['charge']);
		$this->setSrange($kwarg['cportee']);
		$this->setMrange($kwarg['mportee']);
		$this->setLrange($kwarg['lportee']);
		$this->setArea($kwarg['zeffet']);
	}


	public function setNom($elem)
	{
		$this->_nom = $elem;
	}
	public function setCharge($elem)
	{
		$this->_charge = $elem;
	}
	public function setCportee($elem)
	{
		$this->_courte_portee = $elem;
	}
	public function setMportee($elem)
	{
		$this->_moyenne_portee = $elem;
	}
	public function setLportee($elem)
	{
		$this->_longue_portee = $elem;
	}
	public function getZeffet($elem)
	{
		$this->_zone_effet = $elem;
	}


	public function getNom()
	{
		return $this->_nom;
	}
	public function getCharge()
	{
		return $this->_charge;
	}
	public function getCportee()
	{
		return $this->_courte_portee;
	}
	public function getMportee()
	{
		return $this->_moyenne_portee;
	}
	public function getLportee()
	{
		return $this->_longue_portee;
	}
	public function getZeffet()
	{
		return $this->_zone_effet;
	}



	public static function doc()
	{
		return file_get_contents("./Weapons.doc.txt");
	}
}
/*
	$Gun_1 = new Gun(array('nom' => 'Macro canon', 'charge' => 0, 'cportee' => 10, 'mportee' => 20, 'lportee' => 30, 'zeffet' => 3));
	$Gun_2 = new Gun(array('nom' => 'Lance navale', 'charge' => 3, 'cportee' => 30, 'mportee' => 60, 'lportee' => 90, 'zeffet' => 1));
*/
?>