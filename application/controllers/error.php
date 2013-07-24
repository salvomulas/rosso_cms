<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends MY_Controller {

    public function PageNotFound() {
        $this->load->view("meta/metadata");
        $this->load->view("view_topnav");
        $this->load->view("view_404");
        $this->load->view("view_footer");
    }

}

