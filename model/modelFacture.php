
<?php

require_once ("Model.php");

Class modelFacture extends Model{//modelfacture herit toujours de model  
private $ref_facture;
private $date_facture;
private $continue_facture;
protected static $table = 'facture';
protected static $primary = 'ref_facture';
public function __construct($date_facture = NULL, $continue_facture = NULL) {}

public function __construct($ref_med = NULL,  $description= NULL, $prix= NULL) {
	if (!is_null ($ref_facture) && !is_null($date_facture) && !is_null($contenu )) {
		$this->ref_facture =$ref_facture ;
		$this->date_facture =$date_facture ;
		$this->contenu=$contenu ;
		
	}

public function getId_actualite() {
	return $this->ref_facture ;
}
public function getTitre() {
	return $this->date_facture ;
} 
public function getText() {
	return $this->contenu ;
}

}