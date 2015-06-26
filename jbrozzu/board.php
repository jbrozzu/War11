<?php
	include_once("Dice.class.php");
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

<script type="text/javascript">

var myArray    = new Array();
    myArray[0] = "1";
    myArray[1] = "2";
    myArray[2] = "3";
    myArray[3] = "4";
    myArray[4] = "5";



for (var j = 0; j < 100; j++) 
{
	document.write("<tr>");
	for (var i = 0; i < 150; i++) 
	{
		document.write("<td><img src=\"https://avatars3.githubusercontent.com/u/8488828?v=3&s=40\"></img></td>");
  	}
	document.write("</tr>");
}
</script>

</table>

</body>
</html>
