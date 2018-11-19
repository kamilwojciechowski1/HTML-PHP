<!DOCTYPE HTML>
<html>
	<head>
		
		<meta charset="utf-8">
		
	</head>
	<body>
		<h1> Pole trójkąta </h1>
			
		<form action="p2.html" method="POST">
		
			<label for="a">Podaj a:</label> <input type="number" name="a"></br>
			
			<label for="b">Podaj b:</label> <input type="number" name="b"></br>
			
			<label for="c">Podaj c:</label> <input type="number" name="c"></br>
		
			<input type="submit" value="Oblicz pole"></br>
			
		</form>	
			
			<div id="wyn" style="margin-top: 20px;">
		
		
			<?php
				
				$a=$_POST["a"];
				$b=$_POST["b"];
				$c=$_POST["c"];
				if (($a+$b<=$c) AND ($c+$b<=$a) AND ($a+$c<=$b))
				{
					echo "Nie da się stworzyć z danych boków trójkata";
				}
			
			?>
		
		</div>
		
		
	</body>
</html>