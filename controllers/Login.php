<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function entrar(){
	$this->load->view('formlogin');
	
	}

    public function auth(){
     $login = $_POST["login"];
     $pass = $_POST["pass"];
     $this->load->model("model");
     $usr = $this->model->getUser($login,$pass);
        if($usr !== false){
            if($usr === "admin"){
                $this->session->set_userdata("_CD","admin"); 
                redirect("/login/admin");
        }else{
        	$cd = '13';
        	$this->session->set_userdata("_CDUSUARIO",$cd);
           	$this->session->set_userdata("_CD","comum");
            $this->session->set_userdata("_LOGIN",$login); 
		    redirect("/login/comum");
            }
        }else{
             redirect("/login/entrar");
    		 }
    }
        
 
    public function comum(){
        $login = $this->session->userdata("_LOGIN");
        redirect("/ong/adote");
    }
        
        
    public function logout(){
        $this->session->unset_userdata("_CD");
        $this->session->unset_userdata("_LOGIN");
        $this->session->unset_userdata("_CDUSUARIO");
        redirect("/login/entrar");
	}
        
        
     public function admin(){
      	$a =  $this->session->userdata("_CD");
         	if($a === "admin"){
         		 $this->load->view('administrador');
         	}else{
             	echo "<h1> VOCE NÃO ESTA AUTORIZADO </h1>";
             	redirect("/login/entrar");
        		 }
	} 
 
    public function verifica(){
    	//$cdAnimal = $_GET['cdAnimal'];
    	$data['cd'] = $_GET['cdAnimal'];
      	$login = $_SESSION["_LOGIN"]; 
	    if(empty($login)){
    		redirect("/login/entrar");
	    }else{
	     
	        $this->load->view('formadotar', $data);
	   	}
	}
	 	

  
	public function cadastro(){
		$this->load->view('cadastro');
	}
	
	
	public function doPost2(){
	     require_once APPPATH."models/usuario.php";	
	     $this->load->model('model');	
		 $m= $this->model;
		 $m->insert2(new Usuario($_POST["login"],$_POST["pass"],$_POST["nome"],$_POST["email"],$_POST["cidade"],$_POST["estado"],$_POST["telefone"])); 
		 redirect('/login/entrar');
	}
	
	

	
	public function adminadotar(){
	  $this->load->model('model');
	  $m = $this->model;
	  $q = $m->queryAll3();
	  $data['lista'] = $q;
	  $this->load->view('adminadotar',$data);
	}


	 public function doPost(){
       require_once APPPATH."models/user.php";	
	   $this->load->model('model');	
	   $m= $this->model;
	   $m->insert(new Contato($_POST["nome"],$_POST["telefone"],$_POST["email"],$_POST["assunto"],$_POST["mensagem"]));  
	   redirect("controller/sucesso");
	
	}

  
	 public function listar2(){
	   require_once APPPATH."models/user.php";
	   $this->load->model('model');
	   $m = $this->model;
	   $usuarios = $m->searchAll();
	   $data['usuarios'] = $usuarios;
	   $this->load->view("lista",$data);
	}
	
	
   	public function doPost4(){
      	require_once APPPATH."models/adocao.php";
	  	$this->load->model('model');	
	  	$m= $this->model;
	  	//$cdUsuario = $this->session->userdata("_CDUSUARIO");
	  	$cdUsuario = $_SESSION["_CDUSUARIO"]; 
	  	$cdAnimal = $_GET['cdAnimal'];
	  	$m->insert4(new Adocao($cdUsuario, $cdAnimal, $_GET["descricao"])); 
	  	redirect('/controller/sucesso2');
	}
	
}