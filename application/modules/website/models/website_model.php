<?php

class Website_Model extends CI_Model
{
    private $msg;
    private $log = array();
    private $image_path;

    public function __construct()
    {
        parent::__construct();
        $this->image_path = "./assets/website/assets/Images/";
    }

    /* Events page */
    //Events landing page
    public function getEvents()
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->join('event_collection_bridge', 'event.event_id = event_collection_bridge.event_id');
        $this->db->join('event_collection_info', 'event_collection_bridge.info_id = event_collection_info.info_id');
        return $this->db->get()->result_array();
    }

    //Show individual event data
    public function getEventData($id)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->join('event_collection_bridge', 'event.event_id = event_collection_bridge.event_id');
        $this->db->join('event_collection_info', 'event_collection_bridge.info_id = event_collection_info.info_id');
        $this->db->where('event.event_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function getCollections()
    {
        $this->db->select('*');
        $this->db->from('collection_category');
        $this->db->join('collection', 'collection.category_id = collection_category.category_id');
        $this->db->join('event_collection_bridge', 'collection.collection_id = event_collection_bridge.collection_id');
        $this->db->join('event_collection_info', 'event_collection_bridge.info_id = event_collection_info.info_id');
        $this->db->order_by('collection.category_id', 'ASC');
        return $this->db->get()->result_array();
    }

    //Show individual event data
    public function getCollectionData($id)
    {
        $this->db->select('*');
        $this->db->from('collection_category');
        $this->db->join('collection', 'collection.category_id = collection_category.category_id');
        $this->db->join('event_collection_bridge', 'collection.collection_id = event_collection_bridge.collection_id');
        $this->db->join('event_collection_info', 'event_collection_bridge.info_id = event_collection_info.info_id');
        $this->db->where('collection.collection_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function sendMail()
    {
        //Form data
        $name = $this->input->post('name');
        $from = $this->input->post('email');
        $to = "jerrybenjamin007@gmail.com";
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        $website = $this->input->post('website');
        $phone = $this->input->post('phone');
        
        $extras = null;
        if ($website != "")  $extras.="Website: ".$website;
        if ($phone != "")  $extras.="Phone number: ".$phone;

        $this->email->initialize(array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.sendgrid.net',
            'smtp_user' => 'apikey',
            'smtp_pass' => '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',
            'smtp_port' => 587,
            'crlf' => "\r\n",
            'newline' => "\r\n",
        ));
        
        $this->email->set_mailtype('html');
        $this->email->from($from, $name);
        $this->email->to($to);
        $this->email->cc('');
        $this->email->bcc('');
        $this->email->subject($subject);
        $this->email->message(nl2br($message)."<br/><br/>".$extras);
        //echo $this->email->print_debugger();
        return $this->email->send();
    }

    /* File handling */

    public function uploadImage($folder, $item_name)
    {
        $path = $this->image_path . $folder . "/" . $item_name . "/";
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!file_exists($path)) {
            mkdir($path);
        }
        return $this->upload->do_upload('image');
    }

   public function getAwards(){
        $this->db->select('Awards');
        $this->db->from('About');
       $res = $this->db->get();
        return $res->result_array();
        // die(print_r($this->db->get()->row_array()));
    //    $awards=$this->db->query("SELECT Awards FROM About WHERE ID=1");
    //    return $awards->result_array();
    }

}
