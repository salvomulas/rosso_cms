<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Referee extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getReferees() {

        $this->db->select('*')->from('referee')->order_by('id','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        }

    }

    public function getReferee($id) {

        $this->db->select('*')->from('referee')->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0 ) {
            return $query;
        }

    }

}