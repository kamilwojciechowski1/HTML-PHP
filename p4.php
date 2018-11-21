<!DOCTYPE HTML>
<html>
	<head>
		
		<meta charset="utf-8">
		
	</head>
	<body>
		<h1> Sortowanie </h1>
			
		<form action="p4.php" method="POST">
		
			<label for="a">Podaj a:</label> <input type="number" name="a"></br>
			
			<label for="b">Podaj b:</label> <input type="number" name="b"></br>
			
			<label for="c">Podaj c:</label> <input type="number" name="c"></br>
		
			<input type="submit" value="Sortuj"></br>
			
		</form>	
			
			<div id="wyn" style="margin-top: 20px;">
		
		
			<?php
				
				if(isset($_POST["a"]) AND isset($_POST["b"]) AND isset($_POST["c"]))
				{
					$a=$_POST["a"];
					$b=$_POST["b"];
					$c=$_POST["c"];

					for ($i = 1; $i <= 3; $i++) {
					if ($a>$b)
						{
							$d=$a;
							$a=$b;
							$b=$d;
						}
						if ($b>$c)
						{
							$d=$b;
							$b=$c;
							$c=$d;
						}
						if($a>$c)
						{
							$d=$a;
							$a=$c;
							$c=$d;
						}
					}
					echo "Kolejnosc liczb to:";
					echo $a;
					echo $b;
					echo $c;
				}
				else
				{
					echo "Pola są puste";
				}
				
			
			?>
		
		</div>
		
		
	</body>
</html>