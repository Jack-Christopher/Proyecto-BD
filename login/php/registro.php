<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$usuario=$_POST['usuario'];
		$password=$_POST['password'];

		if(buscaRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into usuario (nombres,apellidos)
				values ('$nombre','$apellido')";
			$result=mysqli_query($conexion,$sql);
			
			$sql="INSERT into cuenta (codigo_usuario, nombre_de_usuario, clave_usuario	)
				values ('$nombre','$usuario','$password')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$pass,$conexion){
			$sql="SELECT * from cuenta
				where nombre_de_usuario='$user' and clave_usuario='$pass'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>