<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends BD_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->isLoggedIn();
	}

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/left-menu');
		$this->load->view('home/content');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
		
	}

}
