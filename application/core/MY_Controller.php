<?php

class MY_Controller extends CI_Controller {

    // Load the parent constructor

    function __construct() {
        parent::__construct();
    }

    // Print Metadata, Header, Slogan and Footer directly

    protected function drawWrapper($pageTitle, $view, $excludeSlogan = true, $excludeFooter = false) {
        $data ['page_title'] = $pageTitle;
        $this->load->view("meta/metadata", $data);
        $this->load->view("elements/topNav");
        if (!$excludeSlogan) {
            $this->load->view("elements/heroUnit");
        }
        $this->load->view($view);
        if (!$excludeFooter) {
            $this->load->view("elements/footer");
        }
    }

    protected function drawNavigation () {
        $this->load->model('teams');
        $data ['teamsActive'] = $this->teams->getTeamsType(1);
        $data ['teamsKifu'] = $this->teams->getTeamsType(2);
        $this->load->view('elements/topNav', $data);
    }

    protected function logout() {
        $this->session->sess_destroy();
        redirect("site/home");
    }

    public function newuser_validation() {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('firstName', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'eMail', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('password_chk', 'Confirm Password', 'required|trim|matches[password]');

        $this->form_validation->set_message('is_unique', "This user is already in our database");

        if ($this->form_validation->run()) {

            $key = sha1(uniqid());
            $this->load->library('email', array('mailtype' => 'html'));
            $this->load->model('model_users');
            $this->email->from('registrations@webre', "Registration WebRE");
            $this->email->to($this->input->post('email'));
            $this->email->subject("Please confirm your account");

            $message = '<p>Dear ' . $this->input->post('firstname') . '<p><br><p><a href="' . base_url() . 'home/confirm/' . $key . '">Click here</a> to confirm your account</p>';

            $this->email->message($message);

            if ($this->model_users->add_temp_user($key)) {
                if ($this->email->send()) {
                    echo "Please check your inbox to complete your registration";
                } else {
                    echo "Something went wrong";
                }
            } else {
                echo "Problem while adding the user to the database";
            }



            //Add the waiting user to the temp_users table
        } else {
            $this->login();
        }
    }

}