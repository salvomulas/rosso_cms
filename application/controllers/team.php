<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Team extends MY_Controller {

    public function index() {
        $this->aktive(1);
    }

    public function aktive($teamID) {
        $this->load->model('teams');
        $this->load->model('player');

        $data['teamName'] = $this->teams->getTeamName($teamID);
        $data['spieler'] = $this->player->getPlayers($teamID);

        echo $data['teamName'];
        foreach ($data['spieler'] as $row) {
            echo $row->lastName;
            echo $row->firstName;
        }

    }

}