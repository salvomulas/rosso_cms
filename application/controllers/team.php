<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Team extends CI_Controller {

    public function index() {
        $this->erste_mannschaft();
    }

    public function erste_mannschaft() {
        $this->load->view('view_topnav');
        $this->load->view('view_slogan');
        $this->load->view('view_footer');
    }

}