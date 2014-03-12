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
            $this->db->select('*')->from('teams_ranking')->where('teamID', $teamID)->order_by('points','desc')->order_by('fairplay','asc');
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
            $this->db->select('points')->from('teams_ranking')->where('teamID', $teamID)->like('team','Rossoneri');
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $teamScores[$teamID] = $query->result();
            }

        }

        return $teamScores;

    }

    public function getTeamScore ($teamID) {

        $this->db->select('points')->from('teams_ranking')->where('teamID', $teamID)->like('team','Rossoneri');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }

    }

    public function getTable ($teamID) {

        $this->db->select('*')->from('teams_ranking')->where('teamID', $teamID)->order_by('points','desc')->order_by('fairplay','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }

    }

    /**
     * @param $teamID   The teamID of the respective team from which the ranking data will be deleted
     * This function deletes all ranking data of the given team
     */
    public function emptyTeamRanking ($teamID) {
        $this->db->where('teamID', $teamID);
        $this->db->delete('teams_ranking');
    }

    /**
     * This function truncates the entire ranking data within the ranking table
     */
    public function truncateRanking () {
        $this->db->truncate('teams_ranking');
    }

    /**
     * @param $data     The array containing all the data from the ranking table which has been parsed
     * This function adds the given array to the ranking database. Make sure to empty the table before
     * inserting data to avoid double values
     */
    public function insertTeamRanking ($data) {
        $this->db->insert_batch('teams_ranking',$data);
    }

}