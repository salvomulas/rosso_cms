<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ranking extends CI_Model {

    public function getTeamScore ($teamID) {
        $this->db->select('points')->from('team_'.$teamID.'_ranking')->like('team','Rossoneri');
        $query = $this->db->get();
        return $query->result();
    }

    public function getRanking ($teamID) {

        $query = $this->db->query('SELECT * FROM team_'.$teamID.'_ranking ORDER BY points DESC');
        $teamPoints = $this->getTeamScore($teamID);

        echo '<table class="table table-condensed table-hover">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Team</th>';
        echo '<th>P</th>';
        echo '<th>Diff</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

            foreach ($query->result() as $row) {
                $diffPoints = ($row->points - 0);
                echo '<tr>';
                echo '<td>'.$row->team.'</td>';
                echo '<td>'.$row->points.'</td>';
                echo '<td>'.$diffPoints.'</td>';
                echo '</tr>';
            }

        echo '</tbody>';
        echo '</table>';

    }

}