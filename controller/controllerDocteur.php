<?php

    
$controller = 'docteur';
      
 //   require("{$ROOT}{$DS}view{$DS}view.php");


 require_once ("{$ROOT}{$DS}model{$DS}modelDocteur.php"); // chargement du modèle

 if(isset($_REQUEST['action']))	
 /* recupère l'action passée dans l'URL*/
     $action = $_REQUEST['action'];
 /* NB: On a ajouté un comportement par défaut avec action=readAll.*/
     else $action="readAll";	
     
switch ($action) {


    case "readAll":
        $pagetitle = "Liste des medicament";
        $view = "getAll";
        $tab_u = modelDocteur::getAll();
        //"redirige" vers la vue
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;



     case "delete":
         if(isset($_REQUEST['id'])){
             $id = $_REQUEST['id'];
             $del = ModelContact::select($id);
             if($del!=null){
             $del->delete($id);
             header('Location: index.php?controller=admin&action=docteur');
             }
         }
         break;
         

         
     case "created":
         if(isset($_REQUEST['name'])  && isset($_REQUEST['specialite'])  
         
         ){

             $name = $_REQUEST["name"];
            
             $specialite = $_REQUEST["specialite"];
            
          echo $name;
        
            $id = NULL;
             
             
            
                 $u = new modelDocteur($name, $specialite );	
                 $tab = array(
                 "id" => $id,    
                 "name" => $name,
               
                 "specialite" => $specialite,
            
                 );		
                 
                 $u->insert($tab);
                 header('Location: index.php?controller=admin&action=docteur');
             
         }
         break;
     
  
        
 }






?>