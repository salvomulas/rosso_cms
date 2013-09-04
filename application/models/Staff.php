<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Staff extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getStaff() {

        $this->db->select('*')->from('member_staff')->order_by('id','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        }

    }

    public function getTeamStaff($teamID) {

        $this->db->select('*')->from('member_staff')->where('toTeam', $teamID);
        $query = $this->db->get();

        if ($query->num_rows() > 0 ) {
            return $query;
        }

    }

}