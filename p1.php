<!DOCTYPE HTML>
<html>

	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="p2.html" method="POST"> 
			<label for="a">Podaj Pierwsze słowo:</label><input type="text" name="a"></br>
			<label for="b">Podaj Drugie słowo:</label><input type="text" name="b"></br>
			<input type="submit" value="Przekształć"></br>
			</br>
		</form>
			<div id="wyn" style="margin-top: 20px;">	
					<?php

						$napis1=$_POST["a"];
						$napis2=$_POST["b"];
						$dl1 = strlen($napis1);
						$dl2 = strlen($napis2);
						$napisa=substr($napis1,-($dl1=1));
						$napisb=substr($napis2,-($dl2-1));
						echo $napis2[0].$napisa + $napis1[0].$napisb;

					?>
			</div>
	</body>
</html>