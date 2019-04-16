<?php
    class Website extends MX_Controller{
        public function __construct()
        {
            parent::__construct();
            //Load your models here
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