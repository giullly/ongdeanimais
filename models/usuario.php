<?php
class Usuario{
    public $login,$pass,$nome,$email,$cidade,$estado,$telefone;
    
    public function __construct($login,$pass,$nome,$email,$cidade,$estado,$telefone){
        $this->login =$login;
      $this->pass = $pass;
       $this->nome = $nome;
        $this->email = $email;
         $this->cidade = $cidade;
        $this->estado = $estado;
        $this->telefone = $telefone;
    }
    
   
    
}

?>