 
<?php
// le fichier DAO = model.php 
require_once("./config/conf.php");
class Model{
private static $pdo;
/*créer une seule instance de la classe PDO*/
public static function Init(){
    $host = Conf::getHostname();
    $dbname = Conf::getDatabase();
    $login = Conf::getLogin();
    $pass = Conf::getPassword();
    try{
    self::$pdo = new  PDO("mysql:host=$host;dbname=$dbname",$login,$pass); /*  self :variable static*/
    }
    catch(PDOException $e) {
    die ($e->getMessage());
    }
    } 


//Création d’un objet de la classe PDO
public function getAll(){
    $SQL="SELECT * FROM ".static::$table ;
    $rep = self::$pdo->query($SQL);
    $rep->setFetchMode(PDO::FETCH_CLASS,
    'Model'. ucfirst( static::$table)); 
    return $rep->fetchAll(); // yraja3 tous les in,formation
    }



    public function getLatest(){
        $SQL="SELECT * FROM ".static::$table ." LIMIT 8" ;
        $rep = self::$pdo->query($SQL);
        $rep->setFetchMode(PDO::FETCH_CLASS,
        'Model'. ucfirst( static::$table)); 
        return $rep->fetchAll(); // yraja3 tous les in,formation
        }

    function select($cle_primaire) {
        $sql = "SELECT * from ".static::$table." WHERE
        ".static::$primary."=:cle_primaire";
        $req_prep = self::$pdo->prepare($sql);
        $req_prep->bindParam(":cle_primaire", $cle_primaire);
        $req_prep->execute();
        $req_prep->setFetchMode(PDO::FETCH_CLASS,
        'Model'. ucfirst( static::$table));
        if ($req_prep->rowCount()==0){
        return null;
        }
        else{
        $rslt = $req_prep->fetch();
        return $rslt; }
        }

        function delete($cle_primaire) {
            $sql = "DELETE FROM ".static::$table." WHERE
            ".static::$primary."=:cle_primaire";
            $req_prep = self::$pdo->prepare($sql);
            $req_prep->bindParam(":cle_primaire", $cle_primaire);
            $req_prep->execute();
            }
            
public function update($tab, $cle_primaire) {
    $sql = "UPDATE ".static::$table." SET";
    foreach ($tab as $cle => $valeur){
        $sql .=" ".$cle."=:new".$cle.",";
    }
    $sql=rtrim($sql,",");
    $sql.=" WHERE ".static::$primary."=:oldid;";
    
      $req_prep = model::$pdo->prepare($sql);
      $values = array();
  
  foreach ($tab as $cle => $valeur){
            $values[":new".$cle] = $valeur;
      }

      $values[":oldid"] = $cle_primaire;
      $req_prep->execute($values);
      $obj = model::select($tab[static::$primary]);
      return $obj;

}



public function login($username, $password) {
	$sql = "SELECT * from ".static::$table." WHERE ".static::$user."=:username AND ".static::$pass."=:password";
	$req_prep = model::$pdo->prepare($sql);
	$req_prep->bindParam(":username", $username);
	$req_prep->bindParam(":password", $password);
	
	$req_prep->execute();
	$req_prep->setFetchMode(PDO::FETCH_CLASS, 'model'.ucfirst(static::$table));
	if ($req_prep->rowCount()==0){
		return null;
		die();
	  }else{
		$rslt = $req_prep;
		return $rslt;
	}
	  
  }



  public function insert($tab){
    $sql = "INSERT INTO ".static::$table." VALUES(";
    foreach ($tab as $cle => $valeur){
		$sql .=" :".$cle.",";
	}
	$sql=rtrim($sql,",");
	$sql.=");";
    $req_prep = model::$pdo->prepare($sql);
    $values = array();
    foreach ($tab as $cle => $valeur)
      		$values[":".$cle] = $valeur;
	$req_prep->execute($values);
	
  }
}
Model::Init();



