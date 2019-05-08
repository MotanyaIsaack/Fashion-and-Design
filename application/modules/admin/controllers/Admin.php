<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('encryption');
		$this->load->model('admin/admin_model');
	}

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
		$data['event_id'] = $this->admin_model->get_event_ids();
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('events',$data);
		$this->load->view('footer');

	}
	public function viewEvents()
	{
		
		$data['events'] = $this->admin_model->get_events();
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('viewEvents',$data);
		$this->load->view('footer');

	}

	public function Addcollection()
	{
		$data['categoryid'] = $this->admin_model->get_categories();
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('Addcollection',$data);
		$this->load->view('footer');

	}
	public function viewcollection()
	{
		$data['collections'] = $this->admin_model->get_collections();
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('viewcollection',$data);
		$this->load->view('footer');

	}

	public function addEvent(){
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$eventDate = $from ." - ".$to;
		$eventLocation = $this->input->post('location');

		$data = array(
			'date' => $eventDate,
			'location' => $eventLocation
		);
		$result = $this->admin_model->add_event($data);

		switch ($result) {
			case 'Event Added Succesfully.':
				# code...
				$this->session->set_flashdata("message","Event Succesfully Added");
				redirect('admin/events');
				break;
			case 'Event Not Added Succesfully.':
				# code...
				$this->session->set_flashdata("message","Event Not Succesfully Added");
				redirect('admin/events');
				break;
			case 'Event Exists':
				# code...
				$this->session->set_flashdata("message","Event Already Exists");
				redirect('admin/events');
				break;
			
			default:
				# code...
				$this->session->set_flashdata("message","An Error Occurred");
				redirect('admin/events');
				break;
		}
	}

	public function addEventDetails(){
		$item_id = $this->input->post('event_id');
		$item_name = $this->input->post('event_name');
		$item_info = $this->input->post('event_details');


		$data = array(
			'item_id' => $item_id,
			'item_name' => $item_name,
			'item_info' => $item_info
		);

		$result = $this->admin_model->add_event_details($data);

		switch ($result) {
			case 'Event Details Added Succesfully.':
				# code...
				$this->session->set_flashdata("message","Event Details Succesfully Added");
				redirect('admin/events');
				break;
			case 'Event Details Not Added Succesfully.':
				# code...
				$this->session->set_flashdata("message","Event Details Not Succesfully Added");
				redirect('admin/events');
				break;
			case 'Event Details Exists':
				# code...
				$this->session->set_flashdata("message","Event Details Already Exists");
				redirect('admin/events');
				break;
			
			default:
				# code...
				$this->session->set_flashdata("message","An Error Occurred");
				redirect('admin/events');
				break;
		}
	}

	//Function that deletes categories
	public function deleteEvent($event_id){
		$dataEvents = array(
			'event_id' => $event_id
		);
		$dataEventDetails = array(
			'item_id' => $event_id
		);
		$result = $this->admin_model->delete_events($dataEvents,$dataEventDetails);
		if ($result === TRUE) {
			$this->session->set_flashdata("message","Event Succesfully Deleted");
			redirect('admin/viewEvents');
		}else{
			$this->session->set_flashdata("message","Event Succesfully Deleted");
			redirect('admin/viewEvents');
		}
	
	}
	//Function that adds the collections
	public function add_collection(){
		$category_id = $this->input->post('category_id');
		$collection_name = $this->input->post('collection_name');
		$collection_details = $this->input->post('collection_details');

		$data = array(
			'category_id' => $category_id,
			'collection_name' => $collection_name,
			'collection_details' => $collection_details
		);
		$result = $this->admin_model->add_collection($data);

		switch ($result) {
			case 'Collection Added Succesfully.':
				# code...
				$this->session->set_flashdata("message","Collection Succesfully Added");
				redirect('admin/addCollection');
				break;
			case 'Collection Not Added Succesfully.':
				# code...
				$this->session->set_flashdata("message","Collection Not Succesfully Added");
				redirect('admin/addCollection');
				break;
			case 'Collection Exists':
				# code...
				$this->session->set_flashdata("message","Collection Already Exists");
				redirect('admin/addCollection');
				break;
			
			default:
				# code...
				$this->session->set_flashdata("message","An Error Occurred");
				redirect('admin/addCollection');
				break;
		}
	}
	//Function that deletes collections
	public function deleteCollection($collection_id){
		
		$data = array(
			'collection_id' => $collection_id
		);
		$result = $this->admin_model->delete_collection($data);
		if ($result === TRUE) {
			$this->session->set_flashdata("message","Collection Succesfully Deleted");
			redirect('admin/viewcollection');
		}else{
			$this->session->set_flashdata("message","Collection Succesfully Deleted");
			redirect('admin/viewcollection');
		}
	
	}
}
