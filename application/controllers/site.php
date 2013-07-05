<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
            $this->load->view("view_topnav");
            $this->load->view("view_slogan");
            $this->load->view("view_home");
            $this->load->view("view_footer");
	}
        
        public function error()
        {
            $this->load->view("view_topnav");
            $this->load->view("view_error");
            $this->load->view("view_footer");
        }
        
        public function about()
        {
            $this->load->view("view_topnav");
            $this->load->view("view_slogan");
            $this->load->view("view_footer");
        }
        
        public function verein($vorstand)
        {
            switch ($vorstand) {
                case "vorstand":
                    $this->load->view("view_topnav");
                    $this->load->view("view_slogan");
                    $this->load->view("view_vorstand");
                    $this->load->view("view_footer");
                    break;
                case "clubhaus":
                    $this->load->view("view_topnav");
                    $this->load->view("view_slogan");
                    $this->load->view("view_clubhaus");
                    $this->load->view("view_footer");
                    break;
            }
        }

        public function aktuelles()
        {
            $this->load->view("view_topnav");
            $this->load->view("view_slogan");
            $this->load->view("view_aktuelles");
            $this->load->view("view_footer");
        }
        
        public function login() 
        {
        $this->load->view("view_topnav");
        $this->load->view("view_login");
        $this->load->view("view_footer");
        }
        
        public function testing($first, $second) {
            echo $first;
            echo $second;
        }
        
}
