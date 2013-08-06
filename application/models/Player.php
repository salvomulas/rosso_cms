<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Player extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getPlayers ($teamID) {

        $this->db->select('*')->from('member_Active')->where('toTeam',$teamID);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }

    }

}