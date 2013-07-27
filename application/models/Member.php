<?php

class Model_users extends CI_Model {

    public function can_log_in() {

        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', sha1($this->input->post('password')));

        $query = $this->db->get('member_Management');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function add_Management($key) {

        $data = array(
            'username' => $this->input->post('username'),
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'password' => sha1($this->input->post('password')),
            'email' => $this->input->post('email'),
        );

        $query = $this->db->insert('temp_users', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }

    }

}

?>
