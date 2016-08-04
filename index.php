<html>
  <head>
    <title>ShiftLua Documentation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <?php
      include "Parsedown.php";
      $Parsedown = new Parsedown();
      echo $Parsedown->text(file_get_contents("doc.md"));
    ?>
  </body>
</html>
