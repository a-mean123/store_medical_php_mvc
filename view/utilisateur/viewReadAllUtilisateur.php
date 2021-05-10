<?php
	foreach ($tab_u as $u){
	  echo "<p> Nom : ".$u->getNom();
	  echo " Prénom : ".$u->getPrenom();
	  $ncin=$u->getncin();
	  echo '<br/>age :' .$u->getAge();
	  echo' <br/>telephone :'.$u->getTelephone();
	 echo  ' <br/> maladie :'. $u->getMaladie();	
	  echo " ncin : 
	  <a href='index.php?controller=utilisateur&action=read&ncin=$ncin'>$ncin</a></p>";

	echo "<div class= 'updt'>
 		<a href='index.php?controller=utilisateur&action=update&ncin=$ncin'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=utilisateur&action=delete&ncin=$ncin'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=utilisateur&action=create'>Ajouter un nouvel utilisateur</a>
</div>
