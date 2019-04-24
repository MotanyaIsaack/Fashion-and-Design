<?php
    class Website extends MX_Controller{
        public function __construct()
        {
            parent::__construct();
            //Load your models here
        }
        function home()
        {
            $data['title'] = "Kikoromeo";
            $this->load->view('header',$data);
            $this->load->view('home');
            $this->load->view('footer');
        }

        //Function that loads the collections page
        function collections()
        {
            $data['title'] = "Collections";
            $this->load->view('header',$data);
            $this->load->view('collections');
            $this->load->view('footer');
        }

        //Displays events landing page
        function events()
        {
            $data['title'] = "Events";
            $this->load->view('header',$data);
            $this->load->view('events');
            $this->load->view('footer');
        }

        //Displays all events
        function event($event_name)
        {
            $data['title'] = $event_name;
            $this->load->view('header',$data);
            $this->load->view('view-event');
            $this->load->view('footer');
        }

    }

?>