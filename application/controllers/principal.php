<?php
class Principal extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('nav.php');
		$this->load->view('index.php');
		$this->load->view('footer.php');
	}
	public function contato(){
		$this->load->view('nav.php');
		$this->load->view('contato.php');
		$this->load->view('footer.php');
	}
	public function login(){
		$this->load->view('nav.php');
		$this->load->view('login.php');
		$this->load->view('footer.php');
	}
	public function cadastro(){
		$this->load->view('nav.php');
		$this->load->view('cadastro.php');
		$this->load->view('footer.php');
	}
}
