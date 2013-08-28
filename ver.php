<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title></title>
  
  
  
  <link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css">
  
  <!-- Extra Codiqa features -->
  <link rel="stylesheet" href="codiqa.ext.css">
  
  <!-- jQuery and jQuery Mobile -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
  <script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

  <!-- Extra Codiqa features -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/codiqa.ext.js"></script>
   <script>

		function processFiles(files) {
		var file = files[0];

		var reader = new FileReader();

		reader.onload = function (e) {
		// Cuando éste evento se dispara, los datos están ya disponibles.
		// Se trata de copiarlos a una área <div> en la página.
		var output = document.getElementById("fileOutput"); 
		output.textContent = e.target.result;
		};
		reader.readAsText(file);
		}

	</script>
	
</head>
<body>
<!-- Home -->
<div data-role="page" id="page1">
    <div data-theme="a" data-role="header">
        <a data-role="button" href="index.html" data-icon="home" data-iconpos="left"
        class="ui-btn-left">
            Inicio
        </a>
        <h3>
            Notas
        </h3>
    </div>
    <div data-role="content">
		<?php
			echo listar_archivos('./new/');
		?>
        
    </div>
	
	<?php
	
		function listar_archivos($carpeta){
			if(is_dir($carpeta)){
				if($dir = opendir($carpeta)){
					echo '
					<ul id="listas_notas" data-role="listview" data-divider-theme="a" data-inset="true"
					class="list_nota">
						<li data-role="list-divider" role="heading">
						</li>';
						while(($archivo = readdir($dir)) !== false){
							$exten= substr(strrchr($archivo, '.'), 1);
							$nombre = substr($archivo,0, -4);
							if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess' && $exten == 'txt' && $nombre != ''){
							echo '<form action="./editar/edit_nota.php" method="post">';
								echo '<li data-theme="c"> <input type="hidden" name="nom" value="'.$nombre.'"> <input type="submit" value="'.$nombre.'" "name="'.$nombre.'" data-icon="search" data-iconpos="left"
			value="'.$nombre.'">';
								echo'</li>';
							echo '</form>';
							}
						}
						echo'</ul>';
					
						
							//echo '<li><a href="'.$carpeta.$archivo.'">'.$archivo.'</a></li>';
					
					closedir($dir);
				}
			}
		}

		
	?>
    <div data-theme="a" data-role="footer" data-position="fixed">
        <h3>
        </h3>
    </div>
	
	
</div>
</body>
</html>
