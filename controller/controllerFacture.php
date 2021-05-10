<?php
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelFacture.php");
if(isset($_REQUEST['action']))
/* recupère l'action passée dans l'URL*/
$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
else $action="readAll";
switch ($action) {
case "readAll":
$pagetitle = "Liste des facture";
$view = "readAll";
$tab_u = ModelFacture::getAll();
//"redirige" vers la vue
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
controllerFacture.php;
case "read":
if(isset($_REQUEST['ref_facture'])){
$ncin = $_REQUEST['ref_facture'];
$u = ModelFacture::select($ref_facture);
if($u!=null){
$pagetitle  = "Details de la facture";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
$pagetitle = "Details de la facture";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");


break;

case "create":
$pagetitle = "Enregistrer un utilisateur";
$view = "create";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
case "created":
if(isset($_REQUEST['ref_facture']) &&
isset($_REQUEST['d']) && isset($_REQUEST['c'])){
$ncin = $_REQUEST["ncin"];
$d = $_POST["d"];
$c = $_POST["c"];
 

$recherche = ModelFacture::select($ref_facture);
if($recherche==null){
$u = new ModelFacture($ref_facture, $d, $c);
$tab = array(
"ref_facture" => $ref_facture,
"date_facture" => $d,
"contenue_facture" => $c
);
$u->insert($tab);
$pagetitle = "facture Enregistré";
$view = "created";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}break;

case "created":
if(isset($_REQUEST['ref_facture']) &&
isset($_REQUEST['d']) && isset($_REQUEST['c'])){
$ref_facture = $_REQUEST["ref_facture"];
$d = $_POST["d"];
$c = $_POST["c"];
$recherche = ModelFacture::select($ref_facture);
if($recherche==null){
$u = new ModelFacture($ref_facture, $d, $c);
$tab = array(
"ref_facture" => $ncin,
"date_facture" => $c,
"contenue_facture" => $p
);
$u->insert($tab);
$pagetitle = "facture Enregistré";
$view = "created";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}break;
case "updated":
if(isset($_REQUEST['ref_facture']) &&
isset($_REQUEST['d']) && isset($_REQUEST['c'])){
$oldncin = $_REQUEST ['ref_facture'];
$tab = array(
"ref_facture" => $_REQUEST["ref_facture"],
"date_facture" =>$_REQUEST["d"],
"contenue_facture" => $_REQUEST ["c"] );
$o = Modelfacture::select($old_ref_facture);
if($o!=null){
$u = $o->update($tab, $old_ref_facture);
$pagetitle = "facture modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;

case "updated":
if(isset($_REQUEST['ref_facture']) &&
isset($_REQUEST['d']) && isset($_REQUEST['d'])){
$oldncin = $_REQUEST ['ref_facture'];
$tab = array(
"ref_facture" => $_REQUEST["ref_facture"],
"date_facture" =>$_REQUEST["d"],
"contenue_facture" => $_REQUEST ["c"] );
$o = Modelfacture::select($old_ref_facture);
if($o!=null){
$u = $o->update($tab, $old_ref_facture);
$pagetitle = "facture modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
} 


