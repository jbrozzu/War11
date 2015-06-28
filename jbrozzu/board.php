<?php
	include_once("Dice.class.php");
	$dice = new dice(1);
?>
<html>
	<head>
		<title>The board</title>
		<link rel="stylesheet" type="text/css" href="board.css">
		<style> 

			h1
			{
				text-align: center;
				margin-top: 10px;
				color: #73A0FF;
			}

			#line
			{
				/*border: 1px solid red;*/
				width:1800px;
				height:11px;
				margin-right: auto;
				margin-left: auto;
			}

			#vaisseau 
			{
				position:relative;
				z-index: 30; 
				float:left;
				border: 1px solid black;
				width: 100px
			}

			#roc
			{
				position:relative;
				z-index: 30; 
				float:left;
				width: 100px;
			}

			#roc2
			{
				position:relative;
				z-index: 30; 
				float:left;
				width: 300px;
			}

			#roc2
			{
				position:relative;
				z-index: 30; 
				float:left;
				width: 300px;
			}

			#roc3
			{
				position:relative;
				z-index: 30; 
				float:left;
				width: 50px;
			}

			#station
			{
				position:relative;
				z-index: 30; 
				float:left;
				width: 200px;
			}

			body
			{
				background: url(./space.jpg);
			}


		</style>
	</head>
	
	<body>

		<h1>- WARS IS LIFE -</h1>

		

		<script type="text/javascript">

			x1 = 50;
			y1 = 85;
			x2 = 30;
			y2 = 45;
			document.write("<div id=\"main\">")
			for (var j = 0; j < 100; j++) 
			{
				document.write("<div id=\"line\">")
				for (var i = 0; i < 150; i++) 
				{
					if ((j == x1 && i == y1) || (j == x2 && i == y2))
						document.write("<div class=\"case\"><img id= \"vaisseau\" src=\"./vaisseau.png\"></img></div>");
					else if ((i == 5 && j == 9) || (i == 120 && j == 50) || (i == 75 && j == 25)) 
						document.write("<div class=\"case\"><img id= \"roc\" src=\"./roc.png\"></img></div>");
					else if (i == 80 && j == 80) 
						document.write("<div class=\"case\"><img id= \"roc2\" src=\"./roc.png\"></img></div>");
					else if ((i == 130 && j == 15) || (i == 20 && j == 35)) 
						document.write("<div class=\"case\"><img id= \"roc3\" src=\"./roc.png\"></img></div>");
					else if (i == 10 && j == 75) 
						document.write("<div class=\"case\"><img id= \"station\" src=\"./station.png\"></img></div>");
					else 
						document.write("<div class=\"case\"></div>");
			  	}
				document.write("<br></div>");
			}
			document.write("</div>");
			document.write("</br>");
		</script>


		</br>
		</br>

</body>
</html>
