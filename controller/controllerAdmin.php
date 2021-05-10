<?php

    

$pagetitle = 'Admin';
$view = 'admin';
$controller = 'admin';
  

require("{$ROOT}{$DS}view{$DS}admin.php");
require_once("./model/modelContact.php");
require_once("./model/modelMedicament.php");
require_once("./model/modelActualite.php");
require_once("./model/modelDocteur.php");






if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="medicamant";	
	
switch ($action) {
    case "medicamant":
        $pagetitle = "Admin panel";
        $view = "getAllMedicamant";
       
        $tab_p = modelMedicament::getAll();
        require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
        break;
        case "docteur":
            $pagetitle = "Admin panel";
            $view = "getAllDocteur";
           
            $tab_p = modelDocteur::getAll();
            require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
            break;
    

    case "contact":
        $pagetitle = "Admin panel";
        $view = "getAllContact";
        $tab_c = modelContact::getAll();
       //	$tab_c = modelContact::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
        break;

      
            
            
            case "actualite":
                $pagetitle = "Admin panel";
                $view = "getAllActualite";
               $tab_b = modelActualite::getAll();//appel au modèle pour gerer la BD
                require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
                break;


       


                    case "createmedicamant":
                        
                        $pagetitle = "Admin panel";
                        $view = "ajoutMedicamant";
                       require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
                        break;   


                        case "createdocteur":
                        
                            $pagetitle = "Admin panel";
                            $view = "ajoutDocteur";
                           require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
                            break;   
    

                            case "createblog":
                              
                                $pagetitle = "Admin panel";
                                $view = "ajoutBlog";
                               require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
                                break;   


                                case "read":	
                                    if(isset($_REQUEST['id'])){
                                        $id = $_REQUEST['id'];
                                        $u = ModelBlog::select($id);
                                            if($u!=null){
                                                $pagetitle = "Details de blog";
                                                $view = "updateBlog";
                                                require ("{$ROOT}{$DS}admin.php");
                                            }
                                        }	
                                    break;


                                    case "readmedicamant":	
                                        if(isset($_REQUEST['id'])){
                                            $id = $_REQUEST['id'];
                                            $u = modelMedicament::select($id);
                                                if($u!=null){
                                                    $pagetitle = "Details de medicamant";
                                                    $view = "updateMedicamant";
                                                    require ("{$ROOT}{$DS}admin.php");
                                                }
                                            }	
                                        break;
}



 
?>
