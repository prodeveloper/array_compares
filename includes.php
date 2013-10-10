<?php

/**
 * Loops test array using the conventional for loop
 */
class LoopFor extends  Loops {
    function __construct($array) {
        $this -> array = $array;
    }
    
    function capitalize_names(){
       foreach ($this->array as &$name) {
           $name=$this->_capitalize_name($name);
       }
       return $this->array;
    }

}

/**
 * Loops array using array walk/ map
 */
class LoopMap extends  Loops {
    
    function __construct($array) {
        $this -> array = $array;
    }

    function capitalize_names(){
        return array_map(array($this,'_capitalize_name'),$this->array);
    }

}

abstract class Loops {
        private $array;
    /**
     * Loop over names
     */
    abstract function capitalize_names();
    
    /**
     * Capitalize the first letter of the names
     */
    protected function _capitalize_name($name='')
    {
        return ucfirst(strtolower($name));
    }
}