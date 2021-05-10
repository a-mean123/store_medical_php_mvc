<p>L'utilisateur a bien été modifié</p>
<?php
$ncin = $u->getNcin(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&ncin=$ncin'> $ncin </a> </p>" ;
$nom = $u->getNom(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&nom=$nom'> $nom </a> </p>"
 ;

$ncin = $u->getPrenom(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&prenom=$prenom'> $prenom </a> </p>" ;

$age = $u->getage(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&age=$age'> $age</a> </p>"
 ;


$telephone = $u->getTelephone(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&telephone=$telephone'> $telephone </a> </p>" ;

$maladie = $u->getMaladie(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&maladie=$maladie'> $maladie</a> </p>" ;
?>