<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('encryption');
		$this->load->model('admin/admin_model');
		$this->load->library('session');
	}
public function index()
	{

		$this->load->view('head');
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
		$sess_id = $this->session->userdata('username');

if(!empty($sess_id))
 {       
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('ourstory');
		$this->load->view('footer');

   }else{

        redirect('admin/index');
}
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
	public function registration(){
		
		$data = array(
		'username' => $this->input->post('signup-username'),
		'email' => $this->input->post('signup-email'),
		'password' => $this->input->post('signup-password')
		);
		$parameter = array(
			'username' => $this->input->post('signup-username'),
			'email' => $this->input->post('signup-email')
		);

		$result = $this->admin_model->registration_insert($data,$parameter);
		if ($result === TRUE) {
			
			$this->session->set_flashdata('message', 'Registration Successful');
		redirect('admin/index');
		} else {
			$this->session->set_flashdata('message', 'Username  already exists');
		redirect('admin/signup');
		}
		
		}
		public function login()
		{
		
		if($this->input->post('login'))
		{
		$username=$this->input->post('login-username');
		$password=$this->input->post('login-password');
		
		$query=$this->db->query("select * from user where username='".$username."' and password='$password'");

		$row = $query->num_rows();
		if($row)
		{
		session_start();
		$this->session->set_userdata('username',$username);
        $this->session->set_userdata('logged_in', TRUE);
		redirect('admin/ourstory');
		}
		else
		{
			$this->session->set_flashdata('message', 'Invalid Credentials');
		
		redirect('admin/index');

		} 
		}
		
		}
		public function logout()
    {
		$this->session->unset_userdata('username');
		$this->session->set_userdata('logged_in', FALSE);
        redirect('admin/index');
    }

			}

class Admin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model('admin/admin_model');
    }

    public function index()
    {
        $this->load->view('head');
        $this->load->view('login');
    }

    public function registration()
    {
        $data = array(
            'username' => $this->input->post('signup-username'),
            'email' => $this->input->post('signup-email'),
            'password' => $this->input->post('signup-password'),
        );
        $parameter = array(
            'username' => $this->input->post('signup-username'),
            'email' => $this->input->post('signup-email'),
        );

        $result = $this->admin_model->registration_insert($data, $parameter);
        if ($result === true) {

            $this->session->set_flashdata('message', 'Registration Successful');
            redirect('admin/index');
        } else {
            $this->session->set_flashdata('message', 'Username already exists');
            redirect('admin/signup');
        }

    }
    public function login()
    {
        if ($this->input->post('login')) {
            $username = $this->input->post('login-username');
            $password = $this->input->post('login-password');

            $query = $this->db->query("select * from user where username='" . $username . "' and password='$password'");

            $row = $query->num_rows();
            if ($row) {
                redirect('admin/events');
            } else {
                $this->session->set_flashdata('message', 'Invalid Credentials');
                redirect('admin/index');
            }
        }

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
        $this->load->view('events', $data);
        $this->load->view('footer');

    }
    public function viewEvents()
    {

        $data['events'] = $this->admin_model->get_events();
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('viewEvents', $data);
        $this->load->view('footer');

    }

    public function Addcollection()
    {
        $data['categoryid'] = $this->admin_model->get_categories();
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('Addcollection', $data);
        $this->load->view('footer');

    }
    public function viewcollection()
    {
        $data['collections'] = $this->admin_model->get_collections();
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('viewcollection', $data);
        $this->load->view('footer');

    }

    public function addEvent()
    {
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $eventDate = $from . " - " . $to;
        $eventLocation = $this->input->post('location');

        $data = array(
            'date' => $eventDate,
            'location' => $eventLocation,
        );
        $result = $this->admin_model->add_event($data);

        switch ($result) {
            case 'Event Added Succesfully.':
                # code...
                $this->session->set_flashdata("message", "Event Succesfully Added");
                redirect('admin/events');
                break;
            case 'Event Not Added Succesfully.':
                # code...
                $this->session->set_flashdata("message", "Event Not Succesfully Added");
                redirect('admin/events');
                break;
            case 'Event Exists':
                # code...
                $this->session->set_flashdata("message", "Event Already Exists");
                redirect('admin/events');
                break;

            default:
                # code...
                $this->session->set_flashdata("message", "An Error Occurred");
                redirect('admin/events');
                break;
        }
    }

    public function addEventDetails()
    {
        $item_id = $this->input->post('event_id');
        $item_name = $this->input->post('event_name');
        $item_info = $this->input->post('event_details');

        $data = array(
            'item_id' => $item_id,
            'short_name' => $item_name,
            'full_name' => $item_name,
            'item_info' => $item_info,
        );

        $result = $this->admin_model->add_event_details($data);

        switch ($result) {
            case 'Event Details Added Succesfully.':
                # code...
                $this->session->set_flashdata("message", "Event Details Succesfully Added");
                redirect('admin/events');
                break;
            case 'Event Details Not Added Succesfully.':
                # code...
                $this->session->set_flashdata("message", "Event Details Not Succesfully Added");
                redirect('admin/events');
                break;
            case 'Event Details Exists':
                # code...
                $this->session->set_flashdata("message", "Event Details Already Exists");
                redirect('admin/events');
                break;

            default:
                # code...
                $this->session->set_flashdata("message", "An Error Occurred");
                redirect('admin/events');
                break;
        }
    }

    //Function that deletes categories
    public function deleteEvent($event_id)
    {
        $dataEvents = array(
            'event_id' => $event_id,
        );
        $dataEventDetails = array(
            'item_id' => $event_id,
        );
        $result = $this->admin_model->delete_events($dataEvents, $dataEventDetails);
        if ($result === true) {
            $this->session->set_flashdata("message", "Event Succesfully Deleted");
            redirect('admin/viewEvents');
        } else {
            $this->session->set_flashdata("message", "Event Succesfully Deleted");
            redirect('admin/viewEvents');
        }

    }
    //Function that adds the collections
    public function add_collection()
    {
        $data['collection'] = array(
            'category_id' => $this->input->post('category_id'),
        );

        $data['collection_info'] = array(
            'short_name' => $this->input->post('short_name'),
            'full_name' => $this->input->post('full_name'),
            'item_info' => $this->input->post('item_info'),
            'overview_header' => implode(',', $this->input->post('overview_header')),
            'overview_content' => implode(',', $this->input->post('overview_content')),
        );
        $result = $this->admin_model->add_collection($data);

        switch ($result) {
            case 'Collection Added Succesfully.':
                # code...
                $this->session->set_flashdata("message", "Collection Succesfully Added");
                redirect('admin/file_upload?folder=collections&id=' . $_SESSION['item_id'] . '&name=' . $_SESSION['short_name']);
                break;
            case 'Collection Not Added Succesfully.':
                # code...
                $this->session->set_flashdata("message", "Collection Not Succesfully Added");
                redirect('admin/addCollection');
                break;
            case 'Collection Exists':
                # code...
                $this->session->set_flashdata("message", "Collection Already Exists");
                redirect('admin/addCollection');
                break;

            default:
                # code...
                $this->session->set_flashdata("message", "An Error Occurred");
                redirect('admin/addCollection');
                break;
        }
    }
    //Function that deletes collections
    public function deleteCollection($collection_id)
    {$collection_info = $this->admin_model->getCollectionInfo(['event_collection_info.info_id', 'short_name'], $collection_id);
        $data['collection'] = array(
            'collection_id' => $collection_id,
        );
        $data['collection_info'] = array(
            'info_id' => $collection_info['info_id'],
        );

        $deleted = $this->admin_model->deleteFolder('collections', $collection_info['short_name']);
        $result = ($deleted) ? $this->admin_model->delete_collection($data) : false;

        if ($result === true) {
            $this->session->set_flashdata("message", "Collection Succesfully Deleted");
            redirect('admin/viewcollection');
        } else {
            $this->session->set_flashdata("message", "Collection not deleted");
            // redirect('admin/viewcollection');
        }

    }

    /* Image handling */
    public function dropzone_upload()
    {
        $this->admin_model->dropzoneUpload($_SESSION['folder'], $_SESSION['short_name']);
    }

    public function get_file_names()
    {
        $folder = $_POST['folder'];
        $item_name = $_POST['item_name'];
        $this->admin_model->getFileNames($folder, $item_name);
    }

    public function file_upload()
    {
        $data['landing_image'] = $this->admin_model->getEventLandingImg($_GET['folder'], $_GET['id']);
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('file_upload', $data);
        $this->load->view('footer');
    }

    public function fetch_photos()
    {
        $data = array(
            'folder' => $_SESSION['folder'],
            'short_name' => $_SESSION['short_name'],
        );
        $this->admin_model->fetchPhotos($data);
    }

    public function remove_image()
    {
        $data = array(
            'file_name' => $this->input->post('name'),
            'folder' => $_SESSION['folder'],
            'short_name' => $_SESSION['short_name'],
        );
        $this->admin_model->removeImage($data);
    }

    public function update_landing_img()
    {
        $this->admin_model->updateLandingImg($_SESSION['folder'], $_SESSION['item_id']);
    }
}
