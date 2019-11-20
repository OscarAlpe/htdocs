<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>Usar botones: script 3</TITLE>
	</HEAD>

	<BODY>
		<CENTER>
		<H1>Usar botones: script 3</H1>
		Se ha hecho clic sobre:
		<?php
			if (isset($_REQUEST["Botón"]))
				echo $_REQUEST["Botón"], "<BR>";
		?>
	</CENTER>
	</BODY>
 </HTML>
