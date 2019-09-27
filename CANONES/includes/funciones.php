<?php 
require_once 'medoo.php';
require_once 'db.php';

if ($_POST) {
	switch ($_POST["accion"]) {
	case 'login': login();
	break;
	default:
	break;
  }
}




function login(){
	//print_r($_POST);
		global $db;
		// Conectar a Base de Datos.
		$respuesta=[];
		$usuario = $db -> get("usuarios","*",["correo" =>$_POST["usuario"]]);

			if($usuario > 0){
				
				
				if ($usuario["password"] > 0) {
					
					
					$respuesta["status"]= 1;


					
					
					session_start();
					error_reporting(0);

					$_SESSION['usuarios']= $usuario["correo"];
					$respuesta["texto"]= $_SESSION['usuarios'];


					
				}
				else{
					$respuesta["texto"]="contraseña no existente";
					$respuesta["status"]=0;
				}
				//validar la contraseña sea correcta si no es correcta enviar un status 0 con el texto que ustedes quieran, si la contraseña es correcta entonces : 1 iniciar secion 2 setear a la variable de $_session los valores nombre correo estatus id y agregar a la tabla un campo que se llame nivel  3 responder status 1. 
			}else{
				$respuesta["texto"] ="no existe";
				$respuesta["status"]=0;

			}
			echo json_encode($respuesta);

		
	
}
?>