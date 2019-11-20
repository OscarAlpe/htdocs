<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>
			Usar casillas de verificación
		</TITLE>
	</HEAD>

	<BODY>
		<CENTER>
			<H1> Recuperar datos desde casillas de verificación</H1>
			Se seleccionó:
			<?php
				if (isset($_REQUEST["Casilla1"]))
					echo $_REQUEST["Casilla1"], "<BR>";
				if (isset($_REQUEST["Casilla2"]))
					echo $_REQUEST["Casilla2"], "<BR>";
			?>
		</CENTER>
	</BODY>
 </HTML>
