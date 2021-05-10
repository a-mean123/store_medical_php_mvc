
<?php

require_once ("Model.php");

Class ModelActualite extends Model{//modelActualite herit toujours de model  
private $id;
private $titre;
private $text;
protected static $table = 'actualite';
protected static $primary = 'id';
public function __construct($titre = NULL, $text = NULL) {


	if (!is_null($titre) && !is_null($text) ) {
		$this->titre = $titre;
		$this->text = $text;
	

	   }

}

public function getId() {
	return $this->id ;
}
public function getTitre() {
	return $this->titre ;
} 
public function getText() {
	return $this->text ;
}
}