<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
        $this->load->model('admin/admin_model');
        $this->load->model('website/website_model');
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
    public function forgot_password()
    {
		$this->load->view('head');
        $this->load->view('head');
        $this->load->view('forgot-password');
    }
	
    public function profile()
    {
		if (!isset($_SESSION['username'])) {
			# code...
			redirect('admin/index');
		}
		$data['events'] = $this->admin_model->get_event_no();
		$data['collections'] = $this->admin_model->get_collection_no();
		$data['admin'] = $this->admin_model->get_admin_no();
		// die(print_r($data['events']));
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('profile',$data);
        $this->load->view('footer');
    }

    public function ourstory()
    {
		if (!isset($_SESSION['username'])) {
			# code...
			redirect('admin/index');
		}
		$this->load->view('head');
		$this->load->view('navigation');
		$this->load->view('header');
		$this->load->view('ourstory');
		$this->load->view('footer');
        
    }

    public function addStory()
    {
        $story = $this->input->post('ckeditor');

        $result = $this->admin_model->updateOurStory($story);
        if ($result) {

            $this->session->set_flashdata('message', 'Updated Successfully');
        }
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
            'newline' => "\r\n",
        ));
        $email = $this->input->post('signup-email');
        $usern = $this->input->post('signup-username');
        $passwo = $this->input->post('signup-password');
        $body = $this->admin_model->mailTemplate();
        $this->email->set_mailtype('html');
        $this->email->from('vchegetest@gmail.com', 'Kikoromeo');
        $this->email->to($email);
        $this->email->cc('');
        $this->email->bcc('');
        $this->email->subject('Kikoromeo Registration');
        $this->email->message($body);
        echo $this->email->print_debugger();
        return $this->email->send();
    }

    /**
     * editCollection + editEvent
     */
	public function edit_item($item_name, $id)
	
    {
		if (!isset($_SESSION['username'])) {
			# code...
			redirect('admin/index');
		}
        $data['landing_image'] = $this->admin_model->getEventLandingImg($item_name, $id);
        $data['folder'] = $item_name;

        switch ($item_name) {
            case "event":
                $data['row'] = $this->website_model->getEventData($id);
                break;
            case "collection":
                $data['row'] = $this->website_model->getCollectionData($id);
                $data['categoryid'] = $this->admin_model->get_categories();
                break;
        }

        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('editEventCollections', $data);
        $this->load->view('footer');
    }

    public function editOurStory()
    {
		if (!isset($_SESSION['username'])) {
			# code...
			redirect('admin/index');
		}
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('editOurstory');
        $this->load->view('footer');
    }

    public function events()
    {
		if (!isset($_SESSION['username'])) {
			# code...
			redirect('admin/index');
		}
        $data['event_id'] = $this->admin_model->get_event_ids();
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('addEvents', $data);
        $this->load->view('footer');
    }

    public function viewEvents()
    {
		if (!isset($_SESSION['username'])) {
			# code...
			redirect('admin/index');
		}
        $data['events'] = $this->admin_model->get_events();
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('viewEvents', $data);
        $this->load->view('footer');
    }

    public function Addcollection()
    {
		if (!isset($_SESSION['username'])) {
			# code...
			redirect('admin/index');
		}
        $data['categoryid'] = $this->admin_model->get_categories();
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('Addcollection', $data);
        $this->load->view('footer');
    }

    public function viewcollection()
    {
		if (!isset($_SESSION['username'])) {
			# code...
			redirect('admin/index');
		}
        $data['collections'] = $this->admin_model->get_collections();
        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('header');
        $this->load->view('viewcollection', $data);
        $this->load->view('footer');
    }

    public function addEvent()
    {
		
        $data['event'] = array(
            'date' => $this->input->post('date'),
            'location' => $this->input->post('location'),
        );

        $data['event_info'] = array(
            'short_name' => $this->input->post('short_name'),
            'full_name' => $this->input->post('full_name'),
            'item_info' => $this->input->post('item_info'),
            'overview_header' => implode(',', $this->input->post('overview_header')),
            'overview_content' => implode(',', $this->input->post('overview_content')),
        );

        $result = $this->admin_model->add_event($data);

        switch ($result) {
            case 'Event Added Succesfully.':
                # code...
                $this->session->set_flashdata("message", "Event Succesfully Added");
                redirect('admin/file_upload/event/' . $_SESSION['item_id']);
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
            'item_name' => $item_name,
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
        $columns = ['event_collection_info.info_id', 'short_name'];
        $event_info = $this->admin_model->getEventInfo($columns, $event_id);
        $item_folder = "event_" . $event_id;
        $data['event'] = array(
            'event_id' => $event_id,
        );
        $data['event_info'] = array(
            'info_id' => $event_info['info_id'],
        );

        $deleted = $this->admin_model->deleteFolder('event', $item_folder);
        $result = ($deleted) ? $this->admin_model->delete_event($data) : false;

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
                redirect('admin/file_upload/collection/' . $_SESSION['item_id']);
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
    {
        $columns = ['event_collection_info.info_id', 'short_name'];
        $collection_info = $this->admin_model->getCollectionInfo($columns, $collection_id);
        $item_folder = "collection_" . $collection_id;
        $data['collection'] = array(
            'collection_id' => $collection_id,
        );
        $data['collection_info'] = array(
            'info_id' => $collection_info['info_id'],
        );

        $deleted = $this->admin_model->deleteFolder('collection', $item_folder);
        $result = ($deleted) ? $this->admin_model->delete_collection($data) : false;

        if ($result === true) {
            $this->session->set_flashdata("message", "Collection Succesfully Deleted");
            redirect('admin/viewcollection');
        } else {
            $this->session->set_flashdata("message", "Collection not deleted");
            redirect('admin/viewcollection');
        }
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
            $this->sendMail();
            $this->session->set_flashdata('message', 'Registration Successful');
            redirect('admin/index');
        } else {
            $this->session->set_flashdata('message', 'Username  already exists');
            redirect('admin/signup');
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
                    'event_id' => $this->input->post('event_id'),
                    'date' => $this->input->post('date'),
                    'location' => $this->input->post('location'),
                ];
                $result = $this->admin_model->updateEvent($data);
                $id = $this->input->post('event_id');
                break;
            case "collection":
                $data['collection'] = [
                    'collection_id' => $this->input->post('collection_id'),
                    'category_id' => $this->input->post('category_id'),
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

    public function login()
    {
        if ($this->input->post('login')) {
            $username = $this->input->post('login-username');
            $password = $this->input->post('login-password');

            $query = $this->db->query("select * from user where username='" . $username . "' and password='$password'");

            $row = $query->num_rows();
            if ($row) {
                session_start();
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('logged_in', true);
                redirect('admin/profile');
            } else {
                $this->session->set_flashdata('message', 'Invalid Credentials');
                redirect('admin/index');
            }
        }
    }

    public function logout()
    {
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
        $this->session->set_userdata('logged_in', false);
        redirect('admin/index');
    }

    /* Image handling */
    public function dropzone_upload()
    {$folder = $_SESSION['folder'];
        $subfolder = $folder . "_" . $_SESSION['item_id'];
        $this->admin_model->dropzoneUpload($folder, $subfolder);
    }

    public function get_file_names()
    {
        $folder = $_POST['folder'];
        $subfolder = $folder . "_" . $_POST['item_id'];
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
        $subfolder = $folder . "_" . $this->session->item_id;

        $data = array(
            'folder' => $folder,
            'subfolder' => $subfolder,
            'landing_image' => $this->input->post('landing_image'),
        );
        $this->admin_model->fetchPhotos($data);
    }

    public function remove_image()
    {
        $folder = $this->session->folder;
        $subfolder = $folder . "_" . $this->session->item_id;
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
    public function changePassword()
    {
            $email = $this->input->post('email');
            $newpassword = $this->input->post('newpassword');
            $confirmpassword = $this->input->post('confirmpassword');

            $query = $this->db->query("select * from user where email='$email'");
            //   die(print_r($query));
            $row = $query->num_rows();
            if ($row) {
                $query1 = $this->db->query("UPDATE user SET password='$newpassword' WHERE email='$email'");
                
                if($query1){
                    
                    
                    $this->session->set_flashdata('message', 'Update was successful');
                    redirect('admin/profile');
                }else{
                    die(print_r('UnSuccesful'));

                }
               
             } else {
                $this->session->set_flashdata('message', 'Update was not successful');
                redirect('admin/ourstory');
            }
	}
	
	

}
