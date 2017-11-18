<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta lang="id">
		<title></title>
	</head>
	<body>
		<form method="get">
		<input type="text" name="username" placeholder="Username..."><br/>
		<input type="password" name="password" placeholder="password"><br/>
		<input type="submit" value="Kirim">
		</form>
		<?php
			$idA = "saya";
			$passA = "manusia";
			if ((isset($_GET['username']) && !empty($_GET['username'])) 
				&& (isset($_GET['username']) && !empty($_GET['username']))):
			$id = $_GET['username'];
			$pass = $_GET['password'];
				if ($id == $idA && $pass == $passA):
					echo "MONSTER MANUEL HEEREEEEE...";
				else:
					echo "MONSTER MANUEL IS NAYWHERE ELSE";
				endif;
			else:
				echo "Plz fill out this field";
			endif;
		?>
	</body>