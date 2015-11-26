<?php
class Adocao{
    
    public $cd_usuario,$cd_animal,$descricao;
    public function __construct($cd_usuario, $cd_animal, $descricao){
        $this->cd_usuario = $cd_usuario;
        $this->cd_animal = $cd_animal;
        $this->descricao = $descricao;
    }
}

?>