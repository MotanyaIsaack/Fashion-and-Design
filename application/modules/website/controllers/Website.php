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
    }

?>