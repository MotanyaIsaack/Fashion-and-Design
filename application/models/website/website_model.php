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
        $to = "testmailer79@gmail.com";
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();

        $mail->IsSmtp();
        $mail->SMTPDebug = 0; //To enable or disable debug
        $mail->SMTPAuth = true; //Gmail requires authentication
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "smtp.gmail.com"; //SMTP host
        $mail->Port = 465; // Port No. or 587 id the former doesn't work
        $mail->IsHTML(true); //If HTML format set true
        $mail->Username = $to;
        $mail->Password = "m@ilerme123";
        $mail->SetFrom($from, $name);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AddAddress($from);

        $mail_sent = $mail->Send();
        $msg = $mail_sent ? "Your email was sent. Thanks for your feedback," . $name : "There was an error sending your email. Check your connection and try again";

        echo json_encode(['status' => $mail_sent, 'msg' => $msg]);
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

    /**
     * Rename directory
     * @param {string} $old_name
     * @param {string} $new_name
     * @param {string} $folder Either event or collection --> Determines the path
     */
    public function renameFolder($old_name, $new_name, $folder)
    {
        $path = $this->image_path . $folder . "/";
        $old = $path . $old_name . "/";
        $new = $path . $new_name . "/";
        $renamed = false;

        //Check whether the directory
        if (file_exists($old)) {
            $renamed = rename($old, $new);
            $this->msg = $renamed ? "Successfully renamed" : "Error renaming the folder";
        } else {
            $this->msg = "No such directory";
        }
        array_push($this->log, $this->msg);
        print_r($this->log);

        return $renamed;
    }

}
