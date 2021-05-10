
<?php

require_once ("Model.php");

Class modelCommande extends Model{//modelCommande herit toujours de model  
private $ref_ordonnance;
private $date_ordonnance;
private $contenu;
protected static $table = 'commande';
protected static $primary = 'ref_ordonnance';
public function __construct($date_ordonnance= NULL, $contenu = NULL) {}

public function getId_actualite() {
	return $this->ref_ordonnance ;
}
public function getTitre() {
	return $this->date_ordonnance ;
} 
public function getText() {
	return $this->contenu ;
}
}