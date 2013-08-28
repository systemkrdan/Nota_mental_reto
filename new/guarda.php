<?php
  guarda();
  guarda(){
    $archivo=fopen($_REQUEST['nombre_nota'].".txt","a") or
    die("Problemas en la creacion");
    fputs($archivo,$_REQUEST['contenido']);
    fclose($archivo);
    header("Location: ..");}
?>
