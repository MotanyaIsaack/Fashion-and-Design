<?php
class Admin_model extends CI_Model
{
    //Function that fetches all the event id's
    public function get_event_ids()
    {
        $this->db->trans_start();
        $event_id = $this->db->get('event')->result_array();
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            // generate an error... or use the log_message() function to log your error
            return "Event Fetch Not Succesful.";

        } else {
            return $event_id;
        }
    }
    //Function that fetches all the events
    public function get_events()
    {
        $this->db->trans_start();
        $this->db->from('event');
        $this->db->join('event_collection_bridge', 'event.event_id = event_collection_bridge.event_id');
        $this->db->join('event_collection_info', 'event_collection_bridge.info_id = event_collection_info.info_id');
        $events = $this->db->get()->result_array();
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            // generate an error... or use the log_message() function to log your error
            return "Event Fetch Not Succesful.";

        } else {
            return $events;
        }
    }
    //Function that adds an event
    public function add_event($data)
    {
        $this->db->trans_start();
        $categoryResults = $this->db->get_where('event', $data);
        if ($categoryResults->num_rows() == 0) {
            $this->db->insert('event', $data);
        } else {
            return "Event Exists";
        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            // generate an error... or use the log_message() function to log your error
            return "Event Not Added Succesfully.";

        } else {
            return "Event Added Succesfully.";
        }

    }
    //Function that adds an event details
    public function add_event_details($data)
    {
        $this->db->trans_start();
        $eventDetailsResults = $this->db->get_where('event_collection_info', $data);
        if ($eventDetailsResults->num_rows() == 0) {
            $this->db->insert('event_collection_info', $data);
        } else {
            return "Event Details Exists";
        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            // generate an error... or use the log_message() function to log your error
            return "Event Details Not Added Succesfully.";

        } else {
            return "Event Details Added Succesfully.";
        }

    }
    //Function delete events
    public function delete_events($dataEvents, $dataEventDetails)
    {
        $query = $this->db->delete('event_collection_info', $dataEventDetails);
        if ($query === true) {
            $queryDetails = $this->db->delete('event', $dataEvents);
            if ($queryDetails === true) {
                # code...
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    //Function that fetches all the categories
    public function get_categories()
    {
        $this->db->trans_start();
        $this->db->from('collection_category');
        $this->db->join('collection', 'collection_category.category_id = collection.category_id');
        $this->db->join('event_collection_bridge', 'collection.collection_id = event_collection_bridge.collection_id');
        $this->db->join('event_collection_info', 'event_collection_bridge.info_id = event_collection_info.info_id');
        $categories = $this->db->get()->result_array();
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            // generate an error... or use the log_message() function to log your error
            return "Category Fetch Not Succesful.";

        } else {
            return $categories;
        }
    }

    //Function that adds a collection
    public function add_collection($data)
    {
        $this->db->trans_start();
        $collectionResults = $this->db->get_where('collection', $data);
        if ($collectionResults->num_rows() == 0) {
            $this->db->insert('collection', $data);
        } else {
            return "Collection Exists";
        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            // generate an error... or use the log_message() function to log your error
            return "Collection Not Added Succesfully.";

        } else {
            return "Collection Added Succesfully.";
        }

    }
    //Function that fetches all the collections
    public function get_collections()
    {
        $this->db->trans_start();
        $this->db->from('collection');
        $this->db->join('collection_category', 'collection_category.category_id = collection.category_id');
        $collections = $this->db->get()->result_array();
        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            // generate an error... or use the log_message() function to log your error
            return "Collections Fetch Not Succesful.";

        } else {
            return $collections;
        }
    }
    //Function delete collections
    public function delete_collection($data)
    {
        $query = $this->db->delete('collection', $data);
        if ($query === true) {
            return true;
        } else {
            return false;
        }
    }
}
