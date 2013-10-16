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
                ->where('date >=CURDATE()')
                ->order_by('sort','asc');
        $query = $this->db->get();
        
        if ($query->num_rows > 0) {
            return $query;
        } else {
            return $query;
        }
        
    }
    
    function getTeamCalendarPast($teamID) {
        
        $this->db->select('*')
                ->select("date AS sort")
                ->select("DATE_FORMAT(date, '%e. %M %Y') AS date", FALSE)
                ->select("TIME_FORMAT(time, '%H:%m') AS time", FALSE)
                ->from('match')
                ->where('teamID', $teamID)
                ->where('date <CURDATE()')
                ->order_by('sort','asc');
        $query = $this->db->get();
        
        if ($query->num_rows > 0) {
            return $query;
        } else {
            return $query;
        }
        
    }

    function getNextGameTeam($teamID) {

        $this->db->select('teams.name,match.*')
            ->select("date AS sort_date")
            ->select("time AS sort_time")
            ->select("DATE_FORMAT(date, '%e. %M %Y') AS date", FALSE)
            ->select("TIME_FORMAT(time, '%H:%m') AS time", FALSE)
            ->from('match,teams')
            ->where("concat(date,' ',time) >=NOW()")
            ->where('teams.id = match.teamID')
            ->where('teamID', $teamID)
            ->limit(1)
            ->order_by('sort_date','asc')
            ->order_by('sort_time','asc');
        $query = $this->db->get();

        return $query;

    }
    
    function getNextGame() {
        
        $this->db->select('teams.name,match.*')
                ->select("date AS sort_date")
                ->select("time AS sort_time")
                ->select("DATE_FORMAT(date, '%e. %M %Y') AS date", FALSE)
                ->select("TIME_FORMAT(time, '%H:%m') AS time", FALSE)
                ->from('match,teams')
                ->where("concat(date,' ',time) >=NOW()")
                ->where('teams.id = match.teamID')
                ->limit(1)
                ->order_by('sort_date','asc')
                ->order_by('sort_time','asc');
        $query = $this->db->get();
        
        return $query;

    }

    function getNextGames() {

        $this->db->select('*')
            ->select("date AS sort_date")
            ->select("time AS sort_time")
            ->select("DATE_FORMAT(date, '%e.%m.%y') AS date", FALSE)
            ->select("TIME_FORMAT(time, '%H:%m') AS time", FALSE)
            ->from('match,teams')
            ->where("concat(date,' ',time) >=NOW()")
            ->where('teams.id = match.teamID')
            ->limit(5)
            ->order_by('sort_date','asc')
            ->order_by('sort_time','asc');
        $query = $this->db->get();

        return $query;

    }

    function getLastGames() {

        $this->db->select('*')
            ->select("date AS sort_date")
            ->select("time AS sort_time")
            ->select("DATE_FORMAT(date, '%e.%m.%y') AS date", FALSE)
            ->select("TIME_FORMAT(time, '%H:%m') AS time", FALSE)
            ->from('match,teams')
            ->where("concat(date,' ',time) >=NOW()")
            ->where('teams.id = match.teamID')
            ->limit(5)
            ->order_by('sort_date','asc')
            ->order_by('sort_time','asc');
        $query = $this->db->get();

        return $query;

    }

}

