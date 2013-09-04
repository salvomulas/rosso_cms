<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbook extends MY_Controller {

    public function index() {
        $data['page_title'] = "G&auml;stebuch";
        $this->load->view("meta/metadata", $data);
        $this->drawNavigation();
        $this->load->view("pages/guestbook", $data);
        $this->load->view("elements/footer");
    }

}

