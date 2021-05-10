<?php

require_once ("Model.php");

Class ModelMedicament extends Model{//modelMedicament herit toujours de model  
private $id;
private $nom;
private $description;
private $prix;
protected static $table = 'medicament';
protected static $primary = 'id';


public function __construct(  $nom= NULL, $description= NULL, $prix= NULL) {
	if (!is_null ($nom) && !is_null($description) && !is_null($prix )) {
		$this->nom =$nom ;

		$this->desription =$description ;
		$this->prix=$prix ;
		
	}

}

public function getId() {
	return $this->id ;

}
public function getNom() {
	return $this->nom ;

}
public function getDescription() {
	 return $this->description;
} 

public function getPrix() {
	return $this->prix ;
}





}