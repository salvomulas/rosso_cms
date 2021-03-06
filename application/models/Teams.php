<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Teams extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getTeams() {

        $this->db->select('*')->from('teams')->order_by('id','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        }

    }

    public function getTeamsType($type) {

        $this->db->select('*')->from('teams')->where('type',$type)->order_by('id','asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        }

    }

    public function getTeamName($teamID) {

        $this->db->select('name')->from('teams')->where('id', $teamID);
        $query = $this->db->get();

        if ($query->num_rows() > 0 ) {
            return $query->row('name');
        }

    }

    public function getTeamInfo($teamID) {

        $this->db->select('*')->from('teams')->where('id', $teamID);
        $query = $this->db->get();

        if ($query->num_rows() > 0 ) {
            return $query;
        }

    }
    
    public function getTeamType($teamID) {
        
        $this->db->select('type')
                ->from('teams')
                ->where('id', $teamID);
        $query = $this->db->get();
        
        return $query->row();
        
    }

    public function getParserObject($teamID) {

        $this->db
            ->select('parserObject')
            ->from('teams')
            ->limit(1)
            ->where('id', $teamID);
        $query = $this->db->get();

        return $query;

    }

}