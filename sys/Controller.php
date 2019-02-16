<?php

 
    abstract class Controller {
        private $podaci = [];
        final protected function set($name , $value){
            if(preg_match('/^[a-z]+[a-z_]*$/', $name)){
                $this->podaci[$name]=$value;
            }
        }
        final public function getData(){
            return $this->podaci;
        }

        public function  index(){
         
     }
}
