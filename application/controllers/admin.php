<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
    
    public function index() 
    {
        $this->my_profile();
    }

    public function my_profile()
    {
        if ($this->session->userdata('is_logged_in')) {
            $data['page_title'] = "Mein Profil";
            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("admin/view_profile");
            $this->load->view("elements/footer");
        } else {
            redirect ("error/PermissionDenied");
        }
    }
    
    public function groups()
    {
        if ($this->session->userdata('is_logged_in')) {
            $data['page_title'] = "Gruppenverwaltung";
            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("admin/view_groups");
            $this->load->view("elements/footer");
        } else {
            redirect ("error/PermissionDenied");
        }
    }

    public function edit_vorstand()
    {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('management');
            $data ['page_title'] = "Vorstandsverwaltung";
            $data ['management'] = $this->management->getManagement();
            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("admin/view_vorstand", $data);
            $this->load->view("elements/footer");
        } else {
            redirect ("error/PermissionDenied");
        }
    }
    
    public function edit_vorstand_member()
    {
        if ($this->session->userdata('is_logged_in')) {
            $data['page_title'] = "Vorstandsmitglied bearbeiten";
            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("admin/edit_vorstand");
            $this->load->view("elements/footer");
        } else {
            redirect ("error/PermissionDenied");
        }
    }
    
}
