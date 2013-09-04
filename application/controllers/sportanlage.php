<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sportanlage extends MY_Controller {

	public function index() {

        // Set Page Title
        $data['page_title'] = "Sportanlage";
        
        // Load models
        $this->load->model('field');
        
        // Load data
        $data ['field'] = $this->field->getFields();

        // Load views with all the loaded data
        $this->load->view("meta/metadata", $data);
        $this->load->view("meta/gmaps");
        $this->drawNavigation();
        $this->load->view("elements/mapUnit");
        $this->load->view("pages/field", $data);
        $this->load->view("elements/footer");

    }
	
}