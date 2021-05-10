<?php
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelMedicament.php");
if(isset($_REQUEST['action']))
/* recupère l'action passée dans l'URL*/
$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
else $action="readAll";
switch ($action) {
case "readAll":
$pagetitle = "Liste des medicament";
$view = "getAll";
$tab_u = ModelMedicament::getAll();
//"redirige" vers la vue
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "read":
if(isset($_REQUEST['ncin'])){
$ncin = $_REQUEST['ncin'];
$u = ModelMedicament::select($ref_med);
if($u!=null){
$pagetitle  = "Details de medicament";
$view = "read";
require ("{$ROOT}{$DS}view{$DS}view.php");
}
}
break;



case "updated":

    if(isset($_REQUEST['nom'])
    && isset($_REQUEST['description']) 
    && isset($_REQUEST['prix'])){
       $id = $_REQUEST['id'];
       $tab = array(
           "id" => $_REQUEST["id"],
           "nom" => $_REQUEST["nom"],
           "description" => $_REQUEST["description"],
         
           "prix" => $_REQUEST["prix"]
           );
       $o = ModelMedicament::select($id);
       if($o!=null){
           $u = $o->update($tab, $id);		
           $pagetitle = "Projet modifié";
           $view = "updatedProjet";
           header('Location: index.php?controller=admin&action=medicamant');
       }
   }	
  
break;


case "create":
$pagetitle = "Enregistrer un medicament";
$view = "create";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "created":
if(
isset($_REQUEST['nom'])  && isset($_REQUEST['description'])  && isset($_REQUEST['prix'])) {
$nom = $_REQUEST["nom"];
$description = $_REQUEST["description"];
$prix= $_REQUEST["prix"];

$id = NULL;
$u = new ModelMedicament($nom, $description, $prix );
$tab = array(
"id" => $id,
"nom" => $nom,
"description" => $description,
"prix" => $prix
);
$u->insert($tab);
$pagetitle = "medicament Enregistré";
$view = "created";
header('Location: index.php?controller=admin&action=medicamant');

}
break;


} 


