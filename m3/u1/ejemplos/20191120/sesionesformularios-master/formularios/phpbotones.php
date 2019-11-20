<HTML>
	<HEAD>
		<TITLE>Usar botones:Script 1</TITLE>
	</HEAD>
	<BODY>
		<CENTER>
		<H1>Usar botones:Script 1</H1>
		Botón pulsado:
		<?php
			if (isset($_REQUEST["Botón"]))
				echo $_REQUEST["Botón"], "<BR>";
		?>
	</CENTER>
	</BODY>
 </HTML>