<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Silvester extends MY_Controller {

    public function __construct() {
        
        parent::__construct();
        
    }
    
    public function index() {

        // Set Controller properties
        $data ['page_title'] = "Silvester 13/14";
        
        // Load views with all the loaded data
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("elements/silvesterUnit");
        $this->load->view("pages/silvester", $data);
        $this->load->view("elements/footer");

    }

}
