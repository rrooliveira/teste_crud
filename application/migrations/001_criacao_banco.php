<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Migration_Criacao_banco extends CI_Migration {
	
	public function up() {
		
		$this->dbforge->add_field(array(
				'ID' => array(
						'type' => 'INT',
						'constraint' => 5,
						'unsigned' => TRUE,
						'auto_increment' => TRUE
				),
				'NOME'	=> array(
						'type' => 'VARCHAR',
						'constraint' => 100,
						'null' => FALSE,
				),
				'DESCRICAO'	=> array(
						'type' => 'TEXT',
						'null' => FALSE,
				),
				'QUANTIDADE'	=> array(
						'type' => 'INT',
						'constraint' => 5,
						'null' => FALSE,
				),
				'PRECO'	=> array(
						'type' => 'DECIMAL',
						'constraint' => '10,2',
						'null' => FALSE,
						'default' => 0.00
				),
				'DTHR_CADASTRO'	=> array(
						'type' => 'timestamp',
						'null' => FALSE,
				),
				'DTHR_ULTIMA_ALTERACAO'	=> array(
						'type' => 'timestamp',
						'null' => TRUE,
				),
				
		));
		$this->dbforge->add_key('ID', TRUE);
		$this->dbforge->create_table('PRODUTOS');
	}
}


?>