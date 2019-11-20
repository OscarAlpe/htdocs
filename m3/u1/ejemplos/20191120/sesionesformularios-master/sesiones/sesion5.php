<?php 
	
	// Poder utilizar opciones de sesion en esta pagina
	session_start();	
	if(!isset($_SESSION["b"]))
		$_SESSION["b"]=0;
		

	if(!isset($_SESSION["a"]))
	{
		// Creando e inicializando la variable de sesion
		$_SESSION["a"]=0;
	}
	else
	{
		$_SESSION["a"]++;	
		$_SESSION["b"]++;
	}

	if(($_SESSION["a"])>9)
	{
		unset($_SESSION["a"]); // para eliminar una variable de sesion
		$_SESSION["a"]=0;
	}
	
	echo $_SESSION["a"];
	echo "<br />";
	echo $_SESSION["b"];
	echo "<br />";
	
?>
