<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends MY_Controller {

    public function index() {
        $this->home();
    }

    public function home() {
        
        // Load models
        $this->load->model('ranking');
        $this->load->model('articles');
        
        // Load libraries
        $this->load->library('parser');

        $data ['page_title'] = "Willkommen";
        $data ['showTeams'] = array(1,2,3,10);
        $data ['rankTables'] = $this->ranking->getTables($data['showTeams']);
        $data ['articles'] = $this->articles->getArticlesHome(5);
        
        $this->load->view('meta/metadata', $data);
        $this->drawNavigation();
        $this->load->view('pages/home', $data);
        $this->load->view('elements/footer');
    }

    public function _loadRanking() {
        $this->load->model('ranking');

    }

    public function error() {
        $this->drawWrapper("Fehler!", "view_error");
    }

    public function about() {
        $this->drawWrapper("About", "view_home");
    }

    public function aktuelles() {
        $this->drawWrapper("Aktuelles", "view_aktuelles");
    }

    public function login() {
        $this->drawWrapper("Bitte einloggen", "view_login");
    }

    public function testing() {
        $this->load->model('ranking');
        $teams = array(1,2);
        $hello = $this->ranking->getTables($teams);
        var_dump($hello);
    }

}
