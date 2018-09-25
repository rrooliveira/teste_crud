<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class produto extends CI_Controller {
	
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
		$produtos = $this->produto_m->listarProdutos();
		
		$dados['produtos'] = $produtos;
		
		$conteudo = $this->load->view('produto/index',$dados,TRUE);
		$this->template_padrao_m->loadIndex($conteudo);
	}
	
	//CADASTRO DO PRODUTO
	public function form_produto(){
		$conteudo = $this->load->view('produto/form_produto',NULL,TRUE);
		$this->template_padrao_m->loadIndex($conteudo);
	}
	
	//INSERIR PRODUTO
	public function cadastrar_produto(){
		$dadosProduto = array('NOME'  	   			  => $this->input->get('nome'),
							  'DESCRICAO'  			  => $this->input->get('descricao'),
							  'QUANTIDADE' 			  => $this->input->get('quantidade'),
							  'PRECO' 	   			  => $this->input->get('preco'),
							  'DTHR_CADASTRO' 		  => date("Y-m-d H:i:s"),
							  'DTHR_ULTIMA_ALTERACAO' => date("Y-m-d H:i:s")
		);
		
		$result = $this->produto_m->cadastrarProduto($dadosProduto);
		
		//RETORNA FALSE CASO GERE ALGUM ERRO
		if($result == false){
			echo utf8_encode('Erro ao cadastrar o produto. Tente novamente');
		}else{
			echo utf8_encode('Produto cadastrado com sucesso.');
		}
	}
	
	//EDITAR PRODUTO
	public function editar(){
		$idProduto = $this->uri->segment(4);
		
		if((int) $idProduto > 0){
			$dados = $this->produto_m->getProdutoPorId($idProduto);
			
			if(!empty($dados)){
				$conteudo = $this->load->view('produto/editar',$dados,TRUE);
				$this->template_padrao_m->loadIndex($conteudo);
			}else{
				die('Erro ao editar produto');
			}
		}
	}
	
	//AÇÃO DE EDITAR
	public function editar_action(){
		$idProduto = $this->input->get('ID');
		
		$dadosProduto = array('NOME'  	  			  => $this->input->get('nome'),
							'DESCRICAO'  			  => $this->input->get('descricao'),
							'QUANTIDADE' 			  => $this->input->get('quantidade'),
							'PRECO' 	   			  => $this->input->get('preco'),
							'DTHR_ULTIMA_ALTERACAO'   => date("Y-m-d H:i:s")
		);
		
		$result = $this->produto_m->editarProduto($idProduto,$dadosProduto);
		
		//RETORNA FALSE CASO GERE ALGUM ERRO
		if($result == false){
			echo utf8_encode('Erro ao editar o produto. Tente novamente');
		}else{
			echo utf8_encode('Produto alterado com sucesso.');
		}
	}
	
	
	//EXCLUIR PRODUTO
	public function excluir(){
		$idProduto = $this->input->get('id');
		
		if($idProduto){
			$dados = $this->produto_m->excluirProduto($idProduto);
			
			if($dados){
				echo utf8_encode('Produto excluído com sucesso!');
			}else{
				echo 'Erro ao excluir produto';
			}
		}
	}
	
	//AUMENTAR ESTOQUE
	public function aumentar_estoque(){
		$idProduto = $this->input->get('id');
		
		if($idProduto){
			$dados = $this->produto_m->aumentarEstoque($idProduto);
			
			if($dados){
				echo 'Aumentado 1 quantidade do estoque!';
			}else{
				echo 'Erro ao aumentar estoque';
			}
		}
	}
	
	//DIMINUIR ESTOQUE
	public function diminuir_estoque(){
		$idProduto = $this->input->get('id');
		
		if($idProduto){
			$dados = $this->produto_m->diminuirEstoque($idProduto);
			
			if($dados){
				echo 'Retirado 1 quantidade do estoque!';
			}else{
				echo 'Erro ao diminuir estoque';
			}
		}
	}
}
?>