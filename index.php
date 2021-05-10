<?php 
/* __DIR__ est une constante "magique" de PHP qui contient le
chemin du dossier courant */
$ROOT = __DIR__; /* POUR que le cofe soit portable**/
/* DS contient '/' sur Linux et '\' sur Windows*/
$DS = DIRECTORY_SEPARATOR; /* detecter le systeme d'exploitation */
$controleur_default  = "home" ; /* controleur par defaut est utilisateur  */
if(!isset($_REQUEST['controller'])) //recupere le controleur par defaut 
 
$controller=$controleur_default;
else
// $controller recupère le contrôleur passé dans l'URL
$controller = $_REQUEST['controller'];

switch ($controller) {


    case "home" :
        require ("{$ROOT}{$DS}controller{$DS}controllerHome.php");
        break;


case "medicament" :

    session_start();

    if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
        {
        header("location: index.php?controller=login");
        }

        if(($_SESSION['role']==1) || ($_SESSION['role']==2))
            {


require("{$ROOT}{$DS}controller{$DS}controllerMedicament.php");
}



else{
require("{$ROOT}{$DS}controller{$DS}controllerLogin.php");

}
break;
case "utilisateur" :
require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");
break;
case "actualite" :
require ("{$ROOT}{$DS}controller{$DS}controllerActualite.php");
break;
case "ordonnance" :
require ("{$ROOT}{$DS}controller{$DS}controllerOrdonnance.php");
break;
case "contact" :
    require ("{$ROOT}{$DS}controller{$DS}controllerContact.php");
    break;
    
    case "docteur" :

        session_start();

        if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
            {
            header("location: index.php?controller=login");
            }

            if(($_SESSION['role']==1) || ($_SESSION['role']==2) )
                {

        require ("{$ROOT}{$DS}controller{$DS}controllerDocteur.php");
}
else{
    require("{$ROOT}{$DS}controller{$DS}controllerLogin.php");

            }

        break;
    case "login" :
        require ("{$ROOT}{$DS}controller{$DS}controllerLogin.php");
        break;
        
case "admin" :
    require ("{$ROOT}{$DS}controller{$DS}controllerAdmin.php");
    break;
    
}
?>




