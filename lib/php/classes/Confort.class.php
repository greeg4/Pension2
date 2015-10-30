<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accueil
 *
 * @author Limath
 */
class Confort {
    private $_attribute=array();
    
    public function __construct($data) {
        $this->hydrate($data);
    }
    
    public function hydrate($data){
        foreach ($data as $champ => $value){
            $this->champ=$value;
        }        
    }
    
    public function __get($champ){
        if(isset($this->attributs[$champ])){
            return $this->attrubuts[$champ];
        }
    }

    public function __set($champ,$valeur) {
        $this->_attributs($nom)=$valeur;
    }
    
    public function getCeci(){
        return $ceci;
    }
}