<?php
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php");
if(isset($_REQUEST['action']))
/* recupère l'action passée dans l'URL*/
$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
else $action="readAll";
switch ($action) {
case "readAll":
$pagetitle = "Liste des ordonnance";
$view = "readAll";
$tab_u = ModelOrdonance::getAll();
//"redirige" vers la vue
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
controllerUtilisateur.php;
case "read":
if(isset($_REQUEST['ref_ordonnance'])){
$ncin = $_REQUEST['ref_ordonnance'];
$u = ModelOrdonance::select($ref_ordonnance);
if($u!=null){
$pagetitle  = "Details de ordonnance";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
$pagetitle = "Details de l'ordonnance";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");


break;

case "create":
$pagetitle = "Enregistrer une ordonnance";
$view = "create";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
case "created":
if(isset($_REQUEST['ref_ordonnance']) &&
isset($_REQUEST['d']) && isset($_REQUEST['c'])){
$ref_ordonnance = $_REQUEST["ref_ordonnance"];
$d = $_POST["d"];
$c = $_POST["c"];

$recherche = ModelOrdonance::select($ref_ordonnance);
if($recherche==null){
$u = new ModelOrdonance($ref_ordonnance, $d, $c);
$tab = array(
"ref_ordonnance" => $ref_ordonnance,
"date_ordonnance" => $d,
"contenu" => $c,

);
$u->insert($tab);
$pagetitle = "ordonnance Enregistré";
$view = "created";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}break;

case "created":
if(isset($_REQUEST['ref_ordonnance']) &&
isset($_REQUEST['d']) && isset($_REQUEST['c'])){
$ncin = $_REQUEST["ref_ordonnance"];
$d = $_POST["d"];
$c = $_POST["c"];
$recherche = ModelOrdonance::select($ref_ordonnance);
if($recherche==null){
$u = new ModelOrdonance($ref_ordonnance, $d, $c);
$tab = array(
"ref_ordonnance" => $ref_ordonnance,
"date_ordonnance" => $d,
"contenu" => $c
);
$u->insert($tab);
$pagetitle = "ordonnance Enregistré";
$view = "created";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}break;
case "updated":
if(isset($_REQUEST['ref_ordonnance']) &&
isset($_REQUEST['d']) && isset($_REQUEST['c'])){
$old_ref_ordonnance = $_REQUEST ['ref_ordonnance'];
$tab = array(
"ref_ordonnance" => $_REQUEST["ref_ordonnance"],
"date_ordonnance" =>$_REQUEST["d"],
"contenu" => $_REQUEST ["c"] );
$o = ModelOrdonance::select($old_ref_ordonnance);
if($o!=null){
$u = $o->update($tab, $old_ref_ordonnance);
$pagetitle = "ordonnance modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;

case "updated":
if(isset($_REQUEST['ref_ordonnance']) &&
isset($_REQUEST['d']) && isset($_REQUEST['c'])){
$old_ref_ordonnance = $_REQUEST ['ref_ordonnance'];
$tab = array(
"ref_ordonnance" => $_REQUEST["ref_ordonnance"],
"date_ordonnance" =>$_REQUEST["d"],
"contenu" => $_REQUEST ["c"] );
$o = ModelOrdonance::select($old_ref_ordonnance);
if($o!=null){
$u = $o->update($tab, $old_ref_ordonnance);
$pagetitle = "ordonnance modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
} 


