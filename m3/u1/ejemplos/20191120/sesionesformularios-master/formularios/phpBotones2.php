<!DOCTYPE html>
<HTML>
	<HEAD><TITLE>Usar botones: script 2</TITLE></HEAD>
	<BODY><CENTER>
		<H1> Usar botones: script 2</H1>
		Se ha hecho clic sobre:
		<?php
			if (isset($_REQUEST["Button"]))
				echo $_REQUEST["Button"], "<BR>";
		?>
	</CENTER></BODY>
 </HTML>
