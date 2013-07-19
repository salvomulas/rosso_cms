<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller {
    
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
    
    protected function fillData ($array) {
        
    }
    
    public function hello() {
        $this->drawWrapper("Das sollte klappen", "view_home");
    }

    public function index() {
        $this->load->model('ranking');
        $this->load->library('parser');
        $data ['page_title'] = "Willkommen";
        $data ['ranking'] = $this->ranking->getTable(1);
        $data ['ranking2'] = $this->ranking->getTable(2);
        // $this->drawWrapper("Willkommen", "view_home");
        $this->load->view('meta/metadata', $data);
        $this->load->view('view_topnav');
        $this->load->view('view_slogan');
        $this->load->view('view_home', $data);
        $this->load->view('view_footer');
    }

    public function error() {
        $this->drawWrapper("Fehler!", "view_error");
    }

    public function about() {
        $this->drawWrapper("About", "view_home");
    }

    public function verein($vorstand) {
        switch ($vorstand) {
            case "vorstand":
                $this->drawWrapper("Vorstand", "view_vorstand");
                break;
            case "clubhaus":
                $this->drawWrapper("Clubhaus", "view_clubhaus");
                break;
        }
    }

    public function aktuelles() {
        $this->drawWrapper("Aktuelles", "view_aktuelles");
    }

    public function login() {
        $this->drawWrapper("Bitte einloggen", "view_login");
    }

    public function testing() {
        $this->load->model('ranking');
        $this->drawWrapper("Tabelle erste Mannschaft", "view_home");
        $this->ranking->getRanking(1);
    }

}
