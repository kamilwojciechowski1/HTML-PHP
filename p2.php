<!DOCTYPE HTML>
<html>
	<head>
		
		<meta charset="utf-8">
		
	</head>
	<body>
		<h1> Pole trójkąta </h1>
			
		<form action="p2.php" method="POST">
		
			<label for="a">Podaj a:</label> <input type="number" name="a"></br>
			
			<label for="b">Podaj b:</label> <input type="number" name="b"></br>
			
			<label for="c">Podaj c:</label> <input type="number" name="c"></br>
		
			<input type="submit" value="Oblicz pole"></br>
			
		</form>	
			
			<div id="wyn" style="margin-top: 20px;">
		
		
			<?php
				
				if(isset($_POST["a"]) AND isset($_POST["b"]) AND isset($_POST["c"]))
				{
				
					$a=$_POST["a"];
					$b=$_POST["b"];
					$c=$_POST["c"];
				
				
					if (($a+$b<=$c) OR ($c+$b<=$a) OR ($a+$c<=$b))
						{
							echo "Nie da się stworzyć z danych boków trójkata";
						}
					else
						{
						echo $a;
						echo $b;
						echo $c;	
					}
				}
				else
				{
					echo "Pola są puste";
				}
				
			
			?>
		
		</div>
		
		
	</body>
</html>