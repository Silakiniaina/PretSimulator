<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthentificationController extends CI_Controller {
	public function index(){
		$data = [];
		$data["title"] = "login";
		$data["content"] = "login";
		$this->load->view('template',$data);
	}

	public function authentification(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('user');
		$login = $this->user->login($email,$password);
		$data = [];
		if($login != -1){
			$this->load->library('session');
			$this->session->set_userdata('active_user_id',$login);
			$data["title"] = "home";
			$data["content"] = "simulation";
			$this->load->view('template',$data);
		}else{
			$data['error'] = "Login incorecte, veuillez réesayer";
			$data["title"] = "login";
			$data["content"] = "login";
			$this->load->view('template',$data);
		}
	}	
}
