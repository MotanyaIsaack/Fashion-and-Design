<?php
class Website extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load your models here
        $this->load->model('website/website_model');
    }

    public function home()
    {
        $data['title'] = "Kikoromeo";
        $this->load->view('header', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }

    //Function that loads the collections page
    public function collections()
    {
        $data['cards'] = $this->website_model->getCollections();
        $data['title'] = "Collections";
        $data['folder'] = "collections";
        $this->load->view('header', $data);
        $this->load->view('collections');
        $this->load->view('footer');

    }

    //Displays events landing page
    public function events()
    {
        $data['title'] = "Events";
        $data['cards'] = $this->website_model->getEvents();
        $data['folder'] = "events";
        $this->load->view('header', $data);
        $this->load->view('events');
        $this->load->view('footer');
    }

    //Displays all events
    public function event($id)
    {
        $event_data = $this->website_model->getEventData($id);
        $whole_name = explode(",", $event_data['item_name']);
        $short_name = $whole_name[0];
        $full_name = $whole_name[1];

        $data['title'] = $short_name;
        $data['full_name'] = $full_name;
        $data['row'] = $event_data;
        $data['folder'] = "events";
        $this->load->view('header', $data);
        $this->load->view('view-event');
        $this->load->view('footer');

    }

    //Test upload --> see views/test.php
    public function upload_event_image()
    {
        $this->website_model->uploadImage("events", $_POST['event_name']);
    }

    //Function that loads the collections page
    public function subcollections($id)
    {
        $collection_data = $this->website_model->getCollectionData($id);
        $whole_name = explode(",", $collection_data['item_name']);
        $short_name = $whole_name[0];
        $full_name = $whole_name[1];

        $data['folder'] = "collections";
        $data['title'] = $short_name;
        $data['full_name'] = $full_name;
        $data['row'] = $collection_data;
        $this->load->view('header', $data);
        $this->load->view('view-subcollection');
        $this->load->view('footer');
    }

    public function send_mail()
    {
        $this->website_model->sendMail();
    }

    //Test page
    public function test()
    {
        $data['title'] = "Test";
        $this->load->view('header', $data);
        $this->load->view('test');
        $this->load->view('footer');
    }

}
