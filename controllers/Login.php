<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function entrar()
	{
		$this->load->view('formlogin');
	}

     
         
     public function auth(){
         $login =$_POST["login"];
         $pass= $_POST["pass"];
         $this->load->model("model");
         $usr=$this->model->getUser($login,$pass);
         //autorização para diferenciar se é admin ou não 
        if($usr !== false){
        
            if($usr === "admin"){
                $this->session->set_userdata("_ID","admin"); // se nome e senha for root seta uma session indicando que é admin
                redirect("/login/admin");
             }else{
            
             $this->session->set_userdata("_ID","comum"); // indica que é um usuário comum 
              $this->session->set_userdata("_LOGIN",$login); //autorização : o que é vc e autenticar: o sistema sabe que é vc
              
              redirect("/login/comum");
            }
        
        }else{
             redirect("/login/entrar");
        }
     
    }
        
    
    
    public function comum(){
           
            $login = $this->session->userdata("_LOGIN");
            echo  "<h1> BEM-VINDO ".$login."</h1>";   
        }
        
        
        public function logout(){
            $this->session->unset_userdata("_ID");
             $this->session->unset_userdata("_LOGIN");
             echo "<h1>Até logo</h1>";
        }
        
     public function page(){
         if($this->session->userdata("_LOGIN") !=null){
             
             echo "Página de usuário";
             
         }else{
             redirect("/login/entrar");
         }
         
         
     }
     
     
     public function admin(){
         $a =  $this->session->userdata("_ID");
         if($a === "admin"){
             echo "<h1> BEM-VINDO ADMIN </h1>";
         }else{
             echo "<h1> VOCE NÃO ESTA AUTORIZADO </h1>";
         }
     } 
    public function comumview(){
      $this->load->view('novarota');
    }
    public function visitanteview(){
      $this->load->view('visitante');
    }
  

	public function cadas()
	{
		$this->load->view('cadastro');
	}
	public function doPost2()
	{
        require_once APPPATH."models/usuario.php";	//CONTROLER CONSEGUIR VER -- APPATH(ONDE ESTA O CODEIGNITER)
		$this->load->model('model');	//load no model a classe do banco de dados
		$m= $this->model;
		$m->insert2(new Usuario($_POST["login"],$_POST["pass"],$_POST["nome"],$_POST["email"],$_POST["cidade"],$_POST["estado"],$_POST["telefone"])); 
	}

		public function pagadministrador()
	{
		$this->load->view('administrador');
	}

}