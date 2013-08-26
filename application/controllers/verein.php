<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Verein extends MY_Controller {

    public function vorstand() {

        // Initialize models and load content from the database
        $this->load->model('management');
        $data ['page_title'] = "Vorstand";
        $data ['management'] = $this->management->getManagement();

        // Load views with all the loaded data
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/vorstand");
        $this->load->view("elements/footer");
    }

    public function clubhaus() {
        $this->drawWrapper("Clubhaus", "view_clubhaus");
    }

}