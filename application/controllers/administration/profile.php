<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users');
    }

    public function index()
    {
        $this->my_profile();
    }

    public function my_profile()
    {
        if ($this->session->userdata('is_logged_in')) {
            $data['page_title'] = "Mein Profil";
            $data ['actualUser'] = $this->users->get_user($this->session->userdata('userid'));
            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("admin/view_profile");
            $this->load->view("elements/footer");
        } else {
            redirect ("error/PermissionDenied");
        }
    }

}
