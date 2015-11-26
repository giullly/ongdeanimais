<?php

    abstract class Animal{
    public $nome,$idade,$raca,$comportamento;
    
    public function __construct($nome,$idade,$raca,$comportamento){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->comportamento = $comportamento;
        }
        abstract public function getCatId();
    }
    
    class Gato extends Animal{
        public function getCatId(){
            return 1;
        }
    }
    
    class Cachorro extends Animal{
        public function getCatId(){
            return 2;
        }
    }
    
    class novosAnimais{
        public function cadastro($nome,$idade,$raca,$comportamento, $especie){
            if($especie === "gato"){
                return new Gato($nome,$idade,$raca,$comportamento);
            }  
            if($especie === "cachorro"){
                return new Cachorro($nome,$idade,$raca,$comportamento);
            }
        }
    }


?>