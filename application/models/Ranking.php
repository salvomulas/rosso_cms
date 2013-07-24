<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ranking extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getTables ($teamIDArray) {

        $rankTables = array();

        foreach ($teamIDArray as $teamID) {
            $this->db->select('*')->from('team_'.$teamID.'_ranking')->order_by('points','desc');
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $rankTables[$teamID] = $query->result();
            }

        }

        return $rankTables;

    }

    public function getTeamScores($teamIDArray) {

        $teamScores = array();

        foreach ($teamIDArray as $teamID) {
            $this->db->select('points')->from('team_'.$teamID.'_ranking')->like('team','Rossoneri');
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $teamScores[$teamID] = $query->result();
            }

        }

        return $teamScores;

    }

    public function getTeamScore ($teamID) {

        $this->db->select('points')->from('team_'.$teamID.'_ranking')->like('team','Rossoneri');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }

    }

    public function getTable ($teamID) {

        $this->db->select('*')->from('team_'.$teamID.'_ranking')->order_by('points','desc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }

    }
    
    public function getTableColors ($teamID, $up, $down) {
        // $up = This parameter passes the number of teams going to the higher division
        // $down = This parameter passes the number of teams going to the lower division
        $this->db->select('*')->from('team_'.$teamID.'_ranking');
        
    }

}