<?php
	foreach ($tab_u as $u){
	  echo "<p> date d'ordonance  : ".$u->getDate_ordonance ();

	  echo " contenu: ".$u->getContenu();

	  $ref_ordonance =$u->getRef_ordonnance();
	  echo " reference de l'ordonnance : 
	  <a href='index.php?controller=ordonnance&action=read&ref_ordonnance=$ncin'>$ref_ordonnance</a></p>";

	echo "<div class= 'updt'>
 		<a href='index.php?controller=ordonance&action=update&ref_ordonnance=$ref_ordonnance'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=utilisateur&action=delete&ncin=$ncin'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=utilisateur&action=create'>Ajouter un nouvel utilisateur</a>
</div>
