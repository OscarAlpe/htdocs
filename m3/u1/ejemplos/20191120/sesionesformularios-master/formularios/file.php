<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>Leer datos de un fichero </TITLE>
	</HEAD>
	<BODY>
		<CENTER>
			<H1>Leer datos de un fichero </H1>
			<BR>
			Éste es el contenido del fichero:
			<BR>
			<?php
				$handle = fopen($_FILES['fichero']['tmp_name'], "r");
				while (!feof($handle)){
					$text = fgets($handle);
					echo $text, "<BR>";
				}
				fclose($handle);
			?>
		</CENTER>
	</BODY>
 </HTML>
