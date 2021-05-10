<?php
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelActualite.php");
if(isset($_REQUEST['action']))
/* recupère l'action passée dans l'URL*/
$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
else $action="readAll";
switch ($action) {
case "readAll":
$pagetitle = "Liste des actualite";
$view = "readAll";
$tab_a = ModelActualite::getAll();
//"redirige" vers la vue
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
controllerCommande.php;
case "read":
if(isset($_REQUEST['id_actualite'])){
$ncin = $_REQUEST['id_actualite'];
$u = ModelCommande::select($id_actualite);
if($u!=null){
$pagetitle  = "Details des actualite";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
$pagetitle = "Details de l 'actualite";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");


break;

case "create":
$pagetitle = "Enregistrer une actualite";
$view = "create";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;


case "created":
if(isset($_REQUEST['titre']) && isset($_REQUEST['text'])){

$t = $_POST["text"];
$tx = $_POST["text"];
$id = NULL;


$recherche = ModelActualite::select($id);
if($recherche==null){
$u = new ModelActualite($id, $t, $tx);
$tab = array(
"id" => $id,
"titre" => $t,
"text" => $tx
);
$u->insert($tab);
$pagetitle = "actualite Enregistré";
$view = "created";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}break;

case "created":
if(isset($_REQUEST['id_actualite']) &&
isset($_REQUEST['t']) && isset($_REQUEST['tx'])){
$ref_facture = $_REQUEST["id_actualite"];
$t = $_POST["t"];
$tx = $_POST["t"];
$recherche = ModelActualite::select($id_actualite);
if($recherche==null){
$u = new ModelFacture($id_actualite, $t, $tx);
$tab = array(
"id_actualite" => $id_actualite,
"titre" => $t,
"text" => $tx
);
$u->insert($tab);
$pagetitle = "actualite Enregistré";
$view = "created";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}break;
case "updated":
if(isset($_REQUEST['id_actualite']) &&
isset($_REQUEST['t']) && isset($_REQUEST['tx'])){
$oldncin = $_REQUEST ['id_actualite'];
$tab = array(
"id_actualite" => $_REQUEST["id_actualite"],
"titre" =>$_REQUEST["t"],
"text" => $_REQUEST ["tx"] );
$o = ModelActualite::select($old_id_actualite);
if($o!=null){
$u = $o->update($tab, $old_id_actualite);
$pagetitle = "actualite modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;

case "updated":
if(isset($_REQUEST['id_actualite']) &&
isset($_REQUEST['t']) && isset($_REQUEST['tx'])){
$oldncin = $_REQUEST ['ref_facture'];
$tab = array(
"id_actualite" => $_REQUEST["id_actualite"],
"titre" =>$_REQUEST["t"],
"text" => $_REQUEST ["tx"] );
$o = ModelActualite::select($old_id_actualite);
if($o!=null){
$u = $o->update($tab, $old_id_actualite);
$pagetitle = "actualite modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
} 


