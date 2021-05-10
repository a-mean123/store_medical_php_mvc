
<?php

require_once ("Model.php");

Class ModelOrdonnance extends Model{//modelOrdonnance herit toujours de model  
private $ref_commande;
private $date_commande;
private $etat_commande;
protected static $table = 'ordonnance';
protected static $primary = 'ref_ordo';
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

public function __construct($ref_ordonnance = NULL,  $date_ordonnance= NULL, $contenu= NULL) {
	if (!is_null ($ref_ordonnance) && !is_null($date_ordonnance) && !is_null($contenu )) {
		$this->ref_ordonnance =$ref_ordonnance ;
		$this->date_ordonnance =$date_ordonnance ;
		$this->contenu=$contenu ;
		
	}
}
