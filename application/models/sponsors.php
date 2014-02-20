<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sponsors extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    public function getSponsors () {

    	$this->db
    		->select('*')
    		->from('sponsors');
    	$query = $this->db->get();

    	return $query;

    }

    public function getTeamSponsor ($teamID) {

        $this->db
            ->select('*')
            ->from('sponsors')
            ->where('toTeam',$teamID);
        $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->row();
    }

    }

}