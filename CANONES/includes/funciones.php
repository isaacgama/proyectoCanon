<?php 

switch ($_POST["accion"]) {
	case 'login':
	login();
	break;
	default:
	break;
}

function login(){
		global $mysqli;
		// Conectar a Base de Datos.
		$correo = $_POST["correo"];
		$pass = $_POST["password"];	
		// Consultar a Base de Datos que exista el usuario.
		$consulta = "SELECT * FROM usuarios WHERE correo_usr = '$correo'";
		$resultado = $mysqli->query($consulta);
		$fila = $resultado->fetch_assoc();
		
		if ($fila == 0) 
			{
				// 	Si el usuario no existe imprimir = 2
				echo "El usuario no existe [ERROR-02]";

			}

			// 	Si el usuario existe, conusltar que el password sea correcto. 
		else if ($fila["password"] != $pass) 
			{
				$consulta = "SELECT * FROM usuarios WHERE correo_usr = '$correo' AND password = '$pass'";
				$resultado = $mysqli->query($consulta);
				$fila = $resultado->fetch_assoc();
				// 			Si el password no es correcto, imprimir codigo de erorres = 0.
				echo "El Password es Incorrecto [ERROR-00]";

				
			}
				else if($correo == /*$fila["correo_usr"]*/ "eduardo" && $pass == /*$fila["password"]*/ 1234)
				{
					// 			Si el password es correcto imprimir = 1 
					echo "../index.php"	;
					
				}
			}
 ?>