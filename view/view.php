<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href='./CSS/stylesheet.css' />
    <title><?php echo $pagetitle; ?></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao|Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://developer.mozilla.org/fr/docs/Web/CSS/font-family">
  <script src="controle.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">


</head>
<body>
<?php

//require_once("{$ROOT}{$DS}view{$DS}header.php");
require_once($ROOT.$DS."view".$DS."header.php");

// Si $controleur='voiture' et $view='readAll',
// alors $filepath=".../view/voiture/"
//       $filename="viewReadAllVoiture.php";
// et on charge '.../view/medicament/viewReadAllVoiture.php'
$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}"; 

// d�termine le chemin de la vue en fonction du controller qu'on utilise
$filepath = $ROOT.$DS."view".$DS.$controller.$DS;
$filename = "view".ucfirst($view).ucfirst($controller).'.php'; // d�termine le nom du fichier
require_once($filepath.$filename);
require_once($ROOT.$DS."view".$DS."footer.php");
//require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>

<h1>  </h1>
</body>
</html>