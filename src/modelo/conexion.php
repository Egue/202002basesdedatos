<?php




class conexion{

	function conectar(){

		$usuario = "programador";
		$password = "mysql";
		$basededatos = "papeleria";
		$host = "localhost";


		$conn = new PDO("mysql:host=$host;dbname=$basededatos;charset=utf8", $usuario, $password);


		return $conn;
	}
}


$prueba = new conexion();
$prueba->conectar();

?>
