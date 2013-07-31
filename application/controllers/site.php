<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends MY_Controller {

    public function index() {
        $this->home();
    }

    public function home() {
        $this->load->model('ranking');
        $this->load->library('parser');

        $data ['page_title'] = "Willkommen";

        $data ['showTeams'] = array(1,2);
        $data ['rankTables'] = $this->ranking->getTables($data['showTeams']);
        // $this->drawWrapper("Willkommen", "view_home");
        $this->load->view('meta/metadata', $data);
        $this->load->view('elements/topNav');
        //$this->load->view('view_slogan');
        $this->load->view('view_home', $data);
        $this->load->view('view_footer');
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
