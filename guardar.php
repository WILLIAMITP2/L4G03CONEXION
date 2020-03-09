<?php
$host = "localhost";
$user = "root";
$password = "";
$bd = "personas";

$con = new mysqli($host, $user, $password, $bd); 
if($con->connect_error){
    echo "Base de datos no disponible";
}else{
    echo "Conectado a la base de datos <br>";
}


$nombre = $_POST["nombre"];
$email = $_POST["email"];

	$query = "insert into personas(nombre,email) values ('$nombre','$email')";
			if($con->query($query))
			{
				echo "Persona Guardada Correctamente";
			}else{
				echo "No Se Ha Podido Guardar La Persona". $con->error;
			}
			$con->close();
			header('Location: mostrar.php');
?>