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
$pagetitle = "Liste des commande";
$view = "readAll";
$tab_u = ModelCommande::getAll();
//"redirige" vers la vue
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
controllerCommande.php;
case "read":
if(isset($_REQUEST['ref_commande'])){
$ncin = $_REQUEST['ref_commande'];
$u = ModelCommande::select($ref_commande);
if($u!=null){
$pagetitle  = "Details de la commande";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
$pagetitle = "Details de la commande";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");


break;

case "create":
$pagetitle = "Enregistrer une commande";
$view = "create";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
case "created":
if(isset($_REQUEST['ref_commande']) &&
isset($_REQUEST['d']) && isset($_REQUEST['e'])){
$ncin = $_REQUEST["ncin"];
$d = $_POST["d"];
$e = $_POST["e"];
 

$recherche = ModelCommande::select($ref_commande);
if($recherche==null){
$u = new ModelCommande($ref_commande, $d, $e);
$tab = array(
"ref_commande" => $ref_commande,
"date_commande" => $d,
"etat_commande" => $e
);
$u->insert($tab);
$pagetitle = "commande Enregistré";
$view = "created";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}break;

case "created":
if(isset($_REQUEST['ref_commande']) &&
isset($_REQUEST['d']) && isset($_REQUEST['e'])){
$ref_facture = $_REQUEST["ref_facture"];
$d = $_POST["d"];
$e = $_POST["e"];
$recherche = ModelCommande::select($ref_commande);
if($recherche==null){
$u = new ModelFacture($ref_facture, $d, $e);
$tab = array(
"ref_commande" => $ref_commande,
"date_commande" => $c,
"etat_commande" => $e
);
$u->insert($tab);
$pagetitle = "commande Enregistré";
$view = "created";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}break;
case "updated":
if(isset($_REQUEST['ref_commande']) &&
isset($_REQUEST['d']) && isset($_REQUEST['e'])){
$oldncin = $_REQUEST ['ref_commande'];
$tab = array(
"ref_facture" => $_REQUEST["ref_facture"],
"date_commande" =>$_REQUEST["d"],
"etat_commande" => $_REQUEST ["e"] );
$o = Modelfacture::select($old_ref_commande);
if($o!=null){
$u = $o->update($tab, $old_ref_commande);
$pagetitle = "commande modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;

case "updated":
if(isset($_REQUEST['ref_commande']) &&
isset($_REQUEST['d']) && isset($_REQUEST['e'])){
$oldncin = $_REQUEST ['ref_facture'];
$tab = array(
"ref_commande" => $_REQUEST["ref_facture"],
"date_commande" =>$_REQUEST["d"],
"etat_commande" => $_REQUEST ["e"] );
$o = ModelCommande::select($old_ref_commande);
if($o!=null){
$u = $o->update($tab, $old_ref_commande);
$pagetitle = "commande modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
} 


