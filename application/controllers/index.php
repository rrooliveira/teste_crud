<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('template_padrao_m');
		$this->load->model('produto_m');
		
	}
	
	//LISTAGEM DOS PRODUTOS
	public function index(){
		$dados['baixo_estoque'] = $this->produto_m->produtosEstoqueBaixo();
		$dados['cinco_ultimos'] = $this->produto_m->cincoUltimosMovimentados();
		
		$conteudo = $this->load->view('index/index',$dados,TRUE);
		$this->template_padrao_m->loadIndex($conteudo);
	}
}
?>