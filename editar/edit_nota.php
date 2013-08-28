<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title></title>
  
  
  
  <link rel="stylesheet" href="../jquery.mobile-1.3.1.min.css">
  
  <!-- Extra Codiqa features -->
  <link rel="stylesheet" href="../codiqa.ext.css">
  
  <!-- jQuery and jQuery Mobile -->
  <script src="../jquery-1.9.1.min.js"></script>
  <script src="../jquery.mobile-1.3.1.min.js"></script>

  <!-- Extra Codiqa features -->
  <script src="../codiqa.ext.js"></script>
   
</head>
<body>
<!-- Home -->
<div data-role="page" id="page1">
    <div data-theme="a" data-role="header">
        <a data-role="button" href="../index.html" data-icon="home" data-iconpos="left"
        class="ui-btn-left">
            Inicio
        </a>
        <h3>
            <?php
			$nombr = $_POST['nom'];
				echo $nombr;
				echo ' 
        </h3>
    </div>
		<div data-role="content">
			<form action="../new/guarda_otra.php" method="post"><input type="hidden" name="nom" value="'.$nombr.'">
			<div data-role="fieldcontain" class="new_texto">
				<label for="texto_nota">
					Contenido
				</label>
				<textarea name="contenido" id="texto_nota" placeholder="Escribe aquí">';
				
					ver($nombr);
					function ver($nombr){
					$archivo = $file = fopen("../new/".$nombr.".txt", "r") or exit("Unable to open file!");
					$leer = fread($archivo,900000);
					echo $leer;
					//Output a line of the file until the end is reached
					/*while(!feof($file))
					{
					echo fgets($file). "";
					}*/
					fclose($file);
					}
					echo '
				</textarea>
			</div>
			<input type="submit" data-theme="a" data-icon="check" data-iconpos="left"
			value="Guardar"></form>
			<a id="cancela" data-role="button" data-theme="a" href="#page1" data-icon=""
			data-iconpos="left" class="boton_cancela">
				Cancelar
			</a>
			<form action="../new/eliminar.php" method="post"><input type="hidden" name="nom" value="'.$nombr.'">
			<input type="submit" data-theme="a" data-icon="delete" data-iconpos="left" value="Eliminar">
			<input type="hidden" name="nom" value="'.$nombr.'">
			</form>';
			?>
		</div>
	</form>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h3>
        </h3>
    </div>
</div>
</body>
</html>
