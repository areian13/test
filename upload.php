<?php
$source = $_FILES['profile']['tmp_name'];
$dest = "./".basename($_FILES['profile']['name']);
move_uploaded_file($source, $dest);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <img src="<?=$_FILES['profile']['name']?>" alt=""/>
  </body>
</html>
