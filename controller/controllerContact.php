<?php

    
$controller = 'contact';
      
 //   require("{$ROOT}{$DS}view{$DS}view.php");


 require_once ("{$ROOT}{$DS}model{$DS}modelContact.php"); // chargement du modèle

 if(isset($_REQUEST['action']))	
 /* recupère l'action passée dans l'URL*/
     $action = $_REQUEST['action'];
 /* NB: On a ajouté un comportement par défaut avec action=readAll.*/
     else $action="creat";	
     
switch ($action) {

     case "delete":
         if(isset($_REQUEST['id'])){
             $id = $_REQUEST['id'];
             $del = ModelContact::select($id);
             if($del!=null){
             $del->delete($id);
             header('Location: index.php?controller=admin&action=contact');
             }
         }
         break;
         

         
     case "created":
         if(isset($_REQUEST['name'])  && isset($_REQUEST['email'])  
         && isset($_REQUEST['message'])
         ){

             $name = $_REQUEST["name"];
            
             $email = $_REQUEST["email"];
            
          
             $message = $_REQUEST["message"];
            $id = NULL;
             
             
            
                 $u = new ModelContact($name, $email , $message);	
                 $tab = array(
                 "id" => $id,    
                 "name" => $name,
               
                 "email" => $email,
                 
                 "message" => $message,


                 );		
                 
                 $u->insert($tab);
                 $pagetitle = "Contact Enregistré";
                 $view = "created";
                 require ("{$ROOT}{$DS}view{$DS}view.php");
             
         }
         break;
     
  
        
 }






?>