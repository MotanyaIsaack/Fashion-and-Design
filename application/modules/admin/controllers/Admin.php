<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('encryption');
		$this->load->model('admin/admin_model');
		$this->load->library('session');
		$this->load->library('email');
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
			$email_sent=$this->sendMail();
			$this->session->set_flashdata('message', 'Registration Successful');
		redirect('admin/profile');
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
		redirect('admin/profile');
		}
		else
		{
			$this->session->set_flashdata('message', 'Invalid Credentials');
		
		redirect('admin/index');

		} 
		}
		
		}
		

    /**
     * @param {string} item --> Event or collection
     */
    public function update_item($item)
    {
        $data['names'] = [
            'info_id' => $this->input->post('info_id'),
            'folder' => $item,
            'previous_name' => $this->input->post('previous_name'),
            'short_name' => $this->input->post('short_name'),
            'full_name' => $this->input->post('full_name'),
        ];

        $data['item_info'] = [
            'info_id' => $this->input->post('info_id'),
            'short_name' => $data['names']['short_name'],
            'full_name' => $data['names']['full_name'],
            'item_info' => $this->input->post('item_info'),
            'item_summary' => $this->input->post('item_summary'),
            'overview_header' => implode(',', $this->input->post('overview_header')),
            'overview_content' => implode(',', $this->input->post('overview_content')),
        ];

        switch ($item) {
            case "event":
                $data['event'] = [
                    'event_id'=> $this->input->post('event_id'),
                    'date'=> $this->input->post('date'),
                    'location'=> $this->input->post('location')
                ];
                $result = $this->admin_model->updateEvent($data);
                $id = $this->input->post('event_id');
                break;
            case "collection":
                $data['collection'] = [
                    'collection_id'=> $this->input->post('collection_id'),
                    'category_id'=> $this->input->post('category_id')
                ];
                $result = $this->admin_model->updateCollection($data);
                $id = $this->input->post('collection_id');
                break;
        }

        $this->session->set_flashdata('message', $result['message']);
        redirect('admin/edit_item/' . $item . '/' . $id);
        
        //If the event (short) name was changed, update the folder name
        // if ($data['names']['previous_name'] !== $data['names']['short_name']) {
        //     print_r($this->admin_model->renameFolder($data['names']));
        // }
    }

    

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_userdata('logged_in', false);
        redirect('admin/index');
		}
		public function sendMail()
{
	$this->email->initialize(array(
		'protocol' => 'smtp',
		'smtp_host' => 'smtp.sendgrid.net',
		'smtp_user' => 'apikey',
		'smtp_pass' => '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',
		'smtp_port' => 587,
		'crlf' => "\r\n",
		'newline' => "\r\n"
	));
	$email =$this->input->post('signup-email');
	$usern=$this->input->post('signup-username');
	$passwo=$this->input->post('signup-password');
	$this->email->from('vchegetest@gmail.com', 'Kikoromeo');
	$this->email->to($email);
	$this->email->cc('');
	$this->email->bcc('');
	$this->email->subject('Kikoromeo Registration');
	$this->email->message(nl2br('You have been successfully registered as an Administrator on Kikoromeo webiste Username: '.$usern.' '.'Password'.$passwo));
	$this->email->send();
	
	echo $this->email->print_debugger();
	}
	public function addStory()
    {

        $story = $this->input->post('ckeditor');

        $result = $this->admin_model->updateOurStory($story);
        if ($result) {
      
            $this->session->set_flashdata('message', 'Updated Successfully');
        }
    }


    /* Image handling */
    public function dropzone_upload()
    {   $folder = $_SESSION['folder']; 
        $subfolder = $folder."_".$_SESSION['item_id'];
        $this->admin_model->dropzoneUpload($folder,$subfolder);
    }

    public function get_file_names()
    {
        $folder = $_POST['folder'];
        $subfolder = $folder."_".$_POST['item_id'];
        $this->admin_model->getFileNames($folder, $subfolder);
    }

    public function file_upload($folder, $id)
    {
        $data['landing_image'] = $this->admin_model->getEventLandingImg($folder, $id);
        $data['folder'] = $folder;
        $data['row'] = ($folder == "event") ?
        $this->website_model->getEventData($id) :
        $this->website_model->getCollectionData($id);
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('sections/file_upload', $data);
        $this->load->view('footer');
    }

    public function fetch_photos()
    {
        $folder = $this->session->folder;
        $subfolder = $folder."_".$this->session->item_id;

        $data = array(
            'folder' => $folder,
            'subfolder' => $subfolder,
            'landing_image' => $this->input->post('landing_image')
        );
        $this->admin_model->fetchPhotos($data);
    }

    public function remove_image()
    {  
        $folder = $this->session->folder;
        $subfolder = $folder."_".$this->session->item_id;
        $data = array(
            'folder' => $folder,
            'subfolder' => $subfolder,
            'file_name' => $this->input->post('file_name'),
        );
        $this->admin_model->removeImage($data);
    }

    public function update_landing_img()
    {
        $this->admin_model->updateLandingImg($_POST['folder'], $_POST['item_id']);
    }

}
