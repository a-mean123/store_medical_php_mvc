<form method="POST" action="index.php?controller=utilisateur&action=created">
  <fieldset>
     <legend>AjouT d'une Ordonnance  </legend> 
	 <p>
     <label for="ncin">Reference de l'ordonnance </label> :
     <input type="text"  name="ncin"  id="ncin" maxlength="8" required/>
     </p> 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text"  name="n" id="n"  required/>
	  </p> 
	 <p>
     <label for="p">Prenom</label> :
     <input type="text" name="p" id="p"  required/>
     </p> 
     <p>
     <label for="age">age</label> :
     <input type="number" name="age" id="age"  required/>
     </p> 
     <p>
     <label for="telephone">telephone</label> :
     <input type="text" name="telephone" id="telephone"  required/>
     </p> 
     <p>
     <label for="maladie">maladie</label> :
     <input type="maladie" name="maladie" id="maladie"  required/>
     </p> 
	 <p>
     <input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>
