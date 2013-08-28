<?php
  unlink($_REQUEST['nom'].".txt");
  header("Location: ../index.html");
?>
