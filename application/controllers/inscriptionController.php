<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class InscriptionController extends CI_Controller {
        public function index(){
            $data = [];
            $data["title"] = "inscription";
            $data["content"] = "inscription";
            $this->load->view('template',$data);
        }

        public function inscription(){
            $nom = $this->input->post('nom');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('user');
            $this->user->inscription($nom,$email,$password);
            $data = [];
            $data["title"] = "login";
            $data["content"] = "login";
            $data["success"] = "Inscription fait";
            $this->load->view('template',$data);
        }	
    }
