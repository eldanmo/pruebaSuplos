<?php
function Conectarse()
{
    $servidor = "localhost";
    $usurario = "root";
    $contrasena = "";
    $base = "pruebasuplos";

	$objConexion = new mysqli($servidor, $usurario, $contrasena ,$base );
	if ($objConexion->connect_errno)
	{
		echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
		exit();
	}
	else
	{
		return $objConexion;
	}
}

?>