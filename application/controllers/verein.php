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
        $this->drawFooter();
    }

    public function clubhaus() {
        $this->drawWrapper("Clubhaus", "view_clubhaus");
    }
    
    public function statuten() {
        $data ['page_title'] = "Statuten";
        
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/statuten", $data);
        $this->drawFooter();
    }
    
    public function geschichte() {
        $data ['page_title'] = "Geschichte";
        
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/geschichte", $data);
        $this->drawFooter();
    }

    public function organigramm() {
        $data ['page_title'] = "Organigramm";
        
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/organigramm", $data);
        $this->drawFooter();
    }

    public function leitbild() {
        $data ['page_title'] = "Leitbild";
        
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/leitbild", $data);
        $this->drawFooter();
    }

    public function sponsoren() {
        $data ['page_title'] = "Sponsoren";

        $this->load->model('sponsors');
        $data ['sponsors'] = $this->sponsors->getSponsors();
        
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/sponsoren", $data);
        $this->drawFooter();
    }

}