<?php

class MY_Controller extends CI_Controller {

    // Load the parent constructor

    function __construct() {
        parent::__construct();
    }

    // Print Metadata, Header, Slogan and Footer directly

    protected function drawWrapper($pageTitle, $view, $excludeSlogan = false, $excludeFooter = false) {
        $data ['page_title'] = $pageTitle;
        $this->load->view("meta/metadata", $data);
        $this->load->view("view_topnav");
        if (!$excludeSlogan) {
            $this->load->view("view_slogan");
        }
        $this->load->view($view);
        if (!$excludeFooter) {
            $this->load->view("view_footer");
        }
    }

}