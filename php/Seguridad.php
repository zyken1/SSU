<?php
session_start(); //Inicio la sesi�n
if ($_SESSION["Autentificado"] != "SI")	//Comprueba que el usuario este autentificado
	{
		header("Location: ../index.php"); //Si no existe, envio a la p�gina de autentificaci�n
		// alert("NO TIENES PERMISOS CONTACTA AL ADMINISTRADOR");
		exit();	//Salgo de este script
	}
?>