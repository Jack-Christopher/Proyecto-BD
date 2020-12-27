<?php 
	session_start();

	if(isset($_SESSION['user'])){
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once "scripts.php"; ?>
</head>
<body>
<br><br><br>
	<div class="container">
		<a href="php/salir.php" class="btn btn-info">Cerrar sesión</a>
	</div>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
 ?>
