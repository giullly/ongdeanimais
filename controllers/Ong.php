<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ong extends CI_Controller {

	public function doPost(){
	  require_once APPPATH."models/animal.php";
	  $this->load->model('model');
	  $m = $this->model;
	  $nome = $_POST['nome'];
	  $idade = $_POST['idade'];
	  $raca = $_POST['raca'];
	  $comportamento = $_POST['comportamento'];
	  $especie = $_POST['especie'];
	  $a = new novosAnimais();
	  $animal = $a->cadastro($nome,$idade,$raca,$comportamento,$especie);
	  $animal->especie = $animal->getCatId();
	  $m->insert3($animal);
	  redirect("/login/adminadotar");
	  }


	  public function Adote(){
	    $this->load->model('model');
		$m = $this->model;
	    $q = $m->queryAll3();
		$data['lista'] = $q;
		$this->load->view('adotar',$data);
	    }
	   
	   
		public function animal(){
	      $this->load->model('model');
		  $m = $this->model;
	      $q = $m->queryAll3();
		  $data['lista'] = $q;
		  $this->load->view('adotar',$data);
		}

	 
}

