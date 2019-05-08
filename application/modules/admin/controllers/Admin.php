<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

  	public function index()
	{
		$this->load->view('head');
		$this->load->view('login');
		
	}
	public function signup()
	{
		$this->load->view('head');
		$this->load->view('signup');
	}
	public function profile()
	{
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
		
	}
	public function ourstory()
	{
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('ourstory');
		$this->load->view('footer');

	}
	public function editOurStory()
	{
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('editOurstory');
		$this->load->view('footer');

	}
	public function events()
	{
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('events');
		$this->load->view('footer');

	}
	public function viewEvents()
	{
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('viewEvents');
		$this->load->view('footer');

	}
	public function Addcollection()
	{
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('Addcollection');
		$this->load->view('footer');

	}
	public function viewcollection()
	{
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('viewcollection');
		$this->load->view('footer');

	}
}
