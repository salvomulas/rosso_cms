<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function index() 
    {
        $this->my_profile();
    }
    
    public function my_profile()
    {
        $this->load->view("view_topnav");
        $this->load->view("admin_view_profile");
        $this->load->view("view_footer");
    }
    
    public function groups()
    {
        $this->load->view("view_topnav");
        $this->load->view("admin_view_groups");
        $this->load->view("view_footer");
    }

    public function edit_vorstand()
    {
        $this->load->view("view_topnav");
        $this->load->view("admin_view_vorstand");
        $this->load->view("view_footer");
    }
    
    public function edit_vorstand_member()
    {
        $this->load->view("view_topnav");
        $this->load->view("admin_edit_vorstand");
        $this->load->view("view_footer");
    }
    
}


?>
