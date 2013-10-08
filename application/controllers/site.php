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
        $this->load->model('match');
        $this->load->model('articles');
        
        // Load libraries
        $this->load->library('parser');

        $data ['page_title'] = "Willkommen";
        $data ['showTeams'] = array(1,2,3,10);
        $data ['rankTables'] = $this->ranking->getTables($data['showTeams']);
        $data ['teamScores'] = $this->ranking->getTeamScores($data['showTeams']);
        $data ['articles'] = $this->articles->getArticlesHome(5,1,1);
        $data ['articlesMain'] = $this->articles->getArticlesLimit(5,0);
        $data ['matchReport'] = $this->articles->getArticlesHome(5,0,2);
        $data ['nextMatch'] = $this->match->getNextGame();
        
        $this->load->view('meta/metadata', $data);
        $this->drawNavigation();
        $this->load->view('pages/home', $data);
        $this->load->view('elements/footer');
    }

    public function testing() {
        $this->load->model('ranking');
        $teams = array(1,2);
        $hello = $this->ranking->getTables($teams);
        var_dump($hello);
    }
    
    public function login_validation() {

        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'Password', 'required|sha1');
        
        if ($this->form_validation->run()) {
            
            $this->load->model('users');
            $username = $this->input->post('username');
            $userid = $this->users->get_id_for_username($username);

            $data = array(
                'username' => $username,
                'userid' => $userid,
                'is_logged_in' => 1,
            );
            $this->session->set_userdata($data);
            redirect('admin/my_profile');
        } else {
            $this->index();
        }
    }
    
    public function validate_credentials() {
        $this->load->model('users');

        if ($this->users->can_log_in()) {
            return true;
        } else {
            $this->form_validation->set_message('validate_credentials', 'Benutzername/Passwort ung&uuml;ltig.');
            return false;
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }

}
