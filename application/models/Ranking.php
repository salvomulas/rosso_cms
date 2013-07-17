<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ranking extends CI_Model {

    public function getRanking ($teamID) {

        $query = $this->db->query('SELECT * FROM team_'.$teamID.'_ranking ORDER BY points DESC');

        foreach ($query->result() as $row) {
            echo $row->team;
            echo $row->points;
        }

    }

}