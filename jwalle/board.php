<?php
	include_once("Dice.class.php");
	$dice = new dice(1);
?>
<html>
	<head>
		<title>Dat board</title>
		<link rel="stylesheet" type="text/css" href="board.css">
	</head>
<body>

<h1>TyE boafdgkjrde.</h1>

	<table>

	<script type="text/javascript">


		<?php
			include_once("Ship.class.php");
			$ship = new ship( array('name' => "\"Destructor\"", 'posX' => 54 , 'posY' => 10, 'sprite' => "\"../cruseship.jpg\"", 'hull' => 10, 'power' => 5, 'speed' => 15, 'flex' => 3, 'shield' => '100'));
		?>

		var nlt = "&#013;";
		var nlh = "<br>";
		var X = <?php print $ship->getPosX() ; ?> ;
		var Y = <?php print $ship->getPosY() ; ?> ;
		var URL = <?php echo $ship->getSprite(); ?> ;
		var Name = <?php echo $ship->getName(); ?> ;
		var hull = <?php echo $ship->getHull(); ?> ;
		var power = <?php echo $ship->getPower(); ?> ;
		var speed = <?php echo $ship->getSpeed(); ?> ;
		var flex = <?php echo $ship->getFlex(); ?> ;
		var shield = <?php echo $ship->getShield(); ?> ;

		document.write("name : " + Name + nlh);
		document.write("hull : " + hull + nlh);
		document.write("power : " + power + nlh);
		document.write("speed : " + speed + nlh);
		document.write("flex : " + flex + nlh);
		document.write("shield : " + shield + nlh);
		for (var j=0; j<100; j++) {
			document.write("<tr>");
			for (var i=0; i<150; i++) {
				if ( X == i &&  Y == j)
				{
				 	document.write("<td><img src= " + URL + " title =" + Name + "></td>");
				}
				 else
					document.write("<td></td>");
		  	}
			document.write("</tr>");
		}

	</script>

	</table>

	</body>
</html>
