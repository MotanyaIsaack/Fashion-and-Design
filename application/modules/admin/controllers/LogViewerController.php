<?php
defined('BASEPATH') OR exit('your exit message');
defined('APPPATH') OR exit('Not a Code Igniter Environment');
class LogViewerController extends CI_Controller
{
    private $logViewer;
    public function __construct() {
        parent::__construct(); 
        $this->load->library('log');
        $this->logViewer = new \CILogViewer\CILogViewer();
   
    }
    
    public function index() {
        echo $this->logViewer->showLogs();
        return;
    }
}