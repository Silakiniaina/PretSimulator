<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view("templates/header");
	$this->load->view($content);
	$this->load->view("templates/footer");
?>