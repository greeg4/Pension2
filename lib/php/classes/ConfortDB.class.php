<?php

class ConfortDB extends Confort {
    private $_db;
    private $_confortArray=array();
    
    public function __construct($db) {
        $this->_db = $db;
    }
    
    public function getListeAtouts() {
        try {
            $query="SELECT * FROM atouts";
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