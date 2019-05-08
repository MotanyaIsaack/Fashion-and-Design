<?php

class Website_Model extends CI_Model
{
    private $path;
    private $msg;
    private $log = array();

    public function __construct()
    {
        parent::__construct();
        $this->path = "./assets/website/assets/Images/events/";
    }

    /* Events page */
    //Events landing page
    public function getEvents()
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->join('event_collection_info', 'event.event_id = event_collection_info.item_id');
        $this->db->join('image', 'event_collection_info.landing_img_id = image.img_id');
        return $this->db->get();
    }

    //Show individual event data
    public function getEventData($id)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->join('event_collection_info', 'event.event_id = event_collection_info.item_id');
        $this->db->where('event_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function sendMail()
    {
        //Form data
        $name = $this->input->post('name');
        $from = $this->input->post('from');
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
        $mail->AddAddress($to);

        $mail_sent = $mail->Send();
        $msg = $mail_sent ? "Your email was sent. Thanks for your feedback." . $name : "There was an error sending your email. Check your connection and try again";

        echo json_encode(['status' => $mail_sent, 'msg' => $msg]);
    }

    //Rename directory
    public function renameFolder($old_name, $new_name)
    {
        $old = $this->path . $old_name . "/";
        $new = $this->path . $new_name . "/";
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
