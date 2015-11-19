<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}

		public function rota3()
	{
		$this->load->view('ajuda');
	}
		public function rota2()
	{
		$this->load->view('sobre');
	}
		public function rota1()
	{
		$this->load->view('index');
	}
			public function rota4()
	{
		$this->load->view('contato');
	}
			public function rota5()
	{
		$this->load->view('adote');
	}
		   public function rota6()
	{
		$this->load->view('apadrinhe');
	}
	
	
		public function doPost(){
		require_once APPPATH."models/user.php";	//CONTROLER CONSEGUIR VER -- APPATH(ONDE ESTA O CODEIGNITER)
		$this->load->model('model');	//load no model a classe do banco de dados
		$m= $this->model;
		$m->insert(new Contato($_POST["nome"],$_POST["telefone"],$_POST["email"],$_POST["assunto"],$_POST["mensagem"]));  //classe dentro do arquivo	(precisa do new para saber qual tabela ele vai distrinxar)

	//controler pega da viwe pela variavel post, cria um novo usuario com oq veio da view
	
	}
	public function listar(){
		require_once APPPATH."models/user.php";//arquivo
		$this->load->model('model');
		$m= $this->model;
		$usuarios = $m->searchAll();
		print_r($usuarios);
	}
}


