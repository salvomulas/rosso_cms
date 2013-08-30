<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Match extends CI_Model {

    function __construct() {

        parent::__construct();
    }

    function getNextMatchTeam($teamID) {

        $this->db->select('*')->from('match')->where('teamID', $teamID);
        $query = $this->db->get();

        if ($query->num_rows > 0) {
            return $query;
        } else {
            return NULL;
        }
    }

    function getTeamCalendar($teamID) {
        
        $this->db->select('*')
                ->select("date AS sort")
                ->select("DATE_FORMAT(date, '%e. %M %Y') AS date", FALSE)
                ->select("TIME_FORMAT(time, '%H:%m') AS time", FALSE)
                ->from('match')
                ->where('teamID', $teamID)
                ->order_by('sort','asc');
        $query = $this->db->get();
        
        if ($query->num_rows > 0) {
            return $query;
        } else {
            return NULL;
        }
        
    }

}

