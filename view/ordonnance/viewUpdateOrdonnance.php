<?php
$ncin=$up->getNcin();
?>
<form method="POST" action="index.php?controller=utilisateur&action=updated&ncin=<?=$ncin?>">
  <fieldset>
     <legend>Modification d'un utilisateur </legend> 
	 <p>
		 <label for="ncin">ncin</label> :
		 <input type="text" value= "<?=$ncin?>" name="ncin" id="ncin" required readonly/>
	 </p> 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text" value= "<?=$up->getNom()?>" name="n" id="n"  required/>
     </p> 
	 <p>
		 <label for="p">Prenom</label> :
		 <input type="text" value= "<?=$up->getPrenom()?>" name="p" id="p"  required/>
     </p>

      <p>
		 <label for="age">age</label> :
		 <input type="number" value= "<?=$up->getAge()?>" name="age" id="age"  required/>
     </p>
      <p>
		 <label for="telephone">telephone</label> :
		 <input type="number" value= "<?=$up->getTelephone()?>" name="telephone" id="telephone"  required/>
     </p>
      <p>
		 <label for="maladie">maladie</label> :
		 <input type="text" value= "<?=$up->getMaladie()?>" name="maladie" id="maladie"  required/>
     </p> 
	 <p>
		<input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>
