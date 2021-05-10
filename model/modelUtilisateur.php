
<?php

require_once ("Model.php");

Class ModelUtilisateur extends Model{//modelUtilisateurs herit toujours de model  
private $ncin;
private $nom;
private $prenom;
private $age;
private $telephone;
private $maladie;
private $username;
private $password;
private $role;


protected static $table = 'utilisateur';
protected static $primary = 'ncin';
protected static $user = 'username';
protected static $pass = 'password';

public function __construct($ncin = NULL, $nom = NULL,
 $prenom = NULL , $age = NULL, $telephone = NULL ,
 $maladie = NULL , $username = NULL , $password = NULL,  $role = NULL) {

    if(!is_null($ncin) &&!is_null($nom) && !is_null($prenom) && !is_null($age) &&
    !is_null($telephone) && !is_null($maladie)  && !is_null($username)
     && !is_null($password) && !is_null($role)
    ){
        $this->ncin = $ncin;

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->telephone = $telephone;
        $this->maladie = $maladie;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;


        

    }

 }

public function getNcin() {
    return $this->ncin;
}
public function getNom() {
    return $this->nom;
} 
public function getPrenom() {
    return $this->prenom;
}
 
public function getAge() {
    return $this->age;
}

 
public function getTelephone() {
    return $this->telephone;
}
 
public function getMaladie() {
    return $this->maladie;
}
 
public function getUsername() {
    return $this->maladie;
} 
 
public function getRole() {
    return $this->role;
} 

}