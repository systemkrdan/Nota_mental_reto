<?php
  unlink($_REQUEST['nom'].".txt");
  $archivo=fopen($_REQUEST['nom'].".txt","a") or
  die("Problemas en la creacion");
  fwrite($archivo,$_REQUEST['contenido']);
  fclose($archivo);
  header("Location: ../index.html");

?>
