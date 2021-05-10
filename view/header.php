
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="./css/stylesheet.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	 <div>
	     <h1> VOTRE PHARMACIE !</h1>
    </div>
<header class="container-fluid header">
    <!--banniere-->

    <div class="container">
      <fieldset>
        <nav class="menu">

    <ul>

       <li> <a href="./index.php">accueil </a></li>
		<li><a href="./index.php?controller=actualite">Actualite</a></li>
		<li><a href="./index.php?controller=medicament">Pharmacie</a>  </li>

		<li><a href="./index.php?controller=docteur">Docteur </a>  </li>
		
<?php


if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

 if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
        {

echo"

<li><a href='./index.php?controller=login'>Login</a></li>
<li><a href='./index.php?controller=utilisateur&action=create'>Register</a></li>
";
        }
        else{

echo"
<li><a href='./index.php?controller=login&action=exit'>Logout</a></li>
";

        }




?>

	

     
	</ul>

       
        </nav>
      </fieldset>
       <img src="../photos/bebe-maman.jpg">
    </div>
  </header>




</body>
</html>


