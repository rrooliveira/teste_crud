<?php
class produto_m extends CI_Model{
	//CADATRAR PRODUTO
	public function cadastrarProduto($dadosProduto){
		if(!empty($dadosProduto)){
			$result = $this->db->insert('PRODUTOS',$dadosProduto);
			
			if($result){
				$retorno = true;
			}else{
				$retorno = false;
			}
			return $retorno;
		}else{
			die('Não foi possível cadastrar o produto.');
		}
	}
	
	//LISTAR OS PRODUTOS
	public function listarProdutos(){
		$this->db->order_by('NOME', 'ASC');
		$query = $this->db->get('PRODUTOS');
		return $query->result_array();
	}
	
	//RETORNAR A PRODUTO POR ID
	public function getProdutoPorId($idProduto){
		$this->db->where('ID',$idProduto);
		$query = $this->db->get('PRODUTOS');
		
		if($query->num_rows() > 0){
			$retorno = $query->row();
		}else{
			$retorno = false;
		}
		return $retorno;
	}
	
	//EDITAR PRODUTO
	public function editarProduto($idProduto,$dadosProduto){
		if($idProduto && !empty($dadosProduto)){
			$this->db->where('ID',$idProduto);
			$retorno = $this->db->update('PRODUTOS',$dadosProduto);
		}else{
			$retorno = false;
		}
		return $retorno;
	}
	
	//EXCLUIR PRODUTO
	public function excluirProduto($idProduto){
		if($idProduto){
			$this->db->where('ID',$idProduto);
			$retorno = $this->db->delete('PRODUTOS');			
		}else{
			$retorno = false;
		}
		return $retorno;
	}
	
	//AUMENTAR 1 QUANTIDADE NO ESTOQUE
	public function aumentarEstoque($idProduto){
		if($idProduto){
			$retorno = $this->db->set('QUANTIDADE','QUANTIDADE+1',FALSE);
			$this->db->where('ID',$idProduto);
			$retorno = $this->db->update('PRODUTOS');
			
		}else{
			$retorno = false;
		}
		return $retorno;
	}
	
	
	//DIMINUIR 1 QUANTIDADE NO ESTOQUE
	public function diminuirEstoque($idProduto){
		if($idProduto){
			$retorno = $this->db->set('QUANTIDADE','QUANTIDADE-1',FALSE);
			$this->db->where('ID',$idProduto);
			$retorno = $this->db->update('PRODUTOS');
			
		}else{
			$retorno = false;
		}
		return $retorno;
	}
	
	//LISTAR OS PRODUTOS COM ESTOQUE ABAIXO OU IGUAL A 3
	public function produtosEstoqueBaixo(){
		$this->db->where('QUANTIDADE <=','3');
		$query = $this->db->get('PRODUTOS');
		
		if($query->num_rows() > 0){
			$retorno = $query->result_array();
		}else{
			$retorno = false;
		}
		return $retorno;
	}
	
	//LISTAR OS 5 ÚLTIMOS PRODUTOS MOVIMENTADOS
	public function cincoUltimosMovimentados(){
		$this->db->order_by("DTHR_ULTIMA_ALTERACAO", "DESC");
		$this->db->limit(5, 0);
		$query = $this->db->get('PRODUTOS');
		
		if($query->num_rows() > 0){
			$retorno = $query->result_array();
		}else{
			$retorno = false;
		}
		return $retorno;
	}
}
?>