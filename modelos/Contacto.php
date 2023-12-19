<?php

//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Contacto
{
	public function __construct()
	{

	}

	public function guardar_contacto($name,$email,$subject,$message)
	{
		$sql="INSERT INTO contactos (nombre, correo, asunto, mensaje) VALUES ('$name', '$email', '$subject', '$message')";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}

}
?>

