<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contato extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('template_padrao_m');
		
	}
	
	//CONTATO
	public function index(){		
		$conteudo = $this->load->view('contato/index',null,TRUE);
		$this->template_padrao_m->loadIndex($conteudo);
	}
}
?>