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

    public function getAllPlayers () {

        $this->db->select('*')
            ->from('member_active')
            ->order_by('lastName','asc');
        $query = $this->db->get();

        return $query;

    }

    public function getMatchPlayers ($playerArray, $csv) {

        $this->db->_protect_identifiers = FALSE;
        $this->db->select('m.*,t.name')
            ->select("DATE_FORMAT(m.bDay, '%e. %M %Y') AS bDay", FALSE)
            ->from('member_active m,teams t')
            ->where_in('m.id',$playerArray)
            ->where('m.toTeam = t.id')
            ->order_by('FIELD (m.id,'.$csv.')',FALSE);
        $this->db->_protect_identifiers = TRUE;
        $query = $this->db->get();

        return $query;
    }

    public function getAllPlayersLimit ($limit,$start) {

        $this->db->select('*')
            ->from('member_active')
            ->order_by('lastName','asc')
            ->limit($limit, $start);
        $query = $this->db->get();

        return $query;

    }

    public function getNumberPlayers () {

        return $this->db->count_all('member_active');

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