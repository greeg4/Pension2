<?php

class AtoutsDB extends Atouts {
    private $_db;
    private $_atoutsArray=array();
    
    public function __construct($db) {
        $this->_db = $db;
    }
    
    public function getTexteAtous() {
        try {
            $query="SELECT nom_atout FROM atouts";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch(PDOException $e) {
            print $e->getMessage();
        }

        while($data=$resultset->fetch()){
            try{
                $_atoutsArray[]=new Atouts($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_atoutsArray;
           
    }
  
   
}