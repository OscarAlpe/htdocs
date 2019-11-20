<?php 
	
	// Poder utilizar opciones de sesion en esta pagina
	session_start(); //antes de HTML	
	
	if(!isset($_SESSION["a"])) {
            // Creando e inicializando la variable de sesion
            $_SESSION["a"]=0;
/*
            $a=0;
            session_register("a");
*/	
	} else {
            $_SESSION["a"]++;	
        }

	echo $_SESSION["a"];

?>

