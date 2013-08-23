<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Management extends CI_Model {

    function __construct() {

        parent::__construct();

    }
    
    function getManagement() {
        
        $this->db->select('*')->from('member_management')->order_by('id','asc');
        $query = $this->db->get();
        
        if ($query->num_rows > 0) {
            return $query;
        } else {
            return NULL;
        }
    }
    
}