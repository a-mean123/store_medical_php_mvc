
<?php

    

$controller = 'login';
  
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 



   
require_once("{$ROOT}{$DS}model{$DS}modelUtilisateur.php");



if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="login";	
	
switch ($action) {


	case "created":	
		if(isset($_REQUEST['username']) && isset($_REQUEST['password']) ){
            $username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
            echo $password;
            echo $username;


            $u = modelUtilisateur::login($username , $password);
            
            $nb=$u->rowCount();


			
if($nb==0)
{
	echo 'errrrr';
}
else
{
	$ligne=$u->fetchObject();
	
	if($ligne->role == 1)
	{
		$_SESSION['role']=1;
	
		header("location: index.php?controller=medicament");
		exit;
	
	}
	
	else
	{
		$_SESSION['role']=2;
		header("location: index.php?controller=admin");
		exit;
	
		
	}
}
			}	
		break;
		

		
	case "login":
		$pagetitle = "Login";
		$view = '';
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
        case "exit":
			if(!isset($_SESSION)) 
			{ 
				session_start(); 
			} 

unset($_SESSION['role']);
session_destroy();
$view = '';
        
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
			
			
			case "regist":
				$pagetitle = "Register";
				$view = "register";
				require ("{$ROOT}{$DS}view{$DS}view.php");
				break;
				
			



		

}







?>