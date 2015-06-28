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

		document.write("<p>plop</p>");

		<?php
			include_once("Ship.class.php");
			$ship = new ship( array('posX' => 34 , 'posY' => '20', 'sprite' => "../cruseship.jpg"));
		?>

		var X = <?php $ship->getPosX; ?>;
		var Y = <?php $ship->getPosY; ?>;

		for (var j=0; j<100; j++) {
			document.write("<tr>");
			for (var i=0; i<150; i++) {
				if ( X == i &&  Y == j)
				{
				 	document.write("<td><img src=\"" + <?php echo $ship->getSprite(); ?>  + "\"></img></td>");
					document.write("<h1>plop</h1>");
				}
				 else
					document.write("<td></td>");
		  	}
			document.write("</tr>");
		}

	</script>

	<h1>PLOPLPO</h1>

	</table>

	</body>
</html>
