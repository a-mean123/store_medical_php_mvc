<p>L'utilisateur a bien été créé</p>
<?php
$ncin = $u->getNcin(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&ncin=$ncin'> $ncin </a> </p>" ;
$nom = $u->getNom(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&nom=$nom'> $nom </a> </p>" ;
$prenom = $u->getPrenom(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&prenom=$prenom'> $prenom </a> </p>" ;
$age = $u->getAge(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&age=$age'> $age </a> </p>" ;

$ncin = $u->getNcin(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&ncin=$ncin'> $ncin </a> </p>";

$telephone = $u->getTelephone(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&telephone=$telephone'> $telephone </a> </p>" ; 
$maladie = $u->getMaladie(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&maladie=$maladie'> $maladie </a> </p>" ;
?>