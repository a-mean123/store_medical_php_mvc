<form method="POST" action="index.php?controller=utilisateur&action=created">
  <fieldset>
     <legend>Ajout d'un utilisateur </legend> 
	 <p>
     <label for="ncin">NCIN</label> :
     <input type="text"  name="ncin"  id="ncin" maxlength="8" required/>
     </p> 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text"  name="nom" id="n"  required/>
	  </p> 
	 <p>
     <label for="p">Prenom</label> :
     <input type="text" name="prenom" id="p"  required/>
     </p> 
     <p>
     <label for="a">age</label> :
     <input type="number" name="age" id="a"  required/>
     </p> 
     <p>
     <label for="tel">telephone</label> :
     <input type="text" name="telephone" id="tel"  required/>
     </p> 
     <p>
     <label for="m">maladie</label> :
     <input type="m" name="maladie" id="m"  required/>
     </p> 
     <p>
     <label for="username">username</label> :
     <input type="text" name="username" id="username"  required/>
     </p> 
     <p>
     <label for="pass">password</label> :
     <input type="text" name="password" id="pass"  required/>
     </p> 
	 <p>
     <input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>
