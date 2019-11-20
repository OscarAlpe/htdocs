<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>Hallar una posición de un mapa de imagen</TITLE>
	</HEAD>

	<BODY>
		<CENTER>
			<H1> Hallar una posición de un mapa de imagen </H1>
			<BR>
			Se hizo clic en la posición (
			<?php
				echo $_REQUEST["imap_x"], ", ", $_REQUEST["imap_y"];
			?>
			).
		</CENTER>
	</BODY>
 </HTML>
