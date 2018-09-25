<?php
/*
 * DESENVOLVEDOR: RODRIGO RUY OLIVEIRA
 * DATA			: 15/08/2014 
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	//METODO QUE CONFIGURA NUMERO DE REGISTRO POR PAGINA
	function registrosPorPagina(){
		return 20;
	}

	 //METODO QUE CRIA LINK DE PAGINACAO
	function gerarPaginacao($controller, $total){	
		$ci = &get_instance();
		$ci->load->library('pagination');

		$config['base_url']    = base_url($controller);
		$config['total_rows']  = $total;
		$config['per_page']    = registrosPorPagina();
		$config["uri_segment"] = 3;
		$config['first_link']  = 'Primeiro';
		$config['last_link']   = 'Último';
		$config['next_link']   = 'Próximo';
		$config['prev_link']   = 'Anterior';

		$ci->pagination->initialize($config);
		return $ci->pagination->create_links();
	}
?>