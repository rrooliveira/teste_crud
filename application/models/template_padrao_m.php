<?php 
class template_padrao_m extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function loadIndex($conteudo){	
		$dados['cabecalho'] 		= $this->load->view('template_padrao/cabecalho',null,true);
		$dados['rodape']			= $this->load->view('template_padrao/rodape',null,true);
		$dados['conteudo']			= $conteudo;
		$this->load->view('template_padrao/template_padrao',$dados);
	}
}
?>