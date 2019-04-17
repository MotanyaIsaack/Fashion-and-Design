<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

  	public function index()
	{
		
		$this->load->view('login');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
}
