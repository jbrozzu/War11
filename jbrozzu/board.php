<?php
	include_once("Dice.class.php");
	include_once("Ship.class.php");
	$dice = new dice(1);
?>
<html>
<head>
<title>The board</title>
<link rel="stylesheet" type="text/css" href="board.css">
</head>
<body>

<h1 style="color:red; text-align:center;">My Beautiful Board</h1>

<table>

<script>

$Ship = new ship( array('posX' => 34, 'posY' => 20, 'sprite' => "../cruseship.jpg"));

for (var j = 0; j < 100; j++) 
{
	document.write("<tr>");
	for (var i = 0; i < 150; i++) 
	{
		if (ship->getPosX == i && ship->getPosY == j)
		{
			document.write("<td><img src=\"" + ship->getSprite() + "\"></img></td>");
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
