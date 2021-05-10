<?php

require_once("model.php");

class ModelContact extends Model{
    private $id = NULL;
    private $name;
   
    private $email;
   
    private $message;

    protected static $table = 'contact';
    protected static $primary = 'id';


    public function __construct( $name = NULL , $email = NULL 
    , $message = NULL)
    {
       
        if (!is_null($name) && !is_null($email) 
        
        && !is_null($message)) 
        {

            $this->name = $name;
        
            $this->email = $email;
           
         
            
            $this->message = $message;

         

        }
    }

    
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
  
    public function getEmail(){
        return $this->email;
    }


    public function getMessage(){
        return $this->message;
    }


}


?>