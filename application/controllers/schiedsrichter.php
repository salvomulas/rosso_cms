<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Schiedsrichter extends MY_Controller {

    public function index() {

        // Set Page Title
        $data['page_title'] = "Schiedsrichter";

        // Load models
        $this->load->model('referee');

        // Load data
        $data ['referee'] = $this->referee->getReferees();

        // Load views with all the loaded data
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/referee", $data);
        $this->drawFooter();

    }

}