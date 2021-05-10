<?php

require_once("model.php");

class ModelDocteur extends Model{
    private $id = NULL;
    private $name;
   
    private $specialite;
   
  

    protected static $table = 'docteur';
    protected static $primary = 'id';


    public function __construct( $name = NULL , $specialite = NULL 
    )
    {
       
        if (!is_null($name) && !is_null($specialite) )
        
        {

            $this->name = $name;
        
            $this->specialite = $specialite;
           
         
            
  

        }
    }

    
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
  
    public function getSpecialite(){
        return $this->specialite;
    }


 

}


?>