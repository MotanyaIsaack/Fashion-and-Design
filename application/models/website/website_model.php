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