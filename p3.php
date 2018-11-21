<!DOCTYPE HTML>
<html>
	<head>
		
		<meta charset="utf-8">
		
	</head>
	<body>
		<h1> Wyrocznia </h1>
		
		<p> Wyrocznia, pomyśl życzenie i sprawdz ile masz szans żeby się powiodło: </p>
			
		<form action="p3.php" method="POST">
		
			<input type="submit" value="Szansa"></br>
			
		</form>	
			
			<div id="wyn" style="margin-top: 20px;">
		
		
			<?php
				$sz = rand(0,100);
				if ($sz<=33)
				{
					echo '<span style="color:red">Mało: </span>';
					echo $sz;
				}
				elseif ($sz>=34 AND $sz<=66)
				{
					echo '<span style="color:blue">Nawet: </span>';
					echo $sz;
				}
				else
				{
					echo '<span style="color:green">Najlepiej: </span>';
					echo $sz;
				}
			?>
		
		</div>
		
		
	</body>
</html>