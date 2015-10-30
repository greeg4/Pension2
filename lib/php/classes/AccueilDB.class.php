<?php

class AccueilDB extends Accueil {
    private $_db;
    private $_accueilArray=array();
    
    public function __construct($db) {
        $this->_db = $db;
    }
    
    public function getTexteAccueil() {
        try {
            $query="SELECT description FROM admin_pension";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
        } catch(PDOException $e) {
            print $e->getMessage();
        }

		//stockage des données du resulyset dans le tableau $_accueilArray
           
    }
  
   
}


