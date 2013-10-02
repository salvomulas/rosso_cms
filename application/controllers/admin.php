<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
    
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

    public function edit_spieler()
    {
        if ($this->session->userdata('is_logged_in')) {

            // Load models and libraries
            $this->load->model('player');
            $this->load->library('pagination');

            // Pagination properties
            $config = array();
            $config["base_url"] = base_url() . "admin/edit_spieler";
            $config["total_rows"] = $this->player->getNumberPlayers();
            $config["per_page"] = 20;
            $config["uri_segment"] = 3;

            // Initialize Pagination
            $this->pagination->initialize($config);

            // Set the offset and create links
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data["links"] = $this->pagination->create_links();

            // Load articles
            $data['players'] = $this->player->getAllPlayersLimit($config['per_page'], $page);

            // Load views
            $data ['page_title'] = "Spielerverwaltung";
            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("admin/view_spieler", $data);
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
