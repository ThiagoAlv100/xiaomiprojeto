<?php

class Produtos extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('nav.php');
		$this->load->view('produtos.php');
		$this->load->view('footer.php');
	}
	public function redmi(){
		$this->load->view('nav.php');
		$this->load->view('red.php');
		$this->load->view('footer.php');
	}
}
