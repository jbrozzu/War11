<?php
	
	class dice 
	{

		private $nbDice;

		 public function __construct($val)
		 {
		 	$this->nbDice = $val;
		 }
		
		public function roll()
		{
			$ret = 0;
			$final_ret = 0;
			while ($this->nbDice)
			{
				$ret = rand(1, 6);
				$final_ret += $ret;
				$this_nbDice--;
			}
			return ($final_ret);
		}

		public static function doc()
		{
			return file_get_contents("./Dice.doc.txt");
		}
	}
	
?>
