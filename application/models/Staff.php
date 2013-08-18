<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Staff extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getStaff() {

        $this->db->select('*')->from('member_Staff')->order_by('id','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }

    }

    public function getTeamStaff($teamID) {

        $this->db->select('*')->from('member_Staff')->where('toTeam', $teamID);
        $query = $this->db->get();

        if ($query->num_rows() > 0 ) {
            return $query->result();
        }

    }

}