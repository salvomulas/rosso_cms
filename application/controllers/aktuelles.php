<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aktuelles extends MY_Controller {

    public function index() {

        // Set Controller properties
        $data ['page_title'] = "Aktuelles";

        // Load models
        $this->load->model('articles');

        // Load articles
        $data['articles'] = $this->articles->getArticles();

        // Load views with all the loaded data
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/aktuelles");
        $this->load->view("elements/footer");
    }

}
