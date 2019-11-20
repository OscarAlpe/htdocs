<?php 
	
	// Poder utilizar opciones de sesion en esta pagina
	session_start();	
	
	if(!isset($_SESSION["a"]))
	{
		// Creando e inicializando la variable de sesion
		$_SESSION["a"]=0;
	}
	else
		$_SESSION["a"]++;	

	if(($_SESSION["a"])>9)
		session_unset(); //cierra la sesion en este punto

		
	
	echo $_SESSION["a"]; // da un aviso por no existir sesion
?>
