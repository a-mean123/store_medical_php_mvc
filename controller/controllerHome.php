<?php

    

$pagetitle = 'Home';
$controller = 'home';
$view ='';
require_once("./model/modelMedicament.php");
require_once("./model/modelActualite.php");
require_once("./model/modelDocteur.php");



$tab_m = modelMedicament::getLatest();

$tab_a = modelActualite::getLatest();

$tab_d = modelDocteur::getLatest(); 

require("{$ROOT}{$DS}view{$DS}view.php");

?>
  
