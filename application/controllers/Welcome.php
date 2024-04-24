<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data = array(
			"title" => "client",
			"description" => "Liste des client de sakila",
			"content" => "welcome"
		); 
		$this->load->view('template',$data);
	}		
}
