<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Field extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getFields() {

        $this->db->select('*')->from('fields')->order_by('id','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        }

    }

}