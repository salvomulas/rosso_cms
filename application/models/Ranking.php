<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ranking extends CI_Model {

    public function getTeamScore ($teamID) {
        $this->db->select('points')->from('team_'.$teamID.'_ranking')->like('team','Rossoneri');
        $query = $this->db->get();
        return $query->result();
    }

    public function getTable ($teamID) {
        $this->db->select('*')->from('team_'.$teamID.'_ranking')->order_by('points','desc');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getTableColors ($teamID, $up, $down) {
        // $up = This parameter passes the number of teams going to the higher division
        // $down = This parameter passes the number of teams going to the lower division
        $this->db->select('*')->from('team_'.$teamID.'_ranking');
        
    }

}