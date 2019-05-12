<?php
class Admin_model extends CI_Model
{
    private $image_path;

    public function __construct()
    {
        $this->image_path = "./assets/website/assets/Images/";
    }

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
        $collection_name = $data['collection_info']['item_name'];
        $collectionResults = $this->db->get_where('event_collection_info', ['item_name' => $collection_name]);
        if ($collectionResults->num_rows() == 0) {

            $this->db->insert('collection', $data['collection']);
            $collection_id = $this->db->insert_id();

            $this->db->insert('event_collection_info', $data['collection_info']);
            $info_id = $this->db->insert_id();

            $this->db->insert('event_collection_bridge', ['info_id' => $info_id, 'collection_id' => $collection_id]);
            $this->session->set_userdata(['item_id' => $collection_id, 'item_name' => $collection_name]);
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

    public function getCollectionInfo($columns, $collection_id)
    {
        $this->db->select(implode(',', $columns));
        $this->db->from('collection');
        $this->db->join('event_collection_bridge', 'collection.collection_id = event_collection_bridge.collection_id');
        $this->db->join('event_collection_info', 'event_collection_bridge.info_id = event_collection_info.info_id');
        $this->db->where('collection.collection_id', $collection_id);
        return $this->db->get()->row_array();
    }

    //Function that fetches all the collections
    public function get_collections()
    {
        $this->db->trans_start();
        $this->db->select('*');
        $this->db->from('event_collection_info');
        $this->db->join('event_collection_bridge', 'event_collection_bridge.info_id = event_collection_info.info_id');
        $this->db->join('collection', 'event_collection_bridge.collection_id = collection.collection_id');
        $this->db->join('collection_category', 'collection.category_id = collection_category.category_id');
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

    /* File handling */
    public function dropzoneUpload($folder, $item_name)
    {
        $dir = $this->image_path . $folder . "/" . $item_name . "/";
        $temp_file = $_FILES['file']['tmp_name'];
        $location = $dir . $_FILES['file']['name'];
        //Check whether the hostel folder exists

        if (!file_exists($dir)) {
            mkdir($dir);
        }
        move_uploaded_file($temp_file, $location);
    }

    public function getFileNames($folder, $item_name)
    {
        $dir = $this->image_path . $folder . '/' . $item_name . "/";
        $option = '<option value="">Select landing page image</option>';

        //Make directory: Prevents error from being thrown by scandir
        if (!file_exists($dir)) {
            mkdir($dir);
        }

        $files = scandir($dir);
        if (count($files) > 0) {
            foreach ($files as $file) {
                if ('.' != $file && '..' != $file) {
                    $option .= '<option value="' . $file . '">' . $file . '</option>';
                }
            }
        }
        echo json_encode($option);
    }

    public function fetchPhotos($data)
    {
        $folder = $data['folder'];
        $item_name = $data['item_name'];
        //Scans the named folder and returns file names
        $dir = $this->image_path . $folder . '/' . $item_name;
        $files = scandir($dir);
        $output = '<div class="row">';

        //This will check whether there is an error with the scandir() function
        if (false !== $files) {
            foreach ($files as $file) {
                //This condition will ignore a single dot and double dot file
                if ('.' != $file && '..' != $file) {
                    $output .= '
                    <div class="col-md-4">
                    <img src="' . images_url($folder . '/' . $item_name . '/' . $file) . '" class="img-thumbnail" width="150" height="300" style="height:175px;" />
                    <button type="button" class="btn btn-outline-danger btn-sm remove_image" id="' . $file . '">Remove</button>
                        <p>' . $file . '</p>
                    </div>
                ';
                }
            }
        } else {
            $output .= '<center class="lead">No photos posted yet! Click or Drag and drop above</center>';
        }
        $output .= '</div>';
        echo json_encode($output);
    }

    public function removeImage($data)
    {
        $path = $this->image_path . $data['folder'] . '/' . $data['item_name'] . '/' . $data['file_name'];
        if (!unlink($path)) {
            echo json_encode("Error found");
        } else {
            echo json_encode("Deleted");
        }
    }

    public function getEventInfo($columns, $event_id)
    {
        $this->db->select(implode(',', $columns));
        $this->db->from('event');
        $this->db->join('event_collection_bridge', 'event_collection_bridge.event_id = event.event_id');
        $this->db->join('event_collection_info', 'event_collection_bridge.info_id = event_collection_info.info_id');
        $this->db->where('event.event_id', $event_id);
        return $this->db->get()->row_array();
    }

    public function getEventLandingImg($folder, $item_id)
    {
        $columns = array('landing_page_image');
        $array = ($folder == "events") ?
        $this->getEventInfo($columns, $item_id) :
        $this->getCollectionInfo($columns, $item_id);
        return $array;
    }

    public function updateLandingImg($folder, $item_id)
    {
        $columns = array('event_collection_info.info_id');
        $array = ($folder == "events") ?
        $this->getEventInfo($columns, $item_id) :
        $this->getCollectionInfo($columns, $item_id);

        $info_id = $array['info_id'];
        $info_data = array('landing_page_image' => $_POST['image_name']);

        $this->db->trans_start();
        $this->db->where('info_id', $info_id);
        $this->db->update('event_collection_info', $info_data);
        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            redirect('admin/file_upload?folder=' . $_POST['folder'] . '&id=' . $_SESSION['item_id'] . '&name=' . $_POST['item_name']);
        }
    }
}
