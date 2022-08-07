<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>PHP</title>
</head>
<body>
    <head>
        <a href=".?hal=home">Home</a> | <a href=".?hal=about">About</a> | <a>Content</a> | <a>Contact</a>
    </head>
        <h3>Judul Teratas</h3>
        <?php
          $hal = @$_GET['hal'];
          $beranda = "hal/home.php";
          $p = "hal/$hal.php";
          if(!empty($hal) && file_exists($p)){
              include "$p";
          }else{
              include "$beranda";
          }
      ?>
    <footer>
        <p>&copy; 2022 Allright reserved | by itdrsw</p>
    </footer>
</body>
</html>