<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migrate extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('template_padrao_m');
	}
	
	public function index() {
		
		$this->load->library('migration');
		
		if ($this->migration->current()) {
			echo "Migraчуo bem sucedida!";
		}
		else {
			echo $this->migration->error_string();
		}
	}
}
?>