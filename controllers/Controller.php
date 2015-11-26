<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}
	
		public function rota2()
	{
		$this->load->view('sobre');
	}

		public function rota3()
	{
		$this->load->view('ajuda');
	}

		public function rota4()
	{
		$this->load->view('contato');
	}
	
		public function rota5()
	{
		$this->load->view('adotar');
	}
	
		public function rota6()
	{ 
		$this->load->view('dicas');
	}
	
	   public function Sucesso()
	{
		$this->load->view('enviadosucesso');
	}
	
		public function Sucesso2()
	{
		$this->load->view('enviadocomsucesso');
	} 

}
