<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Player extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getPlayers ($teamID) {

        $this->db->select('*')
                ->select("DATE_FORMAT(bDay, '%e. %M %Y') AS bDay", FALSE)
                ->from('member_active')
                ->where('toTeam',$teamID)
                ->order_by('trikot', 'asc');
        $query = $this->db->get();
        
        return $query;

    }

    public function getPlayersPosition ($teamID, $positionID) {

        $this->db->select('*')
                ->from('member_active')
                ->where('toTeam', $teamID)
                ->where('toPosition', $positionID)
                ->order_by('trikot', 'asc');
        $query =$this->db->get();

        return $query;

    }

    public function getPlayer ($playerID) {
        
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(bDay, '%e. %M %Y') AS bDay", FALSE);
        $this->db->from("member_active");
        $this->db->where('id', $playerID);
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