<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE> Usar cuadros de lista </TITLE>
	</HEAD>

	<BODY>
		<CENTER>
			<H1> Recuperar datos desde cuadros de lista</H1>
			Se seleccionó:
			<BR>
			<?php
			foreach($_REQUEST["Fruta"] as $fruit){
				echo $fruit, "<BR>";
			}
			?>
		</CENTER>
	</BODY>
 </HTML>
