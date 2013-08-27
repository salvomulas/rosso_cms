<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Player extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getPlayers ($teamID) {

        $this->db->select('*')->from('member_active')->where('toTeam',$teamID)->order_by('trikot', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }

    }

    public function getPlayersPosition ($teamID, $positionID) {

        $this->db->select('*')->from('member_active')->where('toTeam', $teamID)->where('toPosition', $positionID)->order_by('trikot', 'asc');
        $query =$this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return NULL;
        }

    }

    public function getPlayer ($playerID) {

        $this->db->select('*')->from('member_active')->where('id', $playerID);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return NULL;
        }

    }

    public function getPlayerName ($playerID) {

        $this->db->select('firstName, lastName')->from('member_active')->where('id', $playerID);
        $query = $this->db->get();

        $query = $query->row();

        $name = $query->firstName.' '.$query->lastName;

        return $name;

    }

}