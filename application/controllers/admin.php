<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
    
    public function index() 
    {
        $this->my_profile();
    }

    public function login_validation() {

        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'Password', 'required|sha1');

        if ($this->form_validation->run()) {
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => 1,
            );
            $this->session->set_userdata($data);
            redirect('home/logged_in');
        } else {
            $this->login();
        }
    }

    public function logged_in() {
        if ($this->session->userdata('is_logged_in')) {
            $this->login();
            print_r($this->session->all_userdata());
        } else {
            redirect('home/restricted');
        }
    }

    public function my_profile()
    {
        $data['page_title'] = "Mein Profil";
        $this->load->view("meta/metadata");
        $this->load->view("elements/topNav");
        $this->load->view("admin/view_profile");
        $this->load->view("elements/footer");
    }
    
    public function groups()
    {
        $data['page_title'] = "Gruppenverwaltung";
        $this->load->view("meta/metadata");
        $this->load->view("elements/topNav");
        $this->load->view("admin/view_groups");
        $this->load->view("elements/footer");
    }

    public function edit_vorstand()
    {
        $data['page_title'] = "Vorstandsverwaltung";
        $this->load->view("meta/metadata");
        $this->load->view("elements/topNav");
        $this->load->view("admin/view_vorstand");
        $this->load->view("elements/footer");
    }
    
    public function edit_vorstand_member()
    {
        $data['page_title'] = "Vorstandsmitglied bearbeiten";
        $this->load->view("meta/metadata");
        $this->load->view("elements/topNav");
        $this->load->view("admin/edit_vorstand");
        $this->load->view("elements/footer");
    }
    
}
