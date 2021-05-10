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
$pagetitle = "Liste des utilisateurs";
$view = "readAll";
$tab_u = ModelUtilisateur::getAll(); //appel de la fonc tion get all
//"redirige" vers la vue
require ("{$ROOT}{$DS}view{$DS}view.php");
break;



case "read":
if(isset($_REQUEST['ncin'])){
$ncin = $_REQUEST['ncin'];
$u = ModelUtilisateur::select($ncin);
if($u!=null){
$pagetitle  = "Details de l'utilisateur";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
case "delete":
if(isset($_REQUEST['ncin'])){
$ncin = $_REQUEST['ncin'];
$del = ModelUtilisateur::select($ncin);
if($del!=null){
$del->delete($ncin);
/*redirection vers le contrôleur et l’action par
défaut*/
header('Location:
index.php?controller=utilisateur&action=readAll');
}
}
break;

case "create":
$pagetitle = "Enregistrer un utilisateur";
$view = "create";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
case "created":
if(isset($_REQUEST['ncin']) &&
isset($_REQUEST['nom']) && isset($_REQUEST['prenom']) && isset($_REQUEST['age'])
 && isset($_REQUEST['telephone']) && isset($_REQUEST['maladie'])
 && isset($_REQUEST['username']) && isset($_REQUEST['password'])
 ){
$ncin = $_REQUEST["ncin"];
$n = $_POST["nom"];
$p = $_POST["prenom"];
$a = $_POST["age"];
$tel = $_POST["telephone"];
$m = $_POST["maladie"];
$us = $_POST["username"];
$pass = $_POST["password"];
$role = "1";

$recherche = ModelUtilisateur::select($ncin);
if($recherche==null){
$u = new ModelUtilisateur($ncin, $n, $p ,$a ,$tel ,$m, $us ,$pass, $role);
$tab = array(
"ncin" => $ncin,
"nom" => $n,
"prenom" => $p,
"age" => $a,
"telephone" => $tel,
"maladie" => $m,
"usernamme" => $us,
"username" => $pass,
"role"=> $role
);
$u->insert($tab);
$pagetitle = "Utilisateur Enregistré";
$view = "created";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}break;


case "updated":
if(isset($_REQUEST['ncin']) &&
isset($_REQUEST['n']) && isset($_REQUEST['p'])){
$oldncin = $_REQUEST ['ncin'];
$tab = array(
"ncin" => $_REQUEST["ncin"],
"nom" =>$_REQUEST["n"],
"prenom" => $_REQUEST ["p"] );
$o = ModelUtilisateur::select($oldncin);
if($o!=null){
$u = $o->update($tab, $oldncin);
$pagetitle = "Utilisateur modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;

case "updated":
if(isset($_REQUEST['ncin']) &&
isset($_REQUEST['n']) && isset($_REQUEST['p'])){
$oldncin = $_REQUEST ['ncin'];
$tab = array(
"ncin" => $_REQUEST["ncin"],
"nom" =>$_REQUEST["n"],
"prenom" => $_REQUEST ["p"] );
$o = ModelUtilisateur::select($oldncin);
if($o!=null){
$u = $o->update($tab, $oldncin);
$pagetitle = "Utilisateur modifié";
$view = "updated";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;
} 


