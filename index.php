<?php
  include "Parsedown.php";
  $Parsedown = new Parsedown();
  echo $Parsedown->text(file_get_contents("doc.md"));
?>
